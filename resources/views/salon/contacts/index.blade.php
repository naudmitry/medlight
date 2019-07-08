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
                    <p>Вы можете связаться с нами любым удобным для вас способом. Мы доступны 24/7 по телефону или электронной почте.<br class="d-none d-lg-inline">Вы также можете использовать форму быстрой связи ниже или посетить наш салон лично.</p>
                    <!-- RD Mailform-->
                    <form class="rd-mailform text-left rd-form" data-form-output="form-output-global" data-form-type="contact" method="post" action="#">
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
                                    <input class="form-input" id="contact-sec-name" type="text" name="sec-name" data-constraints="@Required">
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
                            <div class="contact-list-content"><span class="icon mdi mdi-map-marker icon-primary"></span><a href="#">Washington, USA 6036 Richmond hwy., Alexandria, VA, 2230 </a></div>
                        </li>
                        <li>
                            <p class="contact-list-title">Телефоны</p>
                            <div class="contact-list-content"><span class="icon mdi mdi-phone icon-primary"></span><a href="tel:#">+1 (409) 987–5874</a><span>, </span><a href="tel:#">+1(409) 987–5884 </a></div>
                        </li>
                        <li>
                            <p class="contact-list-title">Email</p>
                            <div class="contact-list-content"><span class="icon mdi mdi-email-outline icon-primary"></span><a href="/cdn-cgi/l/email-protection#2b08"><span class="__cf_email__" data-cfemail="462f2820290622232b292a2f282d68293421">[email&#160;protected]</span></a></div>
                        </li>
                        <li>
                            <p class="contact-list-title">Часы работы</p>
                            <div class="contact-list-content"><span class="icon mdi mdi-clock icon-primary"></span>
                                <ul class="list-xs">
                                    <li>Mon-Fri: 9 am – 6 pm</li>
                                    <li>Saturday: 9 am – 4 pm</li>
                                    <li>Sunday: Closed</li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection