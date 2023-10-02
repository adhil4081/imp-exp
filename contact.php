 
<?php
ob_start();
session_start();
$prtsavcont="";$tempcont ="";

$pgenme="contact"; 
$pgenmestr="Contact us - Al Farusia Imports and Exports "; 

$errors ="";
$fullname=""; 
$email=""; $phone="";$subject="";
$message="";$cpta="";
$resStr="";
$alreadysubmitd=true; 
$issubmitd=false;


include("header.php");

 
 
 if ((isset($_SESSION['contsubmtd'])==false) ||  (empty($_SESSION['contsubmtd']))) { $alreadysubmitd=false;}
 
 if (($_POST) && ($alreadysubmitd==false)) { 
	if (isset($_POST['fullname'])==true) { $fullname =  replQts($_POST['fullname']); }     
     if (isset($_POST['email'])==true) { $email =  replQts($_POST['email']); }
     if (isset($_POST['phone'])==true) { $phone =  replQts($_POST['phone']); }
     if (isset($_POST['subject'])==true) { $subject =  replQts($_POST['subject']); }
     if (isset($_POST['message'])==true) { $message =  replQts($_POST['message']); }
     if (isset($_POST['cpta'])==true) { $cpta =  replQts($_POST['cpta']); }
 

 if ($_POST) $post=1; 

 $errors ="";
 if (!$fullname) $errors = 'Please enter your name.<br>';
 if (!$email) $errors = $errors.'Please enter your email.<br>'; 
 if (!$message) $errors =$errors.'Please enter your message.<br>'; 
 if ($cpta){
            if(strcasecmp($_SESSION['captcha'], $cpta) != 0){
                $errors =$errors. "Entered captcha code does not match.";
            }
        }
     else {
         $errors =$errors.'Please enter the captcha code.<br>'; 
  }
  
  if ($errors=="") { 
       
 
 
		$to = 'info@alfarusiagroup.com';	 
		$from = $fullname . ' <' . $to . '>';
		$subject = 'Message from ' . $fullname;	
		$message = 'Name: ' . $fullname . '<br/><br/>
				   Email: ' . $email . '<br/><br/>	
                   Phone: ' . $phone . '<br/><br/>		
                   Subject: ' . $subject . '<br/><br/>		
				   Message: ' . nl2br($message) . '<br/>';
		$result = sendmail($to, $subject, $message, $from);
		if ($_POST) {
			if ($result) { $resStr='Thank you! We have received your message.'; $issubmitd=true;}
			else {$resStr='Sorry, unexpected error. Please try again later'; }		
		  //else if GET was used, return the boolean value so that 	
		  //1 means success, 0 means failed
	       } 
	   //else {
	   //	echo $result;				
		//}
		//if the errors array has values
		 $_SESSION['contsubmtd']='yes';
		}
		//	else {	
		//	//for ($i=0; $i<count($errors); $i++) echo $errors[$i] . '<br/>';
		//	//echo '<a href="contact.php">Back</a>';
		//	//exit;
		//}
 }
 




 
function sendmail($to, $subject, $message, $from) {
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
	$headers .= 'From: ' . $from . "\r\n";
	
	$result = mail($to,$subject,$message,$headers);
	
	if ($result) return 1;
	else return 0;
}

    
function replQts($strPas) {
	     $strSrc  = array('\'', '"');
         $strRep  = array('&apos;','&quot;');
         return str_replace($strSrc, $strRep, $strPas);
    }
