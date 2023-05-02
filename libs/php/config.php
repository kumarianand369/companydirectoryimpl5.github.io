
<?php
$cd_host = "localhost";
$cd_port = 3306;
$cd_socket = "";
$cd_user = "id20655131_root";  //your user name for php my admin if in local most probaly it will be "root"
$cd_password = "123RootCompany@";  //password
$cd_dbname = "id20655131_companydirectory"; //Your db name

// Create connection
$conn = new mysqli($cd_host, $cd_user, $cd_password, $cd_dbname, $cd_port, $cd_socket);
// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//} 
//echo "Connected successfully";
?>