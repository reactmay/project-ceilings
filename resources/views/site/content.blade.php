@if(isset($pages) && is_object($pages))
    <section id="about" class="bg-one">
        <div class="container">
            <div class="row">

                <!-- section title -->
                <div class="title text-center wow fadeIn" data-wow-duration="1500ms" >
                    <h2>О <span class="color">нас</span></h2>
                    <div class="border"></div>
                </div>
                <!-- /section title -->

                <!-- About item -->
                <div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" >
                    <div class="wrap-about">
                        <div class="icon-box">
                            <i class="fa fa-lightbulb-o fa-4x"></i>
                        </div>
                        <!-- Express About Yourself -->
                        <div class="about-content text-center">
                            <h3 class="ddd">Мы креативные</h3>
                            <p>Здесь ваш текст.</p>
                        </div>
                    </div>
                </div>
                <!-- End About item -->

                <!-- About item -->
                <div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="250ms">
                    <div class="wrap-about">
                        <div class="icon-box">
                            <i class="fa fa-users fa-4x"></i>
                        </div>
                        <!-- Express About Yourself -->
                        <div class="about-content text-center">
                            <h3>Мы профессионалы.</h3>
                            <p>Здесь ваш текст.</p>
                        </div>
                    </div>
                </div>
                <!-- End About item -->

                <!-- About item -->
                <div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
                    <div class="wrap-about kill-margin-bottom">
                        <div class="icon-box">
                            <i class="fa fa-users fa-4x"></i>
                        </div>
                        <!-- Express About Yourself -->
                        <div class="about-content text-center">
                            <h3>Мы профессионалы.</h3>
                            <p>Здесь ваш текст.</p>
                        </div>
                    </div>
                </div>
                <!-- End About item -->

            </div> 		<!-- End row -->
        </div>   	<!-- End container -->
    </section>

    <section id="main-features">
        <div class="container">
            <div class="row">

                <!-- features item -->
                <div id="features">
                    <div class="item">

                        <div class="features-item">

                            <!-- features media -->
                            <div class="col-md-6 feature-media media-wrapper wow fadeInUp" data-wow-duration="500ms">
                                <iframe src="http://player.vimeo.com/video/113868945" allowfullscreen></iframe>
                            </div>
                            <!-- /features media -->

                            <!-- features content -->
                            <div class="col-md-6 feature-desc wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                                <h3>Немного о нас</h3>
                                <p>Здесь ваш текст. Здесь ваш текст. Здесь ваш текст. Здесь ваш текст. Здесь ваш текст.#1</p>
                                <p>Здесь ваш текст. Здесь ваш текст. Здесь ваш текст. Здесь ваш текст. Здесь ваш текст.#2</p>
                                <a href="#" class="btn btn-transparent">Подробнее</a>
                            </div>
                            <!-- /features content -->

                        </div>
                    </div>
                </div>
                <!-- /features item -->

            </div> 		<!-- End row -->
        </div>   	<!-- End container -->
    </section>
@endif()

<section id="counter" class="parallax-section">
    <div class="container">
        <div class="row">

            <!-- first count item -->
            <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms">
                <div class="counters-item">
                    <div>
                        <span data-speed="3000" data-to="320">320</span>
                    </div>
                    <i class="fa fa-users fa-3x"></i>
                    <h3>Счастливых клиентов</h3>
                </div>
            </div>
            <!-- end first count item -->

            <!-- second count item -->
            <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="200ms">
                <div class="counters-item">
                    <div>
                        <span data-speed="3000" data-to="565">565</span>
                    </div>
                    <i class="fa fa-check-square fa-3x"></i>
                    <h3>Завершенных проектов</h3>
                </div>
            </div>
            <!-- end second count item -->

            <!-- third count item -->
            <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="400ms">
                <div class="counters-item">
                    <div>
                        <span data-speed="3000" data-to="95">95</span>
                        <span>%</span>
                    </div>
                    <i class="fa fa-thumbs-up fa-3x"></i>
                    <h3>Положительных отзывов</h3>

                </div>
            </div>
            <!-- end third count item -->

            <!-- third count item -->
            <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="400ms">
                <div class="counters-item">
                    <div>
                        <span data-speed="3000" data-to="95">95</span>
                        <span>%</span>
                    </div>
                    <i class="fa fa-codepen fa-3x"></i>
                    <h3>Совершенно замеров</h3>

                </div>
            </div>
            <!-- end third count item -->
        </div> 		<!-- end row -->
    </div>   	<!-- end container -->
