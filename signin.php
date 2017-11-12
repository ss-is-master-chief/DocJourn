<?php
include 'config.php';

$log_email = null;
$log_password = null;
$verdict = null;
$check = 0;

if(isset($_POST['Email-login'])){
  $log_email = $_POST['Email-login'];
}
if(isset($_POST['pwd-login'])){
  $log_password = $_POST['pwd-login'];
}

$query = mysqli_query($conn,"SELECT * FROM signup");

while($data=mysqli_fetch_row($query))
{
  if($log_email==$data[3] && $log_password==$data[4] && $data[3]!=null && $data[4]!=null)
  {
    $check = 1;
    mysqli_query($conn,
    "INSERT INTO CurrentUser(sign_sno,cfirstname,clastname,cemail) VALUES('$data[0]','$data[1]','$data[2]','$data[3]')");
  }
}
if($check!=1)
{
  $verdict = "Please enter valid account details";
  echo "Wrong!";
}
else
{
  header("Location: Timeline.php");
}
?>
