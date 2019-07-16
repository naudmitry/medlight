@extends('salon.includes.master')

@section('content')
    @include('salon.includes.breadcrumbs', [
        'title' => 'Контакты',
    ])
    <section class="section section-md">
        <div class="container">
            <div class="row row-50">
                <div class="col-lg-8">
                    <h2>Связаться с нами</h2>
                    <div class="divider-lg"></div>
                    <p>Вы можете связаться с нами любым удобным для вас способом. Мы доступны 24/7 по телефону или электронной почте. Вы также можете использовать форму быстрой связи ниже или посетить наш салон лично.</p>
                    <!-- RD Mailform-->
                    <form class="rd-mailform text-left rd-form" data-form-output="form-output-global" data-form-type="contact" method="post" action="{{ route('site.help-desk.store') }}">
                        @csrf
                        <div class="row row-15">
                            <div class="col-sm-6">
                                <div class="form-wrap">
                                    <label class="form-label" for="contact-name">Имя</label>
                                    <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-wrap">
                                    <label class="form-label" for="contact-sec-name">Фамилия</label>
                                    <input class="form-input" id="contact-sec-name" type="text" name="surname" data-constraints="@Required">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-wrap">
                                    <label class="form-label" for="contact-phone">Телефон</label>
                                    <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@Numeric @Required">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-wrap">
                                    <label class="form-label" for="contact-email">Email</label>
                                    <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-wrap">
                                    <label class="form-label" for="contact-message">Сообщение</label>
                                    <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-button group-sm text-left">
                            <button class="button button-primary" type="submit">Отправить сообщение</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <ul class="contact-list">
                        <li>
                            <p class="contact-list-title">Адрес</p>
                            <div class="contact-list-content"><span class="icon mdi mdi-map-marker icon-primary"></span>г. Витебск, ул. Смоленская, 20</div>
                        </li>
                        <li>
                            <p class="contact-list-title">Телефоны</p>
                            <div class="contact-list-content"><span class="icon mdi mdi-phone icon-primary"></span><a href="tel:+375(33)6999503">+375 (33) 699-95-03</a></div>
                        </li>
                        <li>
                            <p class="contact-list-title">Email</p>
                            <div class="contact-list-content"><span class="icon mdi mdi-email-outline icon-primary"></span>ir-nov@yandex.by</div>
                        </li>
                        <li>
                            <p class="contact-list-title">Часы работы</p>
                            <div class="contact-list-content"><span class="icon mdi mdi-clock icon-primary"></span>
                                <ul class="list-xs">
                                    <li>Пн-Пт: 8.00 – 17.00</li>
                                    <li>Сб-Вс: Выходной</li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection