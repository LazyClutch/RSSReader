<!DOCTYPE html>
<?php include 'Work.php'; ?>
<html>
    <head>
        <meta charset="utf-8">
        <title>RSS READER</title>

        <!-- CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/social-icons.css" type="text/css" media="screen" />

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
                <a href="index.html"><img src="img/RSS_001.png" width="210" height="210" alt="Left template" id="logo" /></a>

                <!-- search -->
                <div>
                    <div id="s">
                        <input type="text" value="Name..." id="feedName" name="s" />
                        <input type="text" value="Add feed..." id="feedAddr" name="s" onfocus="defaultInput(this)" onblur="clearInput(this)" />
                        <img id="searchsubmit" onclick="addFeed()" value=" " /><br />
                        <span id="feedTip"></span>
                    </div>

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
                <ul class="cat-list">
                    <h4 onclick="getFav()">Favorite</h4>
                </ul>
                <!-- categories -->	

            </div>
            <!-- ENDS SIDEBAR -->

            <!-- MAIN -->
            <div id="main">

                <div id="feed">
                    <!--                    //<?php
//                    // Create lastRSS object 
//                    $address = 'http://sse.tongji.edu.cn/SSEMainRSS.aspx';
//                    ListAll($address);
//                    
                    ?> -->
                </div>
                <!-- Slider -->
                <div id="slider">

                </div>
                <!-- ENDS Slider -->

                <!-- CONTENT -->
                <div id="content">
                    <!-- PAGE CONTENT -->
                    <div id="page-content">

                        <!-- feature blocks -->

                        <!-- ENDS feature blocks -->


                        <!-- TABS -->
                        <!-- the tabs -->


                        <!-- tab "panes" -->
                        <div class="panes">

                            <!-- Information  -->
                            <div>



                            </div>
                            <!-- ENDS Information -->

                            <!-- Post list -->
                            <div>
                                <ul class="blocks-list">
                                    <li>
                                        <a href="single.html" class="border"><img src="img/dummies/114x86.jpg" alt="Post" /></a>
                                        <div class="the-excerpt">
                                            <strong>Pellentesque habitant morbi tristique</strong>  senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.																			
                                            <a href="single.html" class="link-arrow">Read more &#8594;</a>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="single.html" class="border"><img src="img/dummies/114x86.jpg" alt="Post" /></a>
                                        <div class="the-excerpt">
                                            <strong>Pellentesque habitant morbi tristique</strong>  senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.																			
                                            <a href="single.html" class="link-arrow">Read more &#8594;</a>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="single.html" class="border"><img src="img/dummies/114x86.jpg" alt="Post" /></a>
                                        <div class="the-excerpt">
                                            <strong>Pellentesque habitant morbi tristique</strong>  senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.																			
                                            <a href="single.html" class="link-arrow">Read more &#8594;</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- ENDS Post list -->


                            <!-- img gallery -->
                            <div>

                            </div>
                            <!-- ENDS img gallery -->

                            <!-- img gallery -->
                            <div>

                            </div>
                            <!-- ENDS img gallery -->

                        </div>
                        <!-- ENDS TABS -->




                    </div>
                    <!-- ENDS PAGE-CONTENT -->

                </div>
                <!-- ENDS CONTENT -->

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