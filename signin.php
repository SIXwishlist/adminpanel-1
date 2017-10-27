<html>
<head>
  <title>Register</title>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
    function validateForm() {
	var username = document.forms["signinform"]["username"].value;
      if (username == null || username == "") {
        alert("Username cant be null!");
        return false;
      }
      var firstname = document.forms["signinform"]["firstname"].value;
      if (firstname == null || firstname == "") {
        alert("Name cant be null!");
        return false;
      }
      var lastname = document.forms["signinform"]["lastname"].value;
      if (lastname == null || lastname == "") {
        alert("surname cant be null!");
        return false;
      }
      var email = document.forms["signinform"]["email"].value;
      if (email == null || email == "") {
        alert("E-mail cant be null!");
        return false;
      }
      var atpos=email.indexOf("@");
      var dotpos=email.lastIndexOf(".");
      if ( atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length )
      {
        alert("Email is not in a correct form!");
        return false;
      } 
      
      var password = document.forms["signinform"]["password"].value;
      if (password == null || password == "") {
        alert("Password cant be null!");
        return false;
      }
      if (password.length < 8) {
        alert("Password must be 8 characters minimum!");
        return false;
      }
      
    }

  </script>
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
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us <b class="caret"></b></a>
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
            <a href="login.php">Login<span class="glyphicon glyphicon-user" aria-hidden="true"></a>
            </li>
            
          </ul>
        </div>
      </div>
      <div class="row">
       <div class="col-md-offset-5 col-md-3">
        <div class="form-login text-center">
         <form name="signinform" onsubmit="return validateForm()" action="signinfunc.php" method="post">
          <h4>Register</h4>
	<input type="text" name="username" class="form-control input-sm chat-input" 	placeholder="username.." />
        </br>
          <input type="text" name="firstname" class="form-control input-sm chat-input" placeholder="name.." />
        </br>
        <input type="text" name="lastname" class="form-control input-sm chat-input" placeholder="surname.." />
      </br>
      <input type="text" name="email" class="form-control input-sm chat-input" placeholder="e-mail.." />
    </br>
    <input type="password" name="password" class="form-control input-sm chat-input" placeholder="password" />
  </br>
  <div class="wrapper">
   <p></p>
   <span>
    <input type="submit" class="btn btn-primary btn-sm" value="Register"/>
    <a class="btn btn-primary btn-sm" href="javascript:history.go(-1)">Back</a>
  </span>
</div>
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
