@extends('client.layouts.master')
@section('content')
    <div id="main-page">
        <!-- Home -->
        <section id="home" class="bg-hero"
                 style="background-image: url(https://athemeart.com/html-demo/cvr/html/images/home/bg2.jpg);">
            <div class="partical-bg">
                <div id="particles"></div>
            </div>
            <div class="main-wrapper">
                <div class="img-box"><img src="https://athemeart.com/html-demo/cvr/html/images/home/1.jpg" alt=""
                                          class="user-img"></div>
                <h1 class="author-name">Candice Brady</h1>
                <h4>
			                <span class="cd-headline letters scale">
			                  <span class="cd-words-wrapper">
			                    <b>designer</b> 
			                    <b class="is-visible">developer</b> 
			                    <b>freelancer</b>
			                  </span>
			                </span>
                    <span class="cd-headline letters scale">
			                  <span class="cd-words-wrapper">
			                    <b>designer</b> 
			                    <b>developer</b> 
			                    <b class="is-visible">freelancer</b>
			                  </span>
			                </span>
                    <span class="cd-headline letters scale">
			                  <span class="cd-words-wrapper">
			                    <b class="is-visible">designer</b> 
			                    <b>developer</b> 
			                    <b>freelancer</b>
			                  </span>
			                </span>
                </h4>
                <ul class="social-icon">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-github-alt" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                </ul>
            </div> <!-- /.main-wrapper -->
        </section> <!-- /#home -->
        <!-- End Home -->


        <!-- About Me -->
        <section id="about">
            <div class="main-wrapper-bg">
                <div class="theme-container">
                    <h2 class="theme-title">About <span>Me.</span></h2>
                    <div class="about-block">
                        <div class="text">
                            <div class="row">
                                <div class="col-12">
                                    <p class="cd-headline clip is-full-width">Hi! My name is <span class="name">Candice Brady</span>.
                                        I’m a
                                        <span class="cd-words-wrapper">
												<b class="is-visible">Designer</b>
													<b>Developer</b>
													<b>Freelancer</b>
												</span>
                                        and I make things work. I move from digital physical, from bits to atoms, and
                                        back again because I believe in doing a diverse range of work. In both cases,
                                        the stranded whales these two skeletons belonged. Risus placerat risus <a
                                                href="#">pulvinar viverra</a> praesent convallis, tellus eu semper
                                        iaculis. lacinia feugiatUrna potenti eget id lobortis imperdiet, pellentesque
                                        massa cursus magna malesuada.
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-5 col-lg-4 col-md-5 order-md-last"><img
                                            src="https://athemeart.com/html-demo/cvr/html/images/home/me.jpg" alt=""
                                            class="my-img"></div>
                                <div class="col-xl-7 col-lg-8 col-md-7 order-md-first">
                                    <ul class="clearfix profile-list">
                                        <li><span>Age:</span> 27 Years</li>
                                        <li><span>City:</span> New York, USA</li>
                                        <li><span>Study:</span> New York University</li>
                                        <li><span>Website:</span> <a href="#">www.yourwebsite.com</a></li>
                                        <li><span>Mail:</span> <a href="#">yourmail@gmail.com</a></li>
                                        <li><span>Phone:</span> +99 022 248 05 08</li>
                                        <li><span>Current Job:</span> Web Developer</li>
                                        <li><span>Freelance Status:</span> Available</li>
                                    </ul>
                                    <a href="#contact" class="theme-btn button--wayra scroll-target">Hire Me</a>
                                    <a href="#" class="theme-btn button--wayra cv-button">Download CV</a>
                                </div>
                            </div>
                        </div> <!-- /.text -->
                    </div> <!-- /.about-block -->

                    <div class="service-block pt-130">
                        <h2 class="theme-title-two">Servi<span>ces.</span></h2>

                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-core-service mt-40">
                                    <i class="icon flaticon-pencil"></i>
                                    <h5><a href="#">WEB DEVELOPMENT</a></h5>
                                    <p>Lorem ipsum dolor sit amet, ne utamur partiendo posidoniu peru, justo meitum
                                        democritum ut eam. Minim numquam sed ne.</p>
                                </div> <!-- /.single-core-service -->
                            </div> <!-- /.col- -->
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-core-service mt-40">
                                    <i class="icon flaticon-idea"></i>
                                    <h5><a href="#">GAME DEVELOPMENT</a></h5>
                                    <p>Lorem ipsum dolor sit amet, ne utamur partiendo posidoniu peru, justo meitum
                                        democritum ut eam. Minim numquam sed ne.</p>
                                </div> <!-- /.single-core-service -->
                            </div> <!-- /.col- -->
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-core-service mt-40">
                                    <i class="icon flaticon-bookmark"></i>
                                    <h5><a href="#">Mobile Application</a></h5>
                                    <p>Lorem ipsum dolor sit amet, ne utamur partiendo posidoniu peru, justo meitum
                                        democritum ut eam. Minim numquam sed ne.</p>
                                </div> <!-- /.single-core-service -->
                            </div> <!-- /.col- -->
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-core-service mt-40">
                                    <i class="icon flaticon-alarm"></i>
                                    <h5><a href="#">Social Media</a></h5>
                                    <p>Lorem ipsum dolor sit amet, ne utamur partiendo posidoniu peru, justo meitum
                                        democritum ut eam. Minim numquam sed ne.</p>
                                </div> <!-- /.single-core-service -->
                            </div> <!-- /.col- -->
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-core-service mt-40">
                                    <i class="icon flaticon-target"></i>
                                    <h5><a href="#">Photography</a></h5>
                                    <p>Lorem ipsum dolor sit amet, ne utamur partiendo posidoniu peru, justo meitum
                                        democritum ut eam. Minim numquam sed ne.</p>
                                </div> <!-- /.single-core-service -->
                            </div> <!-- /.col- -->
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-core-service mt-40">
                                    <i class="icon flaticon-star"></i>
                                    <h5><a href="#">Marketing</a></h5>
                                    <p>Lorem ipsum dolor sit amet, ne utamur partiendo posidoniu peru, justo meitum
                                        democritum ut eam. Minim numquam sed ne.</p>
                                </div> <!-- /.single-core-service -->
                            </div> <!-- /.col- -->
                        </div>
                    </div> <!-- /.service-block -->


                    <div class="pricing-plan pt-130">
                        <h2 class="theme-title-two">Pricing <span>Plan</span></h2>
                        <div class="row mt-20">
                            <div class="col-md-4">
                                <div class="single-plan-table">
                                    <h6>Basic</h6>
                                    <strong><sup>$</sup>09<span>/Hour</span></strong>
                                    <ul>
                                        <li>Web Development</li>
                                        <li>Advetising</li>
                                        <li class="inactive">
                                            <del>Game Development</del>
                                        </li>
                                        <li>Content Writing</li>
                                        <li class="inactive">
                                            <del>Photography</del>
                                        </li>
                                    </ul>
                                    <a href="#">Enroll NOW</a>
                                </div> <!-- /.single-plan-table -->
                            </div> <!-- /.col- -->
                            <div class="col-md-4">
                                <div class="single-plan-table">
                                    <h6>Pro</h6>
                                    <strong><sup>$</sup>19<span>/Hour</span></strong>
                                    <ul>
                                        <li>Web Development</li>
                                        <li>Advetising</li>
                                        <li>Game Development</li>
                                        <li>Content Writing</li>
                                        <li class="inactive">
                                            <del>Photography</del>
                                        </li>
                                    </ul>
                                    <a href="#">Enroll NOW</a>
                                </div> <!-- /.single-plan-table -->
                            </div> <!-- /.col- -->
                            <div class="col-md-4">
                                <div class="single-plan-table">
                                    <h6>Premimum</h6>
                                    <strong><sup>$</sup>39<span>/Hour</span></strong>
                                    <ul>
                                        <li>Web Development</li>
                                        <li>Advetising</li>
                                        <li>Game Development</li>
                                        <li>Content Writing</li>
                                        <li>Photography</li>
                                    </ul>
                                    <a href="#">Enroll NOW</a>
                                </div> <!-- /.single-plan-table -->
                            </div> <!-- /.col- -->
                        </div>
                    </div> <!-- /.pricing-plan -->


                    <div class="testimonial-seaction pt-130">
                        <h2 class="theme-title-two">Testimo<span>nials.</span></h2>
                        <div class="testimonial-slider">
                            <div class="item">
                                <p>Aristotle maintained the sharp distinction between science and the practical
                                    knowledge of artisans, treating theoretical with as speculation as the highest type
                                    of human</p>
                                <img src="https://athemeart.com/html-demo/cvr/html/images/home/1.jpg" alt="">
                                <h6>JOHN DOE</h6>
                                <span>CEO Founder,Microsoft</span>
                            </div> <!-- /.item -->
                            <div class="item">
                                <p>Aristotle maintained the sharp distinction between science and the practical
                                    knowledge of artisans, treating theoretical with as speculation as the highest type
                                    of human</p>
                                <img src="https://athemeart.com/html-demo/cvr/html/images/home/1.jpg" alt="">
                                <h6>John Mike</h6>
                                <span>CEO Founder,Dropbox</span>
                            </div> <!-- /.item -->
                        </div> <!-- /.testimonial-slider -->
                    </div> <!-- /.testimonial-seaction -->

                    <div class="partner pt-130">
                        <h2 class="theme-title-two">Clie<span>nts.</span></span></h2>
                        <div class="partner-logo mt-50">
                            <div class="item"><img src="https://athemeart.com/html-demo/cvr/html/images/logo/1.png"
                                                   alt=""></div>
                            <div class="item"><img src="https://athemeart.com/html-demo/cvr/html/images/logo/2.png"
                                                   alt=""></div>
                            <div class="item"><img src="https://athemeart.com/html-demo/cvr/html/images/logo/3.png"
                                                   alt=""></div>
                            <div class="item"><img src="https://athemeart.com/html-demo/cvr/html/images/logo/4.png"
                                                   alt=""></div>
                        </div> <!-- /.partner-logo -->
                    </div> <!-- /.partner -->
                </div> <!-- /.theme-container -->
            </div> <!-- /.main-wrapper-bg -->
        </section> <!-- /#about -->
        <!-- End About Me -->


        <!-- Resume -->
        <section id="resume">
            <div class="main-wrapper-bg">
                <div class="theme-container">
                    <h2 class="theme-title">Resu<span>me.</span></h2>

                    <div class="row qualification-block">
                        <div class="col-md-6">
                            <h4 class="inner-title mt-40">Education</h4>

                            <div class="single-block">
                                <h5 class="title">web development</h5>
                                <span>University of Nco, 2014</span>
                                <p>Investig ationes demons trave runt lectores legere liusry quod ii legunt saepius
                                    claritas Investig ationes, euismod sagittis free super of the linal </p>
                            </div> <!-- /.single-block -->
                            <div class="single-block">
                                <h5 class="title">Graphic Design</h5>
                                <span>University of Adobe, 2016</span>
                                <p>Investig ationes demons trave runt lectores legere liusry quod ii legunt saepius
                                    claritas Investig ationes, euismod sagittis free super of the linal </p>
                            </div> <!-- /.single-block -->
                            <div class="single-block">
                                <h5 class="title">web development</h5>
                                <span>University of Nco, 2014</span>
                                <p>Investig ationes demons trave runt lectores legere liusry quod ii legunt saepius
                                    claritas Investig ationes, euismod sagittis free super of the linal </p>
                            </div> <!-- /.single-block -->
                        </div>

                        <div class="col-md-6">
                            <h4 class="inner-title mt-40">Experience</h4>
                            <div class="single-block">
                                <h5 class="title">Facebook</h5>
                                <span>Ux Designer (1991 - 1996)</span>
                                <p>Investig ationes demons trave runt lectores legere liusry quod ii legunt saepius
                                    claritas Investig ationes, euismod sagittis free super of the linal </p>
                            </div> <!-- /.single-block -->
                            <div class="single-block">
                                <h5 class="title">themeforest</h5>
                                <span>Senior Ui/Ux Designer (1998 - 1930)</span>
                                <p>Investig ationes demons trave runt lectores legere liusry quod ii legunt saepius
                                    claritas Investig ationes, euismod sagittis free super of the linal </p>
                            </div> <!-- /.single-block -->
                            <div class="single-block">
                                <h5 class="title">shutterstock</h5>
                                <span>Web Developer (2001 - 2014)</span>
                                <p>Investig ationes demons trave runt lectores legere liusry quod ii legunt saepius
                                    claritas Investig ationes, euismod sagittis free super of the linal </p>
                            </div> <!-- /.single-block -->
                        </div>
                    </div>

                    <div class="skill-progress pt-130">
                        <h2 class="theme-title-two">Ski<span>lls.</span></span></h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since. Lorem Ipsum has been the industry. Lorem
                            Ipsum has been the industry's standard dummy text since. Lorem Ipsum is simply.</p>

                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="inner-title mt-50">Technical Skills</h4>
                                <div class="skill-bar">
                                    <h6 class="skill-title">web development</h6>
                                    <div class="progress">
                                        <div class="progress-bar" data-percent="80">
                                            <span class="percent-text"><span class="count"></span>%</span>
                                        </div>
                                    </div>
                                </div> <!-- /.skill-bar -->
                                <div class="skill-bar">
                                    <h6 class="skill-title">HTML/CSS</h6>
                                    <div class="progress">
                                        <div class="progress-bar" data-percent="85">
                                            <span class="percent-text"><span class="count"></span>%</span>
                                        </div>
                                    </div>
                                </div> <!-- /.skill-bar -->
                                <div class="skill-bar">
                                    <h6 class="skill-title">Print Design</h6>
                                    <div class="progress">
                                        <div class="progress-bar" data-percent="90">
                                            <span class="percent-text"><span class="count"></span>%</span>
                                        </div>
                                    </div>
                                </div> <!-- /.skill-bar -->
                            </div> <!-- /.col- -->

                            <div class="col-md-6">
                                <h4 class="inner-title mt-50">Professional Skills</h4>
                                <div class="skill-bar">
                                    <h6 class="skill-title">Communication</h6>
                                    <div class="progress">
                                        <div class="progress-bar" data-percent="90">
                                            <span class="percent-text"><span class="count"></span>%</span>
                                        </div>
                                    </div>
                                </div> <!-- /.skill-bar -->
                                <div class="skill-bar">
                                    <h6 class="skill-title">Project Management</h6>
                                    <div class="progress">
                                        <div class="progress-bar" data-percent="80">
                                            <span class="percent-text"><span class="count"></span>%</span>
                                        </div>
                                    </div>
                                </div> <!-- /.skill-bar -->
                                <div class="skill-bar">
                                    <h6 class="skill-title">Team Work</h6>
                                    <div class="progress">
                                        <div class="progress-bar" data-percent="95">
                                            <span class="percent-text"><span class="count"></span>%</span>
                                        </div>
                                    </div>
                                </div> <!-- /.skill-bar -->
                            </div> <!-- /.col- -->
                        </div> <!-- /.row -->
                    </div> <!-- /.skill-progress -->
                </div> <!-- /.theme-container -->
            </div> <!-- /.main-wrapper-bg -->
        </section> <!-- /#resume -->
        <!-- End Resume -->


        <!-- Portfolio -->
        <section id="portfolio" class="portfolio-section">
            <div class="main-wrapper-bg">
                <div class="theme-container">
                    <h2 class="theme-title">Recent <span>Work.</span></h2>
                    <div class="project-gallery-wrapper mt-40">
                        <ul class="isotop-menu-wrapper">
                            <li class=" is-checked" data-filter="*">All</li>
                            <li data-filter=".typo">Typograhy</li>
                            <li data-filter=".branding">Branding</li>
                            <li data-filter=".illustration">Illustration</li>
                        </ul>

                        <div id="isotop-gallery-wrapper" class="row mt-40">
                            <div class="grid-sizer"></div>
                            <div class="isotop-item branding">
                                <figure class="single-item">
                                    <img src="https://athemeart.com/html-demo/cvr/html/images/portfolio/1.jpg"
                                         alt="Image">
                                    <figcaption>
                                        <h3><a href="#">Strong <span>Apollo</span></a></h3>
                                        <a data-fancybox="gallery"
                                           href="https://athemeart.com/html-demo/cvr/html/images/portfolio/1.jpg"
                                           class="fancybox" data-caption="Strong Apollo"><i class="fa fa-picture-o"
                                                                                            aria-hidden="true"></i></a>
                                    </figcaption>
                                </figure> <!-- /.single-item -->
                            </div> <!-- /.isotop-item -->
                            <div class="isotop-item typo branding">
                                <figure class="single-item">
                                    <img src="https://athemeart.com/html-demo/cvr/html/images/portfolio/2.jpg"
                                         alt="Image">
                                    <figcaption>
                                        <h3><a href="#">Strong <span>Apollo</span></a></h3>
                                        <a data-fancybox="gallery"
                                           href="https://athemeart.com/html-demo/cvr/html/images/portfolio/2.jpg"
                                           class="fancybox" data-caption="Strong Apollo"><i class="fa fa-picture-o"
                                                                                            aria-hidden="true"></i></a>
                                    </figcaption>
                                </figure> <!-- /.single-item -->
                            </div> <!-- /.isotop-item -->
                            <div class="isotop-item">
                                <figure class="single-item">
                                    <img src="https://athemeart.com/html-demo/cvr/html/images/portfolio/3.jpg"
                                         alt="Image">
                                    <figcaption>
                                        <h3><a href="#">Strong <span>Apollo</span></a></h3>
                                        <a data-fancybox="gallery"
                                           href="https://athemeart.com/html-demo/cvr/html/images/portfolio/3.jpg"
                                           class="fancybox" data-caption="Strong Apollo"><i class="fa fa-picture-o"
                                                                                            aria-hidden="true"></i></a>
                                    </figcaption>
                                </figure> <!-- /.single-item -->
                            </div> <!-- /.isotop-item -->
                            <div class="isotop-item illustration">
                                <figure class="single-item">
                                    <img src="https://athemeart.com/html-demo/cvr/html/images/portfolio/4.jpg"
                                         alt="Image">
                                    <figcaption>
                                        <h3><a href="#">Strong <span>Apollo</span></a></h3>
                                        <a data-fancybox="gallery"
                                           href="https://athemeart.com/html-demo/cvr/html/images/portfolio/4.jpg"
                                           class="fancybox" data-caption="Strong Apollo"><i class="fa fa-picture-o"
                                                                                            aria-hidden="true"></i></a>
                                    </figcaption>
                                </figure> <!-- /.single-item -->
                            </div> <!-- /.isotop-item -->
                            <div class="isotop-item illustration typo">
                                <figure class="single-item">
                                    <img src="https://athemeart.com/html-demo/cvr/html/images/portfolio/6.jpg"
                                         alt="Image">
                                    <figcaption>
                                        <h3><a href="#">Strong <span>Apollo</span></a></h3>
                                        <a data-fancybox="gallery"
                                           href="https://athemeart.com/html-demo/cvr/html/images/portfolio/6.jpg"
                                           class="fancybox" data-caption="Strong Apollo"><i class="fa fa-picture-o"
                                                                                            aria-hidden="true"></i></a>
                                    </figcaption>
                                </figure> <!-- /.single-item -->
                            </div> <!-- /.isotop-item -->
                            <div class="isotop-item branding illustration">
                                <figure class="single-item">
                                    <img src="https://athemeart.com/html-demo/cvr/html/images/portfolio/5.jpg"
                                         alt="Image">
                                    <figcaption>
                                        <h3><a href="#">Strong <span>Apollo</span></a></h3>
                                        <a data-fancybox="gallery"
                                           href="https://athemeart.com/html-demo/cvr/html/images/portfolio/5.jpg"
                                           class="fancybox" data-caption="Strong Apollo"><i class="fa fa-picture-o"
                                                                                            aria-hidden="true"></i></a>
                                    </figcaption>
                                </figure> <!-- /.single-item -->
                            </div> <!-- /.isotop-item -->
                            <div class="isotop-item branding typo">
                                <figure class="single-item">
                                    <img src="https://athemeart.com/html-demo/cvr/html/images/portfolio/8.jpg"
                                         alt="Image">
                                    <figcaption>
                                        <h3><a href="#">Strong <span>Apollo</span></a></h3>
                                        <a data-fancybox="gallery"
                                           href="https://athemeart.com/html-demo/cvr/html/images/portfolio/8.jpg"
                                           class="fancybox" data-caption="Strong Apollo"><i class="fa fa-picture-o"
                                                                                            aria-hidden="true"></i></a>
                                    </figcaption>
                                </figure> <!-- /.single-item -->
                            </div> <!-- /.isotop-item -->
                            <div class="isotop-item illustration">
                                <figure class="single-item">
                                    <img src="https://athemeart.com/html-demo/cvr/html/images/portfolio/7.jpg"
                                         alt="Image">
                                    <figcaption>
                                        <h3><a href="#">Strong <span>Apollo</span></a></h3>
                                        <a data-fancybox="gallery"
                                           href="https://athemeart.com/html-demo/cvr/html/images/portfolio/7.jpg"
                                           class="fancybox" data-caption="Strong Apollo"><i class="fa fa-picture-o"
                                                                                            aria-hidden="true"></i></a>
                                    </figcaption>
                                </figure> <!-- /.single-item -->
                            </div> <!-- /.isotop-item -->
                            <div class="isotop-item branding">
                                <figure class="single-item">
                                    <img src="https://athemeart.com/html-demo/cvr/html/images/portfolio/9.jpg"
                                         alt="Image">
                                    <figcaption>
                                        <h3><a href="#">Strong <span>Apollo</span></a></h3>
                                        <a data-fancybox="gallery"
                                           href="https://athemeart.com/html-demo/cvr/html/images/portfolio/9.jpg"
                                           class="fancybox" data-caption="Strong Apollo"><i class="fa fa-picture-o"
                                                                                            aria-hidden="true"></i></a>
                                    </figcaption>
                                </figure> <!-- /.single-item -->
                            </div> <!-- /.isotop-item -->
                        </div> <!-- /#isotop-gallery-wrapper -->
                    </div> <!-- /.project-gallery-wrapper -->
                </div> <!-- /.theme-container -->
            </div> <!-- /.main-wrapper-bg -->
        </section> <!-- /#portfolio -->
        <!-- End Portfolio -->


        <!-- Blog -->
        <section id="blog" class="our-blog">
            <div class="main-wrapper-bg">
                <div class="theme-container">
                    <h2 class="theme-title">My <span>Blog.</span></h2>

                    <div class="row mt-50">
                        <div class="col-xl-4 col-md-6">
                            <div class="blog-post">
                                <div class="post-image"><img
                                            src="https://athemeart.com/html-demo/cvr/html/images/blog/12.jpg" alt="">
                                </div>
                                <div class="post">
                                    <ul class="info">
                                        <li>By <a href="#">Admin</a> in <a href="#">Design</a></li>
                                        <li>21 February 2019</li>
                                    </ul>
                                    <h4 class="blog-title"><a
                                                href="https://athemeart.com/html-demo/cvr/html/blog-details.html">With
                                            professionalism & unique ideas we help clients</a></h4>
                                    <p>Duis aute irure dolor reprehenderit in volute fugiat nulla pariatur excepteur
                                        sint ocaec atcu qui officia.</p>
                                </div>
                            </div> <!-- /.blog-post -->
                        </div> <!-- /.col- -->
                        <div class="col-xl-4 col-md-6">
                            <div class="blog-post">
                                <div class="post-image"><img
                                            src="https://athemeart.com/html-demo/cvr/html/images/blog/13.jpg" alt="">
                                </div>
                                <div class="post">
                                    <ul class="info">
                                        <li>By <a href="#">Admin</a> in <a href="#">Web</a></li>
                                        <li>21 February 2019</li>
                                    </ul>
                                    <h4 class="blog-title"><a
                                                href="https://athemeart.com/html-demo/cvr/html/blog-details.html">Dingilla
                                            luctus quis faucibus odio cursus tortor.</a></h4>
                                    <p>Duis aute irure dolor reprehenderit in volute fugiat nulla pariatur excepteur
                                        sint ocaec atcu qui officia.</p>
                                </div>
                            </div> <!-- /.blog-post -->
                        </div> <!-- /.col- -->
                        <div class="col-xl-4 col-md-6">
                            <div class="blog-post">
                                <div class="post-image"><img
                                            src="https://athemeart.com/html-demo/cvr/html/images/blog/14.jpg" alt="">
                                </div>
                                <div class="post">
                                    <ul class="info">
                                        <li>By <a href="#">Admin</a> in <a href="#">Application</a></li>
                                        <li>21 February 2019</li>
                                    </ul>
                                    <h4 class="blog-title"><a
                                                href="https://athemeart.com/html-demo/cvr/html/blog-details.html">Justo
                                            dignissim ornare mattis pretium ayc.</a></h4>
                                    <p>Duis aute irure dolor reprehenderit in volute fugiat nulla pariatur excepteur
                                        sint ocaec atcu qui officia.</p>
                                </div>
                            </div> <!-- /.blog-post -->
                        </div> <!-- /.col- -->
                        <div class="col-xl-4 col-md-6">
                            <div class="blog-post">
                                <div class="post-image"><img
                                            src="https://athemeart.com/html-demo/cvr/html/images/blog/15.jpg" alt="">
                                </div>
                                <div class="post">
                                    <ul class="info">
                                        <li>By <a href="#">Admin</a> in <a href="#">Logo</a></li>
                                        <li>21 February 2019</li>
                                    </ul>
                                    <h4 class="blog-title"><a
                                                href="https://athemeart.com/html-demo/cvr/html/blog-details.html">Dingilla
                                            luctus quis faucibus odio cursus tortor.</a></h4>
                                    <p>Duis aute irure dolor reprehenderit in volute fugiat nulla pariatur excepteur
                                        sint ocaec atcu qui officia.</p>
                                </div>
                            </div> <!-- /.blog-post -->
                        </div> <!-- /.col- -->
                        <div class="col-xl-4 col-md-6">
                            <div class="blog-post">
                                <div class="post-image"><img
                                            src="https://athemeart.com/html-demo/cvr/html/images/blog/16.jpg" alt="">
                                </div>
                                <div class="post">
                                    <ul class="info">
                                        <li>By <a href="#">Admin</a> in <a href="#">Branding</a></li>
                                        <li>21 February 2019</li>
                                    </ul>
                                    <h4 class="blog-title"><a
                                                href="https://athemeart.com/html-demo/cvr/html/blog-details.html">Elementum
                                            donec a velit consequat nibh fusce.</a></h4>
                                    <p>Duis aute irure dolor reprehenderit in volute fugiat nulla pariatur excepteur
                                        sint ocaec atcu qui officia.</p>
                                </div>
                            </div> <!-- /.blog-post -->
                        </div> <!-- /.col- -->
                        <div class="col-xl-4 col-md-6">
                            <div class="blog-post">
                                <div class="post-image"><img
                                            src="https://athemeart.com/html-demo/cvr/html/images/blog/17.jpg" alt="">
                                </div>
                                <div class="post">
                                    <ul class="info">
                                        <li>By <a href="#">Admin</a> in <a href="#">Programming</a></li>
                                        <li>21 February 2019</li>
                                    </ul>
                                    <h4 class="blog-title"><a
                                                href="https://athemeart.com/html-demo/cvr/html/blog-details.html">Ridiculus
                                            venenatis duis egestas nunc.</a></h4>
                                    <p>Duis aute irure dolor reprehenderit in volute fugiat nulla pariatur excepteur
                                        sint ocaec atcu qui officia.</p>
                                </div>
                            </div> <!-- /.blog-post -->
                        </div> <!-- /.col- -->
                    </div> <!-- /.row -->


                    <div class="mt-50">
                        <button class="theme-btn button--wayra m-auto" id="loadMore">Load More</button>
                    </div>
                </div> <!-- /.theme-container -->
            </div> <!-- /.main-wrapper-bg -->
        </section> <!-- /#blog -->
        <!-- End Blog -->


        <!-- Contact -->
        <section id="contact" class="contact-section">
            <div class="main-wrapper-bg">
                <div class="theme-container">
                    <h2 class="theme-title">Contact <span>Me.</span></h2>
                    <div class="contact-address pt-35">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="single-block">
                                    <div class="icon"><i class="fa fa-location-arrow" aria-hidden="true"></i></div>
                                    <h5>My Location</h5>
                                    <p>36498-076, Largo Estrada, 5. Ap.<br> 83 Joaquin d'Oeste - DF</p>
                                </div> <!-- /.single-block -->
                            </div>
                            <div class="col-md-4">
                                <div class="single-block">
                                    <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                                    <h5>Phone Number</h5>
                                    <p><a href="#">+99 022 248 05 08</a> <br> <a href="#">+99 022 248 05 08</a></p>
                                </div> <!-- /.single-block -->
                            </div>
                            <div class="col-md-4">
                                <div class="single-block">
                                    <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                                    <h5>Email Adderss</h5>
                                    <p><a href="#">your@hotmail.com</a> <br> <a href="#">your@hotmail.com</a></p>
                                </div> <!-- /.single-block -->
                            </div>
                        </div>
                    </div> <!-- /.contact-address -->

                    <div class="contact-form mt-50">
                        <h4 class="inner-title">Get In Touch.</h4>
                        <form class="form mt-50" id="contact-form"
                              action="https://athemeart.com/html-demo/cvr/html/inc/contact.php" data-toggle="validator">
                            <div class="messages"></div>
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="form_sub" type="text" name="name" placeholder="Your Name"
                                                   required="required" data-error="Name is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="form_email" type="email" name="email" placeholder="Your Email"
                                                   required="required" data-error="Valid email is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea id="form_message" name="message" class="form_message"
                                              placeholder="Type Your Message" required="required"
                                              data-error="Please,leave us a message."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <button class="theme-btn button--wayra mt-50">Send Message</button>
                            </div> <!-- /.controls -->
                        </form>
                    </div> <!-- /.contact-form -->
                </div> <!-- /.theme-container -->
            </div> <!-- /.main-wrapper-bg -->
        </section> <!-- /#contact -->

        <footer class="theme-footer">
            <div class="theme-container">
                &copy; Copyright 2019. All Rights are Reserved.
            </div>
        </footer>
        <!-- End Contact -->


    </div>
@endsection