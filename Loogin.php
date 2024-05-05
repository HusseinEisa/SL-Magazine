<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="shortcut icon" href="./img/SL.jpg">
    <link rel="stylesheet" href="Login Style.css">
          <!-- the from boxicon website and github-->
          <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<body background="./img/College Wallpaper 4.jpg">


    <!--Navbar-->
    <nav>
        <img  src="./img/FCAI_5.png" alt=""> 
        
        <ul>
            <li><a href="./Home Page.html#home">HOME</a></li>
            <li><a href="./Home Page.html#features">News</a></li>
            <li><a href="./Home Page.html#about">ABOUT</a></li>
            <li><a href="./Home Page.html#opinion">Opinion</a></li>
            <li><a href="Feedback.html">Feedback</a></li>
            <li class="LS"><a href="Loogin.php">Login</a></li>
            <li class="LS"><a href="signup.php">Sign up</a></li>
        </ul>
      </nav>
      <!--END OF Navbar-->

      <br>

    <div class="Team-Logo">
        <figure>
            <img src="./img/SL.jpg">
            <figcaption>Login To Us</figcaption>
        </figure>
    </div>

    <br><br>

    <div class="Form">
        <br>
        <div class="Buttons">
            <button class="Login-Area">Login</button>
            <a href="signup.php"> <button class="Sign-Up-Area">Sign Up</button> </a>
        </div>
        <form action="" method ="post">
            <br>
            <div class="Login">
            <fieldset>
            <legend>Login</legend><br>
            <input required title="Email Address" placeholder="Email Address" type="email" name="email"><br><br>
            <input required title="Password" placeholder="Password" type="password" name="pass"><br><br>
            </fieldset>
            </div>
            <div class="Submit">
            <br>
            <input type="submit" value="login " name="login">
            <br><br>
            </div>
        </form>
    </div>
    <?php 

     session_start(); 
     if(isset($_POST['login'])){
        include 'connect.php';
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $stm ="select * from `users` where 	email='$email' and pass='$pass'";
        $result= mysqli_query($conn,$stm);
        $count=mysqli_num_rows($result);
        if($count==1){
          $_SESSION['pass']=$pass;
          $_SESSION['email']= $email;
            header('Location:Home Page.html');
        }
        else {
            echo " user name and email is invalid ";
        }
     }
?>



    <!----------footer--------------->
    <footer class="footer">
        <div class="container">
          <div class="row">
            <div class="footer-col">
              <h4>Faculty</h4>
              <ul>
                <li><a href="#">about us</a></li>
                <li><a href="#"> our comunity</a></li>
                <li><a href="#">privacy policy</a></li>
                <li><a href="#">affiliate program</a></li>
              </ul>
            </div>
            <div class="footer-col">
              <h4>get help</h4>
              <ul>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">shipping</a></li>
                <li><a href="#">returns</a></li>
                <li><a href="#">order status</a></li>
                <li><a href="#">booking</a></li>
              </ul>
            </div>
            <div class="footer-col">
              <h4>follow us</h4>
              <div class="social-links">
                <a href="#"><i class='bx bxl-twitter' ></i></a>
                <a href="#"><i class='bx bxl-instagram' ></i></a>
                <a href="#"><i class='bx bxl-facebook-square'></i></a>
                <a href="#"><i class='bx bxl-linkedin' ></i></a>
              </div>
            </div>
          </div>
        </div>
      </footer>



</body>
</html>