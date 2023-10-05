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
                                $products = [
                                    "COCONUT", "SURAN", "CHILLY", "ANAR",
                                    "LEMON", "TOMATO", "ONION", "BANANA",
                                    "YELLOW BANANA", "GREEN BANANA",
                                    "BANANA LEAVES", "RK BANANA", "TINDLY GUAVA",
                                    "SMALL ONION", "PAPPAYA", "CURRY LEAF",
                                ];
                                break;

                            case "2":
                                echo "<h2>FOOD STUFF</h2>";
                                $products = [
                                    "1121 Basmathi Rice", "1121 Creamy Sella", "1121 Golden Sella Rice",
                                    "City Gold Biriyani Rice", "Aywa Food Jeerakasala", "777 Rice Thai(U.S. Style)",
                                    "Nallari Matta Rice", "Lucky Gold Rice", "R.K Jeerakashala Rice",
                                    "Golden Sella Premium rice", "Mahamood Basmathi Rice", "American Garden Plain Bread Crumbs", "Jeenan Maida",
                                    "Aseel Ghee", "Sugar Al Khaleej", "French Fries Cheddar Cheese Sauce", "Aywa Food Natural Coconut oil", "Amir Oil", "Amul Pure Ghee",
                                    "Emirates Macroni Corni", "Mayonise", "Tomato Ketchup", "BBQ Sauce",
                                    "White Vinegar", "Olive Oil", "Kaja Tea Bag",
                                    "Chocolate Syrup", "Strawberry Syrup", "Pancake Original Syrup",
                                    "Rosewater", "Honey", "Light Soya Sauce", "Lemon Pickle", "Mango Pickle",
                                    "Mango Chutney", "Tahina Mix", "Mixed Pickle"
                                ];
                                break;
                            case "3":
                                echo "<h2>NON FOOD STUFF</h2>";
                                break;
                            case "4":
                                echo "<h2>ROASTERY</h2>";
                                $products = [
                                    "Ruby Gold-Pazham Varavu", "Ruby Gold-Banana Chips", "Ruby Gold-Potato Masala",
                                    "Ruby Gold-Banana 4 Cut Chips", "Ruby Gold-Sarkara Varatty", "Ruby Gold-Pic Murukku Chilly",
                                    "Ruby Gold-Tapioca Round Plain", "Ruby Gold-Peanut Roast", "Ruby Gold-Tapioca Round Chilly",
                                    "Ruby Gold-Tapioca Slice Chilly", "Ruby Gold-Tapioca Slice plain", "Ruby Gold-Tapioca Stick Plain",
                                    "Ruby Gold-Tapioca Stick Chilly", "Ruby Gold-Pakkavada", "Ruby Gold-Mixture Chilly",
                                    "Ruby Gold-Peanut Masala", "Ruby Gold-Mixture Bombay", "Ruby Gold-Cornflakes Mixture",
                                    "Ruby Gold-Sweet Mixture", "Ruby Gold-Kara Sev", "Ruby Gold-Uzhunnada",
                                    "Ruby Gold-Pazham Varavu", "Ruby Gold-Banana Chips", "Ruby Gold-Potato Masala",
                                    "Ruby Gold-Tomato Murukku", "Ruby Gold-Ari Murukku", "Ruby Gold-Chakka Varavu",
                                    "Ruby Gold-Pic Murukku White", "Ruby Gold-Potato Lays Round"





                                ];
                                break;
                            case "5":
                                echo "<h2>SPICES</h2>";
                                $products = [
                                    "Chilly Powder", "Kashmiri Chilly Powder", "Coriander Powder",
                                    "Turmeric Powder", "Black Pepper Powder", "White Pepper Powder",
                                    "Cumin Powder", "Ginger Powder", "Eastern Fish Masala", "Eastern Meat Masala",
                                    "Eastern Sambar Masala", "Garlic Powder India", "Garam Masala", "Dry Ginger Whole China",
                                    "Dry Lemon Yellow", "Dry Chilly Long", "Turmeric Whole", "Star", "Bay Leaves", "Coriander Whole",
                                    "Cloves",
                                ];
                                break;
                            case "6":
                                echo "<h2>TEXTILE</h2>";
                                break;
                            case "7":
                                echo "<h2>FOOTWEAR</h2>";
                                break;
                            case "8":
                                echo "<h2>HOUSEHOLD</h2>";
                                break;
                            case "9":
                                echo "<h2>MACHINERY</h2>";
                                break;
                            case "10":
                                echo "<h2>BRANDING</h2>";
                                break;
                            case "11":
                                echo "<h2>CHEMICALS</h2>";
                                $products = [
                                    "Realox Handwash (Strawberry,Rose,Green Apple)",
                                    "Realox Dishwash (Lemon)", "Realox Real Fresh Lavender",
                                    "Realox Antiseptic Disinfectant", "Realox Laundry Detergent Liquid",
                                    "Realox Bowl Cleaner", "Realox Bleach Liquid", "Glass Cleaner",
                                ];
                                break;
                            case "12":
                                echo "<h2>FROZEN</h2>";
                                $products = [
                                    "Chicken", "Chicken (Brazil)", "Chicken (QK)", "Chicken (Farm Fresh)",
                                    "Chicken (Nat)", "Chicken (GTA)", "Chicken (Zera)", "Chicken (Pena)",
                                    "Chicken (Perdix)", "Chicken Breast", "Shawarma Almana", "Shawarma Sadia",
                                    "Shawarma Lar", "Beef Keema Local", "Beef Liver", "Boby Veal",
                                    "Boby Veal 5star", "Boby Veal Lagrace", "Boby Veal Arman", "Sausage (Perdix)",
                                    "Gizzard", "Chicken Liver", "Mix Veg 4 Way", "Mutton Leg Bone In MIDFIELD/ARARAT",
                                    "Mutton Leg Bone in Fletcher", "Mutton Leg Boneless Fletcher", "Mutton Shoulder Wagstaff",
                                    "Mutton Shank Midfield", "Mutton Shank Fletcher", "Mutton Carcass 6 Way Cut",
                                    "Sheep Feet Junee Gold", "Leg Quartor", "6MM PG", "6MM A to Z", "6MM Hot", "6MM Royal",
                                    "9MM Jhon", "9MM Navaco", "Mussle Meat", "Chicken Zinger Americana", "Chicken Zinger (A.A)",
                                    "Veg Nuggets", "Fish Fillet Trimmed ", "Cheese", "Tenderloin", "V Leg ", "Fish Cooking", "Kappa"


                                ];
                                break;
                            case "13":
                                echo "<h2>FISH</h2>";
                                $products = [
                                    "Barracuda","Belt Fish","Cat Fish","Cora Fish",
                                    "Crabes Local","Dover Sole","Eatta","Fresh Black Pompet",
                                    "Kanan Fish","Karimeen Fish","Katla Fish","King Fish","Kolan",
                                    "Mackerel","Milk Fish","Mullan Fish","Musseles Meat","Naizer","Nathel Fish",
                                    "Prawns","Red Hammour","Rouhu","Salmon Steak","Sardines","Seema","Shark Fish",
                                    "Sheri","Squid","Sultan","Sultan Ibrahim","Therdy Fish","Tilapia","Vankada","Vatta","White Pomfret (MED)"
                                ];
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
                                <?php
                                foreach ($products as $product) {
                                    echo "<li><i class='fab fa-react' style='color: red;'></i><strong>$product</strong></li>";
                                }
                                ?>

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
                            <li><a href="product_details.php?id=6" <?php if ($idv == "6") {
                                                                        echo ' class="current" ';
                                                                    } ?>>TEXTILE</a></li>
                            <li><a href="product_details.php?id=7" <?php if ($idv == "7") {
                                                                        echo ' class="current" ';
                                                                    } ?>>FOOTWEAR</a></li>
                            <li><a href="product_details.php?id=8" <?php if ($idv == "8") {
                                                                        echo ' class="current" ';
                                                                    } ?>>HOUSEHOLD</a></li>
                            <li><a href="product_details.php?id=9" <?php if ($idv == "9") {
                                                                        echo ' class="current" ';
                                                                    } ?>>MACHINERY</a></li>
                            <li><a href="product_details.php?id=10" <?php if ($idv == "10") {
                                                                        echo ' class="current" ';
                                                                    } ?>>BRANDING</a></li>
                            <li><a href="product_details.php?id=11" <?php if ($idv == "11") {
                                                                        echo ' class="current" ';
                                                                    } ?>>CHEMICALS</a></li>
                            <li><a href="product_details.php?id=12" <?php if ($idv == "12") {
                                                                        echo ' class="current" ';
                                                                    } ?>>FROZEN</a></li>
                            <li><a href="product_details.php?id=13" <?php if ($idv == "13") {
                                                                        echo ' class="current" ';
                                                                    } ?>>FISH</a></li>


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