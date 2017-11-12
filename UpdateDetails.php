<?php
include 'config.php';
$CurUserID = mysqli_fetch_row(mysqli_query($conn,"SELECT sign_sno FROM CurrentUser ORDER BY sno DESC LIMIT 1"));
if(isset($_POST['Occupation']) && $_POST['Occupation']!='') {
    $data = $_POST['Occupation'];
    mysqli_query($conn,"UPDATE patient_profile SET Occupation='$data' WHERE PID='$CurUserID[0]'");
}
if(isset($_POST['dob']) && $_POST['dob']!=''){
    $data = $_POST['dob'];
    mysqli_query($conn,"UPDATE patient_profile SET dob='$data' WHERE PID='$CurUserID[0]'");
}
if(isset($_POST['PhoneNo']) && $_POST['PhoneNo']!=''){
    $data = $_POST['PhoneNo'];
    mysqli_query($conn,"UPDATE patient_profile SET Phone_no='$data' WHERE PID='$CurUserID[0]'");
}
if(isset($_POST['MaritialStatus']) && $_POST['MaritialStatus']!=''){
    $data = $_POST['MaritialStatus'];
    mysqli_query($conn,"UPDATE patient_profile SET maritial_status='$data' WHERE PID='$CurUserID[0]'");
}
if(isset($_POST['Nationality']) && $_POST['Nationality']!=''){
    $data = $_POST['Nationality'];
    mysqli_query($conn,"UPDATE patient_profile SET nationality='$data' WHERE PID='$CurUserID[0]'");
}
if(isset($_POST['Sex']) && $_POST['Sex']!=''){
    $data = $_POST['Sex'];
    mysqli_query($conn,"UPDATE patient_profile SET sex='$data' WHERE PID='$CurUserID[0]'");
}
if(isset($_POST['State']) && $_POST['State']!=''){
    $data = $_POST['State'];
    mysqli_query($conn,"UPDATE patient_profile SET state='$data' WHERE PID='$CurUserID[0]'");
}
if(isset($_POST['Locality']) && $_POST['Locality']!=''){
    $data = $_POST['Locality'];
    mysqli_query($conn,"UPDATE patient_profile SET Locality='$data' WHERE PID='$CurUserID[0]'");
}
header("Location: EditProfile.php");
?>