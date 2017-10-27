<?php
session_start();

if(!isset($_SESSION["login"])){
  echo "You dont have permission.";
  header("Refresh: 2; url=login.php");
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Panel</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="style/css/general.css" rel="stylesheet">
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
        <a class="navbar-brand" href="adminpanel.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a>
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

          <li>
           <a href="exit.php">Logout</a>
         </li>

       </ul>
     </div>
   </div>

   <h3>Admin Panel</h3>

   <div class="center">
     <div class="col-md-3">
      <div class="leftside">
        <ul>
          <li><a href="">Main Page</a></li>
          <li><a href="">New Post</a></li>
          <li><a href="">Add New Brand</a></li>
          <li><a href="">Posts</a></li>
          <li><a href="">Brands</a></li>
        </ul>

      </div>
    </div>
    <div class="col-md-9">


    </div>
  </div>

  <div class="footer">
    <p>copyright Sena Hocamoglu</p>
  </div>
</div>
</div>
</body>
</html>
