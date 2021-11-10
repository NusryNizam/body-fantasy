<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="faq.css">
    <link href="https://fonts.googleapis.com/css?family=Damion|Roboto&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="footer.css"> 
    <link rel="stylesheet" href="styles.css">
    <script src="faq.js" defer></script>
    <title>Document</title>
</head>
<body>

    <!-- Navigation Bar START -->
    <nav id="navbar">
            <a href="index.html"><img src="images/logo.png" id="logo" alt="Body Fantasy" height="30px"></a>
            <ul id="navlist">
                <li><a href="filter.php">Categories</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="index.html" class="active">Home</a></li>
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

    <header><h1>Frequently Asked Questions</h1></header>
    <div class="Intro">Here you will find answers to some questions, frequently asked. <br>If you have a question that it not answered here, please feel free to contact us.</div>
    <article>
        
  
        <?php
            $servername = "localhost";
            $username = "nusry";
            $password = "password";
            $dbname = "products_db";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                echo "connection failed";
            }
            // echo "success";

            $sql = "SELECT question, answer FROM questionAnswers";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    $question = $row["question"];
                    $answer = $row["answer"];

                    $rownumber = $row;
                    $string = 'question' . $row[$count];


        ?>

                    <div class="QuestionAnswer"> 
                        <div class="questionImage">
                        <button ><img src="images/addImage.png" class="image" alt="add image button"></button>
                        <div class="Question"><?php echo $question ?></div></div>
                        <div class="Answer"><?php echo $answer ?></div>
                    </div>

        <?php
                }

            } else {
                echo "0 results";
            }

            $conn->close();
        
        ?> 

    </article>

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
</body>
</html>