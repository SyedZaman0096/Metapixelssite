<?php

if (isset($_SERVER['HTTPS'])) {
  $requesMet = "https";
}else{
  $requesMet = "http";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  
<base href="<?= $requesMet.'://'.$_SERVER['HTTP_HOST'].'/' ?>">

<link rel="icon" href="assets/img/favicon.png" type="image/x-icon" />
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
      <meta name="description" content="">
      <title>Metapixels Inc</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/css/layout.css">
      <link rel="stylesheet" href="assets/css/responsive.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link rel="stylesheet" href="assets/css/animate.css">
      <link rel="stylesheet" href="assets/css/responsive.css">
      <meta name="ip2loc" content="<?php echo $_SERVER['REMOTE_ADDR']; ?>">
      <meta name="page_url" content="<?php echo $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>">
      <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
</head>



<body>
  
   	<header class="">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-4">
              <a href="/" class="header-logo d-block">
                
                <img loading="lazy" class="img-fluid" src="assets/images/logo.png" alt="*">
                
              </a>
            </div>
            <div class="col-md-8">
              <ul class="header-btn d-flex align-items-center">
                <li><a href="tel:+1 302 202 0992" class="phone-btn"><img loading="lazy" src="assets/images/usa-flag.gif" alt="*">+1 302 202 0992</a></li>
                <!-- <li><a href="tel:+971 50 213 8220" class="phone-btn"><img loading="lazy" src="assets/images/uae-flag.gif" alt="*">+971 50 213 8220 </a></li> -->
                <li><a href="javascript:;" class="btn-style btn-border popup-btn">Request a quote </a></li>


                <li><a href="javascript:void(0);" class="nav-icon"> <span></span> <span></span> <span></span> </a></li>
              </ul>
            </div>
            <div class="full-nav">
              <div class="row">
                <div class="col-md-3">
                  
                  <div class="logo"><a href="/"><img loading="lazy" class="img-fluid" src="assets/images/logo.png" alt="*"></a></div>
                </div>
                <div class="col-md-9 my-auto">
                  <h1><a href="javascript:;" class="blink">Let's Connect</a></h1>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <ul class="full-menu">
                    <li class="active"><a href="/">Home</a></li>
                    <li class=""><a href="about-us/">About Us</a></li>
                    <li class=""><a href="process/">Process</a></li>
                    <li><a href="pricing/">Pricing</a></li>
                    <li class=""><a href="contact-us/">Contact Us</a></li>
                    <li class=""><a href="services/">Our Services</a>
                	<div class="header-service-icon"><span><i class="fa fa-caret-down"></i></span></div></li>
                  </ul>
                  
                </div>
                <div class="col-md-9">
                  <div class="tabs-services jqueryHide-service-icon">
                    <div class="row">
                      <div class="col">
                        <h2><a href="javascript:;">ANIMATION <br>SERVICES</a></h2>
                        <ul class="services-menu">
							<li><a href="2d-animation/">2D Animation</a></li>
							<li><a href="3d-animation/">3D Animation</a></li>
							<li><a href="motion-graphics/">Motion Graphics</a></li>
							<li><a href="stock-animation/">Stock Animation</a></li>
							<li><a href="logo-animation/" >Logo Animation</a></li>
							<li><a href="video-editing/" >Video Editing</a></li>
							<li><a href="whiteboard/">Whiteboard</a></li>
                        </ul>
                      </div>
                      <div class="col">
                        <h2><a href="website-design/">WEBSITE <br>DESIGN</a></h2>
                        <ul class="services-menu">
							<li class=""><a href="b2b-portals/">B2B Portals</a></li>
							<li class=""><a href="b2c-portals/">B2C Portals</a></li>
							<li class=""><a href="cms/">CMS Website</a></li>
							<li class=""><a href="ecommerce/">Ecommerce Website</a></li>
							<li class=""><a href="responsive-websites/">Responsive Website</a></li>
                        </ul>
                      </div>
                      <div class="col">
                        <h2><a href="digital-marketing/">DIGITAL <br>MARKETING</a></h2>
                        <ul class="services-menu">
							<li><a href="seo/">SEO</a></li>
							<li><a href="smm/">SMM</a></li>
                        </ul>
                      </div>
                      <div class="col">
                        <h2><a href="logo-design/">LOGO <br>DESIGN</a></h2>
                        <ul class="services-menu">
							<li><a href="3d-logo/">3D Logos</a></li>
							<li><a href="abstract-logo/">Abstract Logos</a></li>
							<li><a href="emblem-logo/">Emblem Logos</a></li>
							<li><a href="mascot-logo/">Mascot Logos</a></li>
							<li><a href="wordmark-logo/">Wordmark Logos</a></li>
                        </ul>
                      </div>
                      <div class="col">
                        <h2><a href="mobile-app/">MOBILE APP <br>DEVELOPMENT</a></h2>
                        <ul class="services-menu">
							<li><a href="android-app/">Android App</a></li>
							<li><a href="augmented-reality/">Augmented Reality</a></li>
							<li><a href="cross-platform/">Cross-Platform</a></li>
							<li><a href="ios-app/">iOS App</a></li>
							<li><a href="mobile-games/">Mobile Games</a></li>
							<li><a href="react/">React Native App</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="corner-circle">
                  <a href="javascript:void(0);" class="nav-close"><span></span><span></span></a>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <ul class="social-icons">
                    <li><a href="https://web.facebook.com/metapixelsinc" target="_blank" rel="noopener"><img loading="lazy" src="assets/images/fb.webp" alt="*" title="facebook"></a></li>
                    <li><a href="https://www.instagram.com/metapixelsinc/" target="_blank" rel="noopener"><img loading="lazy" src="assets/images/insta.webp" alt="*" title="instagram"></a></li>
                    <li><a href="https://www.linkedin.com/company/metapixels-inc" target="_blank" rel="noopener"><img loading="lazy" src="assets/images/link.webp" alt="*" title="linkedin"></a></li>
                    
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
    </header>
      <!-- <header>
         <div class="main-header">
            <div class="container-fluid">
               <div class="row">
                  
                  <div class="col-md-9">
                        <a href="/"><img class="logo-main-img" src="assets/images/logo.png"></a>
                     <ul class="main-menu">
                        <li class="services-link"><a href="javascript:;">SERVICES</a>
                           <div class="dropdown-box">
                              <ul class="dd-list">
                                 <li><a href="2d-animation/">2D Animation</a></li>
                                 <li><a href="3d-animation/">3D Animation</a></li>
                                 <li><a href="motion-graphics/">Motion Graphics</a></li>
                                 <li><a href="stock-animation/">Stock Animation</a></li>
                                 <li><a href="logo-animation/" >Logo Animation</a></li>
                                 <li><a href="video-editing/" >Video Editing</a></li>
                                 <li><a href="whiteboard/">Whiteboard</a></li>


                              </ul>
                           </div>
                        </li>
                        <li class="services-link"><a href="website-design/">WEBSITE DESIGN</a>
                           <div class="dropdown-box">
                              <ul class="dd-list">
                                 <li class=""><a href="b2b-portals/">B2B Portals</a></li>
                                 <li class=""><a href="b2c-portals/">B2C Portals</a></li>
                                 <li class=""><a href="cms/">CMS Website</a></li>
                                 <li class=""><a href="ecommerce/">Ecommerce Website</a></li>
                                 <li class=""><a href="responsive-websites/">Responsive Website</a></li>


                              </ul>
                           </div>
                        </li>
                        <li class="services-link"><a href="digital-marketing/">DIGITAL MARKETING</a>
                           <div class="dropdown-box">
                              <ul class="dd-list">
                                 <li><a href="seo/">SEO</a></li>
                                 <li><a href="smm/">SMM</a></li>


                              </ul>
                           </div>
                        </li>
                        <li class="services-link"><a href="logo-design/">LOGO DESIGN</a>
                           <div class="dropdown-box">
                              <ul class="dd-list">
                                 <li><a href="3d-logo/">3D Logos</a></li>
                                 <li><a href="abstract-logo/">Abstract Logos</a></li>
                                 <li><a href="emblem-logo/">Emblem Logos</a></li>
                                 <li><a href="mascot-logo/">Mascot Logos</a></li>
                                 <li><a href="wordmark-logo/">Wordmark Logos</a></li>


                              </ul>
                           </div>
                        </li>
                        <li class="services-link"><a href="mobile-app/">MOBILE APP  DEVELOPMENT</a>
                           <div class="dropdown-box">
                              <ul class="dd-list">
                                 <li><a href="android-app/">Android App</a></li>
                                 <li><a href="augmented-reality/">Augmented Reality</a></li>
                                 <li><a href="cross-platform/">Cross-Platform</a></li>
                                 <li><a href="ios-app/">iOS App</a></li>
                                 <li><a href="mobile-games/">Mobile Games</a></li>
                                 <li><a href="react/">React Native App</a></li>


                              </ul>
                           </div>
                        </li>

                        <li><a href="pricing/">PRICING</a></li>
                        
                     </ul>
                  </div>
                  <div class="col-md-3">
                     <ul class="main-menu-cta">
                        <li><a href="tel: +1 302 202 0992 "> +1 302 202 0992 </a></li>
                        <li><a href="javascript:;" onclick="setButtonURL()">Live Chat</a></li>
                       
                     </ul>
                  </div>
               </div>
               
            </div>
         </div>
      </header> -->

      <!-- <div class="mobile-nav">
         <div class="container">
                  <div class="menu-Bar">
            <span></span>
            <span></span>
            <span></span>
         </div>

         <div class="row">
            <div class="col-md-4">
               <div class="logo">
                  <a href="./">
                   <img src="images/logo.png" alt="">
                  </a>
               </div>
            </div>
            <div class="col-md-8">
               <div class="menuWrap">
                    <ul class="main-menu-list">
                                 <li><a href="./" class="">Home</a></li>
                        <li class="services-link"><a href="#">Service</a>
                                 <div class="dropdown-box">
                              <ul class="dd-list">
                                 <li><a href="2d-animation/">2D Animation</a></li>
                                 <li><a href="3d-animation/">3D Animation</a></li>
                                 <li><a href="motion-graphics/">Motion Graphics</a></li>
                                 <li><a href="stock-animation/">Stock Animation</a></li>
                                 <li><a href="logo-animation/" >Logo Animation</a></li>
                                 <li><a href="video-editing/" >Video Editing</a></li>
                                 <li><a href="whiteboard/">Whiteboard</a></li>


                              </ul>
                           </div>
                        </li>
                        <li class="services-link"><a href="#">Website Design</a>
                                 <div class="dropdown-box">
                              <ul class="dd-list">
                                 <li class=""><a href="b2b-portals/">B2B Portals</a></li>
                                 <li class=""><a href="b2c-portals/">B2C Portals</a></li>
                                 <li class=""><a href="cms/">CMS Website</a></li>
                                 <li class=""><a href="ecommerce/">Ecommerce Website</a></li>
                                 <li class=""><a href="responsive-websites/">Responsive Website</a></li>


                              </ul>
                           </div>
                        </li>
                        <li class="services-link"><a href="#">Digital Marketing</a>
                                 <div class="dropdown-box">
                              <ul class="dd-list">
                                 <li><a href="seo/">SEO</a></li>
                                 <li><a href="smm/">SMM</a></li>


                              </ul>
                           </div>
                        </li>
                        <li class="services-link"><a href="#">Logo Design</a>
                                 <div class="dropdown-box">
                              <ul class="dd-list">
                                 <li><a href="3d-logo/">3D Logos</a></li>
                                 <li><a href="abstract-logo/">Abstract Logos</a></li>
                                 <li><a href="emblem-logo/">Emblem Logos</a></li>
                                 <li><a href="mascot-logo/">Mascot Logos</a></li>
                                 <li><a href="wordmark-logo/">Wordmark Logos</a></li>


                              </ul>
                           </div>
                        </li>
                        <li class="services-link"><a href="#">Mobile App</a>
                                 <div class="dropdown-box">
                              <ul class="dd-list">
                                 <li><a href="android-app/">Android App</a></li>
                                 <li><a href="augmented-reality/">Augmented Reality</a></li>
                                 <li><a href="cross-platform/">Cross-Platform</a></li>
                                 <li><a href="ios-app/">iOS App</a></li>
                                 <li><a href="mobile-games/">Mobile Games</a></li>
                                 <li><a href="react/">React Native App</a></li>


                              </ul>
                           </div>
                        </li>
                           <li><a href="pricing/">Pricing</a></li>
                        <li><a href="javascript:;">Portfolio </a></li>
                        <li><a href="javascript:;">Case Studies</a></li>
                        <li><a href="contact-us/">Contact Us</a></li>
                     </ul>
            </div>
            </div>
            
         </div>
         </div>
      </div> -->