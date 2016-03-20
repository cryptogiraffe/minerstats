<?php
echo "<pre>";

// in kH/s
$gfxcards = array(
  'GPU gtx970' => array(
    "x11"        => 8045,
    "x13"        => 6224,
    "keccak"     =>  387.65 * 1000,
    "x15"        => 5399,
    "nist5"      =>   28.68 * 1000,
    "neoscrypt"  =>  621,
    "whirlpoolx" =>  194.71 * 1000,
    "qubit"      =>   12.39 * 1000,
    "quark"      =>   17.12 * 1000,
    "lyra2v2"    => 9742,
    "lyra2rev2"  => 9742,
    // not in nicehash UI
    "scrypt"     =>  524,
    "decred"     => 1310 * 1000,
  ),
  'CPU i7 4770' => array(
    "lyra2"          => 714,
    "axiom"          =>   0.383,
    "scrypt-jane"    =>   0.207,
    "argon2"         =>  26.10,
  ),
  'CPU X4 965' => array(
    "lyra2"       => 397.56,
    "axiom"       =>   0.059,
    "scrypt-jane" =>   0.056,
  ),
  'GPU r270x' => array(
    "x11"       => 6700,
    "x13"       => 2900,
    "keccak"    =>  241.5 * 1000,
    "x15"       => 1400,
    "nist5"     => 4800,
    "neoscrypt" =>  272,
    "qubit"     => 7900,
    "quark"     => 7200,
  ),
);

$memcache = new Memcached;
$memcache->addServer('localhost', 11211);

//print_r($memcache->getVersion());// . "\n";

function get_hashrate($card, $algo) {
    global $gfxcards;
    if ($algo == "lyra2re")        $algo = "lyra2";
    if ($algo == "lyra2rev2")      $algo = "lyra2v2";
    if ($algo == "scryptjanenf16") $algo = "scrypt-jane";
    if ($algo == "blake256r8")     $algo = "blakecoin";
    if ($algo == "blake256r14")    $algo = "blake";
    if ($algo == "blake256r8vnl")  $algo = "vanilla";
    return $gfxcards[$card][$algo];
}

$zpool_data = $memcache->get("zpool_data");
if ($zpool_data) {
    print "Grabbed zpool payrates from memcache\n";
} else {
    $zpool_url = "http://www.zpool.ca/api/status";
    print "Grabbing zpool payrates from $zpool_url\n";
    $zpool_json = file_get_contents($zpool_url);
    $zpool_data = json_decode($zpool_json, TRUE);
    if ($zpool_data) $memcache->set("zpool_data", $zpool_data, 60);
}

$hashpower_data = $memcache->get("hashpower_data");
if ($hashpower_data) {
    print "Grabbed hashpower payrates from memcache\n";
} else {
    $hashpower_url = "http://hashpower.co/api/status";
    print "Grabbing hashpower payrates from $hashpower_url\n";
    $hashpower_json = file_get_contents($hashpower_url);
    $hashpower_data = json_decode($hashpower_json, TRUE);
    if ($hashpower_data) $memcache->set("hashpower_data", $hashpower_data, 60);
}

$nicehash_data = $memcache->get("nicehash_data");
if ($nicehash_data) {
    print "Grabbed nicehash payrates from memcache\n";
} else {
    $nicehash_url = "https://www.nicehash.com/api?method=simplemultialgo.info";
    print "Grabbing nicehash payrates from $nicehash_url\n";
    $nicehash_json = file_get_contents($nicehash_url);
    $nicehash_data = json_decode($nicehash_json, TRUE)['result']['simplemultialgo'];
    if ($nicehash_data) $memcache->set("nicehash_data", $nicehash_data, 10);
}

$usd_data = $memcache->get("usd_data");
if ($usd_data) {
    print "Grabbed USD exchange rate from memcache\n";
} else {
    $usd_url = "https://api.bitcoinaverage.com/ticker/global/USD/";
    print "Grabbing USD exchange rate from $usd_url\n";
    $usd_json = file_get_contents($usd_url);
    $usd_data = json_decode($usd_json, TRUE);
    if ($usd_data) $memcache->set("usd_data", $usd_data, 10);
}



$aliases = array(
   "blake256r8"    => "blakecoin", // ccminer_sp --algo=blakecoin
   "blake256r14"   => "blake",     // ccminer_sp --algo=blake
   "blake256r8vnl" => "vanilla",   // ccminer_sp --algo=vanilla
);
//$hashrates['lyra2rev2'] = $hashrates['lyra2v2'];
$profit = array();

// handle zpool
foreach ($zpool_data as $name => $entry) {
    $paying = $entry['actual_last24h'];
    foreach ($gfxcards as $card => $rate) {
        $hashrate = get_hashrate($card, $name);
        if (!isset($hashrate)) continue;
        $profitrate = $hashrate * $paying / 1000.;
        $fees = ($profitrate / 100.) * $entry['fees'];
        $profitrate -= $fees;
        $profit[$card]["$name.zpool"] = array(
            'name'       => $entry['name'],
            'profitrate' => $profitrate,
            'pool'       => 'zpool',
            'paying'     => $paying,
        );
    }
}

// handle hashpower
foreach ($hashpower_data as $name => $entry) {
    $paying = $entry['actual_last24h'];
    foreach ($gfxcards as $card => $rate) {
        $hashrate = get_hashrate($card, $name);
        if (!isset($hashrate)) continue;
        $profitrate = $hashrate * $paying;
        $fees = ($profitrate / 100.) * $entry['fees'];
        $profitrate -= $fees;
        $fee_btc = ($profitrate / 100.) * 2;
        $profitrate -= $fee_btc; // for withdrawing into BTC
        $profit[$card]["$name.hashpower"] = array(
            'name'       => $entry['name'],
            'profitrate' => $profitrate,
            'pool'       => 'hashpower',
            'paying'     => $paying,
        );
    }
}

// handle nicehash
foreach ($nicehash_data as $entry) {
    $paying = $entry['paying'];
    $name = $entry['name'];
    foreach ($gfxcards as $card => $rate) {
        $hashrate = get_hashrate($card, $name);
        if (!isset($hashrate)) continue;
        $profitrate = $hashrate * $paying / 1000.;
        $fees = ($profitrate / 100.) * 3; // https://www.nicehash.com/?p=faq#faqg2
        $profit[$card]["$name.nicehash"] = array(
            'name'       => $name,
            'profitrate' => $profitrate,
            'pool'       => 'nicehash',
            'paying'     => $paying,
        );
    }
}

function profitrate_cmp($a, $b) {
    $left = $a["profitrate"];
    $right = $b["profitrate"];
    if ($left == $right) return 0;
    return ($left > $right) ? -1 : 1;
}

ksort($profit);

foreach ($profit as $card => $entries) {
    print "$card:\n";
    uasort($entries, 'profitrate_cmp');
    foreach ($entries as $entry) {
        $profitrate = $entry['profitrate'];
        if (!$profitrate) continue;
        $usdrate = ($profitrate/1000.) * $usd_data['last'];
        $name = $entry['name'];
        $hashrate = $gfxcards[$card][$name];
        printf("%14s @ %8s -- %5.2f mBTC/day, %.2f USD/day. (%7.2f mHs * %8.3f)\n", $entry['name'], $entry['pool'], $profitrate, $usdrate, $hashrate / 1000., $entry['paying']);
    }
}

print_r($zpool_data);
//print_r($nicehash_data);
print_r($hashpower_data);
//print_r($usd_data);

echo "</pre>";

