<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
$conn = new mysqli($servername, $username, $password, $dbname);


$sql = "SELECT * FROM webbserverprogrammering";
$result = $conn->query($sql);


$login_success = false;
$full_name = "";
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
		if($row["username"] == $_POST["username"] &&
					$row["password"] == $_POST["password"]) {
			$login_success = true;
            echo "Welcome " . $_POST["username"] ;
			}
	} if($login_success == false) {
        echo "Login failed" ;
    }
} else {
    echo "0 results";
}
$conn->close();


?>