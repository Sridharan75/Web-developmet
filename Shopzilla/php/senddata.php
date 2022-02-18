<?php
 if($_SERVER['REQUEST_METHOD']=='POST'){
 $email = $_POST['email'];
 $password = $_POST['password'];
 $conformpassword = $_POST['conformpassword'];
 require_once('dbConnect.php');
 $sql = "INSERT INTO user (email,password,conformpassword) VALUES 
('$email','$password','$conformpassword')";
 if(mysqli_query($con,$sql)){
echo "Successfully Registered";
 }else{
echo "Could not register";
 }
 }else{
echo 'error';
}
?>