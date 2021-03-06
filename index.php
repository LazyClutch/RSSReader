<!DOCTYPE html>
<?php include 'Work.php'; ?>
<html>
    <head>
        <meta charset="utf-8">
        <title>RSS READER</title>

        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />

        <link rel="stylesheet" href="skins/paper-brown/style.css" type="text/css" media="screen" />
        
        <link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />

        <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui-1.8.18.custom.min.js"></script>
        <script type="text/javascript" src="js/jquery.scrollTo-1.4.2-min.js"></script>
        <script type="text/javascript" src="js/quicksand.js"></script>
        <script type="text/javascript" src="js/custom.js"></script>

        <script type="text/javascript" src="js/requestFeed.js"></script>
        <script type="text/javascript" src="addFeed.js"></script>
        <script type="text/javascript" src="saveItem.js"></script>
        <script type="text/javascript" src="getFav.js"></script>
        <script type="text/javascript" src="action.js"></script>
        

    </head>
    <body>
        <div id="wrapper">

            <div id="sidebar">
                <a id="title" href="index.php"><img src="img/RSS_001.png" onmouseover="mouseOver()" onmouseout="mouseOut()" width="210" height="210" alt="Left template" id="logo" /></a>

                <div>
                    <div id="searchform">
                        <input type="text" value="Address..." name="s" id="s" onfocus="defaultInput(this)" onblur="clearInput(this)" />
                        <input type="text" value="Name..." id="feedName" name="s" onfocus="defaultNameInput(this)" onblur="clearNameInput(this)"/>
                        <span id="feedTip"></span>
                        <input type="submit" onclick="addFeed()" id="searchsubmit" value=" " />
                    </div>

                </div>
                <ul id="nav" class="sf-menu sf-vertical">
                    <?php
                    GetFeedList();
                    ?>
                </ul>
                <ul class="favorite">
                    <img id="favImg" src="img/fav.png" onclick="getFav(this)" onmouseover="favMouseOver()" onmouseout="favMouseOut()" />
                </ul>

            </div>

            <div id="main">
                <div id="feed">
                </div>
                <div id="top">
                    <a href="#title"><img src="img/top.png" id="topImg" /></a>
                </div>
            </div>
        </div>

        <div id="footer">
            <div id="footer-wrapper">
                <div id="footer-bottom">
                    <div id="bottom-left">
                        &copy; 2013 Lazy. All Rights Reserved.  <a href="http://github.com/LazyClutch">Lazy</a>
                    </div>
                    <div id="bottom-right">To top</div>
                </div>
            </div>
        </div>


    </body>
</html>