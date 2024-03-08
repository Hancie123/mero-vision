<!--====================  mobile menu overlay ====================-->
<div class="mobile-menu-overlay" id="mobile-menu-overlay">
    <div class="mobile-menu-overlay__inner">
        <div class="mobile-menu-overlay__header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8">
                        <!-- logo -->
                        <div class="logo">
                            <a href="index.html">
                                <img src="assets/images/logo/logo-dark.webp" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-4">
                        <!-- mobile menu content -->
                        <div class="mobile-menu-content text-end">
                            <span class="mobile-navigation-close-icon" id="mobile-menu-close-trigger"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-menu-overlay__body">
            <nav class="offcanvas-navigation">
                <ul>
                    <li class="{{ Request()->is('/') ? 'active' : '' }}">
                        <a href="{{ url('/') }}"><span>Home</span></a>

                    </li>





                    <li class="{{ Request()->is('/blog') ? 'active' : '' }}">
                        <a href="{{ url('#') }}"><span>Projects</span></a>

                    </li>

                    <li class="{{ Request()->is('/blog') ? 'active' : '' }}">
                        <a href="{{ url('#') }}"><span>Blog</span></a>

                    </li>

                    <li class="has-children">
                        <a href="#"><span>About</span></a>
                        <ul class="sub-menu">
                            <li class="{{ Request()->is('about') ? 'active' : '' }}">
                                <a href="{{ url('about') }}"><span class="text-dark">About Us</span></a>

                            </li>
                            <li class="{{ Request()->is('our-team') ? 'active' : '' }}">
                                <a href="{{ url('our-team') }}"><span class="text-dark">Our
                                        Team</span></a>
                            </li>
                            <li class="{{ Request()->is('technology-stack') ? 'active' : '' }}">
                                <a href="technology-stack"><span class="text-dark">Technology
                                        Stacks</span></a>
                            </li>

                        </ul>
                    </li>

                    <li class="{{ Request()->is('/blog') ? 'active' : '' }}">
                        <a href="{{ url('#') }}"><span>Careers</span></a>

                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<!--====================  End of mobile menu overlay  ====================-->
