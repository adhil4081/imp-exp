<?php
if (isset($pgenme)==false) { $pgenme= ""; }
if (isset($pgenmestr)==false) { $pgenmestr= "welcome"; }

$subpage="";
$pgheading="";
$subpage = @trim(stripslashes($_GET['i'])); 
$pginnerbgclsname="hb-innerbanner";
$insidebannerfilename="page-title.jpg";

$topheadmenutype="1";

//$pgenme=="about" home contact products services gallery quality

switch  ($pgenme) {
	case "about":
        $pgheading="ABOUT US";
        $pginnerbgclsname="hb-innerbanner";		
        $insidebannerfilename="page-title.jpg";
		break;
	case "contact":
        $pgheading="CONTACT US";
        $pginnerbgclsname="hb-innerbanner5";
        $insidebannerfilename="page-title.jpg";
		break;
	case "products":
        $pgheading="OUR PRODUCTS";
        $pginnerbgclsname="hb-innerbanner2";
        $insidebannerfilename="page-title.jpg";
		break;
	case "services":
        $pgheading="OUR SERVICES";
        $pginnerbgclsname="hb-innerbanner3";
        $insidebannerfilename="page-title.jpg";
		break;
	case "pricelist":   
        $pgheading="PRICE LIST";
        $pginnerbgclsname="hb-innerbanner4";
        $insidebannerfilename="page-title.jpg";
        break;
    case "gallery":
        $pgheading="GALLERY";
        $pginnerbgclsname="hb-innerbanner4";
        $insidebannerfilename="page-title.jpg";
        break;	
	case "clients":
        $pgheading="OUR CLIENTS";
        $pginnerbgclsname="hb-innerbanner5";
        $insidebannerfilename="page-title.jpg";
		break;	
   case "quality":   
        $pgheading="QUALITY POLICY";
        $pginnerbgclsname="hb-innerbanner6";
        $insidebannerfilename="page-title.jpg";
        break;     
	default:
        $pgheading="ABOUT US";
        $pginnerbgclsname="assets/images/background/topheadbanner1.jpg";
        $insidebannerfilename="page-title.jpg";
		break;
	}		
?>
 
 

<!DOCTYPE html>
<html lang="en">


<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title><?php echo $pgheading;?> - Al Farusia Imports and Exports</title>

<!-- Fav Icon -->
<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="assets/css/font-awesome-all.css" rel="stylesheet">
<link href="assets/css/flaticon.css" rel="stylesheet">
<link href="assets/css/owl.css" rel="stylesheet">
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
<link href="assets/css/animate.css" rel="stylesheet">
<link href="assets/css/nice-select.css" rel="stylesheet">
<link href="assets/css/color.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">


