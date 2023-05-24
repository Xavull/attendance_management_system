<?php
<<<<<<< HEAD
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

=======
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

 

>>>>>>> f2e7df2973728f83b5533b95372518657152cb0e

?>