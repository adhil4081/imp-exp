<?php
ob_start();
session_start();
$prtsavcont="";$tempcont ="";

$pgenme="about"; 
$pgenmestr="About us - Al Farusia Imports and Exports "; 

include("header.php");
?>



        <!-- about-style-two -->
        <section class="about-style-two">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image_block_2">
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/resource/about-3.jpg" alt=""></figure>
                                <div class="image-content">
                                    <div class="icon-box"><i class="flaticon-maintenance-2"></i></div>
                                    <h4><span>Cultivated </span>Fresh &amp; Naturally</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_2">
                            <div class="content-box">
                                <div class="sec-title">
                                    <span class="top-text">About Al Farusia Imports and Exports</span>
                                    <h2>Import &amp; Export of various goods <span>across the Globe</span></h2>
                                </div>
                                <div class="text-justify">
                                    <?php 
                                    /*
                                    <div class="icon-box"><i class="flaticon-vehicle"></i></div>
                                    */
                                    ?>
                                    <h4>High standard Quality products</h4>                                    
                                    <p>We provide high standard Quality products through ethical practices and trustworthy services. We have the hands-on experience on dealing with exports and imports on our products. We are exporting following products Fruits, Vegetables, Spices, Coconuts and Oil products.</p>
                                </div>
                                <div class="text-justify">
                                    <?php     
                                    /*
                                    <div class="icon-box"><i class="flaticon-lifter"></i></div>
                                    */
                                    ?>
                                    <h4>Supply quality food products</h4>                                    
                                    <p>We are committed to supply quality food products catering to the needs of our valued customers backed by a sophisticated infrastructural background. Our products include Food Products under the guidance of our knowledgeable mentors.</p>
                                </div>
                                <?php
                                /*
                                <div class="btn-box"><a href="about.php" class="theme-btn style-one">Learn More<i class="far fa-angle-double-right"></i></a></div>
                                */
                                ?>
                                <div class="text-justify">
                                    <?php 
                                    /*<div class="icon-box"><i class="flaticon-lifter"></i></div> */
                                    ?>
                                    <h4>Vision </h4>                                    
                                    <p>We endeavour to build relationships that bond people and cultures across the world through the common language of foods, which we call the food connect with the power of food connect and driven by passion for purity. Our unrelenting focus on quality, Innovation and superior taste reflects in our wide range of products, enabling us to build sustained consumer loyalty, making good and best of our Products.</p>
                                </div>

                                <div class="text-justify">
                                    <h4>Quality</h4>
                                    <p>
                                        Quality is the first priority for our Agriculture Products.  Quality is our watch word and believes in providing Quality products of international standard to the consumer at an affordable cost.
                                    </p>
                                    <p>
                                        We are committed to providing customers with range of safe and hygienic products. It will be our endeavour to understand customers’ expectations. This will be achieved through continual improvement of Quality Management System and Process improvement.
                                    </p>
                                </div>    



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-style-two end -->


        <!-- feature-style-two -->
        <section class="feature-style-two centred bg-color-1">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-3.png);"></div>
            <div class="auto-container">
                <div class="sec-title centred">
                    <span class="top-text">Our Products</span>
                    <h2>Farm fresh <br /><span>Naturally cultivated</span></h2>
                </div>
                <div class="inner-content">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                            <div class="feature-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-maintenance-2"></i></div>
                                    <h3>Fruits</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                            <div class="feature-block-one wow fadeInUp animated animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-maintenance-2"></i></div>
                                    <h3>Vegetables</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                            <div class="feature-block-one wow fadeInUp animated animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-maintenance-2"></i></div>
                                    <h3>Spices</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                            <div class="feature-block-one wow fadeInUp animated animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-maintenance-2"></i></div>
                                    <h3>Coconuts</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- feature-style-two end -->


        <?php
        /*
        <!-- team-section -->
        <section class="team-section about-page centred">
            <div class="auto-container">
                <div class="sec-title centred">
                    <span class="top-text">Exclusive engineers</span>
                    <h2>We Have A Experience Team <br><span>Member In Fuzze</span></h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><a href="index-3.html"><img src="assets/images/team/team-1.jpg" alt=""></a></figure>
                                <div class="lower-content">
                                    <ul class="social-links clearfix">
                                        <li><a href="index-3.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="index-3.html"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="index-3.html"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                    <h4><a href="index-3.html">David ML.Warner</a></h4>
                                    <span class="designation">Web Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><a href="index-3.html"><img src="assets/images/team/team-2.jpg" alt=""></a></figure>
                                <div class="lower-content">
                                    <ul class="social-links clearfix">
                                        <li><a href="index-3.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="index-3.html"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="index-3.html"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                    <h4><a href="index-3.html">Somalia D Silva</a></h4>
                                    <span class="designation">Web Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><a href="index-3.html"><img src="assets/images/team/team-3.jpg" alt=""></a></figure>
                                <div class="lower-content">
                                    <ul class="social-links clearfix">
                                        <li><a href="index-3.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="index-3.html"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="index-3.html"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                    <h4><a href="index-3.html">Michel S Jhonson</a></h4>
                                    <span class="designation">Web Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><a href="index-3.html"><img src="assets/images/team/team-4.jpg" alt=""></a></figure>
                                <div class="lower-content">
                                    <ul class="social-links clearfix">
                                        <li><a href="index-3.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="index-3.html"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="index-3.html"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                    <h4><a href="index-3.html">Mathe Wade Villaz</a></h4>
                                    <span class="designation">Web Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- team-section end -->
        */
        ?>

        <!-- chooseus-section -->
        <section class="chooseus-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_5">
                            <div class="content-box">
                                <div class="sec-title">
                                    <span class="top-text">why choose us</span>                                    
                                    <h2>We are a reliable supplier of superior quality food products <span>supplying the global needs</span></h2>
                                </div>
                                <div class="text">                                    
                                    <p>Al Farusia Imports and Exports is under the flagship of Al Farusia Group, processing and exporting a wide variety of food products. The company's policy is strongly built on its overall quality intention and direction to process and deliver products in time, which conform to national, international and buyer's specifications.  We have a well equipped laboratory with insightful technicians for quality assurance.  Al Farusia Imports and Exports has established a strong market base in Middle East. To meet the emerging challenges in the food industry and to ensure the quality of foods. </p>
                                </div>
                                <div class="texts"> 
                                    <p>Our Association &amp; Memberships :</p>
                                    <ul class="list-item clearfix">                                    
                                        <li>Food Safety and Standard Authority of India (FSSAI)</li>
                                        <li>Spices Board of India</li>
                                        <li>Coconut Development Board of India (CDB)</li>
                                    </ul>
                                </div>   
                                <?php
                                /*
                                <div class="btn-box"><a href="about.php" class="theme-btn style-one">Learn More<i class="far fa-angle-double-right"></i></a></div>
                                */
                                ?>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image-box">
                            <div class="image-bg"></div>
                            <figure class="image"><img src="assets/images/resource/choose-1.jpg" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- chooseus-section end -->

        <?php
        /*
        <!-- news-section -->
        <section class="news-section about-page bg-color-1">
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
        
              