</head>


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper">

        <?php
        /*
        <!-- preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">Preloader Close</div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="f" class="letters-loading">
                                F
                            </span>
                            <span data-text-preloader="a" class="letters-loading">
                                A
                            </span>
                            <span data-text-preloader="r" class="letters-loading">
                                R
                            </span>
                            <span data-text-preloader="u" class="letters-loading">
                                U
                            </span>
                            <span data-text-preloader="s" class="letters-loading">
                                S
                            </span>
                            <span data-text-preloader="i" class="letters-loading">
                                I
                            </span>
                            <span data-text-preloader="a" class="letters-loading">
                                A
                            </span>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
        <!-- preloader end -->
        */
        ?>


        <?php    
        if  (($pgenme=="home") || ($topheadmenutype=="1")) {
           ?>   
            <!-- sidebar cart item -->
            <div class="xs-sidebar-group info-group info-sidebar">
                <div class="xs-overlay xs-bg-black"></div>
                <div class="xs-sidebar-widget">
                    <div class="sidebar-widget-container">
                        <div class="widget-heading">
                            <a href="#" class="close-side-widget"><i class="fal fa-times"></i></a>
                        </div>
                        <div class="sidebar-textwidget">
                            <div class="sidebar-info-contents">
                                <div class="content-inner">
                                    <div class="logo">
                                        <a href="index.php"><img src="assets/images/logo-2.png" alt="" /></a>
                                    </div>
                                    <div class="content-box">
                                        <h4>About Us</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                                        <a href="about.php" class="theme-btn">About Us<i class="far fa-angle-double-right"></i></a>
                                    </div>
                                    <div class="contact-info">
                                        <h4>Contact Info</h4>
                                        <ul>
                                            <li>Chicago 12, Melborne City, USA</li>
                                            <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                                            <li><a href="mailto:info@alfarusiagroup.com">info@alfarusiagroup.com</a></li>
                                        </ul>
                                    </div>
                                    <ul class="social-box">
                                        <li class="facebook"><a href="#" class="fab fa-facebook-f"></a></li>
                                        <li class="twitter"><a href="#" class="fab fa-twitter"></a></li>
                                        <li class="linkedin"><a href="#" class="fab fa-linkedin-in"></a></li>
                                        <li class="instagram"><a href="#" class="fab fa-instagram"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END sidebar widget item -->
           <!-- main header -->
          <header class="main-header style-two">
             <!-- header-lower -->
             <div class="header-lower">
                <div class="outer-box">
                    <div class="nav-box">
                        <div class="nav-btn nav-toggler navSidebar-button clearfix">
                            <span class="bar bar-1"></span>
                            <span class="bar bar-2"></span>
                            <span class="bar bar-3"></span>
                        </div>
                    </div>
                    <div class="menu-area clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                   
                                     <li <?php if ($pgenme=="home") { echo " class='current'"; } ?>><a href="index.php">HOME</a></li>
                                     <li <?php if ($pgenme=="about") { echo " class='current'"; } ?>><a href="about.php">ABOUT US</a></li> 
                                     <li  <?php if ($pgenme=="products") { echo " class='current dropdown'"; } else {echo " class='dropdown'"; } ?> ><a href="#">EXPORT</a>
                                        <ul>
                                            <li><a href="product_details.php?id=1">FRUITS & VEGETABLES</a></li>
                                            <li><a href="product_details.php?id=2">FOOD STUFF</a></li>
                                            <li><a href="product_details.php?id=3">NON FOOD STUFF</a></li>
                                            <li><a href="product_details.php?id=4">ROASTERY</a></li>
                                            <li><a href="product_details.php?id=5">SPICES</a></li>
                                            <li><a href="product_details.php?id=6">TEXTILE</a></li>
                                            <li><a href="product_details.php?id=7">FOOTWEAR</a></li>
                                            <li><a href="product_details.php?id=8">HOUSEHOLD</a></li>
                                            <li><a href="product_details.php?id=9">MACHINERY</a></li>
                                            <li><a href="product_details.php?id=10">BRANDING</a></li>
                                            <li><a href="product_details.php?id=11">CHEMICALS</a></li>
                                            <li><a href="product_details.php?id=12">FROZEN</a></li>
                                            <li><a href="product_details.php?id=13">FISH</a></li>
                                            <li><a href="product_details.php?id=13">WOOD</a></li>

                                        </ul>
                                    </li> 

                                    <li class="logo-box">
                                        <figure class="logo"><a href="index.php"><img src="assets/images/logo-2.png" alt=""></a></figure>
                                    </li> 
                                  
                                    <?php
                                    /*
                                    <li <?php if ($pgenme=="gallery") { echo " class='current'"; } ?>><a href="gallery.php">GALLERY</a></li> 
                                    */
                                    ?>
                                    <li  <?php if ($pgenme=="products") { echo " class='current dropdown'"; } else {echo " class='dropdown'"; } ?> ><a href="#">IMPORT</a>
                                        <ul>
                                            <li><a href="product_details.php?id=1">FRUITS & VEGETABLES</a></li>
                                            <li><a href="product_details.php?id=2">FOOD STUFF</a></li>
                                            <li><a href="product_details.php?id=3">NON FOOD STUFF</a></li>
                                            <li><a href="product_details.php?id=4">ROASTERY</a></li>
                                            <li><a href="product_details.php?id=5">SPICES</a></li>
                                            <li><a href="product_details.php?id=6">TEXTILE</a></li>
                                            <li><a href="product_details.php?id=7">FOOTWEAR</a></li>
                                            <li><a href="product_details.php?id=8">HOUSEHOLD</a></li>
                                            <li><a href="product_details.php?id=9">MACHINERY</a></li>
                                            <li><a href="product_details.php?id=10">BRANDING</a></li>
                                            <li><a href="product_details.php?id=11">CHEMICALS</a></li>
                                            <li><a href="product_details.php?id=12">FROZEN</a></li>
                                            <li><a href="product_details.php?id=13">FISH</a></li>

                                        </ul>
                                    </li>
                                    <li <?php if ($pgenme=="quality") { echo " class='current'"; } ?>><a href="quality.php">QUALITY POLICY</a></li>                                         
                                    <li <?php if ($pgenme=="contact") { echo " class='current'"; } ?>><a href="contact.php">CONTACT US</a></li>   
                                </ul>
                            </div>
                        </nav>

                   </div>       
                   

                    <div class="nav-box">
                        <div class="nav-btn nav-toggler navSidebar-button clearfix">
                            <span class="bar bar-1"></span>
                            <span class="bar bar-2"></span>
                            <span class="bar bar-3"></span>                            
                        </div>
                    </div>

           <?php
        }
        else {
          ?>
 
        <!-- main header -->
        <header class="main-header style-one">
            <!-- header-top -->
            <div class="header-top">
                <div class="top-inner clearfix">
                    <ul class="left-info pull-left">
                        <li>Al Farusia Imports and Exports - Contact Us</li>
                        <li><i class="fal fa-phone"></i><a href="tel:911234567890">+911234567890</a></li>
                    </ul>
                    <ul class="right-info pull-right">
                        <li><i class="far fa-map-marker-alt"></i>#123 12th Street, Cochin, Kerala</li>
                        <li><i class="far fa-envelope-open"></i><a href="mailto:info@alfarusiagroup.com">info@alfarusiagroup.com</a></li>
                    </ul>
                </div>
            </div>
           
         
            <!-- header-lower -->
            <div class="header-lower">
                <div class="outer-box">
                    <div class="logo-box">
                        <figure class="logo"><a href="index.php"><img src="assets/images/logo.png" alt=""></a></figure>
                    </div>
                    <div class="menu-area clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">

                                    <?php
                                    // <li class="current dropdown"><a href="index.php">DROP</a>
                                    //        <ul>
                                    //            <li><a href="about.php">About Us</a></li>
                                    //    </li>        

                                    ////$pgenme=="about" home contact products services gallery quality

                                    ?> 
                                     <li <?php if ($pgenme=="home") { echo " class='current'"; } ?>><a href="index.php">HOME</a></li>
                                     <li <?php if ($pgenme=="about") { echo " class='current'"; } ?>><a href="about.php">ABOUT US</a></li> 
                                     <li  <?php if ($pgenme=="products") { echo " class='current dropdown'"; } else {echo " class='dropdown'"; } ?> ><a href="#">PRODUCTS</a>
                                        <ul>
                                            <li><a href="product_details.php?id=1">SPICES</a></li>
                                            <li><a href="product_details.php?id=2">COCONUTS</a></li>
                                            <li><a href="product_details.php?id=3">FRUITS &amp; VEGETABLES</a></li>
                                            <li><a href="product_details.php?id=4">VEGETABLE OILS</a></li>
                                            <li><a href="product_details.php?id=5">SEAFOODS</a></li>
                                        </ul>
                                    </li> 
                                    <?php
                                    /*
                                    <li <?php if ($pgenme=="gallery") { echo " class='current'"; } ?>><a href="gallery.php">GALLERY</a></li> 
                                    */
                                    ?>

                                    <li <?php if ($pgenme=="quality") { echo " class='current'"; } ?>><a href="quality.php">QUALITY POLICY</a></li>                                       
                                    <li <?php if ($pgenme=="contact") { echo " class='current'"; } ?>><a href="contact.php">CONTACT US</a></li>   
                                </ul>
                            </div>
                        </nav>
                  <?php
                 }        
                  
                        /*
                        <div class="search-box-outer">
                            <div class="dropdown">
                                <button class="search-box-btn" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far fa-search"></i></button>
                                <div class="dropdown-menu search-panel" aria-labelledby="dropdownMenu3">
                                    <div class="form-container">
                                        <form method="post" action="">
                                            <div class="form-group">
                                                <input type="search" name="search-field" value="" placeholder="Search...." required="">
                                                <button type="submit" class="search-btn"><span class="fas fa-search"></span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        */
             if (($pgenme=="home") || ($topheadmenutype=="1")) {                    
                    echo "</div>";
                    echo "</div>";
                   }           
              else {                           
                  ?>
                    </div>
                    <div class="btn-box">
                        <a href="contact.php" class="theme-btn">ENQUIRY<i class="far fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <?php } ?>    

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="outer-box">
                    <div class="logo-box">
                        <figure class="logo"><a href="index.php"><img src="assets/images/logo.png" alt=""></a></figure>
                    </div>
                    <div class="menu-area">
                        <nav class="main-menu clearfix">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </nav>
                        <?php
                        /*
                        <div class="search-box-outer">
                            <div class="dropdown">
                                <button class="search-box-btn" type="button" id="dropdownMenu4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far fa-search"></i></button>
                                <div class="dropdown-menu search-panel" aria-labelledby="dropdownMenu4">
                                    <div class="form-container">
                                        <form method="post" action="">
                                            <div class="form-group">
                                                <input type="search" name="search-field" value="" placeholder="Search...." required="">
                                                <button type="submit" class="search-btn"><span class="fas fa-search"></span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        */
                        ?>
                    </div>
                    <div class="btn-box">
                        <a href="contact.php" class="theme-btn">ENQUIRY<i class="far fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.php"><img src="assets/images/logo-2.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>#123 12th Street, Cochin, Kerala, India</li>
                        <li><a href="tel:+91123456789">+91123456789</a></li>
                        <li><a href="mailto:info@alfarusiagroup.com">info@alfarusiagroup.com</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->


      



   <?php
   if ($pgenme!="home") {      
    ?>
          <!-- Page Title -->
          <section class="page-title centred" style="background-image: url(assets/images/background/<?=$insidebannerfilename?>);">
            <div class="auto-container">
                <div class="content-box">
                    <div class="title">
                        <h1><?=$pgheading?></h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li><?=$pgheading?></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->

   <?php
   }
   ?>
        
                        
 