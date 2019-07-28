@extends('salon.includes.master')

@section('content')
    <!-- Swiper-->
    <section class="section swiper-container swiper-slider swiper-slider-2 slider-scale-effect" data-loop="false" data-autoplay="5500" data-simulate-touch="false" data-slide-effect="fade">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="slide-bg swiper-white-filter" style="background-image: url(&quot;images/slide-4-1-1920x780.jpg&quot;)"></div>
                <div class="swiper-slide-caption section-md">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-10 col-lg-7 col-xl-6 swiper-caption-inner">
                                <h2 data-caption-animate="fadeInUp" data-caption-delay="100">Мы работаем на результат</h2>
                                <div class="divider-lg" data-caption-animate="fadeInLeft" data-caption-delay="550"></div>
                                <p class="lead" data-caption-animate="fadeInUp" data-caption-delay="250">Мы разработали комплекс уникальных программ и методик для коррекции возрастных изменений. Данные программы  являются авторскими. Они включают в себя комплекс уходовых и аппаратных процедур, а также уникльных методик массажа.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slide-bg swiper-white-filter" style="background-image: url(&quot;images/slide-4-2-1920x780.jpg&quot;)"></div>
                <div class="swiper-slide-caption section-md">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-10 col-lg-7 col-xl-6 swiper-caption-inner">
                                <h2 data-caption-animate="fadeInUp" data-caption-delay="100">Качественные услуги массажа</h2>
                                <div class="divider-lg" data-caption-animate="fadeInLeft" data-caption-delay="550"></div>
                                <p class="lead" data-caption-animate="fadeInUp" data-caption-delay="250">Только у нас сеанс косметологических процедур проводится на вибро-массажной кушетке, что позволит Вам не только получить эстетический результат, но и расслабиться после тяжелого дня.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slide-bg swiper-white-filter" style="background-image: url(&quot;images/slide-4-3-1920x780.jpg&quot;)"></div>
                <div class="swiper-slide-caption section-md">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-10 col-lg-7 col-xl-6 swiper-caption-inner">
                                <h2 class="heading-decorate" data-caption-animate="fadeInUp" data-caption-delay="100">Косметологическая мультисистема</h2>
                                <div class="divider-lg" data-caption-animate="fadeInLeft" data-caption-delay="550"></div>
                                <p class="lead" data-caption-animate="fadeInUp" data-caption-delay="250">Косметологическая мультисистема нашего центра (производство Италия) не имеет аналогов в республике.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Swiper Pagination -->
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </section>
    <section class="section section-lg bg-default text-center">
        <div class="container">
            <h2>Наши услуги</h2>
            <div class="divider-lg"></div>
            <p>Мы предоставляем широкий спектр услуг, чтобы<br class="d-none d-sm-inline">подчеркнуть Вашу красоту и сохранить молодость.</p>
        </div>
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-4">
                    <div class="box-service-modern">
                        <div class="box-icon-classic box-icon-classic-vertical">
                            <div class="icon-classic-aside">
                                <h4 class="icon-classic-title"><a href="#">ANTI-AGE программы</a></h4>
                            </div>
                            <div class="icon-classic-body">
                                <p>Антивозрастные программы, программы оздоровления и омоложения организма.</p>
                            </div>
                        </div>
                        <div class="box-service-modern-img">
                            <img src="images/SLv8Q7CRHrM.jpg" alt="" width="390" height="312"/>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box-service-modern box-service-modern-reverse">
                        <div class="box-icon-classic box-icon-classic-vertical">
                            <div class="icon-classic-aside">
                                <h4 class="icon-classic-title"><a href="#">Карбоновый пилинг</a></h4>
                            </div>
                            <div class="icon-classic-body">
                                <p>Эффективная процедура омолаживания и очищения кожи лица.</p>
                            </div>
                        </div>
                        <div class="box-service-modern-img">
                            <img src="images/home-4-4-390x312.jpg" alt="" width="390" height="312"/>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box-service-modern">
                        <div class="box-icon-classic box-icon-classic-vertical">
                            <div class="icon-classic-aside">
                                <h4 class="icon-classic-title"><a href="#">Коррекция проблемной кожи</a></h4>
                            </div>
                            <div class="icon-classic-body">
                                <p>Эффективная процедура омоложения и глубокого очищения кожи.</p>
                            </div>
                        </div>
                        <div class="box-service-modern-img">
                            <img src="images/home-4-5-390x312.jpg" alt="" width="390" height="312"/>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-md-none d-lg-block">
                    <div class="box-service-modern">
                        <div class="box-icon-classic box-icon-classic-vertical">
                            <div class="icon-classic-aside">
                                <h4 class="icon-classic-title"><a href="#">Консультация диетолога-нутрициолога</a></h4>
                            </div>
                            <div class="icon-classic-body">
                                <p>Новейшие эффективные программы по снижению веса.</p>
                            </div>
                        </div>
                        <div class="box-service-modern-img">
                            <img src="images/shutterstock_131037059.jpg" alt="" width="390" height="312"/>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-md-none d-lg-block">
                    <div class="box-service-modern box-service-modern-reverse">
                        <div class="box-icon-classic box-icon-classic-vertical">
                            <div class="icon-classic-aside">
                                <h4 class="icon-classic-title"><a href="#">Эндомассаж</a></h4>
                            </div>
                            <div class="icon-classic-body">
                                <p>Позволяет снизить отечность вокруг глаз, укрепить овал лица, улучшить кровоток и стимулировать выработку коллагена и эластина.</p>
                            </div>
                        </div>
                        <div class="box-service-modern-img">
                            <img src="images/home-4-3-390x312.jpg" alt="" width="390" height="312"/>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-md-none d-lg-block">
                    <div class="box-service-modern">
                        <div class="box-icon-classic box-icon-classic-vertical">
                            <div class="icon-classic-aside">
                                <h4 class="icon-classic-title"><a href="#">Уход за телом</a></h4>
                            </div>
                            <div class="icon-classic-body">
                                <p>Расслабляющий массаж, коррекция растяжек и рубцов.</p>
                            </div>
                        </div>
                        <div class="box-service-modern-img" style="height: 310px;">
                            <img src="images/chuvstvitelnaya-kozha.jpg" alt="" width="390" height="312"/>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-none d-md-block d-lg-none">
                    <div class="box-service-modern box-service-modern-reverse">
                        <div class="box-icon-classic box-icon-classic-vertical">
                            <div class="icon-classic-aside">
                                <h4 class="icon-classic-title"><a href="#">Консультация диетолога-нутрициолога</a></h4>
                            </div>
                            <div class="icon-classic-body">
                                <p>Новейшие эффективные программы по снижению веса.</p>
                            </div>
                        </div>
                        <div class="box-service-modern-img">
                            <img src="images/shutterstock_131037059.jpg" alt="" width="390" height="312"/>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-none d-md-block d-lg-none">
                    <div class="box-service-modern">
                        <div class="box-icon-classic box-icon-classic-vertical">
                            <div class="icon-classic-aside">
                                <h4 class="icon-classic-title"><a href="#">Эндомассаж</a></h4>
                            </div>
                            <div class="icon-classic-body">
                                <p>Позволяет снизить отечность вокруг глаз, укрепить овал лица, улучшить кровоток и стимулировать выработку коллагена и эластина.</p>
                            </div>
                        </div>
                        <div class="box-service-modern-img">
                            <img src="images/home-4-3-390x312.jpg" alt="" width="390" height="312"/>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-none d-md-block d-lg-none">
                    <div class="box-service-modern box-service-modern-reverse">
                        <div class="box-icon-classic box-icon-classic-vertical">
                            <div class="icon-classic-aside">
                                <h4 class="icon-classic-title"><a href="#">Уход за телом</a></h4>
                            </div>
                            <div class="icon-classic-body">
                                <p>Расслабляющий массаж, коррекция растяжек и рубцов.</p>
                            </div>
                        </div>
                        <div class="box-service-modern-img" style="height: 310px;">
                            <img src="images/chuvstvitelnaya-kozha.jpg" alt="" width="390" height="312"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            Также выполняем следующие программы: Общий уход для молодой кожи, Элос-эпиляция (новый, один из самых эффективных способов удаления волос), Уход за кожей рук (новейшие методики омоложения и общего ухода), Удаление татуировок, Удаление сосудистых звездочек, Удаление пигментных пятен, Аппаратная косметология, Ногтевой сервис.
        </div>
    </section>
    <section class="section section-lg bg-gray-100">
        <div class="container">
            <div class="row row-50 align-items-lg-center justify-content-xl-between">
                <div class="col-lg-6">
                    <div class="box-images box-images-modern">
                        <div class="box-images-item" data-parallax-scroll="{&quot;y&quot;: -10,   &quot;smoothness&quot;: 30 }"><img src="images/home-4-2-310x369.jpg" alt="" width="310" height="369"/>
                        </div>
                        <div class="box-images-item box-images-without-border" data-parallax-scroll="{&quot;y&quot;: 40,  &quot;smoothness&quot;: 30 }"><img src="images/home-4-1-328x389.jpg" alt="" width="328" height="389"/>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-5">
                    <h2 class="heading-decorate">Почему клиенты<br><span class="divider"></span>выбирают нас
                    </h2>
                    <p class="big text-gray-800">Каждое посещение начинается с консультации специалиста, оценки общего статуса и показаний к проведению процедуры.</p>
                    <p>После предварительной беседы заполняется документация, составляется программа и только потом выполняются какие-либо манипуляции. Всегда после проведенных процедур и консультаций мы составляем план домашнего ухода.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-lg bg-default text-center">
        <div class="container">
            <h2>Вопросы</h2>
            <div class="divider-lg"></div>
            <p class="block-lg">Мы надеемся, что эти часто задаваемые вопросы и ответы на них помогут вам найти решение вашей проблемы. Если нет, не стесняйтесь обращаться к нам в любое время.</p>
        </div>
        <div class="container">
            <div class="block-sm">
                <div class="card-group-custom card-group-corporate card-group-gray" id="accordion1" role="tablist" aria-multiselectable="false">
                    <!-- Bootstrap card-->
                    <article class="card card-custom card-corporate">
                        <div class="card-header" id="accordion1Heading1" role="tab">
                            <div class="card-title"><a role="button" data-toggle="collapse" data-parent="#accordion1" href="#accordion1Collapse1" aria-controls="accordion1Collapse1" aria-expanded="true">С чего начинается посещение?
                                <div class="card-arrow"></div></a>
                            </div>
                        </div>
                        <div class="collapse show" id="accordion1Collapse1" role="tabpanel" aria-labelledby="accordion1Heading1">
                            <div class="card-body">
                                <p>Каждое посещение начинается с консультации специалиста, оценки общего статуса и показаний к проведению процедуры.</p>
                            </div>
                        </div>
                    </article>
                    <!-- Bootstrap card-->
                    <article class="card card-custom card-corporate">
                        <div class="card-header" id="accordion1Heading2" role="tab">
                            <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#accordion1Collapse2" aria-controls="accordion1Collapse2">Какая программа процедур мне нужна?
                                <div class="card-arrow"></div></a>
                            </div>
                        </div>
                        <div class="collapse" id="accordion1Collapse2" role="tabpanel" aria-labelledby="accordion1Heading2">
                            <div class="card-body">
                                <p>После предварительной беседы заполняется документация, составляется программа и только потом выполняются какие-либо манипуляции.</p>
                            </div>
                        </div>
                    </article>
                    <!-- Bootstrap card-->
                    <article class="card card-custom card-corporate">
                        <div class="card-header" id="accordion1Heading3" role="tab">
                            <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#accordion1Collapse3" aria-controls="accordion1Collapse3">Имеются ли скидки и бонусы?
                                    <div class="card-arrow"></div></a>
                            </div>
                        </div>
                        <div class="collapse" id="accordion1Collapse3" role="tabpanel" aria-labelledby="accordion1Heading3">
                            <div class="card-body">
                                <p>Для наших постоянных клиентов разработана система скидок и бонусов!</p>
                            </div>
                        </div>
                    </article>
                    <!-- Bootstrap card-->
                    <article class="card card-custom card-corporate">
                        <div class="card-header" id="accordion1Heading4" role="tab">
                            <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#accordion1Collapse4" aria-controls="accordion1Collapse4">Какие программы будут использоваться при сеансе?
                                <div class="card-arrow"></div></a>
                            </div>
                        </div>
                        <div class="collapse" id="accordion1Collapse4" role="tabpanel" aria-labelledby="accordion1Heading4">
                            <div class="card-body">
                                <p>Данные программы  являются авторским и не используются больше нигде! Они включают в себя комплекс уходовых и аппаратных процедур, а также уникльных методик массажа.</p>
                            </div>
                        </div>
                    </article>
                    <!-- Bootstrap card-->
                    <article class="card card-custom card-corporate">
                        <div class="card-header" id="accordion1Heading5" role="tab">
                            <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#accordion1Collapse5" aria-controls="accordion1Collapse5">Как будет проводиться косметологический сеанс?
                                <div class="card-arrow"></div></a>
                            </div>
                        </div>
                        <div class="collapse" id="accordion1Collapse5" role="tabpanel" aria-labelledby="accordion1Heading5">
                            <div class="card-body">
                                <p>Только у нас сеанс косметологических процедур проводится на вибро-массажной кушетке, что позволит Вам не только получить эстетический результат, но и расслабиться после тяжелого дня.</p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
@endsection