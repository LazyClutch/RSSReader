<?php

function GetFeedList() {
    $mysql_con = mysql_connect("127.0.0.1:3306", "root", "aaawninhgyg");
    if (!$mysql_con) {
        die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("RSSReader", $mysql_con);
    $feedlist = mysql_query("select * from FeedList");
    while ($row = mysql_fetch_array($feedlist)) {
        echo "<li onclick=\"feedClicked('".$row['Name']."')\">".$row['Name']."</li>\n";
    }
    mysql_close();
}

?>
