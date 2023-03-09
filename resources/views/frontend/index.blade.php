@extends('layouts.frontend')

@section('content')

   {{-- Header Starts --}}
   {{-- @include('frontend.includes.nav') --}}
   @include('frontend.includes.header')
   @include('frontend.includes.slider')
   {{-- Header Ends --}}

  
  <!--====== Start About Section ======-->
  <section class="about-section pt-100 pb-45">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-xl-5 col-lg-12">
                  <div class="about-content-box mb-50 wow fadeInLeft">
                      <div class="section-title mb-20">
                          <span class="sub-title"><span class="number">01</span>About Us</span>
                          <h2>We’re Most Trusted Travel <span class="thin">Partner Around The World</span></h2>
                      </div>
                      <p class="mb-40">
                        Established in 2007 as a meetings, incentive, conferences, events and tourism
                        (MICET) company, CGSK offers consulting and meeting support services for
                        business groups. For leisure travel and holiday groups, we provide exciting
                        services to ensure that clients fully savour the destinations they visit.
                        </p>
                      <div class="experience-box d-flex">
                          <div class="icon">
                              <img src="frontend/assets/images/line2.png" alt="Shape">
                          </div>
                          <div class="big-text">
                              <h2 class="number">16 <span class="symbol">+</span></h2>
                          </div>
                          <div class="text">
                              <h6>Years Of 
                                  Experience</h6>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-7 col-lg-12">
                  <div class="about-one_image-box mb-20 p-r z-1 wow fadeInRight">
                      <img src="frontend/assets/images/about/about-2.jpg" class="about-img-one mb-30" alt="About Image">
                      <img src="frontend/assets/images/about/about-3.jpg" class="about-img-two mb-30" alt="About Image">
                      <div class="icon-box">
                          <i class="flaticon-tent-5"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <!--====== End About Section ======-->
  <!--====== Start Service Section ======-->
  {{-- <section class="service-section pb-60">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-xl-7 col-lg-10">
                  <div class="section-title text-center mb-50 wow fadeInDown">
                      <span class="sub-title"><span class="number">02</span>Enjoy Adventure</span>
                      <h2>Have A Fun With Our Amazing <span class="thin">Camping Ground</span></h2>
                  </div>
              </div>
          </div>
          <div class="row justify-content-center">
              <div class="col-lg-4 col-md-6 col-sm-12">
                  <div class="single-service-item-two mb-40 wow fadeInUp">
                      <div class="img-holder">
                          <img src="frontend/assets/images/service/s-1.jpg" alt="Service Image">
                          <div class="hover-overlay"></div>
                          <div class="hover-content">
                              <a href="#" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                          </div>
                      </div>
                      <div class="text pt-35">
                          <ul class="ratings">
                              <li><i class="fas fa-star"></i></li>
                              <li><i class="fas fa-star"></i></li>
                              <li><i class="fas fa-star"></i></li>
                              <li><i class="fas fa-star"></i></li>
                              <li><i class="fas fa-star"></i></li>
                          </ul>
                          <h4 class="title"><a href="#">Tent Camping Services</a></h4>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12">
                  <div class="single-service-item-two mb-40 wow fadeInDown">
                      <div class="img-holder">
                          <img src="frontend/assets/images/service/s-2.jpg" alt="Service Image">
                          <div class="hover-overlay"></div>
                          <div class="hover-content">
                              <a href="#" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                          </div>
                      </div>
                      <div class="text pt-35">
                          <ul class="ratings">
                              <li><i class="fas fa-star"></i></li>
                              <li><i class="fas fa-star"></i></li>
                              <li><i class="fas fa-star"></i></li>
                              <li><i class="fas fa-star"></i></li>
                              <li><i class="fas fa-star"></i></li>
                          </ul>
                          <h4 class="title"><a href="#">Family Camping Services</a></h4>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12">
                  <div class="single-service-item-two mb-40 wow fadeInUp">
                      <div class="img-holder">
                          <img src="frontend/assets/images/service/s-3.jpg" alt="Service Image">
                          <div class="hover-overlay"></div>
                          <div class="hover-content">
                              <a href="#" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                          </div>
                      </div>
                      <div class="text pt-35">
                          <ul class="ratings">
                              <li><i class="fas fa-star"></i></li>
                              <li><i class="fas fa-star"></i></li>
                              <li><i class="fas fa-star"></i></li>
                              <li><i class="fas fa-star"></i></li>
                              <li><i class="fas fa-star"></i></li>
                          </ul>
                          <h4 class="title"><a href="#">Wild Camping Services</a></h4>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section> --}}
  <!--====== End Service Section ======-->

  <!--====== Start Video Section ======-->
  {{-- <section class="video-bg-section pt-140 pb-110 p-r z-1 bg_cover" style="background-image: url(/frontend/assets/images/video/video-1.jpg);">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-lg-8">
                  <div class="video-content-box text-white text-lg-start text-md-center mb-40 wow fadeInLeft">
                      <h2 class="mb-30">Ready to Get Started your Travel Camping Us</h2>
                      <a href="about.html" class="main-btn btn-green">Watch video <i class="far fa-angle-double-right"></i></a>
                  </div>
              </div>
              <div class="col-lg-4">
                  <div class="play-box text-lg-end text-md-center mb-40 wow fadeInRight">
                      <a href="https://www.youtube.com/watch?v=ibuUmMhD2Pg" class="video-popup"><i class="fas fa-play"></i></a>
                  </div>
              </div>
          </div>
      </div>
  </section> --}}
  <!--====== End Video Section ======-->
  <!--====== Start Features Section ======-->
  {{-- <section class="features-section pt-100 pb-35">
      <div class="container">
          <div class="row">
              <div class="col-xl-4 col-md-6 col-sm-12">
                  <div class="fancy-icon-box-two mb-55 wow fadeInDown">
                      <div class="icon-title d-flex">
                          <div class="icon">
                              <i class="flaticon-cottage-1"></i>
                          </div>
                          <div class="title">
                              <h5 class="title">Washing Machines</h5>
                          </div>
                      </div>
                      <div class="text">
                          <p>Sit amet consectetur adipiscing elitcelerisque
                              aenectus bibendum facilisi tempus</p>
                          <a href="#" class="btn-link">Read more <i class="far fa-angle-double-right"></i></a>
                      </div>
                  </div>
              </div>
              <div class="col-xl-4 col-md-6 col-sm-12">
                  <div class="fancy-icon-box-two mb-55 wow fadeInUp">
                      <div class="icon-title d-flex">
                          <div class="icon">
                              <i class="flaticon-tent-6"></i>
                          </div>
                          <div class="title">
                              <h5 class="title">Tents on Rent</h5>
                          </div>
                      </div>
                      <div class="text">
                          <p>Sit amet consectetur adipiscing elitcelerisque
                              aenectus bibendum facilisi tempus</p>
                          <a href="#" class="btn-link">Read more <i class="far fa-angle-double-right"></i></a>
                      </div>
                  </div>
              </div>
              <div class="col-xl-4 col-md-6 col-sm-12">
                  <div class="fancy-icon-box-two mb-55 wow fadeInDown">
                      <div class="icon-title d-flex">
                          <div class="icon">
                              <i class="flaticon-hiking-1"></i>
                          </div>
                          <div class="title">
                              <h5 class="title">Summer Camp</h5>
                          </div>
                      </div>
                      <div class="text">
                          <p>Sit amet consectetur adipiscing elitcelerisque
                              aenectus bibendum facilisi tempus</p>
                          <a href="#" class="btn-link">Read more <i class="far fa-angle-double-right"></i></a>
                      </div>
                  </div>
              </div>
              <div class="col-xl-4 col-md-6 col-sm-12">
                  <div class="fancy-icon-box-two mb-55 wow fadeInUp">
                      <div class="icon-title d-flex">
                          <div class="icon">
                              <i class="flaticon-campfire-1"></i>
                          </div>
                          <div class="title">
                              <h5 class="title">Wood Fire</h5>
                          </div>
                      </div>
                      <div class="text">
                          <p>Sit amet consectetur adipiscing elitcelerisque
                              aenectus bibendum facilisi tempus</p>
                          <a href="#" class="btn-link">Read more <i class="far fa-angle-double-right"></i></a>
                      </div>
                  </div>
              </div>
              <div class="col-xl-4 col-md-6 col-sm-12">
                  <div class="fancy-icon-box-two mb-55 wow fadeInDown">
                      <div class="icon-title d-flex">
                          <div class="icon">
                              <i class="flaticon-eco-house"></i>
                          </div>
                          <div class="title">
                              <h4 class="title">Private Cottages</h4>
                          </div>
                      </div>
                      <div class="text">
                          <p>Sit amet consectetur adipiscing elitcelerisque
                              aenectus bibendum facilisi tempus</p>
                          <a href="#" class="btn-link">Read more <i class="far fa-angle-double-right"></i></a>
                      </div>
                  </div>
              </div>
              <div class="col-xl-4 col-md-6 col-sm-12">
                  <div class="fancy-icon-box-two mb-55 wow fadeInUp">
                      <div class="icon-title d-flex">
                          <div class="icon">
                              <i class="flaticon-washing-machine"></i>
                          </div>
                          <div class="title">
                              <h4 class="title">Private Cottages</h4>
                          </div>
                      </div>
                      <div class="text">
                          <p>Sit amet consectetur adipiscing elitcelerisque
                              aenectus bibendum facilisi tempus</p>
                          <a href="#" class="btn-link">Read more <i class="far fa-angle-double-right"></i></a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section> --}}
  <!--====== End Features Section ======-->
  <!--====== Start Accommodation Section ======-->

  <section class="accommodation-section pb-100">
      <div class="container-fluid">
          <div class="service-slider-one wow fadeInDown">
              <div class="single-service-item-four">
                  <div class="img-holder">
                      <img src="frontend/assets/images/service/service-16.jpg" alt="Service Image">
                      <div class="hover-content">
                          <div class="inner-content d-flex justify-content-between">
                              <div class="text">
                                  <h4 class="title"><a href="#">Tent Camper</a></h4>
                                  <a href="#" class="btn-link">check availability<i class="far fa-angle-double-right"></i></a>
                              </div>
                              <div class="icon">
                                  <a href="#" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="single-service-item-four">
                  <div class="img-holder">
                      <img src="frontend/assets/images/service/service-17.jpg" alt="Service Image">
                      <div class="hover-content">
                          <div class="inner-content d-flex justify-content-between">
                              <div class="text">
                                  <h4 class="title"><a href="#">Tent Camper</a></h4>
                                  <a href="#" class="btn-link">check availability<i class="far fa-angle-double-right"></i></a>
                              </div>
                              <div class="icon">
                                  <a href="#" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="single-service-item-four">
                  <div class="img-holder">
                      <img src="frontend/assets/images/service/service-18.jpg" alt="Service Image">
                      <div class="hover-content">
                          <div class="inner-content d-flex justify-content-between">
                              <div class="text">
                                  <h4 class="title"><a href="#">Tent Camper</a></h4>
                                  <a href="#" class="btn-link">check availability<i class="far fa-angle-double-right"></i></a>
                              </div>
                              <div class="icon">
                                  <a href="#" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="single-service-item-four">
                  <div class="img-holder">
                      <img src="frontend/assets/images/service/service-19.jpg" alt="Service Image">
                      <div class="hover-content">
                          <div class="inner-content d-flex justify-content-between">
                              <div class="text">
                                  <h4 class="title"><a href="#">Tent Camper</a></h4>
                                  <a href="#" class="btn-link">check availability<i class="far fa-angle-double-right"></i></a>
                              </div>
                              <div class="icon">
                                  <a href="#" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section><!--====== End Accommodation Section ======-->
  <!--====== Start Choose Section ======-->
  {{-- <section class="choose-section">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-lg-6">
                  <div class="choose-content-box pr-lg-50 mb-50 wow fadeInLeft">
                      <div class="section-title mb-20">
                          <span class="sub-title"><span class="number">03</span>Why Choose Us</span>
                          <h2>We’re Most Trusted 
                              Travel <span class="thin">Partner Around The World</span></h2>
                      </div>
                      <p class="mb-30">Sit amet consectetur adipiscing elit. At donec et fusce orci tellus aliquam vitae. Metus nibh laoreet velit, diam enim. Justo
                          sagittis fringilla ulputatey honcus justo, cras sed</p>
                      <ul class="check-style-one mb-35">
                          <li><i class="flaticon-draw-check-mark"></i>Wild Camping</li>
                          <li><i class="flaticon-draw-check-mark"></i>Family Camping</li>
                          <li><i class="flaticon-draw-check-mark"></i>Tent Camping</li>
                      </ul>
                      <a href="#" class="main-btn btn-yellow">learn more us<i class="far fa-angle-double-right"></i></a>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="counter-item-list mb-50">
                      <div class="row">
                          <div class="col-sm-6">
                              <div class="counter-item-two mb-30 wow fadeInUp">
                                  <div class="counter-inner-item">
                                      <div class="icon">
                                          <i class="flaticon-hiking"></i>
                                      </div>
                                      <div class="text">
                                          <h2 class="number"><span class="count">365</span>K+</h2>
                                          <p>Happy Traveler</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-sm-6">
                              <div class="counter-item-two mb-30 wow fadeInDown">
                                  <div class="counter-inner-item">
                                      <div class="icon">
                                          <i class="flaticon-tent-1"></i>
                                      </div>
                                      <div class="text">
                                          <h2 class="number"><span class="count">2353</span>+</h2>
                                          <p>Happy Traveler</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-sm-6">
                              <div class="counter-item-two mb-30">
                                  <div class="counter-inner-item wow fadeInUp">
                                      <div class="icon">
                                          <i class="flaticon-branch"></i>
                                      </div>
                                      <div class="text">
                                          <h2 class="number"><span class="count">458</span>+</h2>
                                          <p>Happy Traveler</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-sm-6">
                              <div class="counter-item-two mb-30 wow fadeInDown">
                                  <div class="counter-inner-item">
                                      <div class="icon">
                                          <i class="flaticon-tent-2"></i>
                                      </div>
                                      <div class="text">
                                          <h2 class="number"><span class="count">985</span>+</h2>
                                          <p>Happy Traveler</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section> --}}
  <!--====== End Choose Section ======-->
  <!--====== Start Features Section ======-->
  <section class="features-bg-section p-r z-1 pt-50 pb-50">
      <div class="features-bg-two bg_cover wow fadeInLeft" style="background-image: url(/frontend/assets/images/bg/choose-bg-2.jpg);"></div>
      <div class="container">
          <div class="row justify-content-end">
              <div class="col-lg-6">
                  <div class="features-content-box mb-50 pl-lg-50 wow fadeInRight">
                      <div class="section-title mb-30">
                          <span class="sub-title"><span class="number">01</span> Discover More</span>
                          <h2>Better Travel to Change <span class="thin">your Better Emotions</span></h2>
                      </div>
                      <p>Our services include advisory, transport, accommodation, venue rental, speakers,
                        tickets, logistics, excursions, tours, visa support services, ground handling, etc. for
                        business and leisure travel groups.</p>
                      {{-- <div class="counting-box mt-40">
                          <div class="title">
                              <h5>Satisfied Clients <span>89%</span></h5>
                              <div class="progress">
                                  <div class="progress-bar wow slideInLeft" style="width: 89%"></div>
                              </div>
                          </div>
                      </div> --}}
                  </div>
              </div>
          </div>
      </div>
  </section><!--====== End Features Section ======-->
  <!--====== Start Testimonial Section ======-->
  {{-- <section class="testimonial-bg-section text-white p-r z-1 dark-black-bg pt-90 pb-60">
      <div class="testimonial-bg bg_cover" style="background-image: url(assets/images/bg/testimonial-bg-1.png);"></div>
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-xl-7 col-lg-10">
                  <div class="section-title text-center mb-50">
                      <span class="sub-title"><span class="number">05</span>Testimonials</span>
                      <h2>What Our Client Say About Us</h2>
                  </div>
              </div>
          </div>
          <div class="row align-items-center">
              <div class="col-xl-6 col-lg-12">
                  <div class="testimonial-slider-two wow fadeInDown">
                      <div class="single-testimonial-item-two">
                          <div class="testimonial-content">
                              <div class="quote">
                                  <i class="flaticon-quote"></i>
                              </div>
                              <p>Sit amet consectetur adipiscing 
                                  congue pose habit ante dignissim
                                  faucibus tincidunt vulput ullamcor
                                  mattis quisque esta sidiculus</p>
                              <div class="author-title-thumb d-inline-flex">
                                  <div class="author-thumb">
                                      <img src="frontend/assets/images/testimonial/author-thumb-2.jpg" alt="Author Thumb">
                                  </div>
                                  <div class="author-title">
                                      <h4 class="title">Brian A. Barnes</h4>
                                      <p class="position">CEO & Founder</p>
                                      <ul class="ratings">
                                          <li><i class="fas fa-star"></i></li>
                                          <li><i class="fas fa-star"></i></li>
                                          <li><i class="fas fa-star"></i></li>
                                          <li><i class="fas fa-star"></i></li>
                                          <li><i class="fas fa-star"></i></li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="single-testimonial-item-two">
                          <div class="testimonial-content">
                              <div class="quote">
                                  <i class="flaticon-quote"></i>
                              </div>
                              <p>Sit amet consectetur adipiscing 
                                  congue pose habit ante dignissim
                                  faucibus tincidunt vulput ullamcor
                                  mattis quisque esta sidiculus</p>
                              <div class="author-title-thumb d-inline-flex">
                                  <div class="author-thumb">
                                      <img src="frontend/assets/images/testimonial/author-thumb-2.jpg" alt="Author Thumb">
                                  </div>
                                  <div class="author-title">
                                      <h4 class="title">Brian A. Barnes</h4>
                                      <p class="position">CEO & Founder</p>
                                      <ul class="ratings">
                                          <li><i class="fas fa-star"></i></li>
                                          <li><i class="fas fa-star"></i></li>
                                          <li><i class="fas fa-star"></i></li>
                                          <li><i class="fas fa-star"></i></li>
                                          <li><i class="fas fa-star"></i></li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-6 col-lg-12">
                  <div class="testimonial-one_image-box wow fadeInUp">
                      <img src="frontend/assets/images/testimonial/testimonial-1.jpg" alt="testimonial image">
                  </div>
              </div>
          </div>
      </div>
  </section> --}}
  <!--====== End Testimonial Section ======-->
  <!--====== Start Blog Section ======-->
  {{-- <section class="blog-section pt-155 pb-50">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-xl-6 col-lg-10">
                  <div class="section-title text-center mb-50 wow fadeInDown">
                      <span class="sub-title"><span class="number">06</span>News & Blog</span>
                      <h2>Read Every News & Blog <span class="thin">Articles & Tips</span></h2>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-xl-6 col-lg-12">
                  <div class="single-blog-post-item-two mb-40 wow fadeInUp">
                      <div class="post-thumbnail">
                          <img src="frontend/assets/images/blog/blog-4.jpg" alt="Post Thumbnail">
                          <a href="#" class="cat-btn">Camping</a>
                      </div>
                      <div class="entry-content">
                          <div class="post-meta">
                              <ul>
                                  <li><span><a href="#"><i class="far fa-calendar-alt"></i> November 23,2022</a></span></li>
                                  <li><span><a href="#"><i class="far fa-comment"></i> Comments (05)</a></span></li>
                              </ul>
                          </div>
                          <h4 class="title"><a href="blog-details.html">Meet Touch Design Mobile Interfaces
                              Smashing Book Steven Hoober</a></h4>
                          <a href="blog-details.html" class="btn-link">Read more <i class="far fa-angle-double-right"></i></a>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-lg-6">
                  <div class="single-blog-post-item-two mb-40 wow fadeInDown">
                      <div class="post-thumbnail">
                          <img src="frontend/assets/images/blog/blog-5.jpg" alt="Post Thumbnail">
                          <a href="#" class="cat-btn">Adventure</a>
                      </div>
                      <div class="entry-content">
                          <div class="post-meta">
                              <ul>
                                  <li><span><a href="#"><i class="far fa-calendar-alt"></i> November 23,2022</a></span></li>
                              </ul>
                          </div>
                          <h4 class="title"><a href="blog-details.html">Powerful Terminal And
                              Command-Line Tool</a></h4>
                          <a href="blog-details.html" class="btn-link">Read more <i class="far fa-angle-double-right"></i></a>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-lg-6">
                  <div class="single-blog-post-item-two mb-40 wow fadeInUp">
                      <div class="post-thumbnail">
                          <img src="frontend/assets/images/blog/blog-6.jpg" alt="Post Thumbnail">
                          <a href="blog-details.html" class="cat-btn">Travel</a>
                      </div>
                      <div class="entry-content">
                          <div class="post-meta">
                              <ul>
                                  <li><span><a href="#"><i class="far fa-calendar-alt"></i> November 23,2022</a></span></li>
                              </ul>
                          </div>
                          <h4 class="title"><a href="blog-details.html">Useful React Hookhat You Can Projects</a></h4>
                          <a href="blog-details.html" class="btn-link">Read more <i class="far fa-angle-double-right"></i></a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section> --}}
  <!--====== End Blog Section ======-->
  <!--====== Start CTa Section ======-->
  <section class="cta-section dark-green-bg pt-70 pb-35">
      <div class="container">
          <div class="cta-wrapper bg_cover" style="background-image: url(assets/images/bg/cta-bg-1.png);">
              <div class="row align-items-center">
                  <div class="col-lg-7">
                      <div class="section-title text-white mb-40 wow fadeInLeft">
                          <h2>Enjoy The Better Life Adventure</h2>
                      </div>
                  </div>
                  <div class="col-lg-5">
                      <div class="cta-button float-lg-end mb-35 wow fadeInRight">
                          <a href="{{route('about_us')}}" class="main-btn btn-yellow">Discover more<i class="far fa-angle-double-right"></i></a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section><!--====== End CTa Section ======-->
  

   {{-- Footer Starts --}}
   @include('frontend.includes.footer')
   {{-- Footer Ends --}}

@endsection