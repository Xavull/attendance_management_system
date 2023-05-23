<?php

include("config.php");
if(isset($_GET("btn")))
{

 include("config.php");
 $amp = $_GET["ampCode"];
 
 $rest ="SELECT * FROM users empcode ='.$emp'";
 $rest = mysqli_query($conn, $get);

 if($rest-> num_rows > 0)
 {
     while($row = mysqli_fectch_assoc()$rest)
     {
        $ampcode = $row["empcode"];
     }
 }


}

?>