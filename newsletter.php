<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Join our newsletter | Body Fantasy</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/b3562d3ebc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <!-- Navigation Bar START -->
    <nav id="navbar">
        <a href="index.html"><img src="images/logo.png" id="logo" alt="Body Fantasy" height="30px"></a>
        <ul id="navlist">
            <li><a href="filter.php">Categories</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="index.html">Home</a></li>
        </ul>
    </nav>
    <!-- Navigation Bar END -->

    <!-- Hamburger menu with popup for small screens -->
    <img class="hamburger" src="images/hamburger.png">
    <img class="close" src="images/cross.png">
    <div class="popup-wrapper">
        <div class="popup">
            
            <br>
            <a href="index.html"><button class='popupButton'>Home</button></a><br>
            <a href="filter.php"><button class='popupButton'>Categories</button></a><br>
            <a href="about.html"><button class='popupButton'>About</button></a><br>
        </div>
    </div>
    <div id="feedback">Thank you for subscribing</div>
    <!-- Newsletter form -->
    <div class="containerNewsletter">
        <form class="newsletterForm" action="newsletter.php" method="POST">  
            <div>
                <span class="line line1"> HELLO THERE. ENJOY </span><br>
                <span class="line line2">15% off </span><br>
                <span class="line line3">WHEN YOU JOIN OUR MAILING LIST</span>
            </div>
            
            <div class="email-box">
                <i class="fas fa-envelope fa-lg"></i>
                <input class="tbox" type="email" name="email" placeholder="Enter your email" id="newsletterEmail" required> <br>
                <button class="btn" type="submit" name="button">GET MY 15% OFF</button>
            </div>
        </form>
    </div>

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

        if(isset($_POST["email"])){
            // echo 'in loop';
            $email = $_POST["email"];
            $sqlFetch = "SELECT email FROM subscribers WHERE email='$email'";
            $resultFetch = $conn->query($sqlFetch);

            if ($resultFetch->num_rows < 1) {
                // echo 'insecond loop';
                $sql = "INSERT INTO subscribers (email) VALUES ('$email')";
                $result = $conn->query($sql);
                // echo 'Thank you for subscribing';

                ?>

                <script>
                const feedback = document.querySelector('#feedback');
                feedback.style.display = 'block';

                feedback.addEventListener('click', () => {
                    feedback.style.display = 'none';
                });

                </script>
                
                <?php
            
            } else {
                // echo 'You already subscribed';
                ?>
                
                <script>

                const feedback = document.querySelector('#feedback');
                feedback.style.backgroundColor = '#ff6666';
                feedback.innerText = 'You already subscribed';
                feedback.style.display = 'block';

                feedback.addEventListener('click', () => {
                    feedback.style.display = 'none';
                });

                </script>
                
                <?php
            }

        } 




        $conn->close();
    ?>


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
        <!-- <div class="section section4">
            <h2>Subscribe to our newsletter</h2><br>
            <a href="newsletter.html"><button>Go to page</button></a>
        </div> -->
    </footer>
    <p class='copyright'>Copyright © 2019 Body Fantasy</p>

<script src="scriptPopup.js"></script>
</body>
</html>