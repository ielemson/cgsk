@extends('layouts.frontend')

@section('content')

   {{-- Header Starts --}}
   @include('frontend.includes.nav')
   @include('frontend.includes.banner',['title'=>'Contact Us'])
   {{-- @include('frontend.includes.slider') --}}
   {{-- Header Ends --}}

    <!--====== Start Contact Section ======-->
    <section class="contact-bg-section bg_cover pt-100 pb-50" style="background-image: url(/frontend/assets/images/bg/contact-bg-1.png);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-12">
                    <div class="contact-content-box mb-50">
                        <div class="section-title mb-45 wow fadeInUp">
                            <span class="sub-title"><span class="number">01</span>Contact Us</span>
                            <h2>Ready to Travel Us <span class="thin">for Better Adventure</span></h2>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="contact-icon-box mb-50 wow fadeInDown">
                                    <div class="icon">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>
                                    <div class="text">
                                        <h4 class="title">Locations</h4>
                                        <p>
                                            Suite CDS7, 2nd Flr. Harmonic Plaza, Plot 354 Mike Akhigbe Way, Jabi District, P O Box 14787, Wuse Abuja NIGERIA
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact-icon-box mb-50 wow fadeInDown">
                                    <div class="icon">
                                        <i class="fal fa-envelope-open"></i>
                                    </div>
                                    <div class="text">
                                        <h4 class="title">Email Us</h4>
                                        <p><a href=""><span class="__cf_email__" data-cfemail="">info@cgskltd.com</span></a></p>
                                        {{-- <p><a href="https://demo.webtend.net/cdn-cgi/l/email-protection#6c1f191c1c031e182c0b010d0500420f0301">infovadhak.net</a></p> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact-icon-box mb-50 wow fadeInDown">
                                    <div class="icon">
                                        <i class="fal fa-phone"></i>
                                    </div>
                                    <div class="text">
                                        <h4 class="title">Hotline</h4>
                                        <p><a href="tel:+000(123)45688">08028888820</a></p>
                                        <p><a href="tel:+123456789">08036241234 </a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact-icon-box mb-50 wow fadeInDown">
                                    <div class="icon">
                                        <i class="fal fa-link"></i>
                                    </div>
                                    <div class="text">
                                        <h4 class="title">Follow Us</h4>
                                        <p>  Suite CDS7, 2nd Flr. Harmonic Plaza, Plot 354 Mike Akhigbe Way, Jabi District, P O Box 14787, Wuse Abuja NIGERIA/p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-12">
                    <div class="contact-form-wrapper mb-50">
                        <h3 class="title">Send Us Message</h3>
                        <p>Kindly send us a message, we will be glad to hear from you.</p>
                        <form class="contact-form">
                            <div class="form_group">
                                <input type="text" class="form_control" placeholder="Full Name" name="name" required>
                            </div>
                            <div class="form_group">
                                <input type="text" class="form_control" placeholder="Email Address" name="email" required>
                            </div>
                            <div class="form_group">
                                <textarea class="form_control" placeholder="Write Message" name="message"></textarea>
                            </div>
                            <div class="form_group">
                                <button class="main-btn btn-green" type="button">Send message <i class="far fa-angle-double-right"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Contact Section ======-->
    <!--====== Start Contact Map Section ======-->
    <section class="contact-page-map pb-100 wow fadeInUp">
        <div class="container-fluid">
            <!--=== Map Box ===-->
            <div class="map-box">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.0011388555868!2d7.418583788976019!3d9.063659270225102!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e74dbeaf7cac7%3A0x5b496b4bad587fd8!2sHarmonic%20Plaza%2C%20Jabi%20900108%2C%20Abuja%2C%20Federal%20Capital%20Territory!5e0!3m2!1sen!2sng!4v1678276204082!5m2!1sen!2sng"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
   {{-- Footer Starts --}}
   @include('frontend.includes.footer')
   {{-- Footer Ends --}}

@endsection