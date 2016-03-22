<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>hmage.net — pool profitability</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">

    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container">
        <h1>pool profitability</h1>
<?php

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
    "x15"         =>  987.65, // ccminer_oxen
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
  'i7 4770 CPU' => array(
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
  'i7 6700 CPU' => array(
    "axiom"       =>   0.399,
    "lyra2"       => 762.590,
    "scrypt-jane" =>   0.299,
  ),
  'X4 965 CPU' => array(
    "lyra2"       => 397.56,
    "axiom"       =>   0.059,
    "scrypt-jane" =>   0.056,
  ),
);

$memcache = new Memcached;
$memcache->addServer('localhost', 11211);

function fix_hashname($algo) {
    if ($algo == "lyra2re")        $algo = "lyra2";
    if ($algo == "lyra2rev2")      $algo = "lyra2v2";
    if ($algo == "scryptjanenf16") $algo = "scrypt-jane";
    if ($algo == "blake256r8")     $algo = "blakecoin";
    if ($algo == "blake256r14")    $algo = "blake";
    if ($algo == "blake256r8vnl")  $algo = "vanilla";
    return $algo;
}

function get_hashrate($card, $algo) {
    global $gfxcards;
    $algo = fix_hashname($algo);
    if (!isset($gfxcards[$card])) return;
    if (!isset($gfxcards[$card][$algo])) return;
    return $gfxcards[$card][$algo];
}

function url_cached($url, $id) {
    global $memcache;
    $data = $memcache->get($id);
    if ($data) {
        print "Grabbed $id from memcache\n";
        return $data;
    }

    print "Grabbing $id from $url\n";
    $data = file_get_contents($url);
    if ($data) $memcache->set($id, $data, 60);
    return $data;
}

function url_to_array_cached($url, $id) {
    $json = url_cached($url, $id);
    $data = json_decode($json, TRUE);
    return $data;
}

echo "<!--\n";

$zpool_data     = url_to_array_cached("http://www.zpool.ca/api/status", "zpool_data");
$hashpower_data = url_to_array_cached("http://hashpower.co/api/status", "hashpower_data");
$nicehash_data  = url_to_array_cached("https://www.nicehash.com/api?method=simplemultialgo.info", "nicehash_data");
$usd_data       = url_to_array_cached("https://www.bitstamp.net/api/ticker/", "usd_data");
$dashminer_data = url_to_array_cached("http://dashminer.com/payouts.json", "dashminer_data");
$wepaybtc_data  = url_to_array_cached("http://wepaybtc.com/payouts.json", "wepaybtc_data");
$themultipool_x11 = url_cached("http://themultipool.com/static/x11_profit.txt", "themultipool_x11");
echo "-->";

$profit = array();

// handle zpool
foreach ($zpool_data as $algo => $entry) {
    $mbtcmhday = $entry['actual_last24h'];
    foreach ($gfxcards as $card => $rate) {
        $khs = get_hashrate($card, $algo);
        if (!isset($khs)) continue;
        $mbtcday = $khs * $mbtcmhday / 1000.;
        $fees = ($mbtcday / 100.) * $entry['fees'];
        $mbtcday -= $fees;
        $profit[$card]["$algo.zpool"] = array(
            'algo'        => $algo,
            'mBTC/Day'    => $mbtcday,
            'pool'        => 'zpool',
            'mBTC/MH/Day' => $mbtcmhday,
        );
    }
}

// handle hashpower
foreach ($hashpower_data as $algo => $entry) {
    $mbtcmhday = $entry['actual_last24h'];
    foreach ($gfxcards as $card => $rate) {
        $khs = get_hashrate($card, $algo);
        if (!isset($khs)) continue;
        $mbtcday = $khs * $mbtcmhday;
        $fees = ($mbtcday / 100.) * ($entry['fees']+2); // +2% for withdrawing into BTC
        $mbtcday -= $fees;
        $profit[$card]["$algo.hashpower"] = array(
            'algo'        => $algo,
            'mBTC/Day'    => $mbtcday,
            'pool'        => 'hashpower',
            'mBTC/MH/Day' => $mbtcmhday,
        );
    }
}

// handle nicehash
foreach ($nicehash_data['result']['simplemultialgo'] as $entry) {
    $mbtcmhday = $entry['paying'];
    $algo = $entry['name'];
    foreach ($gfxcards as $card => $rate) {
        $khs = get_hashrate($card, $algo);
        if (!isset($khs)) continue;
        $mbtcday = $khs * $mbtcmhday / 1000.;
        $fees = ($mbtcday / 100.) * 3; // https://www.nicehash.com/?p=faq#faqg2
        $mbtcday -= $fees;
        $profit[$card]["$algo.nicehash"] = array(
            'algo'        => $algo,
            'mBTC/Day'    => $mbtcday,
            'pool'        => 'nicehash',
            'mBTC/MH/Day' => $mbtcmhday,
        );
    }
}

