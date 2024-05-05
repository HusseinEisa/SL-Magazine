<?php
 if(isset($_POST['Update'])){
include 'connect.php';
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];

$stm="update users set name='$name', email='$email' ,password ='$pass' where email='$email'";

$z=mysqli_query($conn,$stm);
if($z){
  echo " user updated successfully (^O^) ";
}
else {
    echo " there is something goes wrong(+ +) ";
}
 }
?>