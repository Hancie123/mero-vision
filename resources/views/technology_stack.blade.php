<!DOCTYPE html>
<html>

<head>
    @include('layouts.header')

</head>

<body>

    <div class="preloader-activate preloader-active open_tm_preloader">
        <div class="preloader-area-wrap">
            <div class="spinner d-flex justify-content-center align-items-center h-100">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>

    @include('layouts.nav')

    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_box text-center">
                        <h1 class="breadcrumb-title text-color-primary">Our Technology Stack</h1>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Teachnology Stack</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->


    <div id="main-wrapper">
        <div class="site-wrapper-reveal">


            <!--===========  feature-large-images-wrapper  Start =============-->
            <div class="feature-large-images-wrapper bg-gray section-space--ptb_100">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-12">
                            <!-- section-title-wrap Start -->
                            <div class="section-title-wrap text-center section-space--mb_10">
                                <h6 class="section-sub-title mb-20">Optimal IT Management Solutions</h6>
                                <h5 class="heading">Our team has a deep understanding of the industry’s leading
                                    technologies across iOS and Android, Website and Web
                                    Applications.</h5>
                            </div>
                            <!-- section-title-wrap Start -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="feature-images__two small-mt__10">
                                <div class="modern-grid-image-box row row--30">

                                    <div
                                        class=" single-item ht-box-images style-02 wow move-up col-lg-12 col-md-12 section-space--mt_60  small-mt__40 ">
                                        <div class="mx-2 row image-box-wrap">
                                            <h5>Web App Development</h5>
                                            <br><br>
                                            <div class="col-2">
                                                <img src="{{ url('assets/img/icons/docker.webp') }}"
                                                    style="max-width: 50px;" />

                                            </div>
                                            <div class="col-2">
                                                <img src="{{ url('assets/img/icons/XMPP_logo.svg-300x300-1.png') }}"
                                                    style="max-width: 50px;" />

                                            </div>
                                            <div class="col-2">
                                                <img src="{{ url('assets/img/icons/express.webp') }}"
                                                    style="max-width: 50px;" />

                                            </div>
                                            <div class="col-2">
                                                <img src="{{ url('assets/img/icons/firebase.webp') }}"
                                                    style="max-width: 50px;" />

                                            </div>
                                            <div class="col-2">
                                                <img src="{{ url('assets/img/icons/reactJs.svg') }}"
                                                    style="max-width: 50px;" />

                                            </div>

                                            <div class="col-2">
                                                <img src="{{ url('assets/img/icons/laravel.jpeg') }}"
                                                    style="max-width: 50px;" />

                                            </div>

                                            

                                            <div class="col-2 mt-2">
                                                <img src="{{ url('assets/img/icons/mysql.svg') }}"
                                                    style="max-width: 50px;" />

                                            </div>

                                        </div>


                                    </div>

                                    

                                    

                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="feature-list-button-box mt-40 text-center">
                                    <a href="#" class="ht-btn ht-btn-md">Learn more</a>
                                    <a href="#" class="ht-btn ht-btn-md ht-btn--outline">Contact us</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!--===========  feature-large-images-wrapper  End =============-->


            <!--========== Call to Action Area Start ============-->
            <div class="cta-image-area_one section-space--ptb_80 cta-bg-image_one">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-8 col-lg-7">
                            <div class="cta-content md-text-center">
                                <h3 class="heading text-white">Assess your business potentials and find opportunities
                                    <span class="text-color-secondary">for bigger success</span>
                                </h3>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5">
                            <div class="cta-button-group--one text-center">
                                <a href="#" class="btn btn--white btn-one"><span class="btn-icon me-2"><i
                                            class="far fa-comment-alt"></i></span> Contact Us</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--========== Call to Action Area End ============-->





        </div>
    </div>



    <!--====================  scroll top ====================-->
    <a href="#" class="scroll-top" id="scroll-top">
        <i class="arrow-top fas fa-chevron-up"></i>
        <i class="arrow-bottom fas fa-chevron-up"></i>
    </a>
    <!--====================  End of scroll top  ====================-->



    @include('layouts.mobile_nav')







    <!--====================  search overlay ====================-->
    <div class="search-overlay" id="search-overlay">

        <div class="search-overlay__header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6 ms-auto col-4">
                        <!-- search content -->
                        <div class="search-content text-end">
                            <span class="mobile-navigation-close-icon" id="search-close-trigger"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="search-overlay__inner">
            <div class="search-overlay__body">
                <div class="search-overlay__form">
                    <form action="#">
                        <input type="text" placeholder="Search">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of search overlay  ====================-->








    @include('layouts.footer')


</body>

</html>
