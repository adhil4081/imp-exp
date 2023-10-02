<?php
ob_start();
session_start();
$prtsavcont="";$tempcont ="";

$pgenme="quality"; 
$pgenmestr="Quality Policy - Al Farusia Imports and Exports "; 

include("header.php");
?>


        <!-- about-section -->
        <section class="about-section pb-215">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_2">
                            <div class="content-box">
                                <div class="sec-title">
                                    <span class="top-text">Quality Policy</span>
                                    <h2>Know About our <span>Quality Standard</span></h2>                                    
                                    <p>Quality is the first priority for our Agriculture Products.  Quality is our watch word and believes in providing Quality products of international standard to the consumer at an affordable cost.</p>
                                    <p>We are committed to providing customers with range of safe and hygienic products. It will be our endeavour to understand customers’ expectations. This will be achieved through continual improvement of Quality Management System and Process improvement.</p>
                                </div>
                                <div class="text-justify">                                    
                                    <h4>Quality Policy</h4>                                    
                                    <p>Our policy is strongly built on its overall quality intention and direction to process and deliver products which conforms to National, International and Buyers specifications.  To translate our policy into its effective implementation, the company regularly conducts in-house training programs to impart the desired awareness and skill to its employees at all levels in producing quality products safe for human consumption. We have a clear focus on sustainability, through empowering the traditional sector. We are always dedicated to customer satisfaction by "Good quality, Environment friendly, Responsibility to community".</p>
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
                        <div class="image_block_1">
                            <div class="image-box">
                                <figure class="image image-1"><img src="assets/images/resource/about-1.jpg" alt=""></figure>
                                <figure class="image image-2"><img src="assets/images/resource/about-2.jpg" alt=""></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-section end -->


        <?php 
        include("footer.php");
        ?> 