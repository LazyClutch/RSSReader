<?php

include 'requestFeed.php';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$addr = $_GET["link"];
$title = $_GET["name"];
$addr = iconv("UTF-8", "ASCII", $addr);
$mysql_con = mysql_connect("127.0.0.1:3306", "root", "aaawninhgyg");
if (!$mysql_con) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db("RSSReader", $mysql_con);
$requestFeed = requestFeed($addr);
$checkLegal = checkStr("http", $requestFeed);
$checkRepeat = checkRepeat($addr);
if($checkRepeat == TRUE){
    echo "已有此订阅";
    return;
}
if ($checkLegal == TRUE) {
    $insertQuery = "INSERT INTO FeedList (Name, Link) VALUES ('" . $title ."', '". $addr ."')";
    mysql_query($insertQuery);
    echo "订阅成功";
} else {
    echo "不合法的RSS源";
}

function checkStr($str, $target) {
    $tmpArr = explode($str, $target);
    //print_r($tmpArr);
    if (count($tmpArr) > 1)
        return true;
    else
        return false;
}

function checkRepeat($addr){
    $feedlist = mysql_query("select * from FeedList");
    while ($row = mysql_fetch_array($feedlist)) {
        if($addr == $row['Link'])return true;
    }
    return false;
}

mysql_close();
?>
