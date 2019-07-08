@extends('salon.includes.master')


@section('content')
    @include('salon.includes.breadcrumbs', [
        'title' => 'О нас',
    ])

    <section class="section section-lg bg-default">
        <div class="container">
            <div class="row row-50 align-items-lg-center justify-content-xl-between">
                <div class="col-lg-6">
                    <div class="block-xs">
                        <h2>Who We Are</h2>
                        <div class="divider-lg"></div>
                        <p class="big text-gray-800">Cras ut vestibulum tortor. In in nisi sit amet metus varius pulvinar in vitae ipsum nec mi sollicitudin Fusce turpis massa,</p>
                        <p>In ante sapien, dapibus luctus aliquet a, accumsan sit amet dolor. Mauris id facilisis dolor. Donec malesuada, est eu dignissim eleifend, est nulla dignissim nisl. Fusce turpis massa, mattis sit.</p>
                    </div>
                    <div class="row row-30">
                        <div class="col-md-6">
                            <div class="box-contact-info-with-icon"><span class="icon mdi mdi-clock icon-primary"></span>
                                <h5>Opening Hours</h5>
                                <ul class="list-xs">
                                    <li> <span class="text-gray-800">Monday-Friday: </span> 8:00am–8:00pm
                                    </li>
                                    <li><span class="text-gray-800">Saturday:</span> 8:00am–6:00pm
                                    </li>
                                    <li><span class="text-gray-800">Sunday: </span> Closed
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="box-contact-info-with-icon"><span class="icon mdi mdi-clock icon-primary"></span>
                                <h5>Our Location</h5>
                                <ul class="list-xs">
                                    <li><span class="text-gray-800">Address: </span> Washington, USA 6036 Richmond hwy.,  VA, 2230
                                    </li>
                                    <li><span class="text-gray-800">Offices: </span> 284-290
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="box-images box-images-variant-3">
                        <div class="box-images-item" data-parallax-scroll="{&quot;y&quot;: -20,   &quot;smoothness&quot;: 30 }"><img src="images/overview-1-470x282.jpg" alt="" width="470" height="282"/>
                        </div>
                        <div class="box-images-item box-images-without-border" data-parallax-scroll="{&quot;y&quot;: 40,  &quot;smoothness&quot;: 30 }"><img src="images/overview-2-470x282.jpg" alt="" width="470" height="282"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section parallax-container" data-parallax-img="images/parallax-04-1920x1320.jpg">
        <div class="parallax-content section-lg context-dark text-center section-filter-dark">
            <div class="container">
                <h2>Video Presentation </h2>
                <div class="divider-lg"></div>
                <p class="block-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit.  Vestibulum bibendum elit cursus dapibus maximus. Maecenas sapien urna, cursus ut turpis non, gravida vehicula nisl. </p>
            </div>
            <div class="container">
                <div class="box-video-button" data-lightgallery="group"><a class="button-play" data-lightgallery="item" href="https://www.youtube.com/watch?v=m10Vl9TXpec"><span class="icon fa-play"></span></a></div>
            </div>
        </div>
    </section>
    <section class="section section-md bg-default text-center">
        <div class="container">
            <h2>Our Professional Team</h2>
            <div class="divider-lg"></div>
            <p class="block-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit.  Vestibulum bibendum elit cursus dapibus maximus. Maecenas sapien urna, cursus ut turpis non, gravida vehicula nisl. </p>
            <div class="row row-30">
                <div class="col-12">
                    <!-- Owl Carousel-->
                    <div class="owl-carousel carousel-creative" data-items="1" data-lg-items="3" data-dots="true" data-nav="false" data-stage-padding="15" data-loop="true" data-autoplay="true" data-margin="30" data-mouse-drag="false">
                        <div class="team-minimal team-minimal-with-shadow">
                            <figure><img src="images/team-1-370x370.jpg" alt="" width="370" height="370"></figure>
                            <div class="team-minimal-caption">
                                <h4 class="team-title"><a href="team-member-profile.html">Mary Lucas</a></h4>
                                <p>Senior Masseur</p>
                            </div>
                        </div>
                        <div class="team-minimal team-minimal-with-shadow">
                            <figure><img src="images/team-2-370x370.jpg" alt="" width="370" height="370"></figure>
                            <div class="team-minimal-caption">
                                <h4 class="team-title"><a href="team-member-profile.html">Ann Butler</a></h4>
                                <p>Chiropractor</p>
                            </div>
                        </div>
                        <div class="team-minimal team-minimal-with-shadow">
                            <figure><img src="images/team-3-370x370.jpg" alt="" width="370" height="370"></figure>
                            <div class="team-minimal-caption">
                                <h4 class="team-title"><a href="team-member-profile.html">Emily Lawrence</a></h4>
                                <p>Masseur</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12"><a class="button button-default-outline" href="our-team.html">View all team</a></div>
            </div>
        </div>
    </section>
    <section class="section parallax-container" data-parallax-img="images/parallax-1-1920x870.jpg">
        <div class="parallax-content section-lg context-dark text-center">
            <div class="container">
                <div class="row justify-content-md-center row-30">
                    <div class="col-md-9 col-lg-8">
                        <h2>Subscribe to Our Newsletter</h2>
                        <div class="divider-lg"></div>
                        <p class="big">Be the first to know about our promotions and discounts!</p>
                    </div>
                    <div class="col-md-9 col-lg-6">
                        <!-- RD Mailform-->
                        <form class="rd-form rd-mailform rd-form-inline" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                            <div class="form-wrap">
                                <input class="form-input" id="subscribe-form-0-email" type="email" name="email" data-constraints="@Email @Required"/>
                                <label class="form-label" for="subscribe-form-0-email">Your E-mail</label>
                            </div>
                            <div class="form-button">
                                <button class="button button-white" type="submit">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection