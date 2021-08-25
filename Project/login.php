<!DOCTYPE html>
<html>
<head>
<title>
  Login
</title>

<style>
.headings{
            color:blue;
            font-family: Arial;
            background-color:yellow;
            text-align: right;
          }
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

form 

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 12px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}


.container {
  padding: 26px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
#example1 {
  padding: 25px;
  background: #9f6060;
  background-repeat: no-repeat;
  background-size: 1700px, 200px;
}
#search {
    width: 15em;  height: 1em;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <title>Login</title>

  <!-- Favicons-->
  <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
  
  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->    
    <link href="css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/layouts/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">

  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">

</head>
<body>
<h2 class="headings"><i>Electra</i></h2>
</body>
<body style="background-color: #0080ff">
<div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>

<!h4 class="headings"><!i><!/i><!/h4>
<h5 style="text-align: center; font-family:cursive;">Login </h5>
<div id="example1">

<form action="/action_page.php" method="post">
  <div class="imgcontainer">
    <img src="noimage.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
  
  
    <label for="uname"><b><i>Username</i></b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
   

    <label for="psw"><b><i>Password</i></b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <h4 style="background-color: green; text-align:center;"><a href="index.php" id="search" style="color: white">Login</a></h4>
    
    <h6 style="font-family:cursive; color: white;">New user!!</h6>
  </div>
    <div class="container" style="background-color:#9f6060">
    <button type="button" class="registerbtn" style="background-color:	#9f6060"><a href="register.php">Register</a></button>
    <button type="button" class="forgot_passwordbtn" style="background-color:	#9f6060"><a href=password.php>Forgot Password?</a></button>
  </div>
</form>
<script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/custom-script.js"></script>

</body>
</html>
