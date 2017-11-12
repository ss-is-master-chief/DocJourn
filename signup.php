<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "docjourn";

$conn = mysqli_connect($server,$username,$password);
if($conn->connect_error){
  die("Cannot be established".$conn->connect_error);
}
mysqli_select_db($conn,$database);
$fn = $ln = $email = $pass = '';
$check1 = $check2 = $check3 = $check4 = 0;
if(isset($_POST['FirstName']) && $_POST['FirstName']!='')
{
  $fn = $_POST['FirstName'];
  $check1 = 1;
}
if(isset($_POST['LastName']) && $_POST['LastName']!='')
{
  $ln = $_POST['LastName'];
  $check2 = 1;
}
if(isset($_POST['Email']) && $_POST['Email']!='')
{
  $email = $_POST['Email'];
  $check3 = 1;
}
if(isset($_POST['pwd']) && $_POST['pwd']!='')
{
  $pass = $_POST['pwd'];
  $check4 = 1;
}
if(($check1+$check2+$check3+$check4)==4){
$getcount = mysqli_query($conn,"SELECT count('$email') as ct FROM signup");
$cnt = $getcount->fetch_assoc();
$c = $cnt['ct'];
$c = $c+1;

$query1 = "INSERT INTO signup VALUES('$c','$fn','$ln','$email','$pass')";
mysqli_query($conn,$query1);
$query2 = "INSERT INTO patient_profile(PID,first_name,last_name,email) VALUES('$c','$fn','$ln','$email')";
mysqli_query($conn,$query2);
header("Location: DocJourn.php");}
else {
header("Location: DocJourn.php");
}
?>
