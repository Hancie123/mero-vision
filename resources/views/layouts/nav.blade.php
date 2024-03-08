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
                          <a href="{{ url('/') }}">
                              <img src="{{ url('assets/img/logo.png') }}" aria-label="Mitech Logo" width="160"
                                  height="10" class="img-fluid" alt="">
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
                                                  <li class="{{ Request()->is('/') ? 'active' : '' }}">
                                                      <a href="{{ url('/') }}"><span>Home</span></a>

                                                  </li>





                                                  <li class="has-children">
                                                      <a href="#"><span>Technology</span></a>
                                                      <!-- mega menu -->
                                                      <ul class="megamenu megamenu--mega">
                                                          <li>
                                                              <h2 class="page-list-title">Mobile</h2>
                                                              <ul>
                                                                  <li class="text-dark"><span>Flutter App
                                                                          Development</span></li>

                                                              </ul>
                                                          </li>
                                                          <li>
                                                              <h2 class="page-list-title">Progessive Web App</h2>
                                                              <ul>
                                                                  <li class="text-dark"><span>Laravel/PHP</span></li>
                                                              </ul>


                                                              <h2 class="page-list-title mt-4">Desktop Application</h2>
                                                              <ul>
                                                                  <li class="text-dark"><span>Python</span></li>
                                                                  <li class="text-dark"><span>.NET</span></li>
                                                                  <li class="text-dark"><span>Java/Swing</span></li>
                                                              </ul>
                                                          </li>
                                                          <li>
                                                              <h2 class="page-list-title">Website/eCommerce</h2>
                                                              <ul>
                                                                  <li class="text-dark"><span>WordPress</span></li>
                                                                  <li class="text-dark"><span>eCommerce Web
                                                                          Design</span></li>
                                                              </ul>
                                                          </li>
                                                          <li>
                                                              <h2 class="page-list-title">Frontend Development</h2>
                                                              <ul>
                                                                  <li class="text-dark"><span>ReactJS</span></li>
                                                              </ul>
                                                          </li>
                                                      </ul>
                                                  </li>

                                                  <li class="{{ Request()->is('/blog') ? 'active' : '' }}">
                                                      <a href="{{ url('#') }}"><span>Projects</span></a>

                                                  </li>

                                                  <li class="{{ Request()->is('/blog') ? 'active' : '' }}">
                                                      <a href="{{ url('#') }}"><span>Blog</span></a>

                                                  </li>

                                                  <li class="has-children has-children--multilevel-submenu">
                                                      <a href="#"><span>About</span></a>
                                                      <ul class="submenu">
                                                          <li class="{{ Request()->is('/about') ? 'active' : '' }}">
                                                              <a href="{{ url('about') }}"><span
                                                                      class="text-dark">About Us</span></a>

                                                          </li>
                                                          <li><a href="managed-it-service.html"><span
                                                                      class="text-dark">Our
                                                                      Team</span></a></li>
                                                          <li
                                                              class="{{ Request()->is('/technology-stack') ? 'active' : '' }}">
                                                              <a href="technology-stack"><span
                                                                      class="text-dark">Technology
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
