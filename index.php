<?php 
include './database/Connection.php';
if(session_status() == PHP_SESSION_NONE)
{
	session_start();//start session if session not start
}
$customer = isset($_SESSION['customer']) ? $_SESSION['customer']: [] ;
// $customer = ($_SESSION['customer'])  ;

 ?>

<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="utf-8" >
	
<meta name="viewport" content="width=devidev-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Online Ticket Reservation</title>
	
	
<!-- [ FONT-AWESOME ICON ] 
        
=========================================================================================================================-->
	
<link rel="stylesheet" type="text/css" href="library/font-awesome-4.3.0/css/font-awesome.min.css">

	
<!-- [ PLUGIN STYLESHEET ]
        
=========================================================================================================================-->
	
<link rel="shortcut icon" type="image/x-icon" href="images/icon.png">
	
<link rel="stylesheet" type="text/css" href="css/animate.css">
	
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
        
<link rel="stylesheet" type="text/css" href="css/owl.theme.css">
	
<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
	
<!-- [ Boot STYLESHEET ]
        
=========================================================================================================================-->
	
<link rel="stylesheet" type="text/css" href="library/bootstrap/css/bootstrap-theme.min.css">
	
<link rel="stylesheet" type="text/css" href="library/bootstrap/css/bootstrap.css">

       
<!-- [ DEFAULT STYLESHEET ] 
        
=========================================================================================================================-->
        
<link rel="stylesheet" type="text/css" href="css/responsive.css">
	
<link rel="stylesheet" type="text/css" href="css/color/rose.css">
<link rel="stylesheet" type="text/css"  href="./css/app.css">

<link rel="stylesheet" href="./css/reserved.css">

</head>
<body >

<!-- [ LOADERs ]

================================================================================================================================-->
	
    <div class="preloader">
    
<div class="loader theme_background_color">
        
<span></span>
      
    
</div>
</div>
<!-- [ /PRELOADER ]

=============================================================================================================================-->

<!-- [WRAPPER ]

=============================================================================================================================-->

<div class="wrapper">
  
<!-- [NAV]
 
============================================================================================================================-->    
   
<!-- Navigation
    ==========================================-->
    
<nav  class=" nim-menu navbar navbar-default navbar-fixed-top">
      
<div class="container">
        
<!-- Brand and toggle get grouped for better mobile display -->
        
<div class="navbar-header">
          
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            
<span class="sr-only">Toggle navigation</span>
            
<span class="icon-bar"></span>
            
<span class="icon-bar"></span>
            
<span class="icon-bar"></span>
          
</button>
            
<a class="navbar-brand" href="index.php">Online<span class="themecolor"> T</span>ickets</a>
        
</div>

        
<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">      
<ul class="nav navbar-nav navbar-right">
            
<li><a href="#home" class="page-scroll"><h3>Trang chủ</h3></a></li>
<li><a href="reserved.php" class="page-scroll"><h3>Đặt vé</h3></a></li>
<li><a href="#services" class="page-scroll"><h3>Vé đã đặt</h3></a></li>           
<li><a href="#about-us" class="page-scroll"><h3>Về chúng tôi</h3></a></li>           
<li><a href="#contact" class="page-scroll"><h3>Liên hệ</h3></a></li> 
					<?php if (isset($customer['name'])) {?>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle " data-toggle="dropdown"><h3><?php echo $customer['name'] ?></h3> <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<!-- <li><a href="register.php">Đăng ký</a></li>
							<li><a href="dang-nhap.php">Đăng nhập</a></li> -->
							<li><a href="logout.php">Đăng xuất</a></li>
						</ul>
					</li>
			<?php }else{ ?>
				<li class="dropdown">
						<a href="#" class="dropdown-toggle " data-toggle="dropdown"><h3>Tài Khoản</h3> <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="register.php">Đăng ký</a></li>
							<li><a href="dang-nhap.php">Đăng nhập</a></li>
							<!-- <li><a href="admin/logout.php">Đăng xuất</a></li> -->
						</ul>
					</li>
   		<?php } ?>



<div>
      
<!-- /.navbar-collapse -->
      
</div><!-- /.container-fluid -->
    
</nav>


   
<!-- [/NAV]
 
============================================================================================================================--> 
    
   
<!-- [/MAIN-HEADING]
 
============================================================================================================================--> 
   
<section class="main-heading" id="home">
       
<div class="overlay">
           
<div class="container">
               
<div class="row">
                   
