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
      <div id="carousel-area">
        <div id="carousel-slider" class="carousel slide carousel-fade" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-slider" data-slide-to="1"></li>
            <li data-target="#carousel-slider" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img src="<?= base_url('assets/img/user/slider/slide1.jpg')?>" alt="">
              <div class="carousel-caption text-center">
                <h3 class="wow fadeInDown" data-wow-delay="0.3s">Welcome to</h3>
                <h2 class="wow bounceIn" data-wow-delay="0.6s">Nusantara Coco Indo</h2>
                <h4 class="wow fadeInUp" data-wow-delay="0.9s">A Company of Coconut Derivate Product</h4>
                <a href="#" class="btn btn-lg btn-common btn-effect wow fadeInUp" data-wow-delay="1.2s">View Our Product</a>
              </div>
            </div>
            <div class="carousel-item">
              <img src="<?= base_url('assets/img/user/slider/slide2.jpg')?>" alt="">
              <div class="carousel-caption text-center">
                <h3 class="wow fadeInDown" data-wow-delay="0.3s">Welcome to</h3>
                <h2 class="wow bounceIn" data-wow-delay="0.6s">Nusantara Coco Indo</h2>
                <h4 class="wow fadeInUp" data-wow-delay="0.9s">A Company of Coconut Derivate Product</h4>
                <a href="#" class="btn btn-lg btn-common btn-effect wow fadeInUp" data-wow-delay="1.2s">View Our Product</a>
              </div>
            </div>
            <div class="carousel-item">
              <img src="<?= base_url('assets/img/user/slider/slide3.jpg')?>" alt="">
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

    <!-- Services Section Start -->
    <section id="services" class="section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Who we are</h2>
          <p class="section-subtitle">Nusantara Coco Indo is an Indonesian agricultural product export company. Established in 2021, Nusantara Coco Indo is committed
          to improving the quality, quantity, and continuity of Indonesia's superior products.</p>
        </div>
        <!-- <div class="row">
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.2s">
              <div class="icon color-1">
                <i class="lni-pencil"></i>
              </div>
              <h4>Content Writing</h4>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.4s">
              <div class="icon color-2">
                <i class="lni-cog"></i>
              </div>
              <h4>Web Development</h4>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.6s">
              <div class="icon color-3">
                <i class="lni-stats-up"></i>
              </div>
              <h4>Graphic Design</h4>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.8s">
              <div class="icon color-4">
                <i class="lni-layers"></i>
              </div>
              <h4>UI/UX Design</h4>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="item-boxes services-item wow fadeInDown" data-wow-delay="1s">
              <div class="icon color-5">
                <i class="lni-tab"></i>
              </div>
              <h4>App Development</h4>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="item-boxes services-item wow fadeInDown" data-wow-delay="1.2s">
              <div class="icon color-6">
                <i class="lni-briefcase"></i>
              </div>
              <h4>Digital Marketing</h4>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
            </div>
          </div>
        </div> -->
      </div>
    </section>
    <!-- Services Section End -->

    <!-- Call to Action Start -->
    <section class="call-action section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-10">
            <div class="cta-trial text-center">
              <p class="section-subtitle"><b>Nusantara Coco Indo.</b></p>
              <h2 class="section-title" style="color: #c79c72;">A Company of coconut derivate product</h2>
              <p class="section-subtitle">
                We believe that Indonesia is able to compete at the international level in the field of exports, Indonesian farmers have
              great potential and are a highly developed area.
              Nusantara Coco Indo build a powerful supply chain. Empowerment of the environment and human resources to produce the best
              superior products.
            </p>
              <!-- <a href="#" class="btn btn-common btn-effect">Purchase Now!</a> -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Call to Action End -->

    <!-- Features Section Start -->
    <section id="features" class="section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Our Mission</h2>
          <p class="section-subtitle"></p>
        </div>
        <div class="row">
          <!-- Start featured -->
          <!-- <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="featured-box">
              <div class="featured-icon">
                <i class="lni-layout"></i>
              </div>
              <div class="featured-content">
                <h4>Refreshing Design</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.</p>
              </div>
            </div>
          </div> -->
          <!-- End featured -->
          <!-- Start featured -->
          <!-- <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="featured-box">
              <div class="featured-icon">
                <i class="lni-tab"></i>
              </div>
              <div class="featured-content">
                <h4>Fully Responsive</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.</p>
              </div>
            </div>
          </div> -->
          <!-- End featured -->
          <!-- Start featured -->
          <!-- <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="featured-box">
              <div class="featured-icon">
                <i class="lni-rocket"></i>
              </div>
              <div class="featured-content">
                <h4>Fast & Smooth</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.</p>
              </div>
            </div>
          </div> -->
          <!-- End featured -->
          <!-- Start featured -->
          <!-- <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="featured-box">
              <div class="featured-icon">
                <i class="lni-database"></i>
              </div>
              <div class="featured-content">
                <h4>SEO Optimized</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.</p>
              </div>
            </div>
          </div> -->
          <!-- End featured -->
          <!-- Start featured -->
          <!-- <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="featured-box">
              <div class="featured-icon">
                <i class="lni-leaf"></i>
              </div>
              <div class="featured-content">
                <h4>Clean Code</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.</p>
              </div>
            </div>
          </div> -->
          <!-- End featured -->
          <!-- Start featured -->
          <!-- <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="featured-box">
              <div class="featured-icon">
                <i class="lni-pencil"></i>
              </div>
              <div class="featured-content">
                <h4>Free 24/7 Support</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.</p>
              </div>
            </div>
          </div> -->
          <!-- End featured -->
        </div>
      </div>
    </section>
    <!-- Features Section End -->    

    <!-- Portfolio Section -->
    <section id="portfolios" class="section">
      <!-- Container Starts -->
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Our Products</h2>
          <p class="section-subtitle">
            Nusantara Coco Indo Indonesia provide the best coconut derivative products in Indonesia by prioritizing Quality, Quantity and
          Continuity of a product.
        </p>
        </div>
        <!-- <div class="row">          
          <div class="col-md-12"> -->
            <!-- Portfolio Controller/Buttons -->
            <!-- <div class="controls text-center">
              <a class="filter active btn btn-common btn-effect" data-filter="all">
                All 
              </a>
              <a class="filter btn btn-common btn-effect" data-filter=".design">
                Design 
              </a>
              <a class="filter btn btn-common btn-effect" data-filter=".development">
                Development
              </a>
              <a class="filter btn btn-common btn-effect" data-filter=".print">
                Print 
              </a>
            </div> -->
            <!-- Portfolio Controller/Buttons Ends-->
          <!-- </div>
        </div> -->

        <!-- Portfolio Recent Projects -->
        <div id="portfolio" class="row">
          <div class="col-lg-4 col-md-6 col-xs-12 mix development print">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="<?= base_url('assets/img/user/produk/cocopeat.jpg')?>" alt="" style="height: 20rem;"/>  
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <a href="<?= base_url('assets/img/user/produk/cocopeat.jpg')?>">Cocopeat</a>
                    </div>
                  </div>
                </div>
              </div>               
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12 mix design print">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="<?= base_url('assets/img/user/produk/cocopot.jpg')?>" alt="" style="height: 20rem;" /> 
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <a href="<?= base_url('assets/img/user/produk/cocopot.jpg')?>">Cocopot</a>
                    </div>
                  </div>
                </div>
              </div>               
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12 mix design print">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="<?= base_url('assets/img/user/produk/cocofiber.jpg')?>" alt="" style="height: 20rem;" />
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <a href="<?= base_url('assets/img/user/produk/cocofiber.jpg')?>">Cocofiber</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <!-- Container Ends -->
    </section>
    <!-- Portfolio Section Ends --> 

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
    <section id="team" class="section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Our Teams</h2>
          <p class="section-subtitle">Let's get to know our teams</p>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
              <img src="<?= base_url('assets/img/user/teams/Kavin.jpg')?>" alt="" style="height: 20rem;">
              <div class="team-details">
                <div class="team-inner">
                  <h4 class="team-title">Rachman Kavin</h4>
                  <p>Founder</p>
                  <ul class="social-list">
                    <li class="facebook"><a href="#"><i class="lni-facebook-filled"></i></a></li>
                    <li class="twitter"><a href="#"><i class="lni-instagram-filled"></i></a></li>
                    <li class="linkedin"><a href="#"><i class="lni-linkedin-fill"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
              <img src="<?= base_url('assets/img/user/teams/ulul.jpg')?>" alt="" style="height: 20rem;">
              <div class="team-details">
                <div class="team-inner">
                  <h4 class="team-title">M. Ulul Fauzi, S.Pd.</h4>
                  <p>Co-Founder</p>
                  <ul class="social-list">
                    <li class="google-plus"><a href="mailto:tulityosih@gmail.com?subject=subject"><i class="lni-google-plus"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
              <img src="<?= base_url('assets/img/user/teams/Nurbuat1.jpg')?>" alt="" style="height: 20rem;">
              <div class="team-details">
                <div class="team-inner">
                  <h4 class="team-title">Lutfin Nurbuat</h4>
                  <p>Business Development</p>
                  <ul class="social-list">
                    <li class="facebook"><a href="#"><i class="lni-facebook-filled"></i></a></li>
                    <li class="twitter"><a href="#"><i class="lni-twitter-filled"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="lni-google-plus"></i></a></li>
                    <li class="linkedin"><a href="#"><i class="lni-linkedin-fill"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Team section End -->

    <!-- Contact Section Start -->
    <section id="contact" class="section">      
      <div class="contact-form">
        <div class="container">
          <div class="section-header">          
            <h2 class="section-title">Get In Touch</h2>
            <p class="section-subtitle">Contact us for more information</p>
          </div>
          <div class="row">          
            <div class="col-lg-9 col-md-9 col-xs-12">
              <div class="contact-block">
                <form id="contactForm">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
                        <div class="help-block with-errors"></div>
                      </div>                                 
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" placeholder="Your Email" id="email" class="form-control" name="name" required data-error="Please enter your email">
                        <div class="help-block with-errors"></div>
                      </div> 
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" placeholder="Subject" id="msg_subject" class="form-control" required data-error="Please enter your subject">
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group"> 
                        <textarea class="form-control" id="message" placeholder="Your Message" rows="7" data-error="Write your message" required></textarea>
                        <div class="help-block with-errors"></div>
                      </div>
                      <div class="submit-button">
                        <button class="btn btn-common btn-effect" id="submit" type="submit">Send Message</button>
                        <div id="msgSubmit" class="h3 hidden"></div> 
                        <div class="clearfix"></div> 
                      </div>
                    </div>
                  </div>            
                </form>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-xs-12">
              <div class="contact-deatils">
                <!-- Content Info -->
                <div class="contact-info_area">
                  <div class="contact-info">
                    <i class="lni-map"></i>
                    <h5>Location</h5>
                    <p>Kecamatan Ambulu, Kabupaten Jember, Jawa Timur</p>
                  </div>
                  <!-- Content Info -->
                  <div class="contact-info">
                    <i class="lni-star"></i>
                    <h5>E-mail</h5>
                    <p>info.ncocoindo@gmail.com</p>
                  </div>
                  <!-- Content Info -->
                  <div class="contact-info">
                    <i class="lni-phone"></i>
                    <h5>Phone</h5>
                    <p>+6288 2009 351 634</p>
                  </div>
                  <!-- Icon -->
                  <ul class="footer-social">
                    <li><a class="facebook" href="#"><i class="lni-facebook-filled"></i></a></li>
                    <li><a class="twitter" href="#"><i class="lni-twitter-filled"></i></a></li>
                    <li><a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a></li>
                    <li><a class="google-plus" href="#"><i class="lni-google-plus"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>            
    </section>
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