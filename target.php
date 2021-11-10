 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "adminData";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT username, password FROM userdata";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>username</th><th>password</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["username"]."</td><td>".$row["password"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?> 