<!DOCTYPE php>
<html>

<?php
    session_start();
    if (isset($_SESSION['username'])) {
      header("Location: index.php");
      exit;
    }
  ?>
<style>
.login-box {
  width: 400px;
  padding: 40px;
  background-color: white;
  box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2);
  text-align: center;
}

.container{
  padding-top: 300px;
}

.login-box h1 {
  font-size: 36px;
  margin-bottom: 20px;
  color: #333;
}
</style>
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>Login</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">	
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="css/responsive.css">
<!-- fevicon -->
<link rel="icon" href="images/fevicon.png" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets --> 
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>

<div class="header_section">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="logo"><a href="index.php"><img src="images/logo.png"></a></div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Home</a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link" href="levelmain.php">Game</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php#about">About</a>
                </li>
               
				</ul>
				<ul class="nav navbar-nav navbar-right">
				<?php
					if (!isset($_SESSION['username'])) {
						echo '<li class="nav-item active">
                  <a class="nav-link" href="login_page.php">SIGN IN</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="registerpage.php">REGISTER</a>
                </li>';
						}else{
							echo ('<li class="nav-item active">
                  <a class="nav-link" href="profilepage.php">'.$_SESSION['username'].'</a>
                </li><li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>');
						}
				?>
                
              </ul>
            </div>
        </nav>
	</div>

<body>
<div class="container" align="center">
     <div class="login-box">
    <div class="card-header">
      <div class="log">Login</div>
    </div>
    <form action="login.php" method="post">
      <div class="form-group">
        <label for="username">Username:</label>
        <input required="" name="username" id="username" type="text">
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input required="" name="password" id="password" type="password">
      </div>
      <div class="form-group">
        <input value="Login" type="submit" name="submit">
      </div>
    </form>
  </div>
    </div>
  

</body>

</html>