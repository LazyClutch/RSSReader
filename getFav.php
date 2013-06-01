<?php

include 'encodeDetect.php';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$title = "";
$description = "";
$href = "";
$mysql_con = mysql_connect("127.0.0.1:3306", "root", "aaawninhgyg");
if (!$mysql_con) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db("RSSReader", $mysql_con);
$feedlist = mysql_query("select * from Favorite");
while ($row = mysql_fetch_array($feedlist)) {
    $title = encodeDetect($row['Title'], 'UTF-8');
    $title = encodeDetect($title, 'GBK');
    $title = mb_convert_encoding($title, 'UTF-8');
    $description = encodeDetect($row['Description'], "UTF-8");
    $href = encodeDetect($row['Href'], "UTF-8");
}
echo "Success";

//end function
?>
