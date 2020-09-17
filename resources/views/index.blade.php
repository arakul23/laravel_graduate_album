<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Альбом выпускника. Пет проект</title>

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="{{url('css/styles-merged.css')}}">
    <link rel="stylesheet" href="{{url('css/style.min.css')}}">
    <link rel="stylesheet" href="{{url('css/custom.css')}}">

    <!--[if lt IE 9]>
    <script src="{{url('js/vendor/html5shiv.min.js')}}"></script>
    <script src="{{url('js/vendor/respond.min.js')}}"></script>
    <![endif]-->
</head>
<body>

<!-- START: header -->
<header role="banner" class="probootstrap-header">
    <div class="container-fluid">
        <a href="index.html" class="probootstrap-logo">Format<span>.</span></a>

        <a href="#" class="probootstrap-burger-menu visible-xs" ><i>Menu</i></a>
        <div class="mobile-menu-overlay"></div>

        <nav role="navigation" class="probootstrap-nav hidden-xs">
            <ul class="probootstrap-main-nav">
                <li class="active"><a href="{{url('index')}}">Home</a></li>
                <li><a href="{{url('portfolio')}}">Portfolio</a></li>
                <li><a href="products.html">Product</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
            <div class="extra-text visible-xs">
                <a href="#" class="probootstrap-burger-menu"><i>Menu</i></a>
                <h5>Social</h5>
                <ul class="social-buttons">
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-instagram2"></i></a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!-- END: header -->

<!-- START: section -->
<section class="probootstrap-intro" style="background-image: url(img/hero_bg_2.jpg);" data-stellar-background-ratio="0.5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7 probootstrap-intro-text">
                <h1 class="probootstrap-animate">Альбом выпускника. Пет проект для изучения Ларавель</h1>
            </div>
        </div>
    </div>
    <a class="probootstrap-scroll-down js-next" href="#next-section">Scroll down <i class="icon-chevron-down"></i></a>
</section>
<!-- END: section -->
<section id="next-section">
    <div class="container-fluid">
        <div class="row probootstrap-gutter0">
            @foreach($faculties as $faculty)
                <div class="col-md-4 col-sm-6">
                    <a href="{{url('departments', ['facultyId' => $faculty->id])}}" class="probootstrap-hover-overlay">
                        <img src="{{$faculty['photo']}}" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
                        <div class="probootstrap-text-overlay">
                            <h3>{{$faculty['name']}}</h3>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- START: section -->
<section class="probootstrap-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 mb70 section-heading probootstrap-animate">
                <h2>Our Services</h2>
                <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            </div>
        </div>
        <div class="row mb70">
            <div class="col-md-4 probootstrap-animate">
                <div class="probootstrap-box">
                    <div class="icon text-center"><i class="icon-tools2"></i></div>
                    <h3>Interface Design</h3>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    <ul class="text-left with-icon colored">
                        <li><i class="icon-radio-checked"></i> <span>A small river named Duden</span></li>
                        <li><i class="icon-radio-checked"></i> <span>Place and supplie</span></li>
                        <li><i class="icon-radio-checked"></i> <span>Roasted parts of sentences</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 probootstrap-animate">
                <div class="probootstrap-box">
                    <div class="icon text-center"><i class="icon-desktop"></i></div>
                    <h3>User Experience</h3>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    <ul class="text-left with-icon colored">
                        <li><i class="icon-radio-checked"></i> <span>A small river named Duden</span></li>
                        <li><i class="icon-radio-checked"></i> <span>Place and supplie</span></li>
                        <li><i class="icon-radio-checked"></i> <span>Roasted parts of sentences</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 probootstrap-animate">
                <div class="probootstrap-box">
                    <div class="icon text-center"><i class="icon-lightbulb"></i></div>
                    <h3>Product Strategy</h3>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    <ul class="text-left with-icon colored">
                        <li><i class="icon-radio-checked"></i> <span>A small river named Duden</span></li>
                        <li><i class="icon-radio-checked"></i> <span>Place and supplie</span></li>
                        <li><i class="icon-radio-checked"></i> <span>Roasted parts of sentences</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4 probootstrap-animate">
                <p class="text-center">
                    <a href="#" class="btn btn-primary btn-lg btn-block" role="button">View All Services</a>
                </p>
            </div>
        </div>
    </div>
</section>
<!-- END: section -->


