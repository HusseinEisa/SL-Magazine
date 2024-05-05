<?php
  $host="Localhost";
  $user="root";
  $password="";
  $db_name="magazine";
  $conn=mysqli_connect($host,$user,$password,$db_name);
  if($conn){
   echo " connection successfully ";
  }
  else  {
     echo "connection is failed ";
  }
  /*
  . create database named by magazine;
  . create table that named by users;
  . create 3 col (name,email,pass);
  
  
  
  */
?>