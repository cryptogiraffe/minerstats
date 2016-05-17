<?php

require 'miner_common.php';

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
    print_th_right("now");
    print_th("24h");
    print_th_right('payrate', 'hidden-xs-down');
    print_th('~payrate', 'hidden-xs-down');
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
        print_td_right(sprintf('%.2f$', $usdrate_current));
        if ($usdrate_last24h == 0) {
            print_td("-");
        } else {
            print_td(sprintf('$%.2f', $usdrate_last24h));
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
