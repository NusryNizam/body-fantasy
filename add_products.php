<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="add_products.css">
    <title>Add Products | Body Fantasy</title>
</head>
<body>
    <div class='buttons'>
        <button onclick="window.location.href='dashboard.html'">Back to Dashboard</button>
        <button onclick="window.location.href='admin_login.php'">Logout</button>
    </div>
        <br><br><br>
    <h1>Add Products</h1>
    <form id="adding_form" action="add_products.php" method="post">
        <div id='insideform'>
            <label for="name">Product Name: </label>
            <input type="text" name="name" id="name" required>
            <br>
            <label for="brand">Brand: </label>
            <input type="text" name="brand" id="brand" required>
            <br>
            <label for="category">Category: </label>
            <input type="text" name="category" id="category" required>
            <br>
            <label for="price">Price: </label>
            <input type="number" name="price" id="price" required>
            <br>
            <label for="imgurl">Image URL: </label>
            <input type="text" name="imgurl" id="imgurl" required>
            <br>
            <br>
            <input id="submit" type="submit" value="Add Product">
        </div>
    </form>


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

            $productName = $_POST['name'];
            $brand = $_POST['brand'];
            $category = $_POST['category'];
            $price = $_POST['price'];
            $imgurl = $_POST['imgurl'];

            $sql = "INSERT INTO products (name, brand, category, price, imgurl) VALUES ('$productName', '$brand', '$category', '$price', '$imgurl')";

            $result = $conn->query($sql);

            if($result){
                ?>
                    <div class="message">Product added successfully</div>
                <?php
            }
        $conn->close();
    ?>

    <!-- PHP Script End -->


</body>
</html>