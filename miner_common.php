<?php

// in kH/s
$gfxcards = array(
  'GPU 2x970 OC' => array( // +155Core +87mV 100%FAN 110%power
    "blake"       => 3311.00 * 1000, // ccminer_tpruvot_1.7.5-git.x64
    "blake2s"     => 2300.00 * 1000, // ccminer_tpruvot_1.7.5-git.x64 -i 26
    "blakecoin"   => 5852.44 * 1000, // ccminer_tpruvot_1.7.5-git.x64
    "c11"         =>   18.02 * 1000, // ccminer_sp_1.5.80
    "decred"      => 3572.00 * 1000, // ccminer_alexis.x64 -i 27
    "ethereum"    =>   37.00 * 1000, // from the web
    "fresh"       =>   20.55 * 1000, // ccminer_neoscrypt -i 21
    "groestl"     =>   51.83 * 1000, // ccminer_sp_1.5.79
    "keccak"      => 1028.50 * 1000, // ccminer_neoscrypt -i 25
    "lyra2"       => 4173.50,        // ccminer_sp_1.5.79
    "lyra2v2"     =>   21.40 * 1000, // ccminer_sp_1.5.79 -i 19
    "myr-gr"      =>   97.64 * 1000, // ccminer_sp_1.5.80
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
    "x14"         =>   13.69 * 1000, // ccminer_sp_1.5.80 -i 21
    "x15"         =>   12.35 * 1000, // ccminer_neoscrypt
    "x17"         =>   11.33 * 1000, // ccminer_sp_1.5.80
    "zr5"         => 6646.00,        // ccminer_tpruvot_1.7.5-git.x64 -i 26
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
  /********
   * CPU's
   ********/

  'CPU i7 4770 OC' => array( // 103x39 -- 4017MHz vs stock 3900MHz
    "anime"         =>     587053 / 1000, // cpuminer-nicehash
    "argon2"        =>      30838 / 1000, // cpuminer-opt
    "axiom"         =>         80 / 1000, // cpuminer-opt
    "bastion"       =>     159888 / 1000, // cpuminer-opt
    "blake"         =>   20854516 / 1000, // cpuminer-opt
    "blake256r8vnl" =>   33451974 / 1000, // cpuminer-opt
    "blake2s"       =>   16254204 / 1000, // cpuminer-nicehash
    "blakecoin"     =>   30424628 / 1000, // cpuminer-opt
    "bmw"           =>    9390479 / 1000, // cpuminer-nicehash
    "c11"           =>     707497 / 1000, // cpuminer-opt
    "cryptolight"   =>        597 / 1000, // cpuminer-opt
    "cryptonight"   =>        117 / 1000, // cpuminer-opt
    "decred"        =>   21371911 / 1000, // cpuminer-opt
    "dmd-gr"        =>    1109073 / 1000, // cpuminer-opt
    "drop"          =>     948068 / 1000, // cpuminer-opt
    "fresh"         =>     499480 / 1000, // cpuminer-opt
    "groestl"       =>    1125917 / 1000, // cpuminer-nicehash
    "heavy"         =>     229848 / 1000, // cpuminer-nicehash
    "keccak"        =>    8332952 / 1000, // cpuminer-nicehash
    "luffa"         =>    3177996 / 1000, // cpuminer-nicehash
    "lyra2"         =>     921109 / 1000, // cpuminer-nicehash
    "lyra2v2"       =>     413000 / 1000, // cpuminer-opt
    "m7m"           =>      33432 / 1000, // cpuminer-opt
    "myr-gr"        =>    2984756 / 1000, // cpuminer-opt
    "neoscrypt"     =>      28891 / 1000, // cpuminer-nicehash
    "nist5"         =>    1642660 / 1000, // cpuminer-opt
    "pentablake"    =>    3609862 / 1000, // cpuminer-nicehash
    "pluck"         =>       1818 / 1000, // cpuminer-nicehash
    "quark"         =>    1074024 / 1000, // cpuminer-opt
    "qubit"         =>     978906 / 1000, // cpuminer-opt
    "s3"            =>    1201897 / 1000, // cpuminer-nicehash
    "scrypt"        =>      99702 / 1000, // cpuminer-nicehash
    "scryptjane:16" =>        192 / 1000, // cpuminer-opt
    "sha256d"       =>   54669375 / 1000, // cpuminer-nicehash
    "shavite3"      =>    2343704 / 1000, // cpuminer-nicehash
    "sib"           =>     470273 / 1000, // cpuminer-opt
    "skein"         =>    6586806 / 1000, // cpuminer-nicehash
    "skein2"        =>    8167405 / 1000, // cpuminer-nicehash
    "vanilla"       =>   28764303 / 1000, // cpuminer-opt
    "x11"           =>     680450 / 1000, // cpuminer-opt
    "x13"           =>     330987 / 1000, // cpuminer-opt
    "x14"           =>     309014 / 1000, // cpuminer-opt
    "x15"           =>     288348 / 1000, // cpuminer-opt
    "x17"           =>     267620 / 1000, // cpuminer-opt
    "yescrypt"      =>       3398 / 1000, // cpuminer-opt
    "zr5"           =>     796181 / 1000, // cpuminer-opt
  ),

  'CPU AMD X4 965' => array(
    "anime"         =>     294659 / 1000, // cpuminer-nicehash
    "axiom"         =>         60 / 1000, // cpuminer-nicehash
    "bastion"       =>      81292 / 1000, // cpuminer-tpruvot
    "blake"         =>   12373053 / 1000, // cpuminer-tpruvot
    "blake2s"       =>   10176512 / 1000, // cpuminer-tpruvot
    "blakecoin"     =>   17823249 / 1000, // cpuminer-tpruvot
    "bmw"           =>    6939021 / 1000, // cpuminer-tpruvot
    "c11"           =>     136931 / 1000, // cpuminer-tpruvot
    "cryptolight"   =>        200 / 1000, // cpuminer-tpruvot
    "cryptonight"   =>         78 / 1000, // cpuminer-nicehash
    "dmd-gr"        =>     622588 / 1000, // cpuminer-nicehash
    "drop"          =>      14840 / 1000, // cpuminer-tpruvot
    "fresh"         =>     289222 / 1000, // cpuminer-tpruvot
    "groestl"       =>     744034 / 1000, // cpuminer-tpruvot
    "heavy"         =>     117913 / 1000, // cpuminer-tpruvot
    "keccak"        =>    5739619 / 1000, // cpuminer-tpruvot
    "luffa"         =>    2036097 / 1000, // cpuminer-tpruvot
    "lyra2"         =>     569857 / 1000, // cpuminer-nicehash
    "lyra2v2"       =>     297717 / 1000, // cpuminer-tpruvot
    "myr-gr"        =>    1110975 / 1000, // cpuminer-tpruvot
    "neoscrypt"     =>       7695 / 1000, // cpuminer-tpruvot
    "nist5"         =>     457649 / 1000, // cpuminer-tpruvot
    "pentablake"    =>    2269069 / 1000, // cpuminer-tpruvot
    "pluck"         =>        771 / 1000, // cpuminer-tpruvot
    "quark"         =>     300191 / 1000, // cpuminer-tpruvot
    "qubit"         =>     201333 / 1000, // cpuminer-tpruvot
    "s3"            =>     734153 / 1000, // cpuminer-nicehash
    "scrypt"        =>      26016 / 1000, // cpuminer-nicehash
    "scryptjane:16" =>         60 / 1000, // cpuminer-nicehash
    "sha256d"       =>   15359887 / 1000, // cpuminer-nicehash
    "shavite3"      =>    1543093 / 1000, // cpuminer-nicehash
    "sib"           =>     104523 / 1000, // cpuminer-tpruvot
    "skein"         =>    3986457 / 1000, // cpuminer-nicehash
    "skein2"        =>    5943154 / 1000, // cpuminer-nicehash
    "vanilla"       =>   16486704 / 1000, // cpuminer-tpruvot
    "x11"           =>     137468 / 1000, // cpuminer-nicehash
    "x13"           =>      96448 / 1000, // cpuminer-nicehash
    "x14"           =>      92861 / 1000, // cpuminer-nicehash
    "x15"           =>      90863 / 1000, // cpuminer-tpruvot
    "yescrypt"      =>       1790 / 1000, // cpuminer-tpruvot
    "zr5"           =>     228101 / 1000, // cpuminer-tpruvot
  ),

  /******
   * VPS
   ******/

  'VPS vultr $5/mo' => array(
    "anime"         =>      97684 / 1000, // cpuminer-nicehash
    "argon2"        =>       3374 / 1000, // cpuminer-opt
    "axiom"         =>         11 / 1000, // cpuminer-tpruvot
    "bastion"       =>      21126 / 1000, // cpuminer-tpruvot
    "blake"         =>    3231598 / 1000, // cpuminer-nicehash
    "blake256r8vnl" =>    4667764 / 1000, // cpuminer-opt
    "blake2s"       =>    2226408 / 1000, // cpuminer-nicehash
    "blakecoin"     =>    4869623 / 1000, // cpuminer-tpruvot
    "bmw"           =>    1656758 / 1000, // cpuminer-nicehash
    "c11"           =>      98836 / 1000, // cpuminer-opt
    "cryptolight"   =>         65 / 1000, // cpuminer-tpruvot
    "cryptonight"   =>         38 / 1000, // cpuminer-opt
    "decred"        =>    3233720 / 1000, // cpuminer-opt
    "dmd-gr"        =>     176986 / 1000, // cpuminer-nicehash
    "drop"          =>     147655 / 1000, // cpuminer-opt
    "fresh"         =>      78791 / 1000, // cpuminer-nicehash
    "groestl"       =>     175851 / 1000, // cpuminer-nicehash
    "heavy"         =>      28794 / 1000, // cpuminer-nicehash
    "keccak"        =>    1325058 / 1000, // cpuminer-nicehash
    "luffa"         =>     484037 / 1000, // cpuminer-tpruvot
    "lyra2"         =>     129289 / 1000, // cpuminer-nicehash
    "lyra2v2"       =>      77046 / 1000, // cpuminer-tpruvot
    "m7m"           =>       6174 / 1000, // cpuminer-opt
    "myr-gr"        =>     528083 / 1000, // cpuminer-opt
    "neoscrypt"     =>       2888 / 1000, // cpuminer-tpruvot
    "nist5"         =>     272234 / 1000, // cpuminer-opt
    "pentablake"    =>     549412 / 1000, // cpuminer-tpruvot
    "pluck"         =>        265 / 1000, // cpuminer-nicehash
    "quark"         =>     159034 / 1000, // cpuminer-opt
    "qubit"         =>     151668 / 1000, // cpuminer-opt
    "s3"            =>     187683 / 1000, // cpuminer-nicehash
    "scrypt"        =>      14132 / 1000, // cpuminer-tpruvot
    "scryptjane:16" =>         23 / 1000, // cpuminer-tpruvot
    "sha256d"       =>    8314542 / 1000, // cpuminer-nicehash
    "shavite3"      =>     370410 / 1000, // cpuminer-nicehash
    "sib"           =>      68784 / 1000, // cpuminer-opt
    "skein"         =>    1032071 / 1000, // cpuminer-nicehash
    "skein2"        =>    1269434 / 1000, // cpuminer-nicehash
    "vanilla"       =>    4718002 / 1000, // cpuminer-tpruvot
    "x11"           =>      98641 / 1000, // cpuminer-opt
    "x11gost"       =>      68841 / 1000, // cpuminer-opt
    "x13"           =>      48358 / 1000, // cpuminer-opt
    "x14"           =>      46501 / 1000, // cpuminer-opt
    "x15"           =>      42501 / 1000, // cpuminer-opt
    "x17"           =>      40903 / 1000, // cpuminer-opt
    "yescrypt"      =>        601 / 1000, // cpuminer-opt
    "zr5"           =>     114493 / 1000, // cpuminer-opt
  ),
);

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
    if ($algo == "scryptjane:16")  $algo = "scrypt-jane";
    if ($algo == "blake256r8")     $algo = "blakecoin";
    if ($algo == "blake256r14")    $algo = "blake";
    if ($algo == "blake256r8vnl")  $algo = "vanilla";
    if ($algo == "blake-vanilla")  $algo = "vanilla";
    if ($algo == "ethash")         $algo = "ethereum";
    if ($algo == "sha256d")        $algo = "sha256";
    if ($algo == "x11gost")        $algo = "sib";
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
//$dashminer_data = url_to_array_cached("http://dashminer.com/payouts.json", "dashminer_data");
//$wepaybtc_data  = url_to_array_cached("http://wepaybtc.com/payouts.json", "wepaybtc_data");
$mph_data =       url_to_array_cached("https://miningpoolhub.com/index.php?page=api&action=getautoswitchingandprofitsstatistics", "mph_data")['return'];

//$themultipool_x11_data    = url_cached("http://themultipool.com/static/x11_profit.txt",    "themultipool_x11_data");
//$themultipool_scrypt_data = url_cached("http://themultipool.com/static/scrypt_profit.txt", "themultipool_scrypt_data");
//$themultipool_sha256_data = url_cached("http://themultipool.com/static/sha256_profit.txt", "themultipool_sha256_data");

$yiimp_data = str_replace(": ,", ": 0,", $yiimp_data);

$profit = array();
foreach ($gfxcards as $card => $rates) {
    $profit[$card] = array();
    foreach ($rates as $algo => $hashrate) {
        $algo = fix_hashname($algo);
        $gfxcards[$card][$algo] = $hashrate;
    }
}

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
        // if (isset($entry['workers']) && $entry['workers'] <= 0) continue;
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
        case 'blake2s':
            $mbtcmhday_current /= 1000;
            $mbtcmhday_last24h /= 1000;
            break;
        }
    }
    if ($pool_name == "yiimp") {
        switch ($algo) {
            case 'decred':
            case 'blakecoin';
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
//handle_pool("wepaybtc",  0, 'name', 'paying', 1000, NULL, 1);
handle_pool("mph",     0.3, 'algo', 'profit', 1,    NULL, 1);

//handle_algo("dashminer",    "x11",    $dashminer_data['btcpermhs'],        0, 1000, NULL, 1);
//handle_algo("themultipool", "x11",    floatval($themultipool_x11_data),    1, 1000, NULL, 1);
//handle_algo("themultipool", "sha256", floatval($themultipool_sha256_data), 1, 1, NULL, 1);
//handle_algo("themultipool", "scrypt", floatval($themultipool_scrypt_data), 1, 1000, NULL, 1);

function profitrate_cmp($a, $b) {
    $left = $a["mBTC/Day current"];
    $right = $b["mBTC/Day current"];
    if ($left == $right) return 0;
    return ($left > $right) ? -1 : 1;
}

function card_to_anchor($card) {
    $card = str_replace(' ', '_', $card);
    $card = str_replace('.', '', $card);
    $card = str_replace('$', '', $card);
    $card = str_replace('/', '', $card);
    return htmlentities(strtolower($card));
}

