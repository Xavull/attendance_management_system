<?php
   //get connection string
   require_once("config.php");



   //start session
   session_start();
  
   //code the login button

   if(isset($_POST["submit"])){
 
     //create a function lto filter values from the form

     function input_filter($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
     }

    //get values from the form
    $email = input_filter($_POST["email"]);
    $password = input_filter($_POST["password"]);
    
    $stmt = $conn->prepare("SELECT * FROM employees WHERE email =?");
    $stmt->execute([$email]);

    if($stmt->rowCount()=== 1){
        $user = $stmt->fetch();

        $user_email = $user['empemail'];
        $user_password = $user['emppassword'];
        $user_role = $user['emprole'];

        
    }
   
    
    
   }


?>