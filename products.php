<?php
ob_start();
session_start();
$prtsavcont="";$tempcont ="";

$pgenme="about"; 
$pgenmestr="About us - Al Farusia Imports and Exports "; 

include("header.php");
?>



        <!-- chooseus-section -->
        <section class="chooseus-section style-two">
            <div class="auto-container">
                <div class="row align-items-center clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/resource/choose-2.jpg" alt=""></figure>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_5">
                            <div class="content-box">
                                <div class="sec-title">
                                    <span class="top-text">What we do</span>
                                    <h2>Farm Fresh<span>Naturally cultivated</span></h2>
                                </div>
                                <div class="text">                                    
                                    <P>Al Farusia Imports and Exports is under the flagship of Al Farusia Group, processing and exporting a wide variety of food products. The company's policy is strongly built on its overall quality intention and direction to process and deliver products in time, which conform to national, international and buyer's specifications.  We have a well equipped laboratory with insightful technicians for quality assurance.  Al Farusia Imports and Exports has established a strong market base in Middle East. To meet the emerging challenges in the food industry and to ensure the quality of foods. </P>
                                </div>
                                <ul class="list-item clearfix">
                                    <li>All our products are Farm Fresh & Naturally cultivated with atmost care</li>
                                    <li>On Time to Improve your immunity Power with!</li>
                                    <li>Specialized in the field of Import &amp; Export of various goods across the Globe</li>
                                    <li>Agro Products, Traditional Products and Quality Services</li>
                                </ul>
                                <?php
                                /*
                                <div class="btn-box"><a href="#" class="theme-btn style-one">Learn More<i class="far fa-angle-double-right"></i></a></div>
                                */
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- chooseus-section end -->


        <!-- service-section -->
        <section class="service-section service-page bg-color-1">
            <div class="auto-container">
                <div class="sec-title centred">
                    <span class="top-text">Our Products</span>
                    <h2>Import &amp; Export of <br /><span>various goods across the Globe</span></h2>
                </div>
                <div class="inner-content">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                            <div class="service-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <figure class="image-box"><a href="product_details.php?id=1"><img src="assets/images/service/service-1.jpg" alt=""></a></figure>
                                    <div class="lower-content">
                                        <div class="inner">
                                            <div class="light-icon"><i class="flaticon-maintenance-2"></i></div>
                                            <div class="icon-box"><i class="flaticon-maintenance-2"></i></div>
                                            <h3><a href="product_details.php?id=1">SPICES</a></h3>
                                            <div class="text">
                                            <p>High Standard Quality, Farm Fresh</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                            <div class="service-block-one wow fadeInUp animated animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <figure class="image-box"><a href="product_details.php?id=2"><img src="assets/images/service/service-2.jpg" alt=""></a></figure>
                                    <div class="lower-content">
                                        <div class="inner">
                                            <div class="light-icon"><i class="flaticon-maintenance-2"></i></div>
                                            <div class="icon-box"><i class="flaticon-maintenance-2"></i></div>
                                            <h3><a href="product_details.php?id=2">COCONUTS</a></h3>
                                            <div class="text">
                                            <p>High Standard Quality, Farm Fresh</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                            <div class="service-block-one wow fadeInUp animated animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <figure class="image-box"><a href="product_details.php?id=3"><img src="assets/images/service/service-3.jpg" alt=""></a></figure>
                                    <div class="lower-content">
                                        <div class="inner">
                                            <div class="light-icon"><i class="flaticon-maintenance-2"></i></div>
                                            <div class="icon-box"><i class="flaticon-maintenance-2"></i></div>
                                            <h3><a href="product_details.php?id=3">FRUITS &amp; VEGETABLES</a></h3>
                                            <div class="text">
                                                <p>High Standard Quality, Farm Fresh</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                            <div class="service-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <figure class="image-box"><a href="product_details.php?id=4"><img src="assets/images/service/service-1.jpg" alt=""></a></figure>
                                    <div class="lower-content">
                                        <div class="inner">
                                            <div class="light-icon"><i class="flaticon-maintenance-2"></i></div>
                                            <div class="icon-box"><i class="flaticon-maintenance-2"></i></div>
                                            <h3><a href="product_details.php?id=4">VEGETABLE OILS</a></h3>
                                            <div class="text">
                                            <p>High Standard Quality, Farm Fresh</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                            <div class="service-block-one wow fadeInUp animated animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <figure class="image-box"><a href="product_details.php?id=5"><img src="assets/images/service/service-2.jpg" alt=""></a></figure>
                                    <div class="lower-content">
                                        <div class="inner">
                                            <div class="light-icon"><i class="flaticon-maintenance-2"></i></div>
                                            <div class="icon-box"><i class="flaticon-maintenance-2"></i></div>
                                            <h3><a href="product_details.php?id=5">SEAFOODS</a></h3>
                                            <div class="text">
                                            <p>High Standard Quality, Farm Fresh</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                    </div>
                </div>
            </div>
        </section>
        <!-- service-section end -->


        <?php
        /*

        <!-- cta-section -->
        <section class="cta-section bg-color-1">
            <div class="auto-container">
                <div class="inner-container bg-color-2 clearfix">
                    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-1.png);"></div>
                    <div class="text pull-left">
                        <p>Contact With  us</p>
                        <h2>Need Any Help For Auto <br /><span>Repair Services</span></h2>
                    </div>
                    <div class="btn-box pull-right">
                        <a href="contact.php" class="theme-btn">Contact Us<i class="far fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- cta-section end -->


        <!-- video-section -->
        <section class="video-section">
            <div class="auto-container">
                <div class="video-inner" style="background-image: url(assets/images/background/video-1.jpg);">
                    <div class="video-btn">
                        <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image" data-caption=""><i class="fas fa-play"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- video-section end -->


        <!-- news-section -->
        <section class="news-section before-none bg-color-1">
            <div class="auto-container">
                <div class="sec-title centred">
                    <span class="top-text">News Blog & articles</span>
                    <h2>Get Our Company News <br><span>Articles & Tipes</span></h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><a href="#"><img src="assets/images/news/news-1.jpg" alt=""></a></figure>
                                <div class="lower-content">
                                    <div class="post-date"><h3>05<br /><span>Nov</span></h3></div>
                                    <span class="category">car wash</span>
                                    <h3><a href="#">Sma Podca Episo With Trne Falbe And Martin Chael Freid Riksen Ethical System</a></h3>
                                    <ul class="post-info clearfix">
                                         <li><i class="far fa-user"></i><a href="#">David Warner</a></li>
                                         <li><i class="far fa-comments"></i><a href="#">Comments 05</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><a href="#"><img src="assets/images/news/news-2.jpg" alt=""></a></figure>
                                <div class="lower-content">
                                    <div class="post-date"><h3>04<br /><span>Nov</span></h3></div>
                                    <span class="category">car wash</span>
                                    <h3><a href="#">How To Make Cross-Browser Testing More Efficient With Lambda Brand Mascot</a></h3>
                                    <ul class="post-info clearfix">
                                         <li><i class="far fa-user"></i><a href="#">David Warner</a></li>
                                         <li><i class="far fa-comments"></i><a href="#">Comments 07</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><a href="#"><img src="assets/images/news/news-3.jpg" alt=""></a></figure>
                                <div class="lower-content">
                                    <div class="post-date"><h3>03<br /><span>Nov</span></h3></div>
                                    <span class="category">car wash</span>
                                    <h3><a href="#">Designin Ethically Optimizing Videos, And Shining The Spot light On Our Smashing</a></h3>
                                    <ul class="post-info clearfix">
                                         <li><i class="far fa-user"></i><a href="#">David Warner</a></li>
                                         <li><i class="far fa-comments"></i><a href="#">Comments 04</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- news-section end -->

        */
        ?>

        <?php 
        include("footer.php");
        ?> 