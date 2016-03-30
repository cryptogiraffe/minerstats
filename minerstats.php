<?php

// in kH/s
$gfxcards = array(
  'GPU 970' => array(
    "blake"       => 1481.60 * 1000, // ccminer_sphash
    "blake2s"     =>  969.74 * 1000, // ccminer_oxen
    "decred"      => 1320.04 * 1000, // ccminer_oxen
    "ethereum"    =>   16.19 * 1000, // ethminer-0.9.41-genoil-1.0.5
    "groestl"     =>   22.36 * 1000, // ccminer_neoscrypt
    "keccak"      =>  394.50 * 1000, // ccminer_sp
    "lyra2"       => 1850,           // ccminer_neoscrypt
    "lyra2v2"     => 9750,           // ccminer_sphash
    "neoscrypt"   =>  600,           // ccminer_neoscrypt
    "nist5"       =>   27.70 * 1000, // ccminer_neoscrypt
    "quark"       =>   17.20 * 1000, // ccminer_sphash
    "qubit"       =>   12.42 * 1000, // ccminer_sphash
    "scrypt"      =>  520.50,        // ccminer_tpruvot
    "scrypt-jane" =>    0.424,       // ccminer_oxen
    "sha256"      =>  575.50 * 1000, // ccminer_neoscrypt
    "sib"         => 1931.09,        // ccminer_tpruvot
    "skein"       =>  284.12 * 1000, // ccminer_sphash
    "skein2"      =>  147.47 * 1000, // ccminer_tpruvot
    "whirlpoolx"  =>  197.80 * 1000, // ccminer_neoscrypt
    "x11"         => 8100,           // ccminer_sphash
    "x13"         => 6400,           // ccminer_neoscrypt
    "x14"         => 5784.32,        // ccminer_tpruvot
    "x15"         => 5500,           // ccminer_neoscrypt
    "zr5"         => 2764.23,        // ccminer_oxen
  ),
  'GPU 970 OC' => array(
    "decred"      => 1507.66 * 1000, // ccminer_oxen
    "ethereum"    =>   17.20 * 1000, // ethminer-0.9.41-genoil-1.0.6
    "lyra2"       => 2198.41,        // ccminer_sp_201603
    "lyra2v2"     =>   10.68 * 1000, // ccminer_sp_201603
    "neoscrypt"   =>  699.89,        // ccminer_neoscrypt
    "nist5"       =>   30.08 * 1000, // ccminer_neoscrypt
    "quark"       =>   19.07 * 1000, // ccminer_sp_201603
    "qubit"       =>   13.71 * 1000, // ccminer_sp_201603
    "skein"       =>  325.79 * 1000, // ccminer_sphash
    "x11"         => 8968.33,        // ccminer_sp_201603
    "x13"         => 7171.85,        // ccminer_neoscrypt
    "x15"         => 6164.13,        // ccminer_neoscrypt
  ),
  'GPU 570' => array(
    "quark"       =>  527.30, // ccminer_oxen
    "x11"         => 1280.00, // ccminer_oxen
    "x13"         => 1091.16, // ccminer_oxen
    "x15"         =>  987.65, // ccminer_oxen
  ),
  'GPU 270X' => array(
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
  'CPU i7 4770' => array(
    "argon2"      =>  26.67,
    "axiom"       =>   0.386,
    "blake"       =>  12.63 * 1000,
    "blakecoin"   =>  19.09 * 1000,
    "decred"      =>  13.00 * 1000,
    "ethereum"    => 556.79,
    "keccak"      =>   7.04 * 1000,
    "lyra2"       => 716.50,
    "lyra2v2"     => 434.69,
    "neoscrypt"   =>  16.01,
    "nist5"       => 794.71,
    "quark"       => 500.74,
    "qubit"       => 402.75,
    "scrypt"      =>  93.50,
    "scrypt-jane" =>   0.210,
    "sha256"      =>  50.84 * 1000,
    "vanilla"     =>  19.10 * 1000,
    "x11"         => 251.91,
    "x13"         => 164.99,
    "x14"         => 159.72,
    "x15"         => 152.57,
    "yescrypt"    =>   1.61,
  ),
  'CPU i7 6700' => array(
    "axiom"       =>   0.399,
    "lyra2"       => 762.590,
    "scrypt-jane" =>   0.299,
  ),
  'CPU X4 965' => array(
    "axiom"       =>   0.059,
    "lyra2"       => 397.56,
    "scrypt-jane" =>   0.056,
  ),
);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>pool profitability</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.css" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.1/bootstrap-table.css">
    <style>
    <!--
    .fixed-table-container tbody td { border-left: 0px;}
    -->
    </style>

    <!-- jQuery first, then Bootstrap JS. -->
    <!-- // <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-2.2.2.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.js" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.1/bootstrap-table.js"></script>
  </head>
  <body>
    <div class="container">
        <h2 style="text-align:center">pool profitability</h2>

<?php

$memcache = new Memcached;
$memcache->addServer('localhost', 11211);

function fix_hashname($algo) {
    if (!is_string($algo)) return;
    $algo = strtolower($algo);
    if ($algo == "lyra2re")        $algo = "lyra2";
    if ($algo == "lyra2re2")       $algo = "lyra2v2";
    if ($algo == "lyra2rev2")      $algo = "lyra2v2";
    if ($algo == "scryptjanenf16") $algo = "scrypt-jane";
    if ($algo == "blake256r8")     $algo = "blakecoin";
    if ($algo == "blake256r14")    $algo = "blake";
    if ($algo == "blake256r8vnl")  $algo = "vanilla";
    if ($algo == "blake-vanilla")  $algo = "vanilla";
    if ($algo == "ethash")         $algo = "ethereum";
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
    if ($data) return $data;

    $data = file_get_contents($url);
    if ($data) $memcache->set($id, $data, 60);
    else trigger_error("Couldn't get $url", E_USER_WARNING);
    return $data;
}

function url_to_array_cached($url, $id) {
    $json = url_cached($url, $id);
    $data = json_decode($json, TRUE);
    return $data;
}

$zpool_data     = url_to_array_cached("http://www.zpool.ca/api/status", "zpool_data");
$hashpower_data = url_to_array_cached("http://hashpower.co/api/status", "hashpower_data");
$yiimp_data     = url_to_array_cached("http://yiimp.ccminer.org/api/status", "yiimp_data");
$nicehash_data  = url_to_array_cached("https://www.nicehash.com/api?method=simplemultialgo.info", "nicehash_data")['result']['simplemultialgo'];
$usd_data       = url_to_array_cached("https://www.bitstamp.net/api/ticker/", "usd_data");
$dashminer_data = url_to_array_cached("http://dashminer.com/payouts.json", "dashminer_data");
$wepaybtc_data  = url_to_array_cached("http://wepaybtc.com/payouts.json", "wepaybtc_data");
$mph_data =       url_to_array_cached("https://miningpoolhub.com/index.php?page=api&action=getautoswitchingandprofitsstatistics", "mph_data")['return'];

$themultipool_x11_data    = url_cached("http://themultipool.com/static/x11_profit.txt",    "themultipool_x11_data");
$themultipool_scrypt_data = url_cached("http://themultipool.com/static/scrypt_profit.txt", "themultipool_scrypt_data");
$themultipool_sha256_data = url_cached("http://themultipool.com/static/sha256_profit.txt", "themultipool_sha256_data");

$profit = array();
foreach ($gfxcards as $card => $rates) {$profit[$card] = array();}

function deduct_fee(&$value, $fee) {
    if (!isset($fee)) return;
    $fees = ($value / 100) * $fee;
    $value -= $fees;
}

function handle_pool($pool_name, $extra_fee, $algo_name, $payrate_name, $payrate_multiplier = 1) {
    global ${"$pool_name" . "_data"};
    foreach (${"$pool_name" . "_data"} as $algo => $entry) {
        if (!is_string($algo)) $algo = $entry[$algo_name];
        if (is_numeric($entry)) {
            $payrate = $entry;
        } else {
            $payrate = $entry[$payrate_name];
        }
        $fee = $extra_fee;
        if (isset($entry['fees'])) $fee += $entry['fees'];
        if (isset($entry['workers']) && $entry['workers'] <= 0) continue;
        handle_algo($pool_name, $algo, $payrate, $fee, $payrate_multiplier);
    }
}

function handle_algo($pool_name, $algo, $payrate, $fee, $payrate_multiplier = 1) {
    global $profit;
    global $gfxcards;
    $algo = fix_hashname($algo);
    $mbtcmhday = $payrate * $payrate_multiplier; // to get mBTC/MH/Day
    if ($pool_name == "nicehash" && $algo == "sha256") $mbtcmhday *= 1000; // special case for nicehash sha256
    foreach ($gfxcards as $card => $rates) {
        $khs = get_hashrate($card, $algo);
        if (!isset($khs)) continue;
        $mhs = $khs / 1000;
        $mbtcday = $mhs * $mbtcmhday;
        deduct_fee($mbtcday, $fee);
        $profit[$card]["$algo.$pool_name"] = array(
            'algo'        => $algo,
            'mBTC/Day'    => $mbtcday,
            'pool'        => $pool_name,
            'mBTC/MH/Day' => $mbtcmhday,
        );
    }
}

handle_pool("zpool",     0, '', 'actual_last24h');
handle_pool("hashpower", 2, '', 'actual_last24h', 1000);
handle_pool("yiimp",     0, '', 'estimate_last24h', 1000);
handle_pool("nicehash",  3, 'name', 'paying');
handle_pool("wepaybtc",  0, 'name', 'paying', 1000);
handle_pool("mph",     0.3, 'algo', 'profit');

handle_algo("dashminer",    "x11",    $dashminer_data['btcpermhs'],        0, 1000);
handle_algo("themultipool", "x11",    floatval($themultipool_x11_data),    1, 1000);
handle_algo("themultipool", "sha256", floatval($themultipool_sha256_data), 1);
handle_algo("themultipool", "scrypt", floatval($themultipool_scrypt_data), 1, 1000);

function profitrate_cmp($a, $b) {
    $left = $a["mBTC/Day"];
    $right = $b["mBTC/Day"];
    if ($left == $right) return 0;
    return ($left > $right) ? -1 : 1;
}

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
    print '<a class="nav-item nav-link ' . say_active($said_active) . '" data-toggle="tab" href="#' . card_to_anchor($card) . '" role="tab">';
    $card_html = htmlspecialchars($card, ENT_HTML5);
    $card_html = str_replace("CPU", '<span class="label label-default">CPU</span>', $card_html);
    $card_html = str_replace("GPU", '<span class="label label-default">GPU</span>', $card_html);
    print "$card_html";
    print "</a>";
}
print "</ul>";

