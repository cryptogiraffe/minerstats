<?php

// in kH/s
$gfxcards = array(
  'GPU 2x970' => array(
    "blake"       => 2978.05 * 1000, // ccminer_tpruvot_201604_64
    "blake2s"     => 2163.64 * 1000, // ccminer_tpruvot_201604_64
    "decred"      => 3216.00 * 1000, // ccminer_alexis.x64 -i 29
    "ethereum"    =>   11.79 * 1000, // ethminer-0.9.41-genoil-1.0.6 -M 1266489
    "fresh"       =>   18.57 * 1000, // ccminer_sp_201603
    "groestl"     =>   46.62 * 1000, // ccminer_sp_201603
    "keccak"      =>  787.41 * 1000, // ccminer_sp_201603
    "lyra2"       => 3932.42,        // ccminer_sp_201603
    "lyra2v2"     =>   19.25 * 1000, // ccminer_sp_201603
    "neoscrypt"   => 1244.97,        // ccminer_neoscrypt
    "nist5"       =>   55.76 * 1000, // ccminer_neoscrypt
    "quark"       =>   33.80 * 1000, // ccminer_sp_1.5.79
    "qubit"       =>   24.80 * 1000, // ccminer_sp_1.5.79 -i 21
    "scrypt"      => 1718.08,        // ccminer_sp_201603 -l T26x20
    "scrypt-jane" =>    0.893,       // ccminer_tpruvot -l t23x1
    "sha256"      => 1152.33 * 1000, // ccminer_sp_201603
    "sib"         => 3553.34,        // ccminer_tpruvot
    "skein"       =>  581.11 * 1000, // ccminer_sp_201603
    "skein2"      =>  347.44 * 1000, // ccminer_tpruvot
    "vanilla"     => 5190.86,        // ccminer_sp_201603
    "whirlpoolx"  =>  403.40 * 1000, // ccminer_neoscrypt
    "x11"         =>   16.30 * 1000, // ccminer_neoscrypt
    "x13"         =>   12.83 * 1000, // ccminer_neoscrypt
    "x14"         =>   11.92 * 1000, // ccminer_tpruvot // neoscrypt and sp -- crash
    "x15"         =>   11.09 * 1000, // ccminer_neoscrypt
    "x17"         =>    9.78 * 1000, // ccminer_tpruvot // neoscrypt and sp -- crash
    "zr5"         => 6074.52,        // ccminer_tpruvot_201604_64
  ),
  'GPU 2x970 OC' => array( // +155Core +87mV 100%FAN 110%power
    "blake"       => 3311.00 * 1000, // ccminer_tpruvot_1.7.5-git.x64
    "blake2s"     => 2400.00 * 1000, // ccminer_tpruvot_1.7.5-git.x64 -i 26
    "decred"      => 3572.00 * 1000, // ccminer_alexis.x64 -i 27
    "fresh"       =>   20.55 * 1000, // ccminer_neoscrypt -i 21
    "groestl"     =>   51.83 * 1000, // ccminer_so_1.5.79
    "keccak"      => 1028.50 * 1000, // ccminer_neoscrypt -i 25
    "lyra2"       => 4173.50,        // ccminer_sp_1.5.79
    "lyra2v2"     =>   21.40 * 1000, // ccminer_sp_1.5.79 -i 19
    "neoscrypt"   => 1382.24,        // ccminer_neoscrypt
    "nist5"       =>   61.00 * 1000, // ccminer_neoscrypt
    "quark"       =>   37.44 * 1000, // ccminer_sp_1.5.79 -i 23
    "qubit"       =>   27.40 * 1000, // ccminer_sp_1.5.79 -i 21
    "scrypt"      => 1718.08,        // ccminer_sp_1.5.79 -l T26x20
    "scrypt-jane" =>  915.14 / 1000, // ccminer_tpruvot -l t23x1
    "sha256"      => 1350.00 * 1000, // ccminer_sp_1.5.79
    "sib"         => 3885.35,        // ccminer_tpruvot_1.7.5-git.x64
    "skein"       =>  636.00 * 1000, // ccminer_sp_1.5.79
    "skein2"      =>  384.34 * 1000, // ccminer_tpruvot_1.7.5-git.x64 -i 24
    "vanilla"     => 5800.44,        // ccminer_sp_1.5.79
    "whirlpoolx"  =>  440.40 * 1000, // ccminer_neoscrypt
    "x11"         =>   18.00 * 1000, // ccminer_neoscrypt -i 21
    "x13"         =>   14.23 * 1000, // ccminer_neoscrypt
    "x14"         =>   12.71 * 1000, // ccminer_tpruvot_1.7.5-git.x64 -i 21 // neoscrypt and sp -- crash
    "x15"         =>   12.35 * 1000, // ccminer_neoscrypt
    "x17"         =>   10.83 * 1000, // ccminer_tpruvot_1.7.5-git.x64 // neoscrypt and sp -- crash
    "zr5"         => 6646.00,        // ccminer_tpruvot_1.7.5-git.x64 -i 26
  ),
  'GPU 980Ti' => array(
    "blake"       => 2427.28 * 1000, // nicehash default
    "blakecoin"   => 4218.85 * 1000, // nicehash default
    "keccak"      =>  661.21 * 1000, // nicehash default
    "lyra2v2"     =>   15.57 * 1000, // nicehash default
    "neoscrypt"   =>  922.00,        // nicehash default
    "nist5"       =>   42.53 * 1000, // nicehash default
    "quark"       =>   27.13 * 1000, // nicehash default
    "qubit"       =>   20.12 * 1000, // nicehash default
    "vanilla"     => 4238.21 * 1000, // nicehash default
    "whirlpoolx"  =>  329.34 * 1000, // nicehash default
    "x11"         =>   13.12 * 1000, // nicehash default
    "x13"         =>   10.21 * 1000, // nicehash default
    "x15"         =>    8.88 * 1000, // nicehash default
    "ethereum"    =>   21.18 * 1000, // ethminer-0.9.41-genoil-1.0.6 -M 1294333
  ),
  'GPU 570' => array(
    "quark"       =>  527.30, // ccminer_oxen
    "x11"         => 1280.00, // ccminer_oxen
    "x13"         => 1091.16, // ccminer_oxen
    "x15"         =>  987.65, // ccminer_oxen
  ),
  'GPU 270X' => array(
    "decred"    =>  650.0 * 1000, // sgminer-5-3-1-decred
    "keccak"    =>  233.1 * 1000,
    "lyra2v2"   =>  414,
    "neoscrypt" =>  240, // sgminer-5-3-0-general
    "nist5"     => 5200,
    "quark"     => 6970, // sgminer-5-1-0-optimized
    "qubit"     => 7740, // sgminer-5-1-1-optimized
    "vanilla"   => 1437.00 * 1000,
    "x11"       => 6850, // sgminer-5-1-0-optimized
    "x13"       => 3000, // sgminer-5-3-0-general
    "x15"       => 1320, // sgminer-5-3-0-general
  ),
  'GPU 6970' => array(
    "x11"       => 2000,
    "x13" => 1600,
    "keccak" => 209200,
    "x15" => 1400,
    "neoscrypt" => 39,
    "qubit" => 2500,
    "quark" => 2700,
    "lyra2v2" => 1900,
    "blake256r8" => 1443700,
    "blake256r8vnl" => 1432700,
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
    "lyra2"       => 870.36, // cpuminer-opt on virtual debian
    "lyra2v2"     => 434.69,
    "neoscrypt"   =>  16.01,
    "nist5"       => 794.71,
    "quark"       => 500.74,
    "qubit"       => 402.75,
    "scrypt"      =>  93.50,
    "scrypt-jane" =>   0.208,
    "sha256"      =>  50.84 * 1000,
    "vanilla"     =>  19.10 * 1000,
    "x11"         => 251.91,
    "x13"         => 164.99,
    "x14"         => 159.72,
    "x15"         => 152.57,
    "yescrypt"    =>   1.61,
  ),
  'CPU i7 4770 OC' => array( // 104x39 -- 4056MHz vs stock 3900MHz
    "anime"       => 607877 / 1000,
    "argon2"      => 29551 / 1000, // cpuminer-opt
    "blake"       => 21100403 / 1000,
    "blake2s"     => 17088083 / 1000,
    "blakecoin"   => 29765247 / 1000,
    "bmw"         => 9741833 / 1000,
    "c11"         => 706.74, // cpuminer-opt
    "cryptonight" => 200 / 1000, // cpuminer-opt
    "decred"      => 21053593 / 1000, // cpuminer-opt
    "dmd-gr"      => 1121266 / 1000,
    "drop"        => 30984 / 1000,
    "fresh"       => 506625 / 1000,
    "groestl"     => 1118556 / 1000,
    "keccak"      => 8402648 / 1000,
    "luffa"       => 3161042 / 1000,
    "lyra2"       => 936413 / 1000,
    "lyra2v2"     => 466049 / 1000,
    "myr-gr"      => 3394.48, // cpuminer-opt
    "neoscrypt"   => 28747 / 1000,
    "nist5"       => 1885.70, // cpuminer-opt
    "pentablake"  => 3708888 / 1000,
    "pluck"       => 1838 / 1000,
    "quark"       => 1100.29, // cpuminer-opt
    "qubit"       => 1033.30, // cpuminer-opt
    "s3"          => 1222257 / 1000,
    "scrypt"      => 100370 / 1000,
    "scrypt-jane" => 226 / 1000,
    "sha256d"     => 55760032 / 1000,
    "shavite3"    => 2385939 / 1000,
    "sib"         => 487.05, // cpuminer-opt
    "skein"       => 6646851 / 1000,
    "skein2"      => 8396332 / 1000,
    "x11"         => 704586 / 1000, // cpuminer-opt
    "x13"         => 276196 / 1000, // cpuminer-opt
    "x14"         => 318383 / 1000, // cpuminer-opt
    "x15"         => 293850 / 1000, // cpuminer-opt
    "x17"         => 279510 / 1000, // cpuminer-opt
    "yescrypt"    => 3194 / 1000, // cpuminer-opt
    "zr5"         => 795.73, // cpuminer-opt
  ),
  'CPU i7 2600K' => array(
    "lyra2"       => 485.850, // nicehash default
    "axiom"       =>   0.139, // nicehash default
    "scrypt-jane" =>   0.184, // nicehash default
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
  'CPU i5 4690k' => array(
    "axiom" => 0.275,
    "lyra2" => 678,
    "scrypt-jane" => 0.131,
  ),
  /*
  'VPS AWS t2.micro' => array(
    "lyra2"       =>  13.95,
    "scrypt-jane" =>   2.130 / 1000,
  ),
  'VPS scaleway $3/mo' => array(
    "lyra2"       =>  92.58,
  ),
  'VPS vultr $5/mo' => array(
    "anime"         => 98780 / 1000,
    "blake"         => 2962196 / 1000,
    "blake2s"       => 2247789 / 1000,
    "blakecoin"     => 4802667 / 1000,
    "bmw"           => 1671996 / 1000,
    "c11"           => 43913 / 1000,
    "cryptonight"   => 30 / 1000,
    "dmd-gr"        => 178548 / 1000,
    "drop"          => 4629 / 1000,
    "fresh"         => 80152 / 1000,
    "groestl"       => 179438 / 1000,
    "heavy"         => 29191 / 1000,
    "keccak"        => 1337969 / 1000,
    "luffa"         => 500518 / 1000,
    "lyra2"         => 140094 / 1000,
    "myr-gr"        => 292040 / 1000,
    "neoscrypt"     => 2962 / 1000,
    "nist5"         => 158367 / 1000,
    "pentablake"    => 558395 / 1000,
    "pluck"         => 267 / 1000,
    "quark"         => 98521 / 1000,
    "qubit"         => 70516 / 1000,
    "s3"            => 191845 / 1000,
    "scrypt"        => 14367 / 1000,
    "scryptjane:16" => 27 / 1000,
    "sha256d"       => 8373836 / 1000,
    "shavite3"      => 379739 / 1000,
    "skein"         => 1038268 / 1000,
    "skein2"        => 1204514 / 1000,
    "x11"           => 43358 / 1000,
    "x13"           => 28671 / 1000,
    "x14"           => 27621 / 1000,
    "x15"           => 26121 / 1000,
    "zr5"           => 70582 / 1000,
  ),
  */
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
    if ($algo == "scrypt-jane:16") $algo = "scrypt-jane";
    if ($algo == "blake256r8")     $algo = "blakecoin";
    if ($algo == "blake256r14")    $algo = "blake";
    if ($algo == "blake256r8vnl")  $algo = "vanilla";
    if ($algo == "blake-vanilla")  $algo = "vanilla";
    if ($algo == "ethash")         $algo = "ethereum";
    if ($algo == "sha256d")        $algo = "sha256";
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
    if (!$data) trigger_error("Couldn't decode json from $url", E_USER_WARNING);
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

$yiimp_data = str_replace(": ,", ": 0,", $yiimp_data);

$profit = array();
foreach ($gfxcards as $card => $rates) {$profit[$card] = array();}

function deduct_fee(&$value, $fee) {
    if (!isset($fee)) return;
    $fees = ($value / 100) * $fee;
    $value -= $fees;
}

function handle_pool($pool_name, $extra_fee, $algo_name, $payrate_current_name, $payrate_current_multiplier, $payrate_last24h_name, $payrate_last24h_multiplier) {
    global ${"$pool_name" . "_data"};
    foreach (${"$pool_name" . "_data"} as $algo => $entry) {
        $payrate_last24h = 0;
        if (!is_string($algo)) $algo = $entry[$algo_name];
        if (is_numeric($entry)) {
            $payrate_current = $entry;
        } else {
            $payrate_current = $entry[$payrate_current_name];
            if (isset($entry[$payrate_last24h_name])) $payrate_last24h = $entry[$payrate_last24h_name];
        }
        $fee = $extra_fee;
        if (isset($entry['fees'])) $fee += $entry['fees'];
        if (isset($entry['workers']) && $entry['workers'] <= 0) continue;
        handle_algo($pool_name, $algo, $payrate_current, $fee, $payrate_current_multiplier, $payrate_last24h, $payrate_last24h_multiplier);
    }
}

function handle_algo($pool_name, $algo, $payrate_current, $fee, $payrate_current_multiplier, $payrate_last24h, $payrate_last24h_multiplier) {
    global $profit;
    global $gfxcards;
    $algo = fix_hashname($algo);
    $mbtcmhday_current = $payrate_current * $payrate_current_multiplier; // to get mBTC/MH/Day
    $mbtcmhday_last24h = $payrate_last24h * $payrate_last24h_multiplier;
    if ($pool_name == "nicehash" && $algo == "sha256") $mbtcmhday_current *= 1000; // special case for nicehash sha256
    if ($pool_name == "nicehash" && $algo == "sha256") $mbtcmhday_last24h *= 1000; // special case for nicehash sha256
    if ($pool_name == "zpool") {
        switch ($algo) {
        case 'blakecoin':
        case 'decred':
            $mbtcmhday_current /= 1000;
            $mbtcmhday_last24h /= 1000;
            break;
        }
    }
    if ($pool_name == "yiimp") {
        switch ($algo) {
            case 'decred':
            case 'blake';
            case 'blake2s':
            case 'skein':
                $mbtcmhday_current /= 1000;
                $mbtcmhday_last24h /= 1000;
                break;
        }
    }
    foreach ($gfxcards as $card => $rates) {
        $khs = get_hashrate($card, $algo);
        if (!isset($khs)) continue;
        $mhs = $khs / 1000;
        $mbtcday_current = $mhs * $mbtcmhday_current;
        $mbtcday_last24h = $mhs * $mbtcmhday_last24h;
        deduct_fee($mbtcday_current, $fee);
        deduct_fee($mbtcday_last24h, $fee);
        $profit[$card]["$algo.$pool_name"] = array(
            'algo'                => $algo,
            'pool'                => $pool_name,
            'mBTC/Day current'    => $mbtcday_current,
            'mBTC/MH/Day current' => $mbtcmhday_current,
            'mBTC/Day last24h'    => $mbtcday_last24h,
            'mBTC/MH/Day last24h' => $mbtcmhday_last24h,
        );
    }
}

handle_pool("zpool",     0, '', 'estimate_current', 1000, 'actual_last24h', 1);
handle_pool("hashpower", 2, '', 'estimate_current', 1000, 'actual_last24h', 1000);
handle_pool("yiimp",     0, '', 'estimate_current', 1000, 'estimate_last24h', 1000);
handle_pool("nicehash",  3, 'name', 'paying', 1,    NULL, 1);
handle_pool("wepaybtc",  0, 'name', 'paying', 1000, NULL, 1);
handle_pool("mph",     0.3, 'algo', 'profit', 1,    NULL, 1);

handle_algo("dashminer",    "x11",    $dashminer_data['btcpermhs'],        0, 1000, NULL, 1);
handle_algo("themultipool", "x11",    floatval($themultipool_x11_data),    1, 1000, NULL, 1);
handle_algo("themultipool", "sha256", floatval($themultipool_sha256_data), 1, 1, NULL, 1);
handle_algo("themultipool", "scrypt", floatval($themultipool_scrypt_data), 1, 1000, NULL, 1);

function profitrate_cmp($a, $b) {
    $left = $a["mBTC/Day current"];
    $right = $b["mBTC/Day current"];
    if ($left == $right) return 0;
    return ($left > $right) ? -1 : 1;
}

function card_to_anchor($card) {
    $card = str_replace(' ', '', $card);
    $card = str_replace('.', '', $card);
    $card = str_replace('$', '', $card);
    $card = str_replace('/', '', $card);
    return htmlentities($card);
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
    $card_html = str_replace("CPU", '<span class="label label-info">CPU</span>', $card_html);
    $card_html = str_replace("VPS", '<span class="label label-default">VPS</span>', $card_html);
    $card_html = str_replace("GPU", '<span class="label label-primary">GPU</span>', $card_html);
    $card_html = str_replace("OC", '<span class="label label-danger">OC</span>', $card_html);
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
    print_th_right("Algo");
    print_th("Pool");
    // print_th_right("m฿/day", 'hidden-xs-down');
    print_th_right("$ now");
    print_th("$ last24h");
    print_th_right('payrate', 'hidden-xs-down');
    print_th('payrateavg', 'hidden-xs-down');
    print_th_right("MH/s", 'hidden-xs-down');
    print '</tr></thead>';
    print '<tbody>';
    foreach ($entries as $entry) {
        $mbtcday_current = $entry['mBTC/Day current'];
        $usdrate_current = ($mbtcday_current/1000.) * $usd_data['vwap'];
        $mbtcday_last24h = $entry['mBTC/Day last24h'];
        $usdrate_last24h = ($mbtcday_last24h/1000.) * $usd_data['vwap'];
        $mbtcmhday_current = $entry['mBTC/MH/Day current'];
        $mbtcmhday_last24 = $entry['mBTC/MH/Day last24h'];

        $algo = fix_hashname($entry['algo']);
        $khs = $gfxcards[$card][$algo];
        print '<tr>';
        print_td_right($algo);
        print_td($entry['pool']);
        print_td_right(sprintf('%.2f', $usdrate_current));
        if ($usdrate_last24h == 0) {
            print_td("-");
        } else {
            print_td(sprintf('%.2f', $usdrate_last24h));
        }
        // payrate
        print_td_right(sprintf('%.4f', $mbtcmhday_current), 'hidden-xs-down');
        if ($mbtcmhday_last24 == 0) {
            print_td("-");
        } else {
            print_td(sprintf('%.4f', $mbtcmhday_last24), 'hidden-xs-down');
        }
        // print_td_right(sprintf('%.4f', $entry['mBTC/MH/Day']), 'hidden-xs-down');

        // hashing speed
        print_td_right(sprintf('%.2f', $khs/1000), 'hidden-xs-down');
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
// printer("mph");
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
