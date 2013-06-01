<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$href = $_POST['href'];
$title = $_POST['title'];
$description = $_POST['description'];
$mysql_con = mysql_connect("127.0.0.1:3306", "root", "aaawninhgyg");
if (!$mysql_con) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db("RSSReader", $mysql_con);

?>
