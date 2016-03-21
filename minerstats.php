<?php
echo "<pre>";

// in kH/s
$gfxcards = array(
  'GPU GTX970' => array(
    "neoscrypt"   =>  600,           // ccminer_neoscrypt
    "quark"       =>   17.20 * 1000, // ccminer_sphash
    "x13"         => 6400,           // ccminer_neoscrypt
    "decred"      => 1320.04 * 1000, // ccminer_oxen
    "qubit"       =>   12.42 * 1000, // ccminer_sphash
    "x15"         => 5500,           // ccminer_neoscrypt
    "x11"         => 8100,           // ccminer_sphash
    "nist5"       =>   27.70 * 1000, // ccminer_neoscrypt
    "whirlpoolx"  =>  197.80 * 1000, // ccminer_neoscrypt
    "lyra2"       =>  1850,          // ccminer_neoscrypt
    "scrypt-jane" =>    0.424,       // ccminer_oxen
    "lyra2v2"     => 9750,           // ccminer_sphash
    "scrypt"      =>  520.50,        // ccminer_tpruvot
    "keccak"      =>  394.50 * 1000, // ccminer_sp
    "sha256"      =>  575.50 * 1000, // ccminer_neoscrypt
    "groestl"     =>   22.36 * 1000, // ccminer_neoscrypt
    "blake2s"     =>  969.74 * 1000, // ccminer_oxen
    "ethereum"    =>   18.83 * 1000, // ethminer-0.9.41-genoil-1.0.5
  ),
  'GPU GTX970 OC' => array(
    "neoscrypt"   =>  677.54,        // ccminer_neoscrypt
    "decred"      => 1495.36 * 1000, // ccminer_oxen
    "quark"       =>   18.88 * 1000, // ccminer_sphash
    "qubit"       =>   13.64 * 1000, // ccminer_sphash
    "x11"         => 8946.79,        // ccminer_sphash
    "x13"         => 7171.85,        // ccminer_neoscrypt
    "x15"         => 6164.13,        // ccminer_neoscrypt
  ),
  'GPU GTX570' => array(
    "quark"       =>  527.30, // ccminer_oxen
    "x11"         => 1280.00, // ccminer_oxen
    "x13"         => 1091.16, // ccminer_oxen
  ),
  'GPU R270X' => array(
    "keccak"    =>  233.1 * 1000,
    "lyra2v2"   =>  414,
    "neoscrypt" =>  268,
    "nist5"     => 5200,
    "quark"     => 7100,
    "qubit"     => 7900,
    "vanilla"   => 1437.00 * 1000,
    "x11"       => 6900,
    "x13"       => 3000,
    "x15"       => 1400,
  ),

  /********
   * CPU's
   ********/
  'i7 4770' => array(
    "scrypt"      =>  93.50,
    "sha256"      =>  50.84 * 1000,
    "axiom"       =>   0.386,
    "keccak"      =>   7.04 * 1000,
    "lyra2"       => 716.50,
    "lyra2v2"     => 434.69,
    "quark"       => 500.74,
    "qubit"       => 402.75,
    "x11"         => 251.91,
    "x13"         => 164.99,
    "x14"         => 159.72,
    "x15"         => 152.57,
    "scrypt-jane" =>   0.210,
    "yescrypt"    =>   1.61,
    "blake"       =>  12.63 * 1000,
    "blakecoin"   =>  19.09 * 1000,
    "vanilla"     =>  19.10 * 1000,
    "decred"      =>  13.00 * 1000,
    "argon2"      =>  26.67,
    "neoscrypt"   =>  16.01,
    "nist5"       => 794.71,
    "ethereum"    => 556.79,
  ),
  'i7 6700' => array(
    "axiom"       =>   0.399,
    "lyra2"       => 762.590,
    "scrypt-jane" =>   0.299,
  ),
  'X4 965' => array(
    "lyra2"       => 397.56,
    "axiom"       =>   0.059,
    "scrypt-jane" =>   0.056,
  ),
);

$memcache = new Memcached;
$memcache->addServer('localhost', 11211);

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
        printf("%14s @ %9s -- %5.2f mBTC/day, %.2f USD/day. (%7.2f mHs * %8.3f)\n", $entry['name'], $entry['pool'], $profitrate, $usdrate, $hashrate / 1000., $entry['paying']);
    }
}

print_r($zpool_data);
//print_r($nicehash_data);
print_r($hashpower_data);
//print_r($usd_data);

echo "</pre>";

