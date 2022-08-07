<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','db_contact');

// get the post records
$txtEmail = $_POST['txtEmail'];
$pwd = $_POST['pwd'];


// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`fldEmail`, `fldpwd`) VALUES ('$txtEmail', '$pwd')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Registration Sucsessful...!";
}
else{
	"Insertion failed";
}

?>