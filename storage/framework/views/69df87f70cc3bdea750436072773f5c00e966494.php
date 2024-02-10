<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Wafid</title>
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(asset('uploads/bg/Al-wafid.webp')); ?>">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="<?php echo e(asset('website')); ?>/js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="<?php echo e(asset('website')); ?>/fonts/icomoon/style.css">
    <link rel="stylesheet" href="<?php echo e(asset('website')); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('website')); ?>/css/magnific-popup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="<?php echo e(asset('website')); ?>/css/style.css">
    
  </head>
  <body>
    <div class="floating-wpp"></div>
  
    <div class="site-wrap">
      <div class="header-top">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-8 col-12 d-flex align-items-center justify-content-sm-start justify-content-center mb-sm-0 mb-2">
              <div class="headerTopLeft">
                <ul class="d-flex">
                  <li><a href="mailto:contact-us@al-wafid.com">contact-us@al-wafid.com</a></li>
                  <li><a href="tel:+966564082349">+966564082349</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-6 col-sm-4 col-12 d-flex  justify-content-sm-end justify-content-center">
              <div class="headerTopRight">
                  <ul>
                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-instagram"></i></a></li>
                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                  </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>
      
      <header class="site-navbar" role="banner">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-4 site-logo">
              <a href="<?php echo e(url('/')); ?>" class="text-black h2 mb-0"><img class="img-fluid" src="<?php echo e(asset('uploads/bg/0_1681888300.png')); ?>" class="" alt=""></a>
            </div>

            <div class="col-8 text-right">
              <nav class="site-navigation" role="navigation">
                <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block mb-0">
                  <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                  <li><a href="<?php echo e(url('/about')); ?>">About Us</a></li>
                  <li><a href="<?php echo e(url('/faq')); ?>">FAQ</a></li>
                  <li><a href="<?php echo e(url('/contact')); ?>">Contact Us</a></li>
                  <li><a href="<?php echo e(url('/privacy')); ?>">Privacy</a></li>
                  <li><a href="<?php echo e(url('/terms')); ?>">Terms & Condition</a></li>
                  <li class="logRebtn"><a  href="<?php echo e(url('/admin')); ?>">Login</a></li>
                  <!-- <?php if(auth()->guard()->guest()): ?>
                      <li class="logRebtn"><a  href="<?php echo e(url('/login')); ?>">Login</a></li>
                      <li class="logRebtn"><a href="<?php echo e(route('register')); ?>">Registration</a></li>
                  <?php else: ?>
                      <li class="nav-item dropdown">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                          </a>

                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                  onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                  <?php echo e(__('Logout')); ?>

                              </a>
                              <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                  <?php echo csrf_field(); ?>
                              </form>
                              <?php if(Auth::guard('web')->check()): ?>
                              <a class="dropdown-item" href="<?php echo e(url('user-dashboard')); ?>">Dashboard</a>
                              <a class="dropdown-item" href="<?php echo e(url('user-profile')); ?>">Profile</a>
                              <?php endif; ?>
                          </div>
                      </li>
                  <?php endif; ?> -->
            
                </ul>
              </nav>
              <a href="#" class="site-menu-toggle js-menu-toggle text-black d-inline-block d-lg-none"><span class="icon-menu h3"></span></a></div>
            </div>

        </div>
      </header>
      
      
      <?php echo $__env->yieldContent('content'); ?>

      <footer class="footer-section">
            <div class="container">
                <div class="footer-content pt-5 pb-5">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 mb-50">
                            <div class="footer-widget">
                                <div class="footer-logo mb-2">
                                    <a href="<?php echo e(url('/')); ?>" class="text-black h2"><img class="img-fluid" src="<?php echo e(asset('uploads/bg/0_1681888300.png')); ?>" class="" alt=""></a>
                                </div>
                                <div class="footer-text">
                                    <p>We are a job service provider company. When we get a job post offer then justify it’s validity then published it. aa</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-30 d-flex justify-content-lg-center justify-content-start">
                            <div class="footer-widget">
                                <div class="footer-widget-heading">
                                    <h3>Quick Links</h3>
                                </div>
                                <ul>
                                    <li><a href="<?php echo e(url('/login')); ?>">Login</a></li>
                                    <li><a href="<?php echo e(url('/about')); ?>">About Us</a></li>
                                    <li><a href="<?php echo e(url('/terms')); ?>">Terms & Condition</a></li>
                                    <li><a href="<?php echo e(url('/privacy')); ?>">Privacy</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-50 d-flex justify-content-lg-center justify-content-start">
                            <div class="footer-social-icon">
                                    <div class="footer-widget-heading">
                                        <h3>Find us</h3>
                                    </div>
                                    <div class="footer-text">
                                      <p>Mousa Bin Nusair Street at Olaya in Riyadh, Saudi Arabia.</p>
                                    </div>
                                    <!-- <span>Follow us</span> -->
                                    <div class="footer-widget-heading">
                                        <h3>Follow us</h3>
                                    </div>
                                    <ul class="social_icon">
                                      <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                      <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                      <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                  </ul>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-area">
                <div class="container">
                    <div class="row" style="justify-content: center;">
                        <div class="col-xl-6 col-lg-6 text-center text-center">
                            <div class="copyright-text">
                                <p>Copyright &copy; 2023 wafid, All Right Reserved <a href="#"></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
      
    </div>


    <script src="<?php echo e(asset('website')); ?>/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="<?php echo e(asset('website')); ?>/js/jquery-ui.js"></script>
    <script src="<?php echo e(asset('website')); ?>/js/popper.min.js"></script>
    <script src="<?php echo e(asset('website')); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo e(asset('website')); ?>/js/owl.carousel.min.js"></script>
    <script src="<?php echo e(asset('website')); ?>/js/jquery.stellar.min.js"></script>
    <script src="<?php echo e(asset('website')); ?>/js/jquery.countdown.min.js"></script>
    <script src="<?php echo e(asset('website')); ?>/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo e(asset('website')); ?>/js/aos.js"></script>
    <script src="<?php echo e(asset('website')); ?>/js/main.js"></script>



  <!-- Per Page JS files -->
  <?php echo $__env->yieldPushContent('javascript'); ?>
  <!-- /Per Page JS files -->


  </body>
</html><?php /**PATH C:\laragon\www\wafid\resources\views/layouts/website.blade.php ENDPATH**/ ?>