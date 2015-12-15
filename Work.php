<?php

function GetFeedList() {
    $mysql_con = mysql_connect("127.0.0.1:3306", "root", "123");
    if (!$mysql_con) {
        die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("RSSReader", $mysql_con);
    $feedlist = mysql_query("select * from FeedList");
    $count = 0;
    while ($row = mysql_fetch_array($feedlist)) {
        echo "<li id=\"navLi\" onclick=\"feedClicked('".$row['Name']."', "."this" .")\""."><a href=\"javascript:void(0)\"id=\"navItem\">".$row['Name']."</a></li></li>\n";
        $count++;
    }
    $count = 0;
    mysql_close();
}

?>
