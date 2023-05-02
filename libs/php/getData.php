<php
$host="localhost";
$username="id20655131_root";
$password="123RootCompany@";
$dbname="id20655131_companydirectory";

$conn=mysqli_connect($host,$username,$password,$dbname);
if(mysqli_connect_errno())
  echo "Connection could not established..".mysqli_connect_errno();
  else
    echo "successfully connected";
?>

