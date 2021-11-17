<?php $this->load->view('user/partials/header'); ?>
<body>
    <!-- Header Section Start -->
    <header id="slider-area">  
      <nav class="navbar navbar-expand-md fixed-top scrolling-navbar bg-white">
        <div class="container">          
          <a class="navbar-brand" href="index.html">Nusantara Coco Indo</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#slider-area">Home</a>
              <!-- </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#services">Services</a>
              </li>   -->
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#features">About Us</a>
              </li>                            
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#portfolios">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#team">Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#contact">Contact</a>
              </li> 
            </ul>              
          </div>
        </div>
      </nav> 

      <!-- Main Carousel Section -->
      <div id="carousel-area" >
        <div id="carousel-slider" class="carousel slide carousel-fade" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-slider" data-slide-to="1"></li>
            <li data-target="#carousel-slider" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active" style="height: 100vh">
              <img src="<?= base_url('assets/img/user/slider/slide1.jpg')?>" style="width:100%; height:100%; opacity: 0.7" alt="">
              <div class="carousel-caption text-center">
                <h3 class="wow fadeInDown" data-wow-delay="0.3s">Welcome to</h3>
                <h2 class="wow bounceIn" data-wow-delay="0.6s">Nusantara Coco Indo</h2>
                <h4 class="wow fadeInUp" data-wow-delay="0.9s">A Company of Coconut Derivate Product</h4>
                <a href="#" class="btn btn-lg btn-common btn-effect wow fadeInUp" data-wow-delay="1.2s">View Our Product</a>
              </div>
            </div>
            <div class="carousel-item" style="height: 100vh;">
              <img src="<?= base_url('assets/img/user/slider/slide2.jpg')?>" style="width:100%;height:100%;opacity: 0.7" alt="">
              <div class="carousel-caption text-center">
                <h3 class="wow fadeInDown" data-wow-delay="0.3s">Welcome to</h3>
                <h2 class="wow bounceIn" data-wow-delay="0.6s">Nusantara Coco Indo</h2>
                <h4 class="wow fadeInUp" data-wow-delay="0.9s">A Company of Coconut Derivate Product</h4>
                <a href="#" class="btn btn-lg btn-common btn-effect wow fadeInUp" data-wow-delay="1.2s">View Our Product</a>
              </div>
            </div>
            <div class="carousel-item" style="height: 100vh;">
              <img src="<?= base_url('assets/img/user/slider/slide3.jpg')?>" style="width:100%;height:100%;opacity: 0.7" alt="">
              <div class="carousel-caption text-center">
                <h3 class="wow fadeInDown" data-wow-delay="0.3s">Welcome to</h3>
                <h2 class="wow bounceIn" data-wow-delay="0.6s">Nusantara Coco Indo</h2>
                <h4 class="wow fadeInUp" data-wow-delay="0.9s">A Company of Coconut Derivate Product</h4>
                <a href="#" class="btn btn-lg btn-common btn-effect wow fadeInUp" data-wow-delay="1.2s">View Our Product</a>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carousel-slider" role="button" data-slide="prev">
            <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-left"></i></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel-slider" role="button" data-slide="next">
            <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-right"></i></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>  

    </header>
    <!-- Header Section End --> 

    <!-- Profile Section Start -->
    <?php $this->load->view('user/profile'); ?>
    <!-- Profile Section Finish -->

    <!-- About Us Section Start -->
    <?php $this->load->view('user/aboutus'); ?>
    <!-- About Us Section End -->    

    <!-- Product Section -->
    <?php $this->load->view('user/ourproducts'); ?>
    <!-- Product Section Ends --> 

    <!-- Counter Section Start -->
    <div class="counters section bg-defult">
      <div class="container">
        <div class="row"> 
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="facts-item">   
              <div class="fact-count">
                <h3><span class="counter">400</span></h3>
                <h4>Tons Production Capacity</h4>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="facts-item">   
              <div class="fact-count">
                <h3><span class="counter">500</span></h3>
                <h4>Hectars Cultivated Land</h4>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="facts-item">  
              <div class="fact-count">
                <h3><span class="counter">3</span>+</h3>
                <h4>Projects Running</h4>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="facts-item">  
              <div class="fact-count">
                <h3><span class="counter">5</span></h3>
                <h4>Countries Collaberate</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Counter Section End -->
      
    <!-- Team section Start -->
    <?php $this->load->view('user/ourteams'); ?>
    <!-- Team section End -->

    <!-- Contact Section Start -->
    <?php $this->load->view('user/getintouch'); ?>
    <!-- Contact Section End -->
    
    <!-- Map Section Start -->
    <section id="google-map-area">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 padding-0">
            <object style="border:0; height: 450px; width: 100%;" data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126311.62153815525!2d113.53644691645762!3d-8.378217828829372!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd69c09f07bf8c5%3A0x83617b11fef89bc5!2sAmbulu%2C%20Kabupaten%20Jember%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1636872418418!5m2!1sid!2sid">
            </object>
          </div>
        </div>
      </div>
    </section>
    <!-- Map Section End -->
    <?php $this->load->view('user/partials/footer'); ?>