?>
        <!-- contact-info-section -->
        <section class="contact-info-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content-box">
                            <div class="sec-title">
                                <span class="top-text">conatct us</span>
                                <h2>Feel free to <span>contact us</span></h2>
                            </div>
                            <div class="text">                                
                                <p>We are still exploring ways to further expand our services in India and abroad. With an experienced team, the volume of contacts and connections we concoct, we believe we can provide a best value added service in this field in a quickest possible time.</p>
                            </div>
                            <div class="social-box">
                                <h3>Follow Us</h3>
                                <ul class="social-links clearfix">
                                    <li><a href="contact.php"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="contact.php"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="contact.php"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="contact.php"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 inner-column">
                        <div class="inner-box centred clearfix">
                            <div class="single-item">
                                <div class="icon-box"><i class="fal fa-map-marker-alt"></i></div>
                                <h3>Main Address</h3>
                                <p>#123 12th Street, Cochin, <br />Kerala, India</p>
                            </div>
                            <div class="single-item">
                                <div class="icon-box"><i class="fal fa-envelope-open-text"></i></div>
                                <h3>Email Address</h3>
                                <p><a href="mailto:info@alfarusiagroup.com">info@alfarusiagroup.com</a></p>
                            </div>                            
                            <div class="single-item">
                                <div class="icon-box"><i class="fal fa-phone"></i></div>
                                <h3>Phone</h3>
                                <p><a href="tel:91123456789">+91123456789</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-info-section end -->


        <section class="google-map-section">
            <div class="map-inner">
                
            </div>
        </section> 

<?php
/*
        <!-- google-map-section -->
        <section class="google-map-section">
            <div class="map-inner">
                <div 
                    class="google-map" 
                    id="contact-google-map" 
                    data-map-lat="40.712776" 
                    data-map-lng="-74.005974" 
                    data-icon-path="assets/images/icons/map-marker.png"  
                    data-map-title="Brooklyn, New York, United Kingdom" 
                    data-map-zoom="12" 
                    data-markers='{
                        "marker-1": [40.712776, -74.005974, "<h4>Branch Office</h4><p>77/99 New York</p>","assets/images/icons/map-marker.png"]
                    }'>

                </div>
            </div>
        </section>
        <!-- google-map-section end -->

*/
?>
        <!-- contact-section -->
        <section class="contact-style-two">
            <div class="auto-container">
                <div class="inner-content">

                <?php 
                        //if ($issubmitd==true) {
                        if ($resStr!="") {			
                        ?>	 
                            <div class="done">
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    Your message has been sent. Thank you!
                                    <?php 
                                    echo $resStr;
                                    ?>
                                    
                                </div>
                            </div>
                        <?php } 
                        else 
                        {
                        ?>   
                    <div class="title-box">
                        <h3>Leave A Message</h3>
                        <?php
                                if ($errors!="") { 
                                echo '<p align=center><b><font color=#bb0000>';
                                echo $errors;
                                echo '</font></b></p>';
                                } 
                                ?>
                    </div>
                    <form method="post" action="" id="contact-form" class="default-form"> 
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <i class="far fa-user"></i>                                
                                <input type="text" id="fullname" name="fullname" placeholder="Your Name" value="<?=$fullname?>" required="" />
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <i class="far fa-envelope"></i>                                
                                <input type="email" id="email" name="email" placeholder="Email Address" value="<?=$email?>" required="" />
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                <i class="far fa-phone"></i>
                                <input type="text" id="phone" name="phone" required="" placeholder="Phone Number"  value="<?=$phone?>"   />
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                <i class="fal fa-file-alt"></i>                                
                                <input type="text" id="subject" name="subject" required="" placeholder="Subject"  value="<?=$subject?>"  />
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <i class="fal fa-pencil"></i>                                
                                <textarea id="message" name="message" placeholder="Leave A Comment"><?=$message?></textarea>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <label>
                                        Enter Captcha 
                                        <img src="captcha.php?rand=<?php echo rand(); ?>" id="cpta_imge" height="30" width="120" />
                                        (<a href='javascript: rfrsCapta();'><b>Refresh</b></a>) 
                                        </label>
                                        <input type="text" class="col-md-12 col-sm-12 col-xs-12" name="cpta" placeholder=""  value="" maxlength="6" />
                                                        <i class="fa fa-refresh form-control-feedback"></i>
                                    </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 message-btn centred">                                
                                <button class="theme-btn" type="submit" name="submit-form">Submit Now<i class="far fa-angle-double-right"></i></button>
                            </div>
                        </div>
                    </form>
                    <?php
                     } 
                    ?>

                </div>
            </div>
        </section>
        <!-- contact-section end -->

        <?php 
        include("footer.php");
        ?> 
<script langugage="javascript">
    function rfrsCapta(){
       var imgCpt = document.images['cpta_imge'];
       imgCpt.src = imgCpt.src.substring(0,imgCpt.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
    }
</script>