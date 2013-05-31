<?php

include 'feed.php';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$addr = $_GET["link"];
$title = $_GET["name"];
$addr = iconv("UTF-8", "ASCII", $addr);
echo $addr;
$mysql_con = mysql_connect("127.0.0.1:3306", "root", "aaawninhgyg");
if (!$mysql_con) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db("RSSReader", $mysql_con);
$requestFeed = requestFeed($addr);
$check = checkStr("http", $requestFeed);
if ($check == TRUE) {
    $insertQuery = "INSERT INTO FeedList (Name, Link) VALUES ('" . $title ."', '". $addr ."')";
    mysql_query($insertQuery);
    echo "";
} else {
    echo "";
}

function checkStr($str, $target) {
    $tmpArr = explode($str, $target);
    //print_r($tmpArr);
    if (count($tmpArr) > 1)
        return true;
    else
        return false;
}

?>