</section>

@if(isset($services) && is_object($services))
    <section id="services" class="bg-one">
        <div class="container">
            @foreach($services as $k => $service)
                @if($k == 0 || $k % 3 == 0)
                    <div class="row">
                @endif
                <article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="{{ ($k % 3 > 0) ? '600ms' : '300ms'}}">
                    <div class="service-block text-center">
                        <div class="service-icon text-center">
                            <i class="fa fa-{{ $service->icon }} fa-5x"></i>
                        </div>
                        <h3>{{ $service->name }}</h3>
                        <p>{{ $service->text }}</p>
                    </div>
                </article>
                @if(($k + 1) % 3 == 0)
                    </div>
                @endif
            @endforeach
        </div>
    </section>
@endif

@if(isset($portfolios) && is_object($portfolios))
    <section id="showcase">
    <div class="container">
        <div class="row wow fadeInDown" data-wow-duration="500ms">
            <div class="col-lg-12">

                <div class="title text-center">
                    <h2>Наши <span class="color">проекты</span></h2>
                    <div class="border"></div>
                </div>

                @if(isset($tags))
                    <div class="portfolio-filter clearfix">
                        <ul class="text-center">
                            <li><a href="javascript:void(0)" class="filter" data-filter="all">Все</a></li>
                            @foreach($tags as $tag)
                                <li><a href="javascript:void(0)" class="filter" data-filter=".{{ $tag }}">{{ $tag }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                @endif

            </div>
        </div>
    </div>

    <div class="portfolio-item-wrapper wow fadeInUp" data-wow-duration="500ms">
        <ul id="og-grid" class="og-grid">
            @foreach($portfolios as $item)
                <li class="mix {{ $item->filter }}">
                    <a href="javascript:void(0)" data-largesrc="{{ asset('meghna2/img/portfolio/1.jpg') }}" data-title="Тут ваше название" data-description="Здесь ваше описание.">
                        {{--<img src="{{ asset('meghna2/img/portfolio/1.jpg') }}" alt="Meghna" height="650" width="520">--}}
                        {{ Html::image('meghna2/img/portfolio/'.$item->images, $item->name) }}
                        <div class="hover-mask">
                            <h3>{{ $item->name }}</h3>
                            <span>
                            <i class="fa fa-plus fa-2x"></i>
                        </span>
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>

</section>
@endif

<section id="team-skills" class="parallax-section">
    <div class="container">
        <div class="row wow fadeInDown" data-wow-duration="500ms">

            <!-- section title -->
            <div class="title text-center">
                <h2>Наши <span class="color">навыки</span></h2>
                <div class="border"></div>
            </div>
            <!-- /section title -->

            <!-- skill set -->
            <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms">
                <div class="skill-chart text-center">
							<span class="chart" data-percent="95">
								<span class="percent">95</span>
							</span>
                    <h3><i class="fa fa-wordpress"></i> Монтаж ....</h3>
                    <p>Здесь ваш текст описание.</p>
                </div>
            </div>
            <!-- end skill set -->

            <!-- skill set -->
            <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="200ms">
                <div class="skill-chart text-center">
							<span class="chart" data-percent="90">
								<span class="percent">90</span>
							</span>
                    <h3><i class="fa fa-html5"></i> Монтаж и отделка</h3>
                    <p>Здесь ваш текст описание.</p>
                </div>
            </div>
            <!-- end skill set -->

            <!-- skill set -->
            <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="400ms">
                <div class="skill-chart text-center">
							<span class="chart" data-percent="85">
								<span class="percent">85</span>
							</span>
                    <h3><i class="fa fa-android"></i> Монтаж многоуровневый</h3>
                    <p>Здесь ваш текст описание.</p>
                </div>
            </div>
            <!-- end skill set -->

            <!-- skill set -->
            <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="600ms">
                <div class="skill-chart text-center">
							<span class="chart" data-percent="70">
								<span class="percent">70</span>
							</span>
                    <h3><i class="fa fa-apple"></i> Монтаж и тд... </h3>
                    <p>Здесь ваш текст описание.</p>
                </div>
            </div>
            <!-- end skill set -->

        </div>  		<!-- End row -->
    </div>   	<!-- End container -->
</section>

@if(isset($peoples) && is_object($peoples))
    <section id="our-team">
    <div class="container">
        <div class="row">

            <div class="title text-center wow fadeInUp" data-wow-duration="500ms">
                <h2>Наша <span class="color">Команда</span></h2>
                <div class="border"></div>
            </div>

            @foreach($peoples as $k => $people)
                <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="500ms">
                    <article class="team-mate">
                        <div class="member-photo">
                            <img class="img-responsive" src="{{ asset('meghna2/img/team/1.jpg') }}" alt="Meghna" height="280" width="280">

                            {{--<div class="mask">--}}
                                {{--<ul class="clearfix">--}}
                                    {{--<li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-linkedin"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-dribbble"></i></a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}

                        </div>

                        <div class="member-title">
                            <h3>{{ $people->name }}</h3>
                            <span>{{ $people->position }}</span>
                        </div>

                        <div class="member-info">
                            <p>{{ $people->text }}</p>
                        </div>

                    </article>
                </div>
            @endforeach

        </div>
    </div>
</section>
@endif

{{--<!-- Start Twitter Feed--}}
{{--=========================================== -->--}}

{{--<section id="twitter-feed" class="parallax-section">--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-lg-12 text-center">--}}

                {{--<!-- twitter bird -->--}}
                {{--<div class="twitter-bird wow fadeInDown" data-wow-duration="500ms">--}}
							{{--<span>--}}
								{{--<i class="fa fa-twitter fa-4x"></i>--}}
							{{--</span>--}}
                {{--</div>--}}
                {{--<!-- /twitter bird -->--}}

                {{--<!-- fetching tweet -->--}}
                {{--<div class="tweet wow fadeIn" data-wow-duration="2000ms"></div>--}}
                {{--<!-- /fetching tweet -->--}}

                {{--<!-- follow us button -->--}}
                {{--<a href="https://twitter.com/amimorshed" title="Follow Us" target="_blank" class="btn btn-transparent wow fadeInUp" data-wow-duration="500ms">Follow Us</a>--}}
                {{--<!-- /follow us button -->--}}

            {{--</div>--}}
        {{--</div>       <!-- End row -->--}}
    {{--</div>   	<!-- End container -->--}}
{{--</section>   <!-- End section -->--}}

{{--<!-- Start Pricing section--}}
{{--=========================================== -->--}}

{{--<section id="pricing" class="bg-one">--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}

            {{--<!-- section title -->--}}
            {{--<div class="title text-center wow fadeInDown" data-wow-duration="500ms">--}}
                {{--<h2>Our Greatest<span class="color"> Plans</span></h2>--}}
                {{--<div class="border"></div>--}}
            {{--</div>--}}
            {{--<!-- /section title -->--}}

            {{--<!-- single pricing table -->--}}
            {{--<article class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp" data-wow-duration="200ms">--}}
                {{--<div class="pricing">--}}

                    {{--<!-- plan name & value -->--}}
                    {{--<div class="price-title">--}}
                        {{--<h3>Free</h3>--}}
                        {{--<p>From <strong class="value">$99</strong> month</p>--}}
                    {{--</div>--}}
                    {{--<!-- /plan name & value -->--}}

                    {{--<!-- plan description -->--}}
                    {{--<ul>--}}
                        {{--<li>1GB Disk Space</li>--}}
                        {{--<li>10 Email Account</li>--}}
                        {{--<li>Script Installer</li>--}}
                        {{--<li>1 GB Storage</li>--}}
                        {{--<li>10 GB Bandwidth</li>--}}
                        {{--<li>24/7 Tech Support</li>--}}
                    {{--</ul>--}}
                    {{--<!-- /plan description -->--}}

                    {{--<!-- signup button -->--}}
                    {{--<a class="btn btn-transparent" href="#">Signup</a>--}}
                    {{--<!-- /signup button -->--}}

                {{--</div>--}}
            {{--</article>--}}
            {{--<!-- end single pricing table -->--}}

            {{--<!-- single pricing table -->--}}
            {{--<article class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="400ms">--}}
                {{--<div class="pricing">--}}

                    {{--<!-- plan name & value -->--}}
                    {{--<div class="price-title">--}}
                        {{--<h3>Silver</h3>--}}
                        {{--<p>From <strong class="value">$149</strong> month</p>--}}
                    {{--</div>--}}
                    {{--<!-- /plan name & value -->--}}

                    {{--<!-- plan description -->--}}
                    {{--<ul>--}}
                        {{--<li>1GB Disk Space</li>--}}
                        {{--<li>10 Email Account</li>--}}
                        {{--<li>Script Installer</li>--}}
                        {{--<li>1 GB Storage</li>--}}
                        {{--<li>10 GB Bandwidth</li>--}}
                        {{--<li>24/7 Tech Support</li>--}}
                    {{--</ul>--}}
                    {{--<!-- /plan description -->--}}

                    {{--<!-- signup button -->--}}
                    {{--<a class="btn btn-transparent" href="#">Signup</a>--}}
                    {{--<!-- /signup button -->--}}

                {{--</div>--}}
            {{--</article>--}}
            {{--<!-- end single pricing table -->--}}

            {{--<!-- single pricing table -->--}}
            {{--<article class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="600ms">--}}
                {{--<div class="pricing">--}}

                    {{--<!-- plan name & value -->--}}
                    {{--<div class="price-title">--}}
                        {{--<h3>Gold</h3>--}}
                        {{--<p>From <strong class="value">$199</strong> month</p>--}}
                    {{--</div>--}}
                    {{--<!-- /plan name & value -->--}}

                    {{--<!-- plan description -->--}}
                    {{--<ul>--}}
                        {{--<li>1GB Disk Space</li>--}}
                        {{--<li>10 Email Account</li>--}}
                        {{--<li>Script Installer</li>--}}
                        {{--<li>1 GB Storage</li>--}}
                        {{--<li>10 GB Bandwidth</li>--}}
                        {{--<li>24/7 Tech Support</li>--}}
                    {{--</ul>--}}
                    {{--<!-- /plan description -->--}}

                    {{--<!-- signup button -->--}}
                    {{--<a class="btn btn-transparent" href="#">Signup</a>--}}
                    {{--<!-- /signup button -->--}}

                {{--</div>--}}
            {{--</article>--}}
            {{--<!-- end single pricing table -->--}}

            {{--<!-- single pricing table -->--}}
            {{--<article class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="750ms">--}}
                {{--<div class="pricing kill-margin-bottom">--}}

                    {{--<!-- plan name & value -->--}}
                    {{--<div class="price-title">--}}
                        {{--<h3>Platinum</h3>--}}
                        {{--<p>From <strong class="value">$299</strong> month</p>--}}
                    {{--</div>--}}
                    {{--<!-- /plan name & value -->--}}

                    {{--<!-- plan description -->--}}
                    {{--<ul>--}}
                        {{--<li>1GB Disk Space</li>--}}
                        {{--<li>10 Email Account</li>--}}
                        {{--<li>Script Installer</li>--}}
                        {{--<li>1 GB Storage</li>--}}
                        {{--<li>10 GB Bandwidth</li>--}}
                        {{--<li>24/7 Tech Support</li>--}}
                    {{--</ul>--}}
                    {{--<!-- /plan description -->--}}

                    {{--<!-- signup button -->--}}
                    {{--<a class="btn btn-transparent" href="#">Signup</a>--}}
                    {{--<!-- /signup button -->--}}

                {{--</div>--}}
            {{--</article>--}}
            {{--<!-- end single pricing table -->--}}


        {{--</div>       <!-- End row -->--}}
    {{--</div>   	<!-- End container -->--}}
{{--</section>   <!-- End section -->--}}


<!-- Start Testimonial
=========================================== -->

<section id="testimonial" class="parallax-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <!-- section title -->
                <div class="sub-title text-center wow fadeInDown" data-wow-duration="500ms">
                    <h3>Отзывы наших клиентов</h3>
                </div>
                <!-- /section title -->

                <!-- testimonial wrapper -->
                <div id="testimonials" class="wow fadeInUp" data-wow-duration="500ms" data-wow-delay="100ms">

                    <!-- testimonial single -->
                    <div class="item text-center">

                        <!-- client photo -->
                        <div class="client-thumb">
                            <img src="{{ asset('meghna2/img/client/1.jpg') }}" class="img-responsive" alt="Meghna">
                        </div>
                        <!-- /client photo -->

                        <!-- client info -->
                        <div class="client-info">
                            <div class="client-meta">
                                <h3>Виктория</h3>
                                <span>Декабрь 26, 2018</span>
                            </div>
                            <div class="client-comment">
                                <p>Отличное качество и цены очень порадовали! Потолок оформили идеально, как я и мечтала! Спасибо Вам большое!!!</p>
                                <ul class="social-profile">
                                    <li><a href="#"><i class="fa fa-facebook-square fa-lg"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter-square fa-lg"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin-square fa-lg"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /client info -->
                    </div>
                    <!-- /testimonial single -->

                    <!-- testimonial single -->
                    <div class="item text-center">

                        <!-- client photo -->
                        <div class="client-thumb">
                            <img src="{{ asset('meghna2/img/client/2.jpg') }}" class="img-responsive" alt="Meghna">
                        </div>
                        <!-- /client photo -->

                        <!-- client info -->
                        <div class="client-info">
                            <div class="client-meta">
                                <h3>Светлана</h3>
                                <span>Август 5, 2018</span>
                            </div>
                            <div class="client-comment">
                                <p>Моя подруга похвасталась мне, какой потолок ей установили специалисты компании «Твой стиль», и я тоже решила поставить себе натяжной...</p>
                                <ul class="social-profile">
                                    <li><a href="#"><i class="fa fa-facebook-square fa-lg"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter-square fa-lg"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin-square fa-lg"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /client info -->
                    </div>
                    <!-- /testimonial single -->

                    <!-- testimonial single -->
                    <div class="item text-center">

                        <!-- client photo -->
                        <div class="client-thumb">
                            <img src="{{ asset('meghna2/img/client/3.jpg') }}" class="img-responsive" alt="Meghna">
                        </div>
                        <!-- /client photo -->

                        <!-- client info -->
                        <div class="client-info">
                            <div class="client-meta">
                                <h3>Захар</h3>
                                <span>Января 15, 2019</span>
                            </div>
                            <div class="client-comment">
                                <p>Заказывал потолки в компании Твой стиль. Никаких нареканий нет, персонал достаточно вежливый. Буду вас рекомендовать.</p>
                                <ul class="social-profile">
                                    <li><a href="#"><i class="fa fa-facebook-square fa-lg"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter-square fa-lg"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin-square fa-lg"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /client info -->
                    </div>
                    <!-- /testimonial single -->

                </div>		<!-- end testimonial wrapper -->
            </div> 		<!-- end col lg 12 -->
        </div>	    <!-- End row -->
    </div>       <!-- End container -->
</section>

{{--<!----}}
{{--Start Blog Section--}}
{{--=========================================== -->--}}

{{--<section id="blog" class="bg-one">--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}

            {{--<!-- section title -->--}}
            {{--<div class="title text-center wow fadeInDown">--}}
                {{--<h2> Latest <span class="color">Posts</span></h2>--}}
                {{--<div class="border"></div>--}}
            {{--</div>--}}
            {{--<!-- /section title -->--}}

            {{--<div class="clearfix">--}}

                {{--<!-- single blog post -->--}}
                {{--<article class="col-md-3 col-sm-6 col-xs-12 clearfix wow fadeInUp" data-wow-duration="500ms">--}}
                    {{--<div class="note">--}}
                        {{--<div class="media-wrapper">--}}
                            {{--<img src="{{ asset('meghna2/img/blog/amazing-caves-coverimage.jpg') }}" alt="amazing caves coverimage" class="img-responsive">--}}
                        {{--</div>--}}

                        {{--<div class="excerpt">--}}
                            {{--<h3>Simple Image Post</h3>--}}
                            {{--<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non skateboard dolor brunch.</p>--}}
                            {{--<a class="btn btn-transparent" href="{{ asset('meghna2/single-post.html') }}">Read more</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</article>--}}
                {{--<!-- /single blog post -->--}}

                {{--<!-- single blog post -->--}}
                {{--<article class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="200ms">--}}
                    {{--<div class="note">--}}
                        {{--<div id="gallery-post" class="media-wrapper">--}}
                            {{--<div class="item">--}}
                                {{--<img src="{{ asset('meghna2/img/blog/amazing-caves-coverimage.jpg') }}" alt="amazing caves coverimage" class="img-responsive">--}}
                            {{--</div>--}}
                            {{--<div class="item">--}}
                                {{--<img src="{{ asset('meghna2/img/blog/bicycle.jpg') }}" alt="Flying bicycle" class="img-responsive">--}}
                            {{--</div>--}}
                            {{--<div class="item">--}}
                                {{--<img src="{{ asset('meghna2/img/blog/3D-beach-art.jpg') }}" alt="3D Beach Art | Meghna" class="img-responsive">--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="excerpt">--}}
                            {{--<h3>Simple Slider Post</h3>--}}
                            {{--<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non skateboard dolor brunch.</p>--}}
                            {{--<a class="btn btn-transparent" href="{{ asset('meghna2/single-post.html') }}">Read more</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</article>--}}
                {{--<!-- end single blog post -->--}}

                {{--<!-- single blog post -->--}}
                {{--<article class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="400ms">--}}
                    {{--<div class="note">--}}
                        {{--<div class="media-wrapper">--}}
                            {{--<img src="{{ asset('meghna2/img/blog/amazing-caves-coverimage.jpg') }}" alt="amazing caves coverimage" class="img-responsive">--}}
                        {{--</div>--}}

                        {{--<div class="excerpt">--}}
                            {{--<h3>Simple Image Post</h3>--}}
                            {{--<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non skateboard dolor brunch.</p>--}}
                            {{--<a class="btn btn-transparent" href="{{ asset('meghna2/single-post.html') }}">Read more</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</article>--}}
                {{--<!-- end single blog post -->--}}

                {{--<!-- single blog post -->--}}
                {{--<article class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="600ms">--}}
                    {{--<div class="note kill-margin-bottom">--}}
                        {{--<div class="media-wrapper">--}}
                            {{--<img src="{{ asset('meghna2/img/blog/amazing-caves-coverimage.jpg') }}" alt="amazing caves coverimage" class="img-responsive">--}}
                        {{--</div>--}}
                        {{--<div class="excerpt">--}}
                            {{--<h3>Simple Image Post</h3>--}}
                            {{--<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non skateboard dolor brunch.</p>--}}
                            {{--<a class="btn btn-transparent" href="{{ asset('meghna2/single-post.html') }}">Read more</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</article>--}}
                {{--<!-- end single blog post -->--}}
            {{--</div>--}}

            {{--<div class="all-post text-center">--}}
                {{--<a class="btn btn-transparent" href="{{ asset('meghna2/blog.html') }}">View All Post</a>--}}
            {{--</div>--}}

        {{--</div> <!-- end row -->--}}
    {{--</div> <!-- end container -->--}}
{{--</section> <!-- end section -->--}}

<!-- Srart Contact Us
=========================================== -->

<section id="contact-us">
    <div class="container">
        <div class="row">

            <!-- section title -->
            <div class="title text-center wow fadeIn" data-wow-duration="500ms">
                <h2>Форма обратной <span class="color">связи</span></h2>
                <div class="border"></div>
            </div>
            <!-- /section title -->

            <!-- Contact Details -->
            <div class="contact-info col-md-6 wow fadeInUp" data-wow-duration="500ms">
                <h3>Подробная информация</h3>
                <p>Мы находимся или не находимся, там та тамта... тестовый текст</p>
                <div class="contact-details">
                    <div class="con-info clearfix">
                        <i class="fa fa-home fa-lg"></i>
                        <span>г. Хабаровск, ул. Центр 3</span>
                    </div>

                    <div class="con-info clearfix">
                        <i class="fa fa-phone fa-lg"></i>
                        <span>Телефон: +7-914-234-23-23</span>
                    </div>

                    <div class="con-info clearfix">
                        <i class="fa fa-envelope fa-lg"></i>
                        <span>Эл. почта: potolok@mail.ru</span>
                    </div>
                </div>
            </div>
            <!-- / End Contact Details -->

            <!-- Contact Form -->
            <div class="contact-form col-md-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                <form action="{{ route('home') }}" method="post">
                    <div class="form-group">
                        <input type="text" placeholder="Ваше имя *" class="form-control" name="name" id="name" required>
                    </div>

                    <div class="form-group">
                        <input type="text" placeholder="Ваш номер телефона *" class="form-control" name="phone" id="phone" pattern="[0-9]{6,12}" required>
                    </div>

                    <div class="form-group">
                        <input type="email" placeholder="Ваш E-mail (необязательно)" class="form-control" name="email" id="email">
                    </div>

                    {{--<div class="form-group">--}}
                        {{--<input type="text" placeholder="Заголовок" class="form-control" name="subject" id="subject">--}}
                    {{--</div>--}}

                    <div class="form-group">
                        <textarea rows="6" placeholder="Сообщение *" type="text"  maxlength="255" class="form-control" name="message" id="message" required></textarea>
                    </div>

                    <div id="mail-success" class="success">
                        Thank you. The Mailman is on His Way :)
                    </div>

                    <div id="mail-fail" class="error">
                        Sorry, don't know what happened. Try later :(
                    </div>

                    {{--<div id="cf-submit">--}}
                        {{--<input type="submit" id="contact-submit" class="btn btn-transparent" value="Отправить">--}}
                    {{--</div>--}}
                    <input type="submit" class="btn btn-transparent" value="Отправить">
                    {{ csrf_field() }}

                </form>
            </div>
            <!-- ./End Contact Form -->

        </div> <!-- end row -->
    </div> <!-- end container -->

    {{--<!-- Google Map -->--}}
    {{--<div class="google-map wow fadeInDown" data-wow-duration="500ms">--}}
        {{--<div id="map-canvas"></div>--}}
    {{--</div>--}}
    {{--<!-- /Google Map -->--}}

</section>

<footer id="footer" class="bg-one">
    <div class="container">
        <div class="row wow fadeInUp" data-wow-duration="500ms">
            <div class="col-lg-12">

                <!-- Footer Social Links -->
                <div class="social-icon">
                    <ul>
                        <li><a target="_blank" href="https://www.instagram.com/potolok.me/"><i class="fa fa-instagram"></i></a></li>
                        {{--<li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
                        {{--<li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
                        {{--<li><a href="#"><i class="fa fa-google-plus"></i></a></li>--}}
                        {{--<li><a href="#"><i class="fa fa-youtube"></i></a></li>--}}
                        {{--<li><a href="#"><i class="fa fa-linkedin"></i></a></li>--}}
                        {{--<li><a href="#"><i class="fa fa-dribbble"></i></a></li>--}}
                        {{--<li><a href="#"><i class="fa fa-pinterest"></i></a></li>--}}
                    </ul>
                </div>
                <!--/. End Footer Social Links -->

                <!-- copyright -->
                <div class="copyright text-center">
                    <a href="{{ asset('meghna2/index.html') }}">
                        <img src="{{ asset('meghna2/img/logo.png') }}" alt="Meghna"  height="40" width="110"/>
                    </a>
                    <br />

                    <p>Натяжные потолки г. Хабаровск.    &copy; <?php echo date('Y'); ?>. Все права защищены.</p>
                </div>
                <!-- /copyright -->

            </div> <!-- end col lg 12 -->
        </div> <!-- end row -->
    </div> <!-- end container -->
</footer>

<a href="javascript:;" id="scrollUp">
    <i class="fa fa-angle-up fa-2x"></i>
</a>
