<?php

require 'miner_common.php';

$graphite_server = "graphite";
$graphite_port = 2003;

$timestamp = microtime(true);

function metric_format($pool, $algo, $name, $value) {
    global $timestamp;
    return sprintf("minerstats.%s.%s.%s %.10f %f\n", $pool, $algo, $name, $value, $timestamp);
}

$graphite_output = "";
foreach ($profit as $card => $entries) {
    uasort($entries, 'profitrate_cmp');
    foreach ($entries as $entry) {
        $mbtcday_current = $entry['mBTC/Day current'];
        $usdrate_current = ($mbtcday_current/1000.) * $usd_data['vwap'];
        $mbtcday_last24h = $entry['mBTC/Day last24h'];
        $usdrate_last24h = ($mbtcday_last24h/1000.) * $usd_data['vwap'];
        $mbtcmhday_current = $entry['mBTC/MH/Day current'];
        $mbtcmhday_last24 = $entry['mBTC/MH/Day last24h'];

        $algo = fix_hashname($entry['algo']);
        $khs = $gfxcards[$card][$algo];
        $pool = $entry['pool'];
        $card_anchor = card_to_anchor($card);

        $graphite_output .= metric_format($pool, $algo, "payrate", $mbtcmhday_current);
        $graphite_output .= metric_format($pool, $algo, "device.$card_anchor.usd_day", $usdrate_current);
        $graphite_output .= metric_format($pool, $algo, "device.$card_anchor.mbtc_day", $mbtcday_current);
    }
}

#echo "Connecting to graphite\n";
$conn = fsockopen($graphite_server, $graphite_port);
#echo "Sending to graphite\n";
fwrite($conn, $graphite_output);
#echo "Closing connection\n";
fclose($conn);
#echo $graphite_output;

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
