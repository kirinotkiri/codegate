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
<title>Home</title>
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
<body>
	<!-- header section start -->
	<div class="header_section">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="logo"><a href="index.php"><img src="images/logo.png"></a></div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="index.php">HOME</a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link" href="levelmain.php">Game</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php">About</a>
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
	<!-- header section end -->
  <!-- banner section start -->
  <div class="banner_section layout_padding">
    <div class="container">
      <div id="my_slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-md-6">
                <h1 class="video_text">Video games</h1>
                <h1 class="controller_text">controller</h1>
                <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
                <div class="shop_bt"><a href="#">Shop Now</a></div>
              </div>
              <div class="col-md-6">
                <div class="image_1"><img src="images/img-1.png"></div>
            </div>
          </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-6">
                <h1 class="video_text">Video games</h1>
                <h1 class="controller_text">controller</h1>
                <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
                <div class="shop_bt"><a href="#">Shop Now</a></div>
              </div>
              <div class="col-md-6">
                <div class="image_1"><img src="images/img-1.png"></div>
            </div>
          </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-6">
                <h1 class="video_text">Video games</h1>
                <h1 class="controller_text">controller</h1>
                <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
                <div class="shop_bt"><a href="#">Shop Now</a></div>
              </div>
              <div class="col-md-6">
                <div class="image_1"><img src="images/img-1.png"></div>
            </div>
          </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
          <i class="fa fa-angle-left"></i>
        </a>
        <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
          <i class="fa fa-angle-right"></i>
        </a>
      </div>
    </div>
  </div>
  <!-- banner section end -->
  <!-- about section start -->
  <div class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="image_2"><img src="images/img-2.png"></div>
        </div>
        <div class="col-md-6">
          <h1 class="about_text">ABOUT</h1>
          <p class="lorem_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
          <div class="shop_bt_2"><a href="#">Shop Now</a></div>
        </div>
      </div>
    </div>
  </div>
  <!-- about section end -->
  <!-- product section start -->
  <div class="product_section layout_padding">
    <div class="container">
      <div class="product_text">Our <span style="color: #5ca0e9;">products</span></div>
      <p class="long_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
      <div class="product_section_2">
        <div class="row">
          <div class="col-md-6">
            <div class="image_2"><img src="images/img-3.png"></div>
            <div class="price_text">Price $ <span style="color: #3a3a38;">200</span></div>
            <h1 class="game_text">Video Game</h1>
            <p class="long_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
          </div>
          <div class="col-md-6">
            <div class="image_2"><img src="images/img-3.png"></div>
            <div class="price_text">Price $ <span style="color: #3a3a38;">300</span></div>
            <h1 class="game_text">Video Game</h1>
            <p class="long_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
          </div>
        </div>
      </div>
      <div class="see_main">
        <div class="see_bt"><a href="#">See More</a></div>
      </div>
    </div>
  </div>
  <!-- product section end -->
  <!-- video section start -->
  <div class="video_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="video_text_2">3d video game</h1>
          <h1 class="controller_text_2">remoto control</h1>
          <p class="banner_text_2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
          <div class="shop_bt"><a href="#">Shop Now</a></div>
        </div>
        <div class="col-md-6">
          <div class="image_4"><img src="images/img-4.png"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- video section end -->
  <!-- testimonial section start -->
  <div class="testimonial_section layout_padding">
    <div class="container">
      <h1 class="testimonial_text">Testimonial</h1>
      <p class="ipsum_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
      <div class="testimonial_section_2">
        <div class="box_main">
          <div class="quote_icon"><img src="images/quote-icon.png"></div>
          <p class="dolor_text"> dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </p>
          <div class="client_main">
            <div class="client_left">
              <div class="images_5"><img src="images/img-5.png"></div>
            </div>
            <div class="client_right">
              <h1 class="sandy_text">Sandy Delex</h1>
              <p class="sandy_text_1">Reprehenderit</p>
            </div>
          </div>
        </div>
      </div>
      <div class="see_main">
        <div class="see_bt"><a href="#">See More</a></div>
      </div>
    </div>
  </div>
  <!-- testimonial section end -->
  <!-- contact section start -->
  <div class="contact_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="email_box">
                    <div class="input_main">
                       <div class="container">
                          <form action="/action_page.php">
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="Name" name="Name">
                            </div>
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="Email" name="Name">
                            </div>
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="Phone Numbar" name="Email">
                            </div>
                            <div class="form-group">
                                <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                            </div>
                          </form>   
                       </div> 
                        <div class="main_bt"><a href="#">SEND</a></div>                  
                    </div>
                 </div>
        </div>
        <div class="col-md-6">
          <div class="image_6"><img src="images/img-6.png"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- contact section end -->
  <!-- footer section start -->
  <div class="section_footer ">
      <div class="container"> 
          <div class="footer_section_2">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3">
                  <h2 class="account_text">About Us</h2>
                  <p class="ipsum_text_2">dolor sit amet, consectetur magna aliqua. Ut enim ad minim veniam, quisdotempor incididunt r</p>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                  <h2 class="account_text">Useful Link</h2>
                  <div class="useful_link">
                    <ul>
                      <li><a href="#">Video games</a></li>
                      <li><a href="#">Remote control</a></li>
                      <li><a href="#">3d controller</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                <h2 class="account_text">Contact Us</h2>
                <p class="ipsum_text_2">dolor sit amet, consectetur magna aliqua. quisdotempor incididunt ut e </p>
                </div>
          <div class="col-sm-6 col-md-6 col-lg-3">
            <h2 class="account_text">Newsletter</h2>
            <input type="" class="email_text" placeholder="Enter Your Email" name="Enter Your Email">
            <button class="subscribr_bt">SUBSCRIBE</button>
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
      <p class="copyright_text">Copyright 2020 All Right Reserved By <a href="https://html.design/"> Free html Templates</p>
    </div>
  </div>
  <!-- copyright section end -->
  <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript --> 
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
    $(document).ready(function(){
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
        });
    </script>
</body>
</html>