<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include 'requestFeed.php';

$name = $_GET["name"];
$address = NULL;
$mysql_con = mysql_connect("127.0.0.1:3306", "root", "aaawninhgyg");
if (!$mysql_con) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db("RSSReader", $mysql_con);
$query = "select * from FeedList where Name='" . $name . "'";
$feedlist = mysql_query($query);
while ($row = mysql_fetch_array($feedlist)) {
    $address = $row['Link'];
}
$result = requestFeed($address);

echo "$result";
mysql_close();
?>
