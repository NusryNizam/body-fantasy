<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="filterCSS.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <title>Explore Products | Body Fantasy</title>
</head>
<body>
<a href="index.html"><img src="images/logo.png" id="logo" alt="Body Fantasy" height="30px"></a> 
<form class="filterForm" action="filter.php" method="get">
        
        <label for="Categories">Category:</label>
        <select name="Categories" id="categories" required>
            
            <option value="All categories">All categories</option>
            <option value="Handbags">Handbags</option>
            <option value="Perfumes">Perfumes</option>
            <option value="Skincare">Skincare</option>
            <option value="Lipstick">Lipstick</option>

        </select>
        <div class='placeholderDiv'></div>  
        <label for="Brands">Brand:</label>
        <select name="Brands" id="brands" required>
            
            <option value="All brands">All brands</option>
            <option value="Victoria''s Secret">Victoria's Secret</option>
            <option value="Burberry">Burberry</option>
            <option value="NIVEA">NIVEA</option>
            <option value="Elizabeth Arden">Elizabeth Arden</option>
            <option value="L-Oreal">L-Oreal</option>
            <option value="Michael KORS">Michael KORS</option>
            <option value="Revlon">Revlon</option>

        </select>
        <div class='placeholderDiv'></div>  
        <input type="submit" value="FILTER">
    </form>
    
    <?php

    $categories = (isset($_GET['Categories']) ? $_GET['Categories'] : 'All categories');
    $brand = (isset($_GET['Brands']) ? $_GET['Brands'] : 'All brands');

    if(!isset($_GET['Categories']) || !isset($_GET['Brands'])){
        $_GET['Categories'] = 'All categories';
        $_GET['Brands'] = 'All brands';
    }

    ?>


    <p class="resultSummary">Showing results for <strong><?php echo $brand . " - " . $categories?></strong></p>
    <div class="flex-container">
    
    
        <?php

        $servername = "localhost";
        $username = "nusry";
        $password = "password";
        $database = "products_db";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $database);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        // echo "Connected successfully <br>";

        

        $sql = "";


        if($brand == 'All brands' && $categories != 'All categories'){
            $sql = "SELECT name, brand, category, price, imgurl FROM products WHERE category='$categories'";
        }

        if($categories == 'All categories' && $brand != 'All brands'){
            $sql = "SELECT name, brand, category, price, imgurl FROM products WHERE brand='$brand'";
        }

        if($categories == 'All categories' && $brand == 'All brands'){
            $sql = "SELECT name, brand, category, price, imgurl FROM products";
        }
        
        if($categories != 'All categories' && $brand != 'All brands') {
            $sql = "SELECT name, brand, category, price, imgurl FROM products WHERE category='$categories' AND brand='$brand'";
        }


        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {

                $nameFinal = $row["name"];
                $brandFinal = $row["brand"];
                $categoryFinal = $row["category"];
                $priceFinal = $row["price"];
                $imgurlFinal = $row["imgurl"]

                ?>

                <div class="card">
                    <img class="product-image"src="<?php echo $imgurlFinal ?>" alt="">
                    <div>
                        <p class="product-title"><strong><?php echo $nameFinal ?></strong></p>
                        <p>Rs.<br>
                        <span class="product-price"><?php echo $priceFinal ?></span><br>
                        <span class="product-brand"><?php echo $brandFinal ?></span></p>
                    </div>
                </div>

                <?php
            }

        } else {
            echo "0 results";
        }
        $conn->close();

        ?>
        <button id='toTop' class="animate-bottom"></button>
        
    </div>
    
    
    <!-- Footer -->
    <footer>
            <div class="section section1">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="filter.php">Browse products</a></li>
                    <li><a href="about.html">About us</a></li>
                    <li><a href="newsletter.html">Newsletter</a></li>
                </ul>
            </div>
            
            <div class="section section2">
             <h4>Our Outlets</h4>
             <ul>
                 <li><a target="_blank" href="https://g.page/body-fantasy-mount-lavinia?share">230, Galle Rd.<br>Dehiwala-Mount Lavinia<br>10350</a></li>
                 <br>
                 <li><a target="_blank" href="https://g.page/bodyfantasy?share">16/B, Colombo Rd.<br>Boralesgamuwa</a></li>
             </ul>
            </div>
            <div class="section section3">
                 <h4>Visit our socials</h4>
                    <a target="_blank" href="https://www.facebook.com/bodyfantasyLK/"><img src="images/fb1.png" width="29px" alt="Facebook"></a>
                    <a target="_blank" href="https://www.instagram.com/body__fantasy/"><img src="images/ig.png" width="29px" alt="Instagram"></a>
                    <a target="_blank" href="https://www.twitter.com/"><img src="images/tt1.png" width="29px" alt="Twitter"></a>
            </div>
            <div class="section section4">
                <h2>Subscribe to our newsletter</h2><br>
                <a href="newsletter.html"><button>Go to page</button></a>
            </div>
        </footer>
        <p class='copyright'>Copyright © 2019 Body Fantasy</p>
<script src="filterScript.js"></script>
</body>
</html>

