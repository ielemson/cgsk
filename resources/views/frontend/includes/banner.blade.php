
<!--====== End Header ======-->
<!--====== Start Breadcrumb Section ======-->
<section class="page-banner light-red-bg pt-170 pb-170 bg_cover" style="background-image: url(/frontend/assets/images/bg/page-bg-1.jpg);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="page-banner-content text-center text-white">
                    <h1 class="page-title">{{$title ?? ''}}</h1>
                    <ul class="breadcrumb-link text-white">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="active">{{$title ?? ''}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Breadcrumb Section ======-->