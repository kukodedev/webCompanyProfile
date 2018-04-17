<?php if ($this->session->userdata('logged_in')) { ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">



      <!-- CSS Global Compulsory -->
	  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">

	  <!-- CSS Unify -->
	  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/unify.css">

	 

	  <!-- CSS Unify -->
	  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/unify-core.css">
	  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/unify-components.css">
	  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/unify-globals.css">


	  <!-- plugin css -->
	  <link  rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.fancybox.min.css">
	  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/animate.css">
	  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/icon-hs/style.css">
	  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/hs.megamenu.css">
	   <link rel="stylesheet" href="<?php echo base_url();?>assets/css/hamburgers.min.css">
	   <link rel="stylesheet" href="<?php echo base_url();?>assets/css/typed.css">
	   <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
	   <link  rel="stylesheet" href="<?php echo base_url()?>assets/css/jquery-ui.min.css">
	   
</head>
<body>

	<header id="js-header" class="u-header u-header--sticky-top u-header--toggle-section u-header--change-appearance" data-header-fix-moment="500">
			
		      <div class="u-header__section u-header__section--light g-bg-primary-gradient-opacity-v1 g-transition-0_3 g-py-10" data-header-fix-moment-exclude="g-bg-black g-py-10" data-header-fix-moment-classes="g-bg-black-opacity-0_7 u-shadow-v18 g-py-0">
		        <nav class="js-mega-menu navbar navbar-expand-lg">
		          <div class="container">
		            <!-- Responsive Toggle Button -->
		            <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-top-3 g-right-0" type="button" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
		              <span class="hamburger hamburger--slider">
		            <span class="hamburger-box">
		              <span class="hamburger-inner"></span>
		              </span>
		              </span>
		            </button>
		            <!-- End Responsive Toggle Button -->

		            <!-- Logo -->
		            <a href="<?php echo base_url()?>Admin" class="navbar-brand">
		              <img src="<?php echo base_url()?>assets/img/logo.png" alt="Outbounditu.com">
		            </a>
		            <!-- End Logo -->

		            <!-- Navigation -->
		            <div class="collapse navbar-collapse align-items-center flex-sm-row g-pt-10 g-pt-5--lg" id="navBar">
		              <ul class="navbar-nav ml-auto text-uppercase  g-font-weight-600 u-main-nav-v2 u-sub-menu-v2">
		                <li class="nav-item g-mx-2--md g-mx-5--xl g-mb-5 g-mb-0--lg ">
		                  <a href="<?php echo base_url()?>Admin" class="nav-link g-color-white">Home</a>
		                </li>
		                 <li class="nav-item hs-has-sub-menu g-mx-2--md g-mx-5--xl g-mb-5 g-mb-0--lg">
		                  <a href="#" class="nav-link g-color-white" id="nav-link-1" aria-haspopup="true" aria-expanded="false" aria-controls="nav-submenu-1">Content</a>
		                  <!-- Submenu -->
		                  <ul class="hs-sub-menu list-unstyled g-mt-17--lg g-mt-7--lg--scrolling" id="nav-submenu-1" aria-labelledby="nav-link-1">
		                    <li><a href="<?php echo base_url()?>Back/news/display">News</a></li>
		                    <li><a href="<?php echo base_url()?>Back/fun/display">Outbound itu lucu</a></li>
		                    <li><a href="<?php echo base_url()?>Back/story/display">Outbound itu bercerita</a></li>
		                     <li><a href="<?php echo base_url()?>Back/galeri/display">Galeri</a></li>
		                  </ul>
		                  <!-- End Submenu -->
		                </li>
		                 <li class="nav-item g-mx-2--md g-mx-5--xl g-mb-5 g-mb-0--lg ">
		                  <a href="<?php echo base_url()?>Login/logout" class="btn btn-danger g-color-white">Logout</a>
		                </li>

		               
		              
		                
		              </ul>
		            </div>
		            <!-- End Navigation -->
		          </div>
		        </nav>
		      </div>
		    </header>


		    <div class="container g-mt-100">

		    	<?php  $this->load->view($main_admin); ?>

		    </div>








	<!-- JS Global Compulsory -->
	  <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
	  <script src="<?php echo base_url();?>assets/js/jquery-migrate.min.js"></script>
	  <script src="<?php echo base_url();?>assets/js/jquery.easing.js"></script>
	  <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
	  <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

	  <!-- jQuery UI Core -->
      <script  src="<?php echo base_url();?>assets/js/widget.js"></script>
      

	    <!-- JS Implementing Plugins -->
	  <script  src="<?php echo base_url();?>assets/js/appear.js"></script>
	  <script  src="<?php echo base_url();?>assets/js/jquery.fancybox.min.js"></script>
  	  <script src="<?php echo base_url();?>assets/js/hs.megamenu.js"></script>
  	  <script src="<?php echo base_url();?>assets/js/typed.min.js"></script>

	  <!-- JS Unify -->
	  <script src="<?php echo base_url();?>assets/js/hs.core.js"></script>
	  <script src="<?php echo base_url();?>assets/js/hs.header.js"></script>
	  <script src="<?php echo base_url();?>assets/js/hs.hamburgers.js"></script>
	  <script src="<?php echo base_url();?>assets/js/hs.onscroll-animation.js"></script>
	  <script  src="<?php echo base_url();?>assets/js/hs.counter.js"></script>
	   <script  src="<?php echo base_url();?>assets/js/hs.popup.js"></script>
	   <script  src="<?php echo base_url();?>assets/js/hs.datepicker.js"></script>

	   <!-- jQuery UI Widgets -->
       


	  <!-- plugin commons -->
	  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	  <script src="<?php echo base_url();?>assets/js/hs.text-slideshow.js"></script>
	  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
	  <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=m918d3iqh1nsgsiv3fn78umj3zam4hvy2qoikw0giohqiujs"></script>
	  <script>tinymce.init({ selector:'textarea' });</script>
	  <script type="text/javascript">
	  		$(document).ready(function(){
			      $('.slider').bxSlider({
			      	mode : 'vertical',
			      	auto : true,
			      	touchEnabled : true,
			      	controls : false
			      });
			    });
	  </script>
	  <script type="text/javascript">
	  		$(document).on('ready', function () {
                // initialization of scroll animation
                $.HSCore.components.HSOnScrollAnimation.init('[data-animation]');
                // initialization of popups
    			$.HSCore.components.HSPopup.init('.js-fancybox');
                // initialization of text animation (typing)
		        $(".u-text-animation.u-text-animation--typing").typed({
		          strings: [
		            "ya disini",
		            "Belajarnya ya disini",
		            "serunya ya disini"
		          ],
		          typeSpeed: 60,
		          loop: true,
		          backDelay: 1500
		        });
		        // initialization of counters
                var counters = $.HSCore.components.HSCounter.init('[class*="js-counter"]');



              });

	  		 $(window).on('load', function () {
			      // initialization of header
			      $.HSCore.components.HSHeader.init($('#js-header'));
			      $.HSCore.helpers.HSHamburgers.init('.hamburger');
			      $('.js-mega-menu').HSMegaMenu({
			        event: 'hover',
			        pageContainer: $('.container'),
			        breakpoint: 991
			      });
			     
			    });

	  </script>
</body>
</html>
<?php } ?>