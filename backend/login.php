<?php

 require("config.php");

 session_start();

 if(isset($_POST["submit"])){
   $email = $_POST["email"];
   $password = $_POST["password"];


   $query = "SELECT * FROM employee";
   $results = mysqli_query($conn, $query);

   if($results->num_rows > 0){
      while($row = mysqli_fetch_assoc($results)){
          $user_email = $row["empemail"];
          $user_password = $row["emppassword"];
          $role = $row["emprole"];

          if($email == $user_email && $password == $user_password){
            $_SESSION["role"] = $role;
          }else{
            header("index.php");
          }
      }
      if($_SESSION["role"] == 'admin'){
         header("../admin/index.php");
      }
   }

   
}

 


?>