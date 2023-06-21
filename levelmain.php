<!DOCTYPE php>
<html lang="en">
<?php
	include 'config.php';
    session_start();
    if (isset($_SESSION['username'])) {if ($_SERVER["REQUEST_METHOD"] == "GET") {
  $username = $_SESSION['username'];
  $sql = "SELECT * FROM user_info WHERE username = '$username'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();}
	
	
}?>
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>Levels</title>
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
                  <a class="nav-link" href="profilepage.php">'.$row['first_name'].'</a>
                </li><li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>');
						}
				?>
                
              </ul>
            </div>
            
        </nav>
	</div>
	
	<?php
		  $query1 = "SELECT * FROM user_progress WHERE username = '$username'";
		  $result = $conn->query($query1);
		  $row2 = $result->fetch_assoc();
       ?>

<body>
  <!--Levels Page Starts Here-->
  <div class="video_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="video_text_2">Try Out Our New</h1>
          <h1 class="controller_text_2">Problem Solving Quiz!</h1>
          <p class="banner_text_2">Are you ready to push the boundaries of your coding process? Embark on an adventure 
            into the LogicGate quiz, where your logical thinking, problem-solving abilities, and coding expertise will be 
            put to the ultimate test. Join a vibrant community of programmers, unlock new levels of understanding, 
            and emerge as a master of logic in the vast realm of programming.</p>
          <div class="shop_bt"><a href="level6.php">Play Now</a></div>
        </div>
        <div class="col-md-6">
          <div class="image_4"><img src="images/error.png"></div>
        </div>
      </div>
    </div>
  </div>

  <!--Levels Section BEGIN!!!-->
  <div class="levels">
    <h1 class="levels_text" align="center">LEVELS</h1>
      <div class = "levels_menu">
        <div class="level1_menutry">
        <a href="level1.php">
            <div class="gambaraja">
                <img src="img/level1.jpg">
            </div>
            <div class="text_level">
                <h3 style="color: #5ca0e9;">Level 1</h3>
                <h3>Basic IT Quiz</h3>
                <?php 
                  if ($row2['lv1']==1 && isset($_SESSION['username'])){
                      echo "<b style='color: #5ca0e9;'>Completed</b>";
                      }
                ?>
            </div>
          </a>
        </div>
        <div class="level1_menutry">
        <a href="level2.php">
            <div class="gambaraja">
                <img src="img/level2.jpg">
            </div>
            <div class="text_level">
                <h3 style="color: #5ca0e9;">Level 2</h3>
                <h3>Basic Code Quiz</h3>
                <?php 
                  if ($row2['lv2']==1 && isset($_SESSION['username'])){
                      echo "<b style='color: #5ca0e9;'>Completed</b>";
                      }
                ?>
            </div>
          </a>
        </div>
        <div class="level1_menutry">
        <a href="level2.php">
            <div class="gambaraja">
                <img src="img/level3.jpg">
            </div>
            <div class="text_level">
                <h3 style="color: #5ca0e9;">Level 3</h3>
                <h3>Python Quiz</h3>
                <?php 
                  if ($row2['lv3']==1 && isset($_SESSION['username'])){
                      echo "<b style='color: #5ca0e9;'>Completed</b>";
                      }
                ?>
            </div>
          </a>
        </div>
      </div>
      <!--Levels Page Bawah-->

      <div class = "levels_menu">
        <div class="level1_menutry">
        <a href="level4.php">
            <div class="gambaraja">
                <img src="img/level4.jpg">
            </div>
            <div class="text_level">
                <h3 style="color: #5ca0e9;">Level 4</h3>
                <h3>Java Quiz</h3>
                <?php 
                  if ($row2['lv4']==1 && isset($_SESSION['username'])){
                      echo "<b style='color: #5ca0e9;'>Completed</b>";
                      }
                ?>
            </div>
          </a>
        </div>
        <div class="level1_menutry">
        <a href="level5.php">
            <div class="gambaraja">
                <img src="img/level5.jpg">
            </div>
            <div class="text_level">
                <h3 style="color: #5ca0e9;">Level 5</h3>
                <h3>PHP Quiz</h3>
                <?php 
                  if ($row2['lv5']==1 && isset($_SESSION['username'])){
                      echo "<b style='color: #5ca0e9;'>Completed</b>";
                      }
                ?>
            </div>
          </a>
        </div>
        <div class="level1_menutry">
        <a href="level6.php">
            <div class="gambaraja">
                <img src="img/level6.png">
            </div>
            <div class="text_level">
                <h3 style="color: #5ca0e9;">Level 6</h3>
                <h3>Problem Solving Quiz</h3>
                <?php 
                  if ($row2['lv6']==1 && isset($_SESSION['username'])){
                      echo "<b style='color: #5ca0e9;'>Completed</b>";
                      }
                ?>
            </div>
          </a>
        </div>
      </div>
  </div>
   <!-- footer section start -->
 <div class="section_footer ">
      <div class="container"> 
          <div class="footer_section_2">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3">
                  <h2 class="account_text">About Us</h2>
                  <p class="ipsum_text_2">We're literally just a bunch of university students doing a project, we will never gonna give you up, we will never gonna let you down</p>
                </div>


          <div class="col-sm-6 col-md-6 col-lg-3">
          <h2 class="account_text">Contact Us</h2>
                <p class="ipsum_text_2">+6282112774927 <br>+628996233233</p>
          </div>
        </div>
      </div>
      <div class="social_icon">
        <ul>
          <li><a href="#"><img src="images/fb-icon.png"></a></li>
          <li><a href="#"><img src="images/twitter-icon.png"></a></li>
          <li><a href="#"><img src="images/linkdin-icon.png"></a></li>
          <li><a href="#"><img src="images/instagram-icon.png"></a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- footer section end -->
  <!-- copyright section start -->
  <div class="copyright_section">
  <div class="container">
      <p class="copyright_text">Copyright 2023 All Right Reserved By <a href="index.php"><img src="images/logo.png"></a> LogicGate</p>
    </div>
  </div>
  <!-- copyright section end -->
</body>
</html>
