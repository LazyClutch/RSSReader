<?php

include 'encodeDetect.php';

$title = "";
$description = "";
$href = "";
$mysql_con = mysql_connect("127.0.0.1:3306", "root", "aaawninhgyg");
if (!$mysql_con) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db("RSSReader", $mysql_con);
$feedlist = mysql_query("select * from Favorite");
$result = "";
while ($row = mysql_fetch_array($feedlist)) {
    $title = urldecode($row['Title']);
    $description = urldecode($row['Description']);
    $href = urldecode($row['Href']);
    $result = $result . "\t<li id=\"item\">" . $description . "</li>";
//    $result = $result . "\t<li id=\"item\"><a id=\"itemLink\" href=\"$href\">" . $title . "</a><img src=\"img/save.png\" align=\"middle\" width=\"20\" height=\"20\" id=\"savePic\" onclick=\"saveItem(this)\"  /><span id=\"saveTip\"></span><br /><div id=\"description\">" . $description . "</div></li>\n";
    $result = $result . "<hr />\n";
}
echo $result;

?>
