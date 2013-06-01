<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$href = $_GET["href"];
$title = $_GET["title"];
$description = $_GET["description"];
$href = iconv("UTF-8", "ASCII", $href);
$mysql_con = mysql_connect("127.0.0.1:3306", "root", "aaawninhgyg");
if (!$mysql_con) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db("RSSReader", $mysql_con);
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
