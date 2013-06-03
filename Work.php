<?php

function GetFeedList() {
    $mysql_con = mysql_connect("127.0.0.1:3306", "root", "aaawninhgyg");
    if (!$mysql_con) {
        die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("RSSReader", $mysql_con);
    $feedlist = mysql_query("select * from FeedList");
    $count = 0;
    while ($row = mysql_fetch_array($feedlist)) {
        echo "<li id=\"navItem\" onclick=\"feedClicked('".$row['Name']."', "."this" .")\">".$row['Name']."</li><span id=\"navChoose\"></span>\n";
        $count++;
    }
    $count = 0;
    mysql_close();
}

?>
