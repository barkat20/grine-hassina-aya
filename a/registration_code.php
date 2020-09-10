<!--
Here, we write code for registration.
-->
<?php
require_once('connection.php');
$year = $fname = $lname = $gender = $email = $password = $pwd = '';

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$pwd = $_POST['password'];

$password = MD5($pwd);

$sql = "INSERT INTO tbluser (Firstname,Lastname,Email,Password,gender) VALUES ('$fname','$lname','$email','$password','gender')";
$result = mysqli_query($conn, $sql);
if($result)
{
	header("Location: wellcome.php");
}
else
{


echo $fname;
	echo "Error :".$sql;
}


?>