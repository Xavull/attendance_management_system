<?php 
 
 require('config.php');

 session_start();

  function loginUser(){
    require('config.php');
    $getData = "SELECT * FROM employee";
    return  mysqli_query($conn, $getData);

  }


?>