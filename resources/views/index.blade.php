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
            <!--============ Infotechno Hero Start ============-->
            <div class="infotechno-hero infotechno-bg">
                <div class="container-fluid">
                    <div class="row align-items-center"><!--baseline-->
                        <div class="col-lg-6 col-md-6">
                            <div class="infotechno-hero-text  wow move-up">
                                <h6>IT Services & Consulting </h6>
                                <h1 class="font-weight--reguler mb-15">Empowering Your Digital Journey <br>With Mero Vision's IT Solutions </h1>
                                <p>Highly Tailored IT Design, Management & Support Services. </p>
                                <div class="hero-button  mt-30">
                                    <a href="#" class="ht-btn ht-btn-md">Get details</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="infotechno-hero-inner-images">
                                <div class="infotechno-inner-one">
                                    <img class="img-fluid"
                                        src="{{ url('assets/img/home-infotechno-main-slider-slide-01-image-01.webp') }}"
                                        alt="">
                                </div>
                                <div class="infotechno-inner-two  wow move-up">
                                    <img class="img-fluid"
                                        src="{{ url('assets/img/home-infotechno-main-slider-slide-01-image-02.webp') }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--============ Infotechno Hero End ============-->


            <!--====================  brand logo slider area ====================-->
            {{-- <div class="brand-logo-slider-area section-space--ptb_60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- brand logo slider -->
                            <div class="brand-logo-slider__container-area">
                                <div class="swiper-container brand-logo-slider__container">
                                    <div class="swiper-wrapper brand-logo-slider__one">
                                        <div class="swiper-slide brand-logo brand-logo--slider">
                                            <a href="#">
                                                <div class="brand-logo__image">
                                                    <img src="{{ url('assets/img/client1.jpg') }}" class="img-fluid"
                                                        alt="">
                                                </div>
                                                <div class="brand-logo__image-hover">
                                                    <img src="{{ url('assets/img/client1.jpg') }}" class="img-fluid"
                                                        alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide brand-logo brand-logo--slider">
                                            <a href="#">
                                                <div class="brand-logo__image">
                                                    <img src="{{ url('assets/img/client2.jpeg') }}" class="img-fluid"
                                                        alt="">
                                                </div>
                                                <div class="brand-logo__image-hover">
                                                    <img src="{{ url('assets/img/client2.jpeg') }}" class="img-fluid"
                                                        alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide brand-logo brand-logo--slider">
                                            <a href="#">
                                                <div class="brand-logo__image">
                                                    <img src="{{ url('assets/img/client3.png') }}" class="img-fluid"
                                                        alt="">
                                                </div>
                                                <div class="brand-logo__image-hover">
                                                    <img src="{{ url('assets/img/client3.png') }}" class="img-fluid"
                                                        alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide brand-logo brand-logo--slider">
                                            <a href="#">
                                                <div class="brand-logo__image">
                                                    <img src="{{ url('assets/img/client4.png') }}" class="img-fluid"
                                                        alt="">
                                                </div>
                                                <div class="brand-logo__image-hover">
                                                    <img src="{{ url('assets/img/client4.png') }}" class="img-fluid"
                                                        alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide brand-logo brand-logo--slider">
                                            <a href="#">
                                                <div class="brand-logo__image">
                                                    <img src="{{ url('assets/img/client5.png') }}" class="img-fluid"
                                                        alt="">
                                                </div>
                                                <div class="brand-logo__image-hover">
                                                    <img src="{{ url('assets/img/client5.png') }}" class="img-fluid"
                                                        alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide brand-logo brand-logo--slider">
                                            <a href="#">
                                                <div class="brand-logo__image">
                                                    <img src="{{ url('assets/img/client6.webp') }}" class="img-fluid"
                                                        alt="" style="max-width: 100px;">
                                                </div>
                                                <div class="brand-logo__image-hover">
                                                    <img src="{{ url('assets/img/client6.webp') }}" class="img-fluid"
                                                        alt="" style="max-width: 100px;">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide brand-logo brand-logo--slider">
                                            <a href="#">
                                                <div class="brand-logo__image">
                                                    <img src="{{ url('assets/img/client7.png') }}" class="img-fluid"
                                                        alt="">
                                                </div>
                                                <div class="brand-logo__image-hover">
                                                    <img src="{{ url('assets/img/client7.png') }}" class="img-fluid"
                                                        alt="">
                                                </div>
                                            </a>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!--====================  End of brand logo slider area  ====================-->
            <!--===========  feature-images-wrapper  Start =============-->
            <div class="feature-images-wrapper bg-gray section-space--ptb_100">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-12">
                            <!-- section-title-wrap Start -->
                            <div class="section-title-wrap text-center">
                                <h6 class="section-sub-title mb-20">Our services</h6>
                                <h3 class="heading">For your very specific industry, <br> we have <span
                                        class="text-color-primary"> highly-tailored IT solutions.</span></h3>
                            </div>
                            <!-- section-title-wrap Start -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="feature-images__one">
                                <div class="row">

                                    <div class="col-lg-4 col-md-6 wow move-up">
                                        <!-- ht-box-icon Start -->
                                        <div class="ht-box-images style-01">
                                            <div class="image-box-wrap">
                                                <div class="box-image">
                                                    <img class="img-fulid"
                                                        src="{{ url('assets/img/service1.webp') }}" alt="">
                                                </div>
                                                <div class="content">
                                                    <h5 class="heading">IT Design </h5>
                                                    <div class="text">We provide the most responsive and functional
                                                        IT design for companies and businesses worldwide.
                                                    </div>
                                                    <div class="circle-arrow">
                                                        <div class="middle-dot"></div>
                                                        <div class="middle-dot dot-2"></div>
                                                        <a href="#">
                                                            <i class="fas fa-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ht-box-icon End -->
                                    </div>

                                    <div class="col-lg-4 col-md-6 wow move-up">
                                        <!-- ht-box-icon Start -->
                                        <div class="ht-box-images style-01">
                                            <div class="image-box-wrap">
                                                <div class="box-image">
                                                    <img class="img-fulid"
                                                        src="{{ url('assets/img/service2.webp') }}" alt="">
                                                </div>
                                                <div class="content">
                                                    <h5 class="heading">IT Management</h5>
                                                    <div class="text">It’s possible to simultaneously manage and
                                                        transform information from one server to another.
                                                    </div>
                                                    <div class="circle-arrow">
                                                        <div class="middle-dot"></div>
                                                        <div class="middle-dot dot-2"></div>
                                                        <a href="#">
                                                            <i class="fas fa-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ht-box-icon End -->
                                    </div>

                                    <div class="col-lg-4 col-md-6 wow move-up">
                                        <!-- ht-box-icon Start -->
                                        <div class="ht-box-images style-01">
                                            <div class="image-box-wrap">
                                                <div class="box-image">
                                                    <img class="img-fulid"
                                                        src="{{ url('assets/img/service3.webp') }}" alt="">
                                                </div>
                                                <div class="content">
                                                    <h5 class="heading">Data Security</h5>
                                                    <div class="text">Back up your database, store in a safe and
                                                        secure place while still maintaining its accessibility.
                                                    </div>
                                                    <div class="circle-arrow">
                                                        <div class="middle-dot"></div>
                                                        <div class="middle-dot dot-2"></div>
                                                        <a href="#">
                                                            <i class="fas fa-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ht-box-icon End -->
                                    </div>

                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
            <!--===========  feature-images-wrapper  End =============-->

            <!-- ============ Our Experience Wrapper Start =============== -->
            <div class="section-space--ptb_100 infotechno-section-bg-01">

                <div class="our-experience-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="section-title small-mb__40 tablet-mb__40">
                                    <h6 class="section-sub-title mb-20">Our company</h6>
                                    <h3 class="heading">We’ve been thriving in <span class="text-color-primary">3
                                            years</span></h3>
                                    <p class="text mt-20">Mero Vision, a leading IT company based in Kathmandu, Nepal,
                                        has been revolutionizing the digital landscape since its establishment in 2022
                                        under the visionary leadership of CEO Hancie Phago. Committed to delivering
                                        cutting-edge solutions, Mero Vision offers a wide range of services tailored to
                                        meet the diverse needs of its clientele.</p>

                                    <div class="sider-title-button-box mt-30">
                                        <a href="#" class="ht-btn ht-btn-md">Join us now</a>
                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-5 offset-lg-2">
                                <div class="ht-list style-auto-numbered-02">
                                    <div class="list-item">
                                        <a class="link" href="#">
                                            <div class="list-header">
                                                <div class="marker">
                                                    01
                                                </div>
                                                <div class="title-wrap">
                                                    <h6 class="title">Mero Vision offers a range of IT services.</h6>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="list-item">
                                        <a class="link" href="#">
                                            <div class="list-header">
                                                <div class="marker">
                                                    02
                                                </div>
                                                <div class="title-wrap">
                                                    <h6 class="title">We offer ongoing support and maintenance services.</h6>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="list-item">
                                        <a class="link" href="#">
                                            <div class="list-header">
                                                <div class="marker"> 03</div>
                                                <div class="title-wrap">
                                                    <h6 class="title"> We have extensive experience collaborating with clients.</h6>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                


            </div>
            <!-- ============ Our Experience Wrapper End =============== -->


            <!--=========== fun fact Wrapper Start ==========-->
            <div class="fun-fact-wrapper">
                <div class="container">
                    <div class="fun-fact-grid-4">
                        <div class="grid-item  wow move-up">
                            <div class="fun-fact--one text-center">
                                <h5 class="fun-fact__title">Successfully work <br> with </h5>
                                <div class="fun-fact__count counter">15</div>
                                <span class="fun-fact__text">HAPPY CLIENTS</span>
                            </div>
                        </div>
                        <div class="grid-item  wow move-up">
                            <div class="fun-fact--one text-center">
                                <h5 class="fun-fact__title">Successfully <br> completed</h5>
                                <div class="fun-fact__count counter">50</div>
                                <span class="fun-fact__text">Finished projects</span>
                            </div>
                        </div>
                        <div class="grid-item  wow move-up">
                            <div class="fun-fact--one text-center">
                                <h5 class="fun-fact__title">Recruit more <br> than</h5>
                                <div class="fun-fact__count counter">10</div>
                                <span class="fun-fact__text">SKilled Experts</span>
                            </div>
                        </div>
                        <div class="grid-item  wow move-up">
                            <div class="fun-fact--one text-center">
                                <h5 class="fun-fact__title">Blog <br> update </h5>
                                <div class="fun-fact__count counter">20</div>
                                <span class="fun-fact__text">Media Posts</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--=========== fun fact Wrapper End ==========-->
            
            <!--===========  Projects wrapper Start =============-->
            {{-- <div class="projects-wrapper projectinfotechno-bg section-space--ptb_100">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-12">
                            <!-- section-title-wrap Start -->
                            <div class="section-title-wrap text-center section-space--mb_40">
                                <h6 class="section-sub-title mb-20">Case studies</h6>
                                <h3 class="heading">Proud projects that<span class="text-color-primary"> make us stand
                                        out</span></h3>
                            </div>
                            <!-- section-title-wrap Start -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="projects-wrap swiper-container projects-slider__container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <!-- Projects Wrap Start -->
                                        <a href="#" class="projects-wrap style-01 wow move-up">
                                            <div class="projects-image-box">
                                                <div class="projects-image">
                                                    <img class="img-fluid"
                                                        src="assets/images/projects/case-study-01-480x298.webp"
                                                        alt="">
                                                </div>
                                                <div class="content">
                                                    <h6 class="heading">Mitech-Smart Vision</h6>
                                                    <div class="post-categories">Cyber Security</div>
                                                    <div class="text">At Mitech, we have a holistic and integrated
                                                        approach towards core modernization to experience technological
                                                        evolution.
                                                    </div>
                                                    <div class="box-projects-arrow">
                                                        <span class="button-text">View case study</span>
                                                        <i class="fas fa-arrow-right ml-1"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- Projects Wrap End -->
                                    </div>

                                    <div class="swiper-slide">
                                        <!-- Projects Wrap Start -->
                                        <a href="#" class="projects-wrap style-01 wow move-up">
                                            <div class="projects-image-box">
                                                <div class="projects-image">
                                                    <img class="img-fluid"
                                                        src="assets/images/projects/case-study-02-480x298.webp"
                                                        alt="">
                                                </div>
                                                <div class="content">
                                                    <h6 class="heading">Arden-Internal Networking</h6>
                                                    <div class="post-categories">Cyber Security</div>
                                                    <div class="text">The prospects for a company operating in this
                                                        new market are varied and exciting. The potential …
                                                    </div>
                                                    <div class="box-projects-arrow">
                                                        <span class="button-text">View case study</span>
                                                        <i class="fas fa-arrow-right ml-1"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- Projects Wrap End -->
                                    </div>

                                    <div class="swiper-slide">
                                        <!-- Projects Wrap Start -->
                                        <a href="#" class="projects-wrap style-01 wow move-up">
                                            <div class="projects-image-box">
                                                <div class="projects-image">
                                                    <img class="img-fluid"
                                                        src="assets/images/projects/case-study-03-480x298.webp"
                                                        alt="">
                                                </div>
                                                <div class="content">
                                                    <h6 class="heading">A Freeserve case study</h6>
                                                    <div class="post-categories">Cyber Security</div>
                                                    <div class="text">The prospects for a company operating in this
                                                        new market are varied and exciting. The potential …
                                                    </div>
                                                    <div class="box-projects-arrow">
                                                        <span class="button-text">View case study</span>
                                                        <i class="fas fa-arrow-right ml-1"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- Projects Wrap End -->
                                    </div>

                                    <div class="swiper-slide">
                                        <!-- Projects Wrap Start -->
                                        <a href="#" class="projects-wrap style-01 wow move-up">
                                            <div class="projects-image-box">
                                                <div class="projects-image">
                                                    <img class="img-fluid"
                                                        src="assets/images/projects/case-study-04-480x298.webp"
                                                        alt="">
                                                </div>
                                                <div class="content">
                                                    <h6 class="heading">Aqua – Research and Energy</h6>
                                                    <div class="post-categories">Cyber Security</div>
                                                    <div class="text">The prospects for a company operating in this
                                                        new market are varied and exciting. The potential …
                                                    </div>
                                                    <div class="box-projects-arrow">
                                                        <span class="button-text">View case study</span>
                                                        <i class="fas fa-arrow-right ml-1"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- Projects Wrap End -->
                                    </div>

                                </div>
                                <div class="swiper-pagination swiper-pagination-project mt_20"></div>
                            </div>

                            <div class="section-under-heading text-center section-space--mt_40">Challenges are just
                                opportunities in disguise. <a href="#">Take the challenge!</a></div>

                        </div>
                    </div>
                </div>
            </div> --}}
            <!--===========  Projects wrapper End =============-->

            


            
            <!--====================  Conact us Section Start ====================-->
            <div class="contact-us-section-wrappaer infotechno-contact-us-bg section-space--ptb_120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-lg-6">
                            <div class="conact-us-wrap-one">
                                <h3 class="heading">Obtain further information by <span
                                        class="text-color-primary">make a contact</span> with our experienced IT
                                    staffs. </h3>

                                <div class="sub-heading">Have questions or want to discuss your project? Contact us now for personalized IT solutions that propel your business forward.</div>

                            </div>
                        </div>

                        <div class="col-lg-6 col-lg-6">
                            <div class="contact-info-one text-center">
                                <div class="icon">
                                    <span class="fas fa-phone"></span>
                                </div>
                                <h6 class="heading font-weight--reguler">Reach out now!</h6>
                                <h2 class="call-us"><a href="tel:9825915122">9825915122</a></h2>
                                <div class="contact-us-button mt-20">
                                    <a href="#" class="btn btn--secondary">Contact us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====================  Conact us Section End  ====================-->
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