<div class="main-heading-content col-md-12 col-sm-12 text-center">
        
<h1 class="main-heading-title"><span class="main-element themecolor" data-elements=" Online Ticket, Online Ticket, Online Ticket"></span></h1>
 
<h1 class="main-heading-title"><span class="main-element themecolor" data-elements="Dịch Vụ Đặt Vé Tàu, Dịch Vụ Đặt Vé Tàu, Dịch Vụ Đặt Vé Tàu"></span></h1>
       
<p class="main-heading-text">CHÀO MỪNG BẠN ĐẾN VỚI<br/>DỊCH VỤ ĐẶT VÉ TÀU ONLINE</p>
        
<div class="btn-bar">
          
<a href="reserved.php" class="btn btn-custom theme_background_color">Đặt Ngay</a>
                 
</div>
      
</div>
               
</div>
           
</div>
       
</div>  
      
   
</section>
 
<section class="main-heading" id="home">
       
<div class="overlay">
           
<div class="container">
               
<div class="row">
                   
<div class="main-heading-content col-md-12 col-sm-12 text-center">
        
<h1 class="main-heading-title">CHÚNG TÔI SẼ GIÚP BẠN</h1>
        
<p class="main-heading-text">Đặt vé ngay hôm nay đễ nhận được những ưu đãi hấp dẫn nhất
<br/>Dịch vụ của chúng tôi đảm bảo an toàn, chất lượng đến khách hàng</p>
        
<div class="btn-bar">
          
<a href="#" class="btn btn-custom theme_background_color">Bắt Đầu Ngay</a>
          
<a href="#contact" class="btn btn-custom-outline">Liên Hệ Với Chúng Tôi</a>
        
</div>
      
</div>
               
</div>
           
</div>
       
</div>  
      
   
</section>
    
 
<!-- [/MAIN-HEADING]
 
============================================================================================================================-->
 
 
 
<!-- [ABOUT US]
 
============================================================================================================================-->
 
<section class="aboutus white-background black" id="one">
     
<div id="about-us" class="container">
<div  class="container">
         
<div class="row">
             
<div   class="col-md-12 text-center black">
                 
<h3 class="title">Về <span class="themecolor">Chúng Tôi</span></h3>
            
<!-- <p class="a-slog">Lorem ipsum dolor sit amet ne onsectetuer adipiscing elit. Aenean commodo ligula eget dolor in tashin ty</p>  -->
             
</div>
         
</div>
         
<div class="gap">
             
         
</div>
         
         
<div class="row about-box">
          
<div class="col-sm-4 text-center">
            
<div class="margin-bottom">
              
<i class="fa fa-newspaper-o"></i>
              
<h4>ĐẶT VÉ DỄ DÀNG</h4>
              
<p class="black">Thao tác đơn giản, đặt vé giữ chỗ nhanh chóng chỉ 30s.</p>
            
</div> <!-- / margin -->
          
</div> <!-- /col -->
          
<div class="col-sm-4 about-line text-center">
            
<div class="margin-bottom">
              
<i class="fa fa-diamond"></i>
              
<h4>ĐA DẠNG DỊCH VỤ</h4>
              
<p class="black">Hạng thấp đến cao, vé nào cũng có. Dòng xe đa dạng phục vụ mọi nhu cầu.</p>
            
</div> <!-- / margin -->
          
</div><!-- /col -->
          
<div class="col-sm-4 text-center">
            
<div class="margin-bottom">
              
<i class="fa fa-area-chart"></i>
              
<h4>PHỤC VỤ CHU ĐÁO</h4>
              
<p class="black">Dịch vụ chuyên nghiệp, phục vụ chu đáo, nhân sự tận tâm..</p>
            
</div> <!-- / margin -->
          
</div><!-- /col -->
        
</div> <!-- /row -->
         
         
         
         
     
</div>
 </section>
 
 
 
<!-- [/ABOUTUS]
 
 
============================================================================================================================-->
 
 
 
 
 
<!-- [INSPIRATION]
 
============================================================================================================================-->
 
<section class="inspiration" id="four">
     
<div class="overlay">
         
<div id="services" class="container">
             
<div class="row">
                
 <article class="col-md-12 text-center">
           
 <div class="intermediate-container">
             
 <div class="subheading">
                 
 <h4>Bạn Đã Sẵn Sàng Để <span class="themecolor">Tận Hưởng?</span></h4>
           
   </div>
             
 <div class="heading">
              
  <h2>THÔNG TIN ĐẶT VÉ CỦA BẠN Ở ĐÂY</h2>
          
    </div>
              
