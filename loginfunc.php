<?php
require_once 'include/dbconfig.php';

$email=$_POST['email'];
$sifre=$_POST['password'];

session_start();
ob_start();

$sqlsifre = "SELECT id, password,firstname FROM users WHERE email='$email' OR username='$email';";
$sifre_dogrulama=($conn->query($sqlsifre));

if($row = $sifre_dogrulama->fetch_assoc()) 
{
 
 if($row["password"]==$sifre)
 {
  $_SESSION["login"] = "true";
  $_SESSION["usr_id"] = $row["id"];
  $_SESSION["email"] = $email;
  $_SESSION["password"] = $row["password"];
  
  
  $msg= "Welcome Dear ". $row["firstname"];
  
  header( "Refresh: 2; url=adminpanel.php" );
}
else 
{
 $msg="Password is incorrect!";
 
 header("Refresh: 2; url=login.php");
}

}  
else 
{
  $msg= "There is no user with this username or email.";
  header("Refresh: 4; url=login.php");
  
}
$conn->close();

?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">

    <div class="navbar navbar-default">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us<b class="caret"></b></a>
            <ul class="dropdown-menu">
              
              <li><a href="">History</a></li>
              
            </ul>
          </li>
          
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">General <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a target="_blank"  href="">A</a></li>
              <li><a target="_blank"  href="">B</a></li>
            </ul>
          </li>
          
        </ul>
        <ul class="nav navbar-nav navbar-right">
          
          
           
          </ul>
        </div>
      </div>
      <div class="row">
	<div class="text-center">
        	<?php echo $msg; ?>
	</div>
      </div>
    </div> 
    <div id="footer">
      <div class="container">
        <p class="text-muted credit">copyright Sena Hocamoglu</p>
      </div>
    </div>


  </body>
  </html>
