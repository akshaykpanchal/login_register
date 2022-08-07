<?php 
$email = $_POST['email']; 
$password = $_POST['password']; 

// Database connection
$con = new mysqli("localhost","root","","db_contact"); 
if ($con->connect_error) { die("Failed to connect : ".$con->connect_error); }  
else 
{
    $stmt = $con->prepare("select * from tbl_contact where fldEmail = ?"); 
    $stmt->bind_param("s", $email); 
    $stmt->execute(); 
    $stmt_result = $stmt->get_result(); 
    if ($stmt_result->num_rows > 0) 
    {
        $data = $stmt_result->fetch_assoc();
        if($data['fldpwd'] === $password)
        {echo "login sucsessful";}
        else{ echo "invalid login information";}   
    } 
    else
    {
        echo "invalid login information";
    }
}
?> 

