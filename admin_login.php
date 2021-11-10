<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:600|Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:700&display=swap" rel="stylesheet">   
</head>
<body> 
	
	 

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="TopLabel">
            <p>ADMIN LOGIN</p>
        </div>
	
        <div>
            <input id="username" name="username" type="text" placeholder="Username" required maxlength="20">
        
            <input id="password" name="password" type="password" placeholder="Password" required maxlength="20">
            
            <button class="button"><span>LOGIN </span></button>                  
        </div>    
        
        <div class="errorMsg">
            <p id="errorLabel" class="mystyle">Incorrect username or password</p>
        </div>
    </form>
    
    <footer>
        <div><p>This page is intended for admin use only. <a href="https://bodyfantasy.000webhostapp.com/">Click here to go to our home page</a> </p></div>
    </footer>

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
		}

		else if(isset($_POST['username'])){
			
			$uname = $_POST['username'];
			$pass = $_POST['password'];
			
			$sql = "select * from users where username='".$uname."' AND password='".$pass."' limit 1";
			
			$result = $conn->query($sql);
			
			if($result->num_rows > 0) {
				//echo "Login Success";
				?>
				<script>window.location.href='Login.html'</script>
				<?php
			} 

			else {
				// echo "Login Failed";
				?>
				<script>
					const error = document.getElementById('errorLabel');
					error.classList.remove('mystyle');
				</script>
				<?php
			}
		}
		
		$conn->close();
	?> 

</body>
</html>

