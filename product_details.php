<?php
ob_start();
session_start();
$prtsavcont = "";
$tempcont = "";

$pgenme = "products";
$pgenmestr = "Our Products - Al Farusia Imports and Exports ";


$idv = @trim(stripslashes($_GET['id']));
if (isset($idv) == false) {
    $idv = "1";
}


include("header.php");
?>


<!-- service-details -->
<section class="service-details">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                <div class="service-details-content">
                    <figure class="image-box"><img src="assets/images/service/service-details-1.jpg" alt=""></figure>
                    <div class="inner">

                        <?php
                        switch ($idv) {
                            case "1":
                                echo "<h2>FRUITS &amp; VEGETABLES</h2>";
                                break;

                            case "2":
                                echo "<h2>COCONUTS</h2>";
                                break;
                            case "3":
                                echo "<h2>SPICES</h2>";
                                break;
                            case "4":
                                echo "<h2>VEGETABLE OILS</h2>";
                                break;
                            case "5":
                                echo "<h2>SPICES</h2>";
                                break;
                            default:
                                echo "<h2>SEAFOODS</h2>";
                                break;
                        }
                        ?>
                        <p>We are committed to supply quality food products catering to the needs of our valued customers backed by a sophisticated infrastructural background. Our products include Food Products under the guidance of our knowledgeable mentors. We are a reliable supplier of superior quality food products supplying the global needs.</p>

                        <ul class="list-item clearfix">
                            <li>Quality is the first priority for our Agriculture Products. We have a clear focus on sustainability, through empowering the traditional sector.</li>
                            <li>Quality is our watch word and believes in providing Quality products of international standard to the consumer at an affordable cost.</li>
                            <li>We are committed to providing customers with range of safe and hygienic products. It will be our endeavour to understand customers’ expectations.</li>
                        </ul>
                        <div class="list">
                            <h2>PRODUCT LISTS</h2>

                            <ul class="">
                                <li><i class="fab fa-react" style="color: red;"></i> <strong>COCONUT</strong></li>
                                <li><i class="fab fa-react" style="color: red;"></i><strong>SURAN</strong></li>
                                <li><i class="fab fa-react" style="color: red;"></i><strong>CHILLY</strong></li>
                                <li><i class="fab fa-react" style="color: red;"></i><strong>ANAR</strong></li>
                                <li><i class="fab fa-react" style="color: red;"></i><strong>LEMON</strong></li>
                                <li><i class="fab fa-react" style="color: red;"></i><strong>TOMATO</strong></li>
                                <li><i class="fab fa-react" style="color: red;"></i><strong>ONION</strong></li>
                                <li><i class="fab fa-react" style="color: red;"></i><strong>BANANA</strong></li>
                                <li><i class="fab fa-react" style="color: red;"></i><strong>YELLOW BANANA</strong></li>
                                <li><i class="fab fa-react" style="color: red;"></i><strong>GREEN BANANA</strong></li>
                                <li><i class="fab fa-react" style="color: red;"></i><strong>BANANA LEAVES</strong></li>
                                <li><i class="fab fa-react" style="color: red;"></i><strong>RK BANANA</strong></li>
                                <li><i class="fab fa-react" style="color: red;"></i><strong>TINDLY GUAVA</strong></li>
                                <li><i class="fab fa-react" style="color: red;"></i><strong>SMALL ONION</strong></li>
                                <li><i class="fab fa-react" style="color: red;"></i><strong>PAPPAYA</strong></li>

                            </ul>
                        </div>
                    </div>
                    <div class="two-column">
                        <div class="row clearfix align-items-center">
                        <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                                <div class="text">
                                    <h3>Standard Quality</h3>
                                    <p>Our Association &amp; Memberships :</p>
                                    <ul class="list-item clearfix">
                                        <li>Food Safety and Standard Authority of India (FSSAI)</li>
                                        <li>Spices Board of India</li>
                                        <li>Coconut Development Board of India (CDB)</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                <figure class="image-box"><img src="assets/images/service/service-details-2.jpg" alt=""></figure>
                            </div>
                       
                        </div>
                    </div>

                    <?php
                    /*
                            <div class="accordion-inner">
                                <ul class="accordion-box">
                                    <li class="accordion block">
                                        <div class="acc-btn">
                                            <div class="icon-outer"><i class="far fa-plus"></i></div>
                                            <h6>How To Create A Mobile App In Expo And Firebase</h6>
                                        </div>
                                        <div class="acc-content">
                                            <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some</p>
                                        </div>
                                    </li>
                                    <li class="accordion block active-block">
                                        <div class="acc-btn active">
                                            <div class="icon-outer"><i class="far fa-plus"></i></div>
                                            <h6>Smashing Podcast Episode With Ben How Optimize ?</h6>
                                        </div>
                                        <div class="acc-content current">
                                            <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some</p>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                         <div class="acc-btn">
                                            <div class="icon-outer"><i class="far fa-plus"></i></div>
                                            <h6>Learning Resources Challenging Online Workshops ?</h6>
                                        </div>
                                        <div class="acc-content">
                                            <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some</p>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                         <div class="acc-btn">
                                            <div class="icon-outer"><i class="far fa-plus"></i></div>
                                            <h6>Micro-Typography: How To Space And Kern ?</h6>
                                        </div>
                                        <div class="acc-content">
                                            <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            */
                    ?>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                <div class="service-sidebar default-sidebar">
                    <div class="sidebar-widget category-widget">
                        <ul class="category-list clearfix">
                            <li><a href="product_details.php?id=1" <?php if ($idv == "1") {
                                                                        echo ' class="current" ';
                                                                    } ?>>FRUITS & VEGETABLES</a></li>
                            <li><a href="product_details.php?id=2" <?php if ($idv == "2") {
                                                                        echo ' class="current" ';
                                                                    } ?>>FOOD STUFF</a></li>
                            <li><a href="product_details.php?id=3" <?php if ($idv == "3") {
                                                                        echo ' class="current" ';
                                                                    } ?>>NON FOOD STUFF</a></li>
                            <li><a href="product_details.php?id=4" <?php if ($idv == "4") {
                                                                        echo ' class="current" ';
                                                                    } ?>>ROASTERY</a></li>
                            <li><a href="product_details.php?id=5" <?php if ($idv == "5") {
                                                                        echo ' class="current" ';
                                                                    } ?>>SPICES</a></li>
                            <li><a href="product_details.php?id=6" <?php if ($idv == "5") {
                                                                        echo ' class="current" ';
                                                                    } ?>>TEXTILE</a></li>
                            <li><a href="product_details.php?id=7" <?php if ($idv == "5") {
                                                                        echo ' class="current" ';
                                                                    } ?>>FOOTWEAR</a></li>
                            <li><a href="product_details.php?id=8" <?php if ($idv == "5") {
                                                                        echo ' class="current" ';
                                                                    } ?>>HOUSEHOLD</a></li>
                            <li><a href="product_details.php?id=9" <?php if ($idv == "5") {
                                                                        echo ' class="current" ';
                                                                    } ?>>MACHINERY</a></li>
                            <li><a href="product_details.php?id=10" <?php if ($idv == "5") {
                                                                        echo ' class="current" ';
                                                                    } ?>>BRANDING</a></li>
                            <li><a href="product_details.php?id=11" <?php if ($idv == "5") {
                                                                        echo ' class="current" ';
                                                                    } ?>>CHEMICALS</a></li>


                        </ul>
                    </div>
                    <?php
                    /*
                            <div class="contact-widget">
                                <div class="widget-title">
                                    <h3>Send Message</h3>
                                </div>
                                <div class="form-inner">
                                    <form action="" method="post" class="message-form">
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Your Email" required="">
                                        </div>
                                        <div class="form-group">
                                            <textarea name="message" placeholder="Message"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="theme-btn">send message<i class="far fa-angle-double-right"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="other-box centred">
                                <div class="inner" style="background-image: url(assets/images/resource/column-1.jpg);">
                                    <h2>Need Any <span>Glass Services</span></h2>
                                    <div class="btn-box"><a href="contact.php" class="theme-btn">conatct us<i class="far fa-angle-double-right"></i></a></div>
                                </div>
                            </div>
                            */
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- service-details end -->

<?php
include("footer.php");
?>