// handle wepaybtc
foreach ($wepaybtc_data as $algo => $entry) {
    $mbtcmhday = $entry;
    foreach ($gfxcards as $card => $rate) {
        $khs = get_hashrate($card, $algo);
        if (!isset($khs)) continue;
        $mbtcday = $khs * $mbtcmhday;
        $profit[$card]["$algo.wepaybtc"] = array(
            'algo'        => $algo,
            'mBTC/Day'    => $mbtcday,
            'pool'        => 'wepaybtc',
            'mBTC/MH/Day' => $mbtcmhday,
        );
    }
}


// handle dashminer
{
    $mbtcmhday = $dashminer_data['btcpermhs'];
    $algo = "x11";
    foreach ($gfxcards as $card => $rate) {
        $khs = get_hashrate($card, $algo);
        if (!isset($khs)) continue;
        $mbtcday = $khs * $mbtcmhday;
        $profit[$card]["$algo.dashminer"] = array(
            'algo'        => $algo,
            'mBTC/Day'    => $mbtcday,
            'pool'        => 'dashminer',
            'mBTC/MH/Day' => $mbtcmhday,
        );
    }
}

// handle themultipool
{
    $mbtcmhday = floatval($themultipool_x11);
    $algo = "x11";
    foreach ($gfxcards as $card => $rate) {
        $khs = get_hashrate($card, $algo);
        if (!isset($khs)) continue;
        $mbtcday = $khs * $mbtcmhday;
        $fees = ($mbtcday / 100.) * 1; // 1% stratum fee
        $mbtcday -= $fees;
        $profit[$card]["$algo.themultipool"] = array(
            'algo'        => $algo,
            'mBTC/Day'    => $mbtcday,
            'pool'        => 'themultipool',
            'mBTC/MH/Day' => $mbtcmhday,
        );
    }
}

function profitrate_cmp($a, $b) {
    $left = $a["mBTC/Day"];
    $right = $b["mBTC/Day"];
    if ($left == $right) return 0;
    return ($left > $right) ? -1 : 1;
}

// sort by card/CPU name
ksort($profit);

function card_to_anchor($card) {
    $anchor = str_replace(' ', '', $card);
    return htmlentities($anchor);
}

function say_active(&$said_active) {
    if ($said_active) return "";
    $said_active = 1;
    return "active";
}

// output nav tabs
$said_active = 0;
print '<ul class="nav nav-pills small" id="cardlist" role="tablist">';
foreach ($profit as $card => $entries) {
    print '<a class="nav-item nav-link ' . say_active($said_active) . '" data-toggle="tab" href="#' . card_to_anchor($card) . '">';
    $card_html = htmlspecialchars($card, ENT_HTML5);
    $card_html = str_replace("CPU", '<span class="label label-default">CPU</span>', $card_html);
    $card_html = str_replace("GPU", '<span class="label label-default">GPU</span>', $card_html);
    print "$card_html";
    print "</a>";
}
print "</ul>";

function print_td($text, $extraclass='') {print "<td class='$extraclass'>$text</td>\n";}
function print_td_right($text, $extraclass='') {print "<td class='text-xs-right $extraclass'>$text</td>\n";}
function print_th($text, $extraclass='') {print "<th class='$extraclass'>$text</th>\n";}
function print_th_right($text, $extraclass='') {print "<th class='text-xs-right $extraclass'>$text</th>\n";}


// output tab contents
$said_active = 0;
print "<div class='tab-content small'>";
foreach ($profit as $card => $entries) {
    uasort($entries, 'profitrate_cmp');
    print "<div class='tab-pane " . say_active($said_active) . "' id='" . card_to_anchor($card) . "'>";
    print '<table class="table table-striped table-hover table-condensed table-sm">';
    print '<thead><tr>';
    print_th_right("Algorithm");
    print_th("pool");
    print_th_right("mBTC/day", 'hidden-xs-down');
    print_th("USD/day");
    print_th_right('mBTC/MH/day', 'hidden-xs-down');
    print_th_right("hashrate");
    print '</tr></thead>';
    print '<tbody>';
    foreach ($entries as $entry) {
        $mbtcday = $entry['mBTC/Day'];
        if (!$mbtcday) continue;
        $usdrate = ($mbtcday/1000.) * $usd_data['vwap'];
        $algo = fix_hashname($entry['algo']);
        $khs = $gfxcards[$card][$algo];
        print '<tr>';
        print_td_right($algo);
        print_td($entry['pool']);
        print_td_right(sprintf('%.2f', $mbtcday), 'hidden-xs-down');
        print_td(sprintf('$%.2f', $usdrate));
        print_td_right(sprintf('%.4f', $entry['mBTC/MH/Day']), 'hidden-xs-down');
        print_td_right(sprintf('%.2f MH', $khs/1000));
        print '</tr>';
    }

    print '</tbody>';
    print "</table>";
    print "</div>";

}
print '</div>';

echo "<!--\n";
print_r($zpool_data);
//print_r($nicehash_data);
print_r($hashpower_data);
//print_r($usd_data);
echo "-->";
?>
</div>

<script>
$(function () {
    $('#cardlist a[href="' + window.location.hash + '"]').tab('show')
})
$('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
    window.location.hash = e.target.hash;
})
</script>

</body>
</html>
