<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include 'lastRSS.php';

    $name=$_GET["name"];
    $address = NULL;
    $mysql_con = mysql_connect("127.0.0.1:3306", "root", "aaawninhgyg");
    if (!$mysql_con) {
        die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("RSSReader", $mysql_con);
    $query = "select * from FeedList where Name='".$name."'";
    $feedlist = mysql_query($query);
    while ($row = mysql_fetch_array($feedlist)) {
        $address = $row['Link'];
    }
    $rss = new lastRSS();

    // Set cache dir and cache time limit (1200 seconds) 
    // (don't forget to chmod cahce dir to 777 to allow writing) 
    $rss->cache_dir = './temp';
    $rss->cache_time = 1200;
    
    $result = "";
    
    // Try to load and parse RSS file 
    if ($rs = $rss->Get($address)) {
        // Show website logo (if presented) 
        if ($rs[image_url] != '') {
            $result = $result . "<a href=\"$rs[image_link]\"><img src=\"$rs[image_url]\" alt=\"$rs[image_title]\" vspace=\"1\" border=\"0\" /></a><br />\n";
        }
        // Show clickable website title 
        $result = $result . "<big><b><a href=\"$rs[link]\">$rs[title]</a></b></big><br />\n";
        // Show website description 
        $result = $result . "$rs[description]<br />\n";
        // Show last published articles (title, link, description) 
        $result = $result . "<ul>\n";
        foreach ($rs['items'] as $item) {
            $result = $result . "\t<li><a href=\"$item[link]\">" . $item['title'] . "</a><br />" . $item['description'] . "</li>\n";
            $result = $result . "<hr />\n";
        }
        $result = $result . "</ul>\n";
    } else {
        $result = $result . "Error: It's not possible to reach RSS file...\n";
    }
    echo $result;

?>
