 <?php  
 include_once("db.php");
 include_once 'uniques.php';

if(isset($_POST['btn'])) {

      
$nme = mysqli_real_escape_string($con,$_POST['fname']);
$lastname = mysqli_real_escape_string($con,$_POST['lname']); 
$phone = mysqli_real_escape_string($con,$_POST['phoneNo']);
$email = mysqli_real_escape_string($con,$_POST['email']); 
$department = mysqli_real_escape_string($con,$_POST['deptmnt']);
$status = mysqli_real_escape_string($con,$_POST['status']); 
$position = mysqli_real_escape_string($con,$_POST['pos']); 
$empType = mysqli_real_escape_string($con,$_POST['empType']);
$empID  = 'EMP'.get_rand_numbers(5).'';

$sql = "INSERT INTO `employee` (`empID`,`empName`, `empSurname`, `empPhone`, `empEmail`,`empStatus`,`empDepartment`, `empPosition`, `empTypeID`) VALUES('$empID', '$nme', '$lastname', '$phone' ,'$email', '$status', $department, '$position', '$empType') ";
$result = mysqli_query($con,$sql);
if($result){
    ?>
    <script>
    alert('Thank you, you successfully added a new employee');
     window.location.href="employees.php";
    </script>
    <?php
}else{
 ?>
    <script>
    alert('Something went wrong, please try again');
    window.location.href="employees.php";
    </script>
    <?php

}		  
}

?>