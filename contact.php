<?php

// initializing variables

$usernameError = $emailError  = "";
$db = mysqli_connect('127.0.0.1:3308', 'root', '', 'form1');

// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form  $username = mysqli_real_escape_string($db, $_POST['username']);
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $telephone = $_POST['telephone'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  
 

  if (empty($_POST["name"])) {
    $usernameError = "Name is required!";
  } 
  if (empty($_POST["email"])) {
    $emailError = "Email is required!";
  } 


 

  // Finally, register user if there are no errors in the form
  if (empty($usernameError) && empty($emailError)) {

    $query = "INSERT INTO contact (name, surname, telephone, email, message) 
          VALUES('$name', '$surname', '$telephone', '$email', '$message')";
    mysqli_query($db, $query);
    header('location: index.html');
  }
  else {
 
  }
}



?>



<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style>
  html {
        background-color: #444;
        padding: 0 1em;
      }
      body {
        background-color: #FFF;
        font-family: 'Lato', sans-serif;
        margin: 1em auto;
        max-width: 55em;
        height: 70.625em;
      }
      #section-left {
        width: 35%;
        float: left;
        height: 100%;
        background-color: #fc7a70;
        color: #fff;
        text-align: center;
      }
      #section-left .section {
        margin-top: 40%;
        padding: 1em;
      }
      #section-left .section .logo {
        height: 150px;
        width: 150px;
        border-radius: 50%;
        margin: 0 auto;
        
      }
      .intro hr {
        width: 4em;
        display: block;
        height: 2px;
        border: 0px;
        border-top: 2px solid;
      }
      .dob {
        text-decoration: overline underline;
      }
      .intro .content {
        margin-bottom: 20px;
      }
      #contact {
        margin-top: 40px;
      }
      h1 {
        font-family: 'Open Sans', sans-serif;
        text-transform: uppercase;
      }
      #section-right {
        width: 65%;
        float: right;
        /*height: 100%;*/
      }
      #section-right .section {
        margin: 0 0 30px 0;
      }
      .wrapper {
        padding: 2em;
      }
      .fa {
        margin-right: 15px;
      }
      .wrapper .title {
        color: #fc7a70;
        font-size: 1.3em;
        font-variant: small-caps;
        letter-spacing: 0.1em;
        font-weight: bold;
        border-bottom: 2px solid #f2f2f2;
      }
      a:link {
        color: #fff;
        text-decoration: none;
      }
      a:visited {
        color: #fff;
        text-decoration: none;
      }
      a:hover {
        color: #fff;
        text-decoration: none;
      }
      a:active {
        color: #fff;
        text-decoration: none;
      }
      h2 {
        text-transform: uppercase;
        font-size: 1em;
      }
      h3 {
        font-size: 0.8em;
        text-transform: uppercase;
        font-weight: normal;
      }
#loading-img{
display:none;
}
.response_msg{
margin-top:10px;
font-size:13px;
background:#E5D669;
color:#ffffff;
width:250px;
padding:3px;
display:none;
}
</style>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-8">
<h1>Enter Your Information</h1>
<form action="contact.php" method="POST" id="signup-form" class="signup-form">
<h2 class="form-title">Contact me</h2>
<div class="form-group">
<input type="text" class="form-input" name="name" id="name" placeholder="Your Name" />
<span class="error1" style="color: red;font-size: 15px;position: absolute;left: 340px;top: 120px;"><?php echo $usernameError;?></span>
</div>
<div class="form-group">
<input type="text" class="form-input" name="surname" id="surName" placeholder="Your Surname" />
</div>
<div class="form-group">
<input type="text" class="form-input" name="telephone" id="telephone" placeholder="Phone Number" />
</div>
<div class="form-group">
<input type="text" class="form-input" name="email" id="email" placeholder="Your Email" />
<span class="error1" style="width:150px;color: red;font-size: 15px;position: absolute;left: 350px;top: 340px;"><?php echo $emailError;?></span>
</div>
<div class="form-group">
<input type="text" class="form-input" name="message" style="color: #999;height: 120px;" placeholder="Comment" />
</div>
<div class="form-group">
<input type="submit" name="submit" id="submit" class="form-submit" value="Submit" />
</div>
</form>
<div class="response_msg"></div>
</div>
</div>
</div>
</body>
</html>