<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="add_products.css">
    <title>Manage Newsletter | Body Fantasy</title>
</head>
<body>
    <div class='buttons'>
        <button onclick="window.location.href='dashboard.html'">Back to Dashboard</button>
        <button onclick="window.location.href='admin_login.php'">Logout</button>
    </div>
        <br><br><br>
    <h1>Manage newsletter subscribers</h1>
    <div id="adding_form" action="add_products.php" method="post">
        <div id='insideform'>


        <!-- PHP Script Start -->
                
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

                $sql = "SELECT email FROM subscribers";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {

                        $email = $row["email"];
                        
                        ?>

                        <div class="card">
                            <p class="product-title"><strong><?php echo $email ?></strong></p>
                        </div>

                        <?php
                    }

                } else {
                    echo "0 results";
                }


            $conn->close();
        
        ?>

        <!-- PHP Script End -->

        </div>
    </div>

</body>
</html>