<div class="">
              
  <a class="btn btn-custom-outline" href="./addcart.php"><span>Xem Ngay</span></a>
        
      </div>
        
    </div>
       
   </article>
       
      </div>
    
    </div>
    
 </div>
 
</section>
 
 
<!-- [/INSPIRATION]
 

============================================================================================================================-->
 
 
<!-- [/SERVICES]
 
============================================================================================================================-->
 
 
 
<section class="services white-background black" id="seven">
     
 <div class="container">
        
<div class="row text-center">
          
<div class="col-md-12">
              
<h3 class="title">Chúng Tôi <span class="themecolor">ĐÃ LÀM</span></h3>
            
<p class="a-slog">An toàn là ưu tiên số 1
Chúng tôi tuân thủ Pháp luật và đặt An toàn của khách hàng lên hàng đầu, vì vậy chúng tôi luôn chú trọng vào việc cải thiện liên tục Chất lượng Phương tiện và Dịch vụ để phục vụ nhu cầu đa dạng của khách hàng</p>
          
</div> <!-- /col -->
        
</div> <!-- /row -->
        
<div class="gap"></div>

        
<div class="row">
          
                  
       
 </div> <!-- end row -->

      
</div>  <!-- container -->
    
</section>
 
 
 
<!-- [/SERVICES]
 
============================================================================================================================-->
 
 
 
<!-- [CONTACT]
 
============================================================================================================================-->
 
<!--sub-form-->
<section class="sub-form text-center" id="eight">
  
<div id="contact" class="container">
    <div class="col-md-12">
        
<h3 class="title">Đăng Ký Để Nhận<span class="themecolor"> Thông Báo Mới</span></h3>
            
<p class="lead">Online TicKets - Mang đến sự tiện lợi cho khách hàng</p>
    
</div> 
    
<div class="row">
        
<div class="col-md-3 col-sm-3"></div>
      
<div class="col-md-6 center-block col-sm-6 ">
        
<form id="mc-form">
          
<div class="input-group">
            
<input type="email" class="form-control" placeholder="Email Address" required id="mc-email">
           
<span class="input-group-btn">
            
<button type="submit" class="btn btn-default">ĐĂNG KÝ <i class="fa fa-envelope"></i> </button>
            
</span> </div>
          
<label for="mc-email" id="mc-notification"></label>
       
 </form>
      
</div>
   
 </div>
  
</div>

</section>

<!--sub-form end--> 


 
 
<!-- [/CONTACT]
 
============================================================================================================================-->
 
 
 
<!-- [FOOTER]
 
============================================================================================================================-->
 

<footer class="site-footer section-spacing text-center " id="eight">
    
  
<div class="container">
    
<div class="row">
      
<div class="col-md-4">
        
      
</div>
      
<div class="col-md-4"> <small>&copy; 2021, Brought To You By <a href="">Nhóm5</a> </small></div>
      
<div class="col-md-4"> 
        
<!--social-->
        
        
<ul class="social">
          
<li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter "></i></a></li>
          
<li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
          
<li><a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
        
</ul>
        
        
<!--social end--> 
        
      
</div>
    
</div>
  
</div>

</footer>

 
 
 
<!-- [/FOOTER]
 
============================================================================================================================-->
 
 
 

</div>
 

<!-- [ /WRAPPER ]

=============================================================================================================================-->

	
<!-- [ DEFAULT SCRIPT ] -->
	
<script src="library/modernizr.custom.97074.js"></script>
	
<script src="library/jquery-1.11.3.min.js"></script>
        
<script src="library/bootstrap/js/bootstrap.js"></script>
	
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>	
	
<!-- [ PLUGIN SCRIPT ] -->
        
<script src="library/vegas/vegas.min.js"></script>
	
<script src="js/plugins.js"></script>
        
<!-- [ TYPING SCRIPT ] -->
         
<script src="js/typed.js"></script>
         
<!-- [ COUNT SCRIPT ] -->
         
<script src="js/fappear.js"></script>
       
<script src="js/jquery.countTo.js"></script>
	
<!-- [ SLIDER SCRIPT ] -->  
        
<script src="js/owl.carousel.js"></script>
         
<script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>
        
<script type="text/javascript" src="js/SmoothScroll.js"></script>
        
        
<!-- [ COMMON SCRIPT ] -->
	<script src="js/common.js"></script>
  
</body>


</html>