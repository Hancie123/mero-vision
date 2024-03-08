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
                        <h1 class="breadcrumb-title text-color-primary">Our Team</h1>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item active">Our Team</li>
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


            <!-- ============ Team Member Wrapper Start =============== -->
                <div class="team-member-wrapper section-space--pt_100 section-space--pb_70">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-title section-space--mb_60 text-center">
                                    <h3 class="heading">OUR TEAM</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row ht-team-member-style-two">
                            <div class="col-lg-4 col-md-6 wow move-up">
                                <div class="grid-item">
                                    <div class="ht-team-member">
                                        <div class="team-image">
                                            <img class="img-fluid" src="{{url('assets/img/our_team/team-1.jpg')}}" alt="">
                                            <div class="social-networks">
                                                <div class="inner">
                                                    <a target="_blank" href="https://www.facebook.com/hanciephago720" class=" hint--bounce  hint--top hint--theme-two" aria-label="Facebook"><i class="fab fa-facebook"></i>
                                                    </a>
                                                    <a target="_blank" href="https://twitter.com/hancie_phago" class=" hint--bounce hint--top hint--theme-two" aria-label="Twitter"><i class="fab fa-twitter"></i>
                                                    </a>
                                                    <a target="_blank" href="https://www.instagram.com/hancie720/" class=" hint--bounce hint--top hint--theme-two" aria-label="Instagram"><i class="fab fa-instagram"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="team-info text-center">
                                            <h5 class="name">Hancie Phago</h5>
                                            <div class="position">CEO & Founder</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow move-up">
                                <div class="grid-item">
                                    <div class="ht-team-member">
                                        <div class="team-image">
                                            <img class="img-fluid" src="{{url('assets/img/our_team/team-2.jpg')}}" alt="">
                                            <div class="social-networks">
                                                <div class="inner">
                                                    <a target="_blank" href="https://www.facebook.com/nitesh.ham" class=" hint--bounce  hint--top hint--theme-two" aria-label="Facebook"><i class="fab fa-facebook"></i>
                                                    </a>
                                                    <a target="_blank" href="https://twitter.com/NiteshHamal1" class=" hint--bounce hint--top hint--theme-two" aria-label="Twitter"><i class="fab fa-twitter"></i>
                                                    </a>
                                                    <a target="_blank" href="https://www.instagram.com/niteshhamal/" class=" hint--bounce hint--top hint--theme-two" aria-label="Instagram"><i class="fab fa-instagram"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="team-info text-center">
                                            <h5 class="name">Nitesh Hamal</h5>
                                            <div class="position">Founder</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow move-up">
                                <div class="grid-item">
                                    <div class="ht-team-member">
                                        <div class="team-image">
                                            <img class="img-fluid" src="{{url('assets/img/our_team/team-3.jpg')}}" alt="">
                                            <div class="social-networks">
                                                <div class="inner">
                                                    <a target="_blank" href="#" class=" hint--bounce  hint--top hint--theme-two" aria-label="Facebook"><i class="fab fa-facebook"></i>
                                                    </a>
                                                    <a target="_blank" href="#" class=" hint--bounce hint--top hint--theme-two" aria-label="Twitter"><i class="fab fa-twitter"></i>
                                                    </a>
                                                    <a target="_blank" href="#" class=" hint--bounce hint--top hint--theme-two" aria-label="Instagram"><i class="fab fa-instagram"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="team-info text-center">
                                            <h5 class="name">Ajaya Timsina</h5>
                                            <div class="position">Founder</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                    </div>
                </div>
                <!-- ============ Team Member Wrapper End =============== -->





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