function to_id($text) { return str_replace("/", "_", $text);}
function print_th($text, $extraclass='') {print "<th class='$extraclass' data-field='". to_id($text) ."' data-sortable='true'>$text</th>\n";}
function print_th_right($text, $extraclass='') {print "<th class='text-xs-right $extraclass' data-field='". to_id($text) ."' data-sortable='true'>$text</th>\n";}
function print_td($text, $extraclass='') {print "<td class='$extraclass'>$text</td>\n";}
function print_td_right($text, $extraclass='') {print "<td class='text-xs-right $extraclass'>$text</td>\n";}


// output tab contents
$said_active = 0;
print "<div class='tab-content small'>";
foreach ($profit as $card => $entries) {
    uasort($entries, 'profitrate_cmp');
    print "<div class='tab-pane " . say_active($said_active) . "' id='" . card_to_anchor($card) . "'>";
    print '<table id="poolstats" class="table table-striped table-hover table-condensed table-sm"
            data-toggle="table" data-sort-name="USD_day" data-sort-order="desc"
            data-search="true">';
    print '<thead><tr>';
    print_th_right("Algorithm");
    print_th("Pool");
    print_th_right("m฿/day", 'hidden-xs-down');
    print_th("$/day");
    print_th_right('m฿/MH/day', 'hidden-xs-down');
    print_th_right("Hashrate", 'hidden-xs-down');
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
        print_td(sprintf('%.2f', $usdrate));
        print_td_right(sprintf('%.4f', $entry['mBTC/MH/Day']), 'hidden-xs-down');
        print_td_right(sprintf('%.2f MH', $khs/1000), 'hidden-xs-down');
        print '</tr>';
    }

    print '</tbody>';
    print "</table>";
    print "</div>";

}
print '</div>';
?>
<small class="center-block" style="text-align:center">Pool fees are taken into account.</small>
<?php
echo "<pre>\n";
function printer($name) {
    global ${"$name" . "_data"};
    echo "$name:\n";
    print_r(${"$name" . "_data"});
}
// printer("zpool");
// printer("nicehash");
// printer("hashpower");
// printer("usd");
// printer("dashminer");
// printer("wepaybtc");
// printer("themultipool_x11");
// printer("themultipool_scrypt");
// printer("themultipool_sha256");
// printer("yiimp");
echo "</pre>";
?>
</div>

<script>
$(function () {
    $('#cardlist a[href="' + window.location.hash + '"]').tab('show');
    $('[data-toggle="tooltip"]').tooltip();
})
$('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
    window.location.hash = e.target.hash;
})
</script>

</body>
</html>
