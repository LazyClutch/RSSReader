<?php

include 'lastRSS.php';
include 'encodeDetect.php';

function requestFeed($address) {
    $rss = new lastRSS();

    $rss->cache_dir = './temp';
    $rss->cache_time = 1200;

    $result = "";
    if ($rs = $rss->Get($address)) {
        foreach ($rs['items'] as $item) {
            $result = $result . "\t<li id=\"item\"><a id=\"itemLink\" href=\"$item[link]\">" . $item['title'] . "</a><img src=\"img/146.png\" align=\"middle\" width=\"30\" height=\"30\" id=\"savePic\" onclick=\"saveItem(this)\"  /><span id=\"saveTip\"></span><br /><p id=\"itemTime\">" . $item['pubDate'] . "</p></div><br /><div id=\"description\"><div>" . $item['description'] . "</div></li><br />\n";
            $result = $result . "<hr />\n";
        }
        $result = $result . "</ul>\n";
    } else {
        $result = $result . "Error: It's not possible to reach RSS file...\n";
    }
    $term = "UTF-8";
    $result = encodeDetect($result, $term);
    $result = html_entity_decode($result, ENT_QUOTES, "UTF-8");
    $result = str_replace("]]>", " ", $result);
    return $result;
}

?>
