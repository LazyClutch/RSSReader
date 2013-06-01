<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include 'encodeDetect.php';
$href = $_POST["href"];
$title = $_POST["title"];
$description = $_POST["description"];
$title = urlencode($title);
$href = iconv("UTF-8", "ASCII", $href);
$mysql_con = mysql_connect("127.0.0.1:3306", "root", "aaawninhgyg");
if (!$mysql_con) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db("RSSReader", $mysql_con);
mysql_query("set names 'utf-8'");
if(strstr($description, "�")){
    echo "hello";
}
//$description = removeChar($description);
$checkDup = checkDup($href);
if ($checkDup == true) {
    echo "已有此收藏";
    return;
}
$insertQuery = "INSERT INTO Favorite (Href, Description, Title) VALUES ('" . $href . "', '" . $description . "', '" . $title . "')";
mysql_query($insertQuery);
echo "收藏成功";

function checkDup($href) {
    $feedlist = mysql_query("select * from Favorite");
    while ($row = mysql_fetch_array($feedlist)) {
        if ($href == $row['Href'])
            return true;
    }
    return false;
}

function removeChar($description){
    $pattern = '�';
    $replace = ' ';
    preg_replace($pattern, $replace, $description);
    return $description;
}

?>
