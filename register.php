<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title> magazine </title>
</head>
<body>
<div class="login">
        <form action="register.php" method="post">
            <label for=""> Name : </label> <br> <br>
            <input type="text" name="name" id=""><br> <br>
            <label for=""> Email : </label> <br> <br>

            <input type="email" name="email" id=""><br> <br>

            <label for=""> Password : </label><br> <br>

            <input type="password" name="pass" id=""> <br> <br>

            <input type="submit" value="Register " name="register">
            <input type="submit" value="Update" name="Update">
            <input type="submit" value="delete " name="delete"><br><br>
            <a href="login.php"> login </a>
        </form>
    </div>

<?php
 if(isset($_POST['register'])){
include 'connect.php';
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];



$stm="insert into users(name,email,pass) values('$name','$email','$pass')";

$z=mysqli_query($conn,$stm);
if($z){
  echo "new user inserted successfully (^O^) ";
  header('Location:login.php');
}
else {
    echo " not inserted ,there is some thing goes wrong(+ +) ";
}
 }
?>
<?php
 if(isset($_POST['Update'])){
include 'connect.php';
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];

$stm="update users set name='$name', email='$email' ,pass ='$pass' where email='$email'";

$z=mysqli_query($conn,$stm);
if($z){
  echo " user updated successfully (^O^) ";
}
else {
    echo " there is something goes wrong(+ +) ";
}
 }
?>
<?php
 if(isset($_POST['delete'])){
include 'connect.php';
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];

$stm="delete from users where email='$email'";
// $stm="delete from users where name='$name'";

$z=mysqli_query($conn,$stm);
if($z){
  echo " user deleted successfully (^O^) ";
}
else {
    echo " there is something goes wrong(+ +) ";
}
 }
?>
</body>
</html>