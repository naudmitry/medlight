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
                        <h2>Кто мы такие</h2>
                        <div class="divider-lg"></div>
                        <p class="big text-gray-800">Для Вас работает Новикова Ольга Владимировна: косметик 5 разряда, врач 1 квалификационной категории, эстетический хирург, специалист по лазерным методикам в эстетической медицине, диетолог-нутрициолог, сертифицированный тренер института HYALUAL.</p>
                        <p>Мы разработали комплекс уникальных программ и методик для коррекции возрастных изменений, акне, розацеа, гиперпигментации, целлюлита и дряблости кожи, лишнего веса. Данные программы являются авторским и не используются больше нигде. Они включают в себя комплекс уходовых и аппаратных процедур, а также уникальных методик массажа. Косметологическая мультисистема нашего центра (производство Италия) не имеет аналогов в республике!</p>
                    </div>
                    <div class="row row-30">
                        <div class="col-md-6">
                            <div class="box-contact-info-with-icon"><span class="icon mdi mdi-clock icon-primary"></span>
                                <h5>Часы работы</h5>
                                <ul class="list-xs">
                                    <li>
                                        <span class="text-gray-800">Пн-Вс: </span> 9:00–21:00
                                    </li>
                                    <li>
                                        <span class="text-gray-800">По предварительной записи</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="box-contact-info-with-icon"><span class="icon mdi mdi-clock icon-primary"></span>
                                <h5>Наше место нахождения</h5>
                                <ul class="list-xs">
                                    <li><span class="text-gray-800">Адрес: </span> г. Витебск, ул. Смоленская, 20
                                    </li>
                                    <li><span class="text-gray-800">Телефон: </span> +375 (33) 699-95-03
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="box-images box-images-variant-3">
                        <div class="box-images-item" data-parallax-scroll="{&quot;y&quot;: -20,   &quot;smoothness&quot;: 30 }"><img src="images/twuUG3bBby0.jpg" alt="" width="470" height="282"/>
                        </div>
                        <div class="box-images-item box-images-without-border" data-parallax-scroll="{&quot;y&quot;: 40,  &quot;smoothness&quot;: 30 }"><img src="images/d6yWckS5tys.jpg" alt="" width="470" height="282"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section parallax-container" data-parallax-img="images/parallax-1-1920x870.jpg">
        <div class="parallax-content section-lg context-dark text-center">
            <div class="container">
                <div class="row justify-content-md-center row-30">
                    <div class="col-md-9 col-lg-8">
                        <h2>Подписывайтесь на нашу новостную рассылку</h2>
                        <div class="divider-lg"></div>
                        <p class="big">Узнавайте первыми о наших акциях и скидках!</p>
                    </div>
                    <div class="col-md-9 col-lg-6">
                        <!-- RD Mailform-->
                        <form class="rd-form rd-mailform rd-form-inline" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                            <div class="form-wrap">
                                <input class="form-input" id="subscribe-form-0-email" type="email" name="email" data-constraints="@Email @Required"/>
                                <label class="form-label" for="subscribe-form-0-email">Ваш адрес электронной почты</label>
                            </div>
                            <div class="form-button">
                                <button class="button button-white" type="submit">Подписаться</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection