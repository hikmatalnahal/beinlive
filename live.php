<!DOCTYPE html>
<html lang="en">
<head>
  	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="assets/css/sina-nav1.css"/>
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css"/>
	<link rel="stylesheet" type="text/css" href="assets/css/flaticon.css">
	<link rel="stylesheet" type="text/css" href="assets/css/line-awesome.css"/>
	<link rel="stylesheet" type="text/css" href="assets/css/animate.min.css" />
	<link rel="stylesheet" type="text/css" href="assets/lib/aos-master/aos.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/hover.css" />

	<link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
	<link rel="shortcut icon" href="assets/imgs/logo.jpg" />
	<title>البث المباشر</title>

    <style>
		.copyright{
			position: relative;
			display: block;
			margin-right: 250px;
			margin-top: 50px;
		}
	</style>

</head>
<body>
    <div class="container-fluid aos-all" id="transcroller-body" >
        <header class="nav-container">
            <nav class="sina-nav mobile-sidebar navbar-transparent navbar-fixed navbar-reverse" data-top="0">
                <div class="container">
                    <div class="extension-nav">
                        <ul>
                            <li> <a href="https://www.facebook.com/123456samy.miqdad" target="_blank" rel="noopener noreferrer"><i class="fa fa-facebook"></i></a></li>
                            <li> <a href="https://www.instagram.com/h6x6_/?fbclid=IwAR13KA7mWWd8Gs7Kkw4kuz5_2_p8h11qu0uB2YEHALSHeaURzzrNRRJD5IM" target="_blank" rel="noopener noreferrer"><i class="fa fa-instagram"></i></a></li>
                            <li> <a href="https://twitter.com/Samihassn6" target="_blank" rel="noopener noreferrer"><i class="fa fa-twitter"></i></a></li>
                            
                        </ul>
                    </div><!-- .extension-nav -->

                    <div class="sina-nav-header social-on">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="sina-brand" href="index.php">
                            <img src="assets/imgs/logo.jpg" width="100%">
                        </a>
                    </div><!-- .sina-nav-header -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="sina-menu sina-menu-full-right" data-aos="fade-left" data-aos-easing="ease-out-cubic">
                            <li><a href="../beinlive/index.php" class="hvr-underline-from-center">الرئيسية</a></li>
                            <li>
                                <a href="../beinlive/live.php" target="_blank" rel="noopener noreferrer" class="hvr-underline-from-center">بث مباشر</a>
                                
                            </li>
                            <li><a href="../beinlive/tabel.php" class="hvr-underline-from-center">جدول المباريات </a></li>
                            <li></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- .container -->
            </nav>
        </header>
        <h1> بث مباشر بين لايف  </h1>
        <span>beinlive</span>
      <section class="container-fluid">
<p><iframe allowfullscreen='true' frameborder='0' height='500px' scrolling='1' src='https://egy.koooora-online.com/archives/albaplayer/bein-sports-1' width='100%'>beinlive</iframe></p>
    </section>
      
     		<!-- Optional JavaScript -->
                	  <script type="text/javascript" src="assets/js/jquery-3.5.1.slim.min.js"></script>
             <script type="text/javascript" src="assets/js/jquery.min.js"></script>
             <script type="text/javascript" src="assets/js/bootstrap.js"></script>
               <script src="assets/lib/aos-master/aos.js"></script>
             <script src="assets/js/sina-nav1.js"></script>
             <script type="text/javascript" src="assets/js/custom.js"></script>
       
           <!-- For All Plug-in Activation & Others -->
           <script type="text/javascript">
               // $('#collapseOne').on('shown.bs.collapse', function () {
               // 	  this.scrollIntoView();
               // });
               $('.counter-count').each(function () {
                   $(this).prop('Counter',0).animate({
                       Counter: $(this).text()
                   }, {
                       duration: 5000,
                       easing: 'swing',
                       step: function (now) {
                           $(this).text(Math.ceil(now));
                       }
                   });
               });
               $(document).ready(function(){
                   $(".scroll-top").click(function() {
                       $("html, body").animate({ 
                           scrollTop: 0 
                       },);
                       return false;
                   });
               });
                   
                 AOS.init({
                   easing: 'ease-in-out-sine'
                 });
       
           </script>
</body>
</html>