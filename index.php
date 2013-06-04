<!DOCTYPE html>
<?php include 'Work.php'; ?>
<html>
    <head>
        <meta charset="utf-8">
        <title>RSS READER</title>

        <!-- CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />

        <!-- THEME -->
        <link rel="stylesheet" href="skins/paper-brown/style.css" type="text/css" media="screen" />

        <!-- JS -->
        <script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
        <script type="text/javascript" src="js/jqueryui.js"></script>
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
        <!-- WRAPPER -->
        <div id="wrapper">

            <!-- SIDEBAR -->
            <div id="sidebar">
                <!-- logo -->
                <a href="index.php"><img src="img/RSS_001.png" onmouseover="mouseOver()" onmouseout="mouseOut()" width="210" height="210" alt="Left template" id="logo" /></a>

                <!-- search -->
                <div>
                    <!-- search -->
                    <div id="searchform">
                        <input type="text" value="Address..." name="s" id="s" onfocus="defaultInput(this)" onblur="clearInput(this)" />
                        <input type="text" value="Name..." id="feedName" name="s" onfocus="defaultNameInput(this)" onblur="clearNameInput(this)"/>
                        <span id="feedTip"></span>
                        <input type="submit" onclick="addFeed()" id="searchsubmit" value=" " />
                    </div>
                    <!-- ENDS search -->
                    <!--                    <div id="s">
                                            <input type="text" value="Add feed..." id="feedAddr" name="s" onfocus="defaultInput(this)" onblur="clearInput(this)" />
                                            <img id="searchsubmit" width="32" height="32" onclick="addFeed()" value=" " /><br />
                                        </div>-->

                </div>

                <!-- ENDS search -->

                <!-- Navigation -->
                <ul id="nav" class="sf-menu sf-vertical">
                    <?php
                    GetFeedList();
                    ?>
                </ul>
                <!-- Navigation -->	

                <!-- categories -->
                <ul class="favorite">
                    <img id="favImg" src="img/fav.png" onclick="getFav(this)" onmouseover="favMouseOver()" onmouseout="favMouseOut()" />
                </ul>
                <!-- categories -->	

            </div>
            <!-- ENDS SIDEBAR -->

            <!-- MAIN -->
            <div id="main">
                <div id="feed">
                </div>
            </div>
            <!-- ENDS MAIN -->
        </div>
        <!-- ENDS WRAPPER -->

        <!-- FOOTER -->
        <div id="footer">
            <!-- FOOTER-WRAPPER -->
            <div id="footer-wrapper">
                <!-- footer-cols -->
                <ul id="footer-cols">
                    <li class="col clear-col">
                        <h6>About the theme</h6>
                    </li>
                    <!-- ENDS Flickr -->
                </ul>
                <!-- ENDS footer-cols -->
                <!-- footer-bottom -->
                <div id="footer-bottom">
                    <div id="bottom-left">
                        &copy; 2011 Ansimuz. All Rights Reserved.  <a href="http://themeforest.net/user/Ansimuz?ref=ansimuz">View portfolio</a>
                    </div>
                    <div id="bottom-right">To top</div>
                </div>
                <!-- ENDS footer-bottom -->
            </div>
            <!-- ENDS FOOTER-WRAPPER -->
        </div>
        <!-- ENDS FOOTER -->


    </body>
</html>