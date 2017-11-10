<?php include 'config.php';
$symptom = null;
if(isset($_POST['symptom'])){
  $symptom = $_POST['symptom'];
}
$fetch_sign_sno = mysqli_fetch_row(mysqli_query($conn,"SELECT sign_sno FROM CurrentUser ORDER BY sno DESC LIMIT 1"));
if($symptom!=0){
mysqli_query($conn,"SET time_zone='+05:30'");
$query = "INSERT INTO entry_log(edate,sign_sno,etime,symp_ID) VALUES(CURDATE(),'$fetch_sign_sno[0]',NOW(),'$symptom')";
mysqli_query($conn,$query);}
header("Location: Timeline.php");
?>
