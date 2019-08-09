@extends('salon.includes.master')

@section('header_meta')
    <title>Услуги | Салон красоты Medlight</title>
    <meta name="description" content="В салоне красоты Medlight можно выполнить следующие программы: Общий уход для молодой кожи, Элос-эпиляция (новый, один из самых эффективных способов удаления волос), Уход за кожей рук (новейшие методики омоложения и общего ухода), Удаление татуировок, Удаление сосудистых звездочек, Удаление пигментных пятен, Аппаратная косметология, Ногтевой сервис."/>
    <meta name="keywords" content="салон красоты, медлайт, medlight, центр красоты, салон красоты в Витебске, услуги"/>
@endsection

@section('content')
    @include('salon.includes.breadcrumbs', [
        'title' => 'Услуги'
    ])
    <section class="section section-lg bg-default">
        <div class="container">
            <div class="row row-50 align-items-lg-center justify-content-xl-between">
                <div class="col-lg-6">
                    <div class="block-xs">
                        <h2 class="heading-decorate">Почему клиенты<br><span class="divider"></span>выбирают нас
                        </h2>
                        <p class="big text-gray-800">Каждое посещение начинается с консультации специалиста, оценки общего статуса и показаний к проведению процедуры.</p>
                        <p>После предварительной беседы заполняется документация, составляется программа и только потом выполняются какие-либо манипуляции. Всегда после проведенных процедур и консультаций мы составляем план домашнего ухода.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="box-images-classic">
                        <div class="row row-30">
                            <div class="col-6">
                                <div class="box-image-item" data-parallax-scroll="{&quot;y&quot;: 0, &quot;x&quot;: -20,  &quot;smoothness&quot;: 30 }"><img src="images/services-1-270x458.jpg" alt="" width="270" height="458"/>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="box-image-item" data-parallax-scroll="{&quot;y&quot;: 0, &quot;x&quot;: 20,  &quot;smoothness&quot;: 30 }"><img src="images/services-2-270x458.jpg" alt="" width="270" height="458"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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

    <section class="section section-md bg-default text-center">
        <div class="container">
            <h2>Элос-эпиляция</h2>
            <div class="divider-lg"></div>
            <p class="big">Уникальная методика позволяет комфортно и безболезненно<br class="d-none d-md-inline">получить хороший долговременный результат.
            </p>
        </div>
        <div class="container">
            <div class="table-custom-responsive">
                <table class="table-custom table-custom-primary">
                    <thead>
                    <tr>
                        <th>Наименование</th>
                        <th>Цена, руб.</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Локальные участки (до10 волосяных фолликулов)</td>
                        <td>3.20</td>
                    </tr>
                    <tr>
                        <td>Носогубный треугольник</td>
                        <td>5.70</td>
                    </tr>
                    <tr>
                        <td>Подбородок</td>
                        <td>7.40</td>
                    </tr>
                    <tr>
                        <td>Задняя или передняя поверхность шеи</td>
                        <td>7.40</td>
                    </tr>
                    <tr>
                        <td>Щеки</td>
                        <td>8.50</td>
                    </tr>
                    <tr>
                        <td>Виски</td>
                        <td>6.50</td>
                    </tr>
                    <tr>
                        <td>Межбровье</td>
                        <td>2.20</td>
                    </tr>
                    <tr>
                        <td>Нос</td>
                        <td>2.20</td>
                    </tr>
                    <tr>
                        <td>Лоб</td>
                        <td>7.40</td>
                    </tr>
                    <tr>
                        <td>Голени</td>
                        <td>30.20</td>
                    </tr>
                    <tr>
                        <td>Бёдра</td>
                        <td>35.20</td>
                    </tr>
                    <tr>
                        <td>Плечи</td>
                        <td>15.60</td>
                    </tr>
                    <tr>
                        <td>Предплечия</td>
                        <td>15.60</td>
                    </tr>
                    <tr>
                        <td>Кисти рук</td>
                        <td>7.70</td>
                    </tr>
                    <tr>
                        <td>Подмышечная область</td>
                        <td>10.40</td>
                    </tr>
                    <tr>
                        <td>Грудь</td>
                        <td>37.10</td>
                    </tr>
                    <tr>
                        <td>Околососковая область</td>
                        <td>6.70</td>
                    </tr>
                    <tr>
                        <td>Бикини классическое</td>
                        <td>15.80</td>
                    </tr>
                    <tr>
                        <td>Межьягодичная зона</td>
                        <td>6.40</td>
                    </tr>
                    <tr>
                        <td>Глубокое бикини</td>
                        <td>25.20</td>
                    </tr>
                    <tr>
                        <td>Ягодицы</td>
                        <td>24.90</td>
                    </tr>
                    <tr>
                        <td>Спина</td>
                        <td>60.50</td>
                    </tr>
                    <tr>
                        <td>Стопы (пальцы ног и подъём стопы)</td>
                        <td>8.40</td>
                    </tr>
                    <tr>
                        <td>Живот (полоска)</td>
                        <td>6.70</td>
                    </tr>
                    <tr>
                        <td>Живот</td>
                        <td>32.00</td>
                    </tr>
                    <tr>
                        <td>Поясничная область</td>
                        <td>32.80</td>
                    </tr>
                    <tr>
                        <td>Комплекс: щеки, носогубный треугольник, подбородок</td>
                        <td>18.50</td>
                    </tr>
                    <tr>
                        <td>Комплекс: бикини, область голеней или бедер</td>
                        <td>60.80</td>
                    </tr>
                    <tr>
                        <td>Комплекс: бикини, подмышечная область, голени (бедра)</td>
                        <td>50.80</td>
                    </tr>
                    <tr>
                        <td>Комплекс: подмышечная область, область плеч, предплечий</td>
                        <td>44.50</td>
                    </tr>
                    <tr>
                        <td>Комплекс: бикини, подмышечная область, голени и бедра</td>
                        <td>89.50</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection