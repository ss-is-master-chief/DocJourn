<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="favicon-16x16.png" type="image/png" sizes="16x16">
  <title>Homepage: DocJourn</title>
  <link rel="stylesheet" type="text/css"
   href="DocJourn-CSS.css">
  <link rel="stylesheet" type="text/css"
   href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
  <br>
  <img id="img-logo" src="Logo.png" alt="Logo">
  <img id="img-logo-text" src="Logo_Text.png"
   alt="LogoText">
   <div class="clock" style="float:right">
    <iframe src="clock.html" height="117" width="135" scrolling=no frameborder=no></iframe>
  </div>
  <br><br>
  <ul id="total-nav">
    <!-- INCLUDE LINK FOR LogIn AND DEFINE FOR OTHERS -->
    <li><a href="DocJourn.php">Home</a></li>
    <li><a href="#about-docjourn">About</a></li>
    <li><a href="#contact-us">Contact Us</a></li>
    <li><a href="#sign-up">Sign Up</a></li>
    <li><a href="#log-in">Log In</a></li>
    <li><a href="team.html">Our Team</a></li>
  </ul>
  <div class="w3-container">
    <div class="w3-panel w3-card-2" id="about-docjourn">
      <h2>About Us</h2>
      <div id="about-content">
      <p>DocJourn is an attempt to create a medically aware society while it performs as an accessible and free-of-cost healthcare advisory. The website stands for a vision of a disease-free India through diagnosis which meet global standards. I seek to achieve ‘A graceful amalgamation of man and machine’. DocJourn also aims to earn excellence through this technology and make it available to every home, keeping informed every man, woman and child. A profile on the website, would give an individual, the power to make informed decisions for the benefit of their health and staying updated regarding the same. We are closely working with esteemed doctors and computer scientists to gather fruitful insights and would be humbled to have others join in on our mission to promote awareness for healthy living across all sections of society.

      </p>
      <p>Be healthy and conquer the day...</p>
      </div>
    </div>
    <h2 style="text-align:center;font-family:helvetica;">
    Create a Free DocJourn Account today..</h2>
    <div class="w3-panel w3-card-2" id="sign-up">
      <h2>Sign Up with Us!</h2>
      <!-- CREATE PHP PAGE FOR SIGNUP -->
      <div class="sign-up-area">
        <form action="signup.php" method="post">
          <label for="fname">First Name</label>
          <br>
          <input type="text" id="fname" name="FirstName" size="40"
          placeholder="John/Jane">
          <br>
          <label for="lname">Last Name</label>
          <br>
          <input type="text" id="lname" name="LastName" size="40"
          placeholder="Doe">
          <br>
          <label for="email">E-Mail</label>
          <br>
          <input type="email" id="email" name="Email" size="40"
          placeholder="jdoe@account.co.in">
          <br>
          <label for="pass">Password</label>
          <br>
          <input type="password" id="pass" name="pwd" size="40"
          placeholder="Select a strong password">
          <br><br>
          <input type="submit" value="Create Account">
        </form>
      </div><br>
    </div>
    <h2 style="text-align:center;font-family:helvetica;">Or...</h2>
    <div class="w3-panel w3-card-2" id="log-in">
      <h2>Login with your DocJourn account..</h2>
      <div class="log-in-area">
        <form method='post' action='signin.php'>
          <label for="email-login">Email</label>
          <br>
          <input type="text" id="email-login" name="Email-login" size="40"
          placeholder="jdoe@account.co.in">
          <br>
          <label for="password-login">Password</label>
          <br>
          <input type="password" id="pass-login" name="pwd-login" size="40"
          placeholder="Password">
          <br><br>
          <input id="login-sub" type="submit" value="LogIn">
        </form>
      </div><br>
    </div>
    <h2 style="text-align:center;font-family:helvetica;">
    We are here to assist you around the clock....</h2>
    <div class="w3-panel w3-card-2" id="contact-us">  
      <h2>Contact Us</h1>
      <b>Address</b>
      <p>Vellore Institute of Technology, Chennai Campus
      <p>Valandur-Kelambakkam Road, Chennai
      <p>Tamil Nadu - 600127</p>
      <b>E-Mail</b> <br>
      <a href="mailto:docjournservices@gmail.com?Subject=DocJourn%20Queries"
      target="_top">docjournservices@gmail.com</a>
      <br><br>
    </div>
  </div>
<div id="create">
&copy; Sumit Saha || Shamik Banerjee || Kaustav Choudhury
</div>
</body>
</body>
</html>
