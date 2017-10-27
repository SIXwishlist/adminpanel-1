<?php
require_once 'include/dbconfig.php';

$ad=$_POST['firstname'];
$soyad=$_POST['lastname'];
$email=$_POST['email'];
$pword=$_POST['password'];
$username=$_POST['username'];
$msg="";

$sql_email="SELECT email FROM users WHERE email='$email';";
$mail_check=$conn->query($sql_email);
$sql_username="SELECT username FROM users WHERE username='$username';";
$username_check=$conn->query($sql_username);
if($mail_check->num_rows > 0)
{
  $msg="This email adress is already exist:".$email;		
}
else if($username_check->num_rows > 0)
{
  $msg="This username is already taken:".$username;		
}
else			
{
  
	$sql = "INSERT INTO users (firstname, lastname, email, password,username)
  VALUES ('$ad', '$soyad', '$email', '$pword','$username')";

  if ($conn->query($sql) === TRUE) {
   $msg= "Registration is successful.";
 } 
 else 
 {
  $msg= "Error: " . $sql . "<br>" . $conn->error;
  
}		

}

$conn->close();


?>
<html>
<header>

 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</header>
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
          
          <li><a href="login.php">Login<span class="glyphicon glyphicon-user" aria-hidden="true"></a></li>
            
          </ul>
        </div>
      </div>
      <div class="row">
	<div class="text-center">
		<?php echo $msg; ?>
		<form action="login.php" method="post">
		  &nbsp;&nbsp;&nbsp;
		  <input type="submit" value="Login"/>
		</form>
		<form action="signin.php" method="post">
		  &nbsp;&nbsp;&nbsp;
		  <input type="submit" value="Back"/>
		</form>
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
