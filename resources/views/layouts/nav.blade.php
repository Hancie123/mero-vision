  <!--====================  header area ====================-->
    {{-- <div class="header-area header-area--default">

        <!-- Header Top Wrap Start -->
        <div class="header-top-wrap border-bottom">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="text-center top-message"><a href="#">Now Hiring:</a> Are you a driven and motivated 1st Line IT Support Engineer?</p>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Header Top Wrap End -->

        <!-- Header Bottom Wrap Start -->
        <div class="header-bottom-wrap header-sticky">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header default-menu-style position-relative">

                            <!-- brand logo -->
                            <div class="header__logo">
                                <a href="{{url('/')}}">
                                    <img src="{{url('assets/img/logo.png')}}" aria-label="Mitech Logo" width="160" height="48" class="img-fluid" alt="">
                                </a>
                            </div>

                            <!-- header midle box  -->
                            <div class="header-midle-box">
                                <div class="header-bottom-wrap d-md-block d-none">
                                    <div class="header-bottom-inner">
                                        <div class="header-bottom-left-wrap">
                                            <!-- navigation menu -->
                                            <div class="header__navigation d-none d-xl-block">
                                                <nav class="navigation-menu primary--menu">

                                                    <ul>
                                                        <li class="{{Request()->is('/')?"active":""}}">
                                                            <a href="{{url('/')}}"><span>Home</span></a>
                                                           
                                                        </li>

                                                        <li class="{{Request()->is('/about')?"active":""}}">
                                                            <a href="{{url('about')}}"><span>About</span></a>
                                                           
                                                        </li>
                                                        
                                                        
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- header right box -->
                            <div class="header-right-box">
                                <div class="header-right-inner" id="hidden-icon-wrapper">

                                   

                                    <!-- header-search-form -->
                                    <div class="header-search-form default-search">
                                        <form action="#" class="search-form-top">
                                            <input class="search-field" type="text" placeholder="Search…">
                                            <button class="search-submit">
                                                <i class="search-btn-icon fa fa-search"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>

                                <!-- mobile menu -->
                                <div class="mobile-navigation-icon d-block d-xl-none" id="mobile-menu-trigger">
                                    <i></i>
                                </div>
                                <!-- hidden icons menu -->
                                <div class="hidden-icons-menu d-block d-md-none" id="hidden-icon-trigger">
                                    <a href="javascript:void(0)">
                                        <i class="far fa-ellipsis-h-alt"></i>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Bottom Wrap End -->

    </div>
    <!--====================  End of header area  ====================-->