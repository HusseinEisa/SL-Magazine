<h2>  Home page </h2>

welcom to our page :


<?php

session_start();
    
echo $_SESSION['name'];

?>

<br>
<br>
<a href="logout.php">logout </a>