<!-- START: section -->
<section class="probootstrap-section probootstrap-section-colored">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 mb70 section-heading probootstrap-animate">
                <h2>Our Product</h2>
                <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            </div>
        </div>
        <div class="row mb70">
            <div class="col-md-4 probootstrap-animate">
                <div class="probootstrap-block-image">
                    <figure><a href="#"><img src="img/img_1.jpg" alt="Free Bootstrap Template by uicookies.com"></a></figure>
                    <div class="text">
                        <h3 class="mb30"><a href="#">Duden Flows by Their Place</a></h3>
                        <p class="dark">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        <p class="secondary-color rate"><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-half"></i></p>
                        <hr>
                        <p class="clearfix like"><a class="pull-left" href="#"><i class="icon-thumbs-up"></i> 5,216</a> <a class="pull-right" href="#"><i class="icon-thumbs-down"></i> 32</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 probootstrap-animate">
                <div class="probootstrap-block-image">
                    <figure><img src="img/img_2.jpg" alt="Free Bootstrap Template by uicookies.com"></figure>
                    <div class="text">
                        <h3 class="mb30"><a href="#">Fly Into Your Mouth</a></h3>
                        <p class="dark">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        <p class="secondary-color rate"><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-half"></i></p>
                        <hr>
                        <p class="clearfix like"><a class="pull-left" href="#"><i class="icon-thumbs-up"></i> 4,923</a> <a class="pull-right" href="#"><i class="icon-thumbs-down"></i> 12</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 probootstrap-animate">
                <div class="probootstrap-block-image">
                    <figure><img src="img/img_3.jpg" alt="Free Bootstrap Template by uicookies.com"></figure>
                    <div class="text">
                        <h3 class="mb30"><a href="#">Roasted Parts of Sentences</a></h3>
                        <p class="dark">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        <p class="secondary-color rate"><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-half"></i></p>
                        <hr>
                        <p class="clearfix like"><a class="pull-left" href="#"><i class="icon-thumbs-up"></i> 19,552</a> <a class="pull-right" href="#"><i class="icon-thumbs-down"></i> 7</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4 probootstrap-animate">
                <p class="text-center">
                    <a href="#" class="btn btn-ghost btn-ghost-white btn-lg btn-block" role="button">View All Products</a>
                </p>
            </div>
        </div>
    </div>
</section>
<!-- END: section -->


<!-- START: section -->
<section class="probootstrap-section probootstrap-section-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 section-heading mb50 text-center probootstrap-animate">
                <h2>More Benefits</h2>
                <p class="lead">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
                <h3 class="heading-with-icon"><i class="icon-heart2"></i> <span>We bring emotion</span></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                <p><a href="#" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
                <h3 class="heading-with-icon"><i class="icon-rocket"></i> <span>We guide companies</span></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                <p><a href="#" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p>
            </div>
            <div class="clearfix visible-sm-block"></div>
            <div class="col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
                <h3 class="heading-with-icon"><i class="icon-image"></i> <span>We design extraordinary</span></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                <p><a href="#" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p>
            </div>
            <div class="clearfix visible-md-block"></div>
            <div class="col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
                <h3 class="heading-with-icon"><i class="icon-briefcase"></i> <span>We bring emotion</span></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                <p><a href="#" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p>
            </div>
            <div class="clearfix visible-sm-block"></div>
            <div class="col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
                <h3 class="heading-with-icon"><i class="icon-chat"></i> <span>We guide companies</span></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                <p><a href="#" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 probootstrap-animate">
                <h3 class="heading-with-icon"><i class="icon-colours"></i> <span>We design extraordinary</span></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                <p><a href="#" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p>
            </div>
            <div class="clearfix visible-sm-block"></div>
        </div>
    </div>
</section>
<!-- END: section -->

<!-- START: footer -->
<footer role="contentinfo" class="probootstrap-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="probootstrap-footer-widget">
                    <h3>About Format</h3>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    <p><a href="#" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p>
                </div>
                <div class="probootstrap-footer-widget">
                    <h3>Connect With Us</h3>
                    <ul class="probootstrap-footer-social">
                        <li><a href=""><i class="icon-twitter"></i></a></li>
                        <li><a href=""><i class="icon-facebook"></i></a></li>
                        <li><a href=""><i class="icon-instagram2"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="probootstrap-footer-widget">
                    <h3>Popular Products</h3>
                    <ul class="probootstrap-product-list">
                        <li class="mb20">
                            <a href="#">
                                <figure><img src="img/img_3.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                                <div class="text">
                                    <h4>River named Duden flows</h4>
                                    <p>A small river named Duden flows by their place</p>
                                    <p class="secondary-color rate"><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-half"></i></p>
                                </div>
                            </a>
                        </li>
                        <li class="mb20">
                            <a href="#">
                                <figure><img src="img/img_4.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                                <div class="text">
                                    <h4>River named Duden flows</h4>
                                    <p>A small river named Duden flows by their place</p>
                                    <p class="secondary-color rate"><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-half"></i></p>
                                </div>
                            </a>
                        </li>
                        <li class="mb20">
                            <a href="#">
                                <figure><img src="img/img_5.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                                <div class="text">
                                    <h4>River named Duden flows</h4>
                                    <p>A small river named Duden flows by their place</p>
                                    <p class="secondary-color rate"><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-half"></i></p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="probootstrap-footer-widget">
                    <h3>Recent Post</h3>
                    <ul class="probootstrap-blog-list">
                        <li>
                            <a href="#">
                                <figure><img src="img/img_1.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                                <div class="text">
                                    <h4>River named Duden flows</h4>
                                    <p>A small river named Duden flows by their place</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <figure><img src="img/img_2.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                                <div class="text">
                                    <h4>River named Duden flows</h4>
                                    <p>A small river named Duden flows by their place</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <figure><img src="img/img_3.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                                <div class="text">
                                    <h4>River named Duden flows</h4>
                                    <p>A small river named Duden flows by their place</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row mt40">
            <div class="col-md-12 text-center">
                <p>
                    <small>&copy; 2017 <a href="https://uicookies.com/" target="_blank">uiCookies:Format</a>. All Rights Reserved. <br> Designed &amp; Developed by <a href="https://uicookies.com/" target="_blank">uicookies.com</a> Demo Images: Unsplash</small><br>
                    <a href="#" class="js-backtotop">Back to top</a>
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- END: footer -->

<script src="{{url('js/scripts.min.js')}}"></script>
<script src="{{url('js/main.min.js')}}"></script>
<script src="{{url('js/custom.js')}}"></script>

</body>
</html>
