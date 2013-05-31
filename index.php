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
        <script type="text/javascript" src="js/easing.js"></script>
        <script type="text/javascript" src="js/jquery.scrollTo-1.4.2-min.js"></script>
        <script type="text/javascript" src="js/quicksand.js"></script>
        <script type="text/javascript" src="js/custom.js"></script>
        <!--[if IE]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <!-- ENDS JS -->

        <!--[if IE 6]>
                <script type="text/javascript" src="js/DD_belatedPNG.js"></script>
                <script>
                /* EXAMPLE */
                //DD_belatedPNG.fix('*');
        </script>
        <![endif]-->

        <!-- superfish -->
        <link rel="stylesheet" media="screen" href="css/superfish.css" /> 
        <link rel="stylesheet" media="screen" href="css/superfish-left.css" /> 
        <script type="text/javascript" src="js/superfish-1.4.8/js/hoverIntent.js"></script>
        <script type="text/javascript" src="js/superfish-1.4.8/js/superfish.js"></script>
        <script type="text/javascript" src="js/superfish-1.4.8/js/supersubs.js"></script>
        <!-- ENDS superfish -->

        <!-- poshytip -->
        <link rel="stylesheet" href="js/poshytip-1.0/src/tip-twitter/tip-twitter.css" type="text/css" />
        <link rel="stylesheet" href="js/poshytip-1.0/src/tip-yellowsimple/tip-yellowsimple.css" type="text/css" />
        <script type="text/javascript" src="js/poshytip-1.0/src/jquery.poshytip.min.js"></script>
        <!-- ENDS poshytip -->

        <!-- Tweet -->
        <link rel="stylesheet" href="css/jquery.tweet.css" media="all"  type="text/css"/> 
        <script src="js/tweet/jquery.tweet.js" type="text/javascript"></script> 
        <!-- ENDS Tweet -->

        <!-- Fancybox -->
        <link rel="stylesheet" href="js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
        <script type="text/javascript" src="js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
        <!-- ENDS Fancybox -->

        <!-- jflickrfeed -->
        <link href="css/jflickrfeed.css" rel="stylesheet" type="text/css" media="screen" /> 
        <script src="js/jflickrfeed/jflickrfeed.js"></script>

        <link href="js/jflickrfeed/colorbox/colorbox.css" rel="stylesheet" type="text/css" media="screen" /> 
        <script src="js/jflickrfeed/colorbox/jquery.colorbox.js"></script>
        <!-- ENDS jflickrfeed -->

        <!-- prettyPhoto -->
        <script type="text/javascript" src="js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
        <link rel="stylesheet" href="js/prettyPhoto/css/prettyPhoto.css" type="text/css" media="screen" />
        <!-- ENDS prettyPhoto -->

        <!-- GOOGLE FONTS -->
        <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>

        <!-- Nivo slider -->
        <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
        <script src="js/nivo-slider/jquery.nivo.slider.js" type="text/javascript"></script>
        <!-- ENDS Nivo slider -->

        <!-- tabs -->
        <link rel="stylesheet" href="css/tabs.css" type="text/css" media="screen" />
        <script type="text/javascript" src="js/tabs.js"></script>
        <!-- ENDS tabs -->

        <!--[if IE 7]>
                <link rel="stylesheet" type="text/css" media="screen" href="css/ie7-hacks.css" />
        <![endif]-->
        <!--[if IE 8]>
                <link rel="stylesheet" type="text/css" media="screen" href="css/ie8-hacks.css" />
        <![endif]-->
        <!-- ENDS CSS -->	
        <script type="text/javascript" src="js/requestFeed.js"></script>
        <script type="text/javascript" src="addFeed.js"></script>


    </head>
    <body>

        <!-- WRAPPER -->
        <div id="wrapper">

            <!-- SIDEBAR -->
            <div id="sidebar">
                <!-- logo -->
                <a href="index.html"><img src="img/logo.png" alt="Left template" id="logo" /></a>

                <!-- search -->
                <div>
                    <div id="s">
                        <input type="text" value="Name..." id="feedName" name="s" />
                        <input type="text" value="Add feed..." id="feedAddr" name="s" onfocus="defaultInput(this)" onblur="clearInput(this)" />
                        <img id="searchsubmit" onclick="addFeed()" value=" " /><br />

                    </div>
                    <span id="feedTip"></span>
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
                    <h4>catagory</h4>
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
                        Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.
                    </li>
                    <li class="col">
                        <h6>Categories</h6>
                        <ul>
                            <li><a href="#">Webdesign</a></li>
                            <li><a href="#/">Wordpress</a></li>
                            <li><a href="#">Photo</a></li>
                            <li><a href="#">Code</a></li>
                            <li><a href="#">Web design</a></li>
                            <li><a href="#/">Marketplace</a></li>
                            <li><a href="#">Writting</a></li>
                            <li><a href="#">Drawings</a></li>
                        </ul>
                    </li>
                    <!-- Flickr -->
                    <li class="col">
                        <h6>Flickr stream</h6>
                        <ul id="flickr-stream" class="thumbs">
                        </ul>
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