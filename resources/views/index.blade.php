<!DOCTYPE html>
<html lang="en">
@include("layouts/head")
<body>
<!-- START: header -->
@include("layouts/header");
<!-- END: header -->



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
@include("layouts/footer")
<!-- END: footer -->


</body>
</html>
