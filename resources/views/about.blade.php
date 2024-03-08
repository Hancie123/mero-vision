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




    <div id="main-wrapper">
        <div class="site-wrapper-reveal">
            <div class="about-banner-wrap banner-space about-us-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 m-auto">
                            <div class="about-banner-content text-center">
                                <h1 class="mb-15 text-white">About Mero Vision</h1>
                                <h5 class="font-weight--normal text-white">Discover Mero Vision: Your Go-To Hub for
                                    Cutting-Edge IT Solutions. From Android and iOS apps to web design and development,
                                    we're your partner in digital success. With a commitment to excellence and a focus
                                    on client satisfaction, we tailor our services to meet your unique needs. </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--===========  feature-large-images-wrapper  Start =============-->
            <div class="feature-large-images-wrapper mt-5">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-12">
                            <!-- section-title-wrap Start -->
                            <div class="section-title-wrap text-center section-space--mb_60">
                                <h6 class="section-sub-title mb-20">Our company</h6>
                                <h3 class="heading">We run all kinds of IT services that <br> vow your <span
                                        class="text-color-primary"> success</span></h3>
                            </div>
                            <!-- section-title-wrap Start -->
                        </div>
                    </div>

                    <div class="cybersecurity-about-box section-space--pb_70">
                        <div class="row">
                            <div class="col-lg-4 offset-lg-1">
                                <div class="modern-number-01">
                                    <h2 class="heading  me-5"><span class="mark-text">3</span>Years’ Experience in IT
                                    </h2>
                                    {{-- <h6 class="heading mt-30">More About Our Success Stories</h6> --}}
                                </div>
                            </div>

                            <div class="col-lg-5 offset-lg-1">
                                <div class="cybersecurity-about-text">
                                    <div class="text">Welcome to Mero Vision: Your Premier Destination for IT
                                        Excellence. With a passion for innovation and a dedication to client success, we
                                        offer a comprehensive suite of services tailored to your needs. From mobile app
                                        development to website design, we're here to elevate your digital presence and
                                        drive results.</div>
                                    <div class="button-text">
                                        <a href="#" class="btn-text">
                                            Discover now
                                            <span class="button-icon ml-1">
                                                <i class="fas fa-arrow-right"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
            <!--===========  feature-large-images-wrapper  End =============-->





            <!--========= About Delivering Wrapper Start ===========-->
            <div class="about-delivering-wrapper mb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title-wrap text-center section-space--mb_20">
                                <h3 class="heading">We excel in delivering <br>optimal solutions.</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="delivering-optimal-wrap">
                                <div class="list-item">
                                    <div class="marker"></div>
                                    <div class="title-wrap">
                                        <h5 class="title"> Warranty Management IT </h5>
                                        <div class="desc">Our service offerings enhance customer experience
                                            throughout
                                            secure &amp; highly functional end-to-end warranty management. </div>
                                    </div>
                                </div>
                                <div class="list-item">
                                    <div class="marker"></div>
                                    <div class="title-wrap">
                                        <h5 class="title"> Quality Control System </h5>
                                        <div class="desc">It's more than a responsibility but a guarantee from us to
                                            gain
                                            customer trust with highly reliable quality control system. </div>
                                    </div>
                                </div>
                                <div class="list-item">
                                    <div class="marker"></div>
                                    <div class="title-wrap">
                                        <h5 class="title">Highly Professional Staffs </h5>
                                        <div class="desc">Having obtained the official & formal training in IT
                                            technology
                                            and technical fields, our staffs know more than what they show. </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="delivering-optimal-wrap">
                                <div class="list-item">
                                    <div class="marker"></div>
                                    <div class="title-wrap">
                                        <h5 class="title">Product Engineering & Services </h5>
                                        <div class="desc">Develop and propose product improvements through periodical
                                            and
                                            accurate testing, repairing & refining every version. </div>
                                    </div>
                                </div>
                                <div class="list-item">
                                    <div class="marker"></div>
                                    <div class="title-wrap">
                                        <h5 class="title">Infrastructure Integration Technology </h5>
                                        <div class="desc">At Mitech, we have a holistic and integrated approach
                                            towards
                                            core modernization to experience technological evolution. </div>
                                    </div>
                                </div>
                                <div class="list-item">
                                    <div class="marker"></div>
                                    <div class="title-wrap">
                                        <h5 class="title">Information Security Management </h5>
                                        <div class="desc">Information security has been a rising issue lately due to
                                            a
                                            series of scandals from big companies, rest assured, we're here. </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





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
