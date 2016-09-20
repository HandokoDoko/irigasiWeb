@extends('layouts.intro')


@section('css')
    <link rel="stylesheet" href="{{ asset('') }}assets/plugins/weather-icons/css/weather-icons.min.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/plugins/nvd3/nv.d3.min.css">
@endsection

@section('content')

    <div class="section section-header">
        <div class="parallax pattern-image" style="background: rgb(12, 12, 12) none repeat scroll 0% 0%;">
         <img src="assets/img/bg.png"/>
            <div class="container">
                <div class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <h1>d.i. Serdang Bedagai</h1>
                            <h5>Sistem Informasi Daerah Irigasi Pemerintah Kabupaten Serdang Bedagai</h5>      
                            <!--<p style="margin-top:100px">
                                <a href="{{ url('/event/create') }}" class="btn btn-green">
                                    GET STARTED <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </p>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="#" data-scroll="true" data-id="#workflow" class="scroll-arrow hidden-xs hidden-sm">
        <i class="fa fa-angle-down"></i>
        </a>
    </div>

    <div class="section section-we-do-2" id="workflow">
        <div class="container">
            <div class="row">
                <div class="title add-animation">
                    <h2>Tentang Kami</h2>
                    <div class="separator-container">
                        <div class="separator line-separator">∎</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card add-animation animation-1">
                       <!--  <div class="icon">
                            <i class="pe-7s-tools"></i>
                        </div> -->
                        <h3>Visi Kementerian Pertanian</h3>
                        <p>Terwujudnya Indonesia yang Berdaulat, Mandiri dan Berkepribadian Berlandaskan Gotong Royong. </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card add-animation animation-2">
                       <!--  <div class="icon">
                            <i class="pe-7s-gift"></i>
                        </div> -->
                        <h3>Misi Kementerian Pertanian </h3>
                        <p> 1.Mewujudkan ketahanan pangan dan gizi<br>
                            2. Meningkatkan Nilai Tambah dan Daya Saing Komoditas Pertanian<br>
                            3. Mewujudkan kesejahteraan petani<br>
                            4.Mewujudkan Kementerian Pertanian yang transparan, akuntabel, profesional dan berintegritas tinggi <br>
                        </p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <div class="section section-we-are-1" id="whoWeAre">
        <div class="text-area">
            <div class="container">
                <div class="row">
                    <div class="title" id="animationTest">
                        <h2>apa itu Irigasi?</h2>
                        <div class="separator-container">
                            <div class="separator line-separator">∎</div>
                        </div>
                        <p class="large">
                             Irigasi adalah suatu sistem untuk mengairi suatu lahan dengan cara membendung sumber air. Atau dalam pengertian lain irigasi adalah usaha penyediaan, pengaturan, dan pembuangan air irigasi untuk menunjang pertanian yang jenisnya meliputi irigasi permukaan, irigasi rawa, irigasi air bawah tanah, irigasi pompa, dan irigasi tambak.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card add-animation animation-2">
                                <img alt="..." src="assets/img/1.jpg" />
                            </div>
                            <div class="card add-animation animation-4">
                                <img alt="..." src="assets/img/2.jpg" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card add-animation animation-1">
                                <img alt="..." src="assets/img/3.jpg"/>
                            </div>
                            <div class="card add-animation animation-3">
                                <img alt="..." src="assets/img/4.jpg"/>
                            </div>
                            <div class="card add-animation animation-2">
                                <img alt="..." src="assets/img/5.jpg"/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card add-animation animation-3">
                                <img alt="..." src="assets/img/6.jpg"/>
                            </div>
                             <div class="card add-animation animation-1">
                                <img alt="..." src="assets/img/7.jpg"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-we-made-3" id="projects">
       <!-- <div class="container">
            <div class="row">
                <div class="title add-animation">
                    <h2>Our Famous cer-template</h2>
                    <div class="separator-container">
                        <div class="separator line-separator">∎</div>
                    </div>
                    <p>Check out the most popular cer-template from our platform. We would love to hear your feedback.<br><br></p>
                </div>
            </div>
        </div>
        <div class="container">
             <div class="row">

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="project add-animation animation-1">
                        <a target="_blank" class="img-class" href="http://www.certivy-tim.com/product/material-kit?ref=presentation-page">
                           <img src="assets/img/opt_mk_thumbnail.jpg"/>
                        </a>
                        <div class="over-area over-area-sm color-1">
                            <div class="content">
                                <h5 class="text-gray">Just Launched</h5>
                                <h3>Material Kit</h3>
                                <p>Material Kit is a Free Bootstrap UI Kit with a fresh, new design inspired by Google's material design. You asked for it, so we built it. It's a great pleasure to introduce...</p>
                                <a target="_blank" href="http://demos.certivy-tim.com/material-kit/index.html?ref=presentation-page" class="btn btn-round">Live View</a>
                                <a target="_blank" href="http://www.certivy-tim.com/product/material-kit?ref=presentation-page" class="btn btn-round btn-fill">Free Download</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="project add-animation animation-2">
                        <a target="_blank" class="img-class" href="http://www.certivy-tim.com/product/get-shit-done-kit?ref=presentation-page">
                            <img src="assets/img/opt_GSDK_thumbnail.jpg"/>
                        </a>
                        <div class="over-area over-area-sm color-1">
                            <div class="content">
                                <h5 class="text-gray">19.200+ Downloads</h5>
                                <h3>Get Shit Done Kit</h3>
                                <p>Free Bootstrap 3 UI Kit, the best starting point for any online project you are building. It magically offers responsive design and easy to use elements.</p>
                                <a target="_blank" href="http://www.certivy-tim.com/get-shit-done" class="btn btn-round">Live View</a>
                                <a target="_blank" href="http://www.certivy-tim.com/product/get-shit-done-kit?ref=presentation-page" class="btn btn-round btn-fill">Free Download</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="project add-animation animation-3">
                        <a target="_blank" class="img-class" href="http://www.certivy-tim.com/product/coming-sssoon-page?ref=presentation-page">
                            <img src="assets/img/opt_coming_sssoon_thumbnail.jpg"/>
                        </a>
                        <div class="over-area over-area-sm color-1">
                            <div class="content">
                                <h5 class="text-gray">24.500+ Downloads</h5>
                                <h3>Coming Sssoon Page</h3>
                                <p>Use this page to create a following group users before actually starting your project! It is easy to use and it helps you be in contact with your audience!</p>
                                <a target="_blank" href="http://demos.certivy-tim.com/coming-sssoon-demo-image-background" class="btn btn-round">Live View</a>
                                <a target="_blank" href="http://www.certivy-tim.com/product/coming-sssoon-page?ref=presentation-page" class="btn btn-round btn-fill">Free Download</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="space-50"></div>

            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="project add-animation animation-1">
                        <a target="_blank" class="img-class" href="http://www.certivy-tim.com/product/light-bootstrap-dashboard?ref=presentation-page">
                            <img src="assets/img/opt_lbd_thumbnail.jpg">
                        </a>
                        <div class="over-area over-area-sm color-1">
                            <div class="content">
                                <h5 class="text-gray">8.500+ Downloads</h5>
                                <h3>Light Bootstrap Dashboard</h3>
                                <p>Light Bootstrap Dashboard is an admin dashboard template designed to be beautiful and simple. It is built on top of Bootstrap 3 and it is fully responsive.</p>
                                 <a target="_blank" href="http://demos.certivy-tim.com/light-bootstrap-dashboard/dashboard" class="btn btn-round">Live View</a>
                                <a target="_blank" href="http://www.certivy-tim.com/product/light-bootstrap-dashboard?ref=presentation-page" class="btn btn-round btn-fill">Free Download</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="project add-animation animation-2">
                        <a target="_blank" class="img-class" href="http://www.certivy-tim.com/product/paper-kit?ref=presentation-page">
                            <img src="assets/img/opt_pk_thumbnail.jpg">
                        </a>
                        <div class="over-area over-area-sm color-1">
                            <div class="content">
                                <h5 class="text-gray">6.200+ Downloads</h5>
                                <h3>Paper Kit</h3>
                                <p>Paper Kit is a free Bootstrap UI kit that can get you going in a new certivy direction! To say the least, it's different since it's not material, flat or iOS inspired.</p>
                                <a target="_blank" href="http://demos.certivy-tim.com/paper-kit" class="btn btn-round">Live View</a>
                                <a target="_blank" href="http://www.certivy-tim.com/product/paper-kit?ref=presentation-page" class="btn btn-round btn-fill">Free Download</a>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="project add-animation animation-3">
                        <a target="_blank" class="img-class" href="http://www.certivy-tim.com/product/awesome-landing-page?ref=presentation-page">
                            <img src="assets/img/opt_alp_thumbnail.jpg">
                        </a>
                        <div class="over-area over-area-sm color-1">
                            <div class="content">
                                <h5 class="text-gray">6.400+ Downloads</h5>
                                <h3>Awesome Landing Page</h3>
                                <p>Be amazed by the best looking bootstrap landing page on the web! Light colours and beautifully aligned elements - they all try to make the users aware of your great app features!</p>
                                <a target="_blank" href="http://demos.certivy-tim.com/landing-page" class="btn btn-round">Live View</a>
                                <a target="_blank" href="http://www.certivy-tim.com/product/awesome-landing-page?ref=presentation-page" class="btn btn-round btn-fill">Free Download</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>

@endsection




@section('script')
    <script type="text/javascript">
        //$('.navbar').addClass('navbar-transparent');
        //$('.navbar').addClass('navbar-fixed-top');

        $(window).on('scroll',function(){
           if(window_width > 980){
                rubik.checkScrollForParallax();
           }
           
           rubik.checkScrollForTransparentNavbar();    
                 
        });
    </script>
@endsection

