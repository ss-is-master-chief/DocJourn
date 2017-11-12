<?php
include 'config.php';
$query = mysqli_query($conn,"SELECT * FROM CurrentUser ORDER BY sno DESC");
$data = mysqli_fetch_row($query);
?>
<html>

<head>
  <title>Timeline</title>
  <link rel="icon" href="favicon-16x16.png" type="image/png" sizes="16x16">
  <link rel="stylesheet" type="text/css"
   href="Timeline-CSS.css">
  <link rel="stylesheet" type="text/css"
   href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
  <div class="w3-container">
  <div class="bar w3-panel w3-card-2">
  <p>Welcome Back, <?php echo $data[2]." ".$data[3]."!"; ?>&nbsp;&nbsp;
    <a class="logout" href="Timeline.php">HOME</a>
    <a class="logout" href="EditProfile.php">PROFILE</a>
    <a class="logout" href="logout.php">LOGOUT</a>
  </div>

  <div id="division">
  <div class="clock" style="float:right">
    <iframe src="clock_timeline.html" height="165" width="165" scrolling=no frameborder=no></iframe>
  </div>
    Date: <?php echo date("d-M-Y")?><br>
    Time: <?php echo date("h:i:s a")?><br>
    Symptom:
    
    <form action="entry_log.php" method="post" style="display:inline-block">  <!-- fetch symptoms and display in dropdown delection menu-->
    <select name="symptom">
      <option value='0'>-------Select-------</option>
      <?php require 'symptom_select.php' ?>
    </select>
    <input type="submit" value="Confirm Entry">
    </form>
  </div>
<?php require 'ResultGenerate.php'?><br><br>

<div class="w3-panel w3-card-2" id="contact-us" style="background-color:#2380B9;color:white;">
<h2>Contact Us</h1>
      <b>Address</b>
      <p>Vellore Institute of Technology, Chennai Campus
      <p>Valandur-Kelambakkam Road, Chennai
      <p>Tamil Nadu - 600127</p>
      <b>E-Mail</b> <br>
      <a href="mailto:docjournservices@gmail.com?Subject=DocJourn%20Queries"
      target="_top">docjournservices@gmail.com</a>  <br><br>
    </div>
  </div>
<div id="create" style="text-align:center">
&copy; Sumit Saha || Shamik Banerjee || Kaustav Choudhury
</div>
</div>
</body>
 </html>
