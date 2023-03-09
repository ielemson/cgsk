<!--====== Start Header ======-->
<header class="header-area">
    <!--=== Header Navigation ===-->
    <div class="header-navigation default-navigation">
        <div class="nav-overlay"></div>
        <div class="container-fluid">
            <!--=== Primary Menu ===-->
            <div class="primary-menu">
                <!--=== Site Branding ===-->
                <div class="site-branding">
                    <a href="" class="brand-logo">
                        CGSK LTD
                    </a>
                    {{-- <a href="" class="brand-logo"><img src="assets/images/logo/logo-black.png" alt="Site Logo"></a> --}}
                </div>
                <!--=== Nav Inner Menu ===-->
                <div class="nav-menu">
                    <!--=== Mobile Logo ===-->
                    <div class="mobile-logo mb-30 d-block d-xl-none text-center">
                        <a href="{{url('/')}}" class="brand-logo">CGSK LTD</a>
                        {{-- <a href="{{url('/')}}" class="brand-logo"><img src="/frontend/assets/images/logo/logo-black.png" alt="Site Logo"></a> --}}
                    </div>
                    <!--=== Nav Search ===-->
                    <div class="nav-search mb-30 d-block d-xl-none ">
                        <form>
                            <div class="form_group">
                                <input type="email" class="form_control" placeholder="Search Here" name="email" required>
                                <button class="search-btn"><i class="fas fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <!--=== Main Menu ===-->
                    <nav class="main-menu">
                        <ul>
                            <li class=""><a href="{{url('/')}}">Home</a> </li>
                            <li class="menu-item has-children"><a href="#">Services</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Tours</a></li> 
                                    <li><a href="#">Tickets</a></li>
                                    <li><a href="#">Advisory</a></li>
                                    <li><a href="#">Logistics</a></li>
                                    <li><a href="#">Transport</a></li>
                                    <li><a href="#">Accommodation</a></li>
                                    <li><a href="#">Venue rental</a></li>
                                    <li><a href="#">Speakers</a></li>
                                    <li><a href="#">Excursions</a></li>
                                   <li><a href="#">Ground handling</a></li>
                                    <li><a href="#">Visa support services</a></li>
                                    
                                </ul>
                            </li>
                            
                            
                            <li class=""><a href="{{route('about_us')}}">About Us</a></li>
                             
                            <li class="menu-item"><a href="{{route('contact_us')}}">Contact</a></li>
                            <li class="menu-item"><div class="search-btn" data-bs-toggle="modal" data-bs-target="#search-modal"><i class="far fa-search"></i></div></li>
                        </ul>
                    </nav>
                    <!--=== Nav Button ===-->
                    <div class="menu-button mt-40 d-xl-none">
                        <a href="{{route('contact_us')}}" class="main-btn btn-green">Book now<i class="far fa-angle-double-right"></i></a>
                    </div>
                </div>
                <!--=== Nav right Item ===-->
                <div class="nav-right-item d-flex align-items-center">
                    <div class="menu-button d-xl-block d-none">
                        <a href="{{route('contact_us')}}" class="main-btn btn-green">Book now<i class="far fa-angle-double-right"></i></a>
                    </div>
                    {{-- <div class="lang-dropdown">
                        <select class="wide">
                            <option value="English">English</option>
                            <option value="English">English</option>
                        </select>
                    </div> --}}
                    <div class="navbar-toggler">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>