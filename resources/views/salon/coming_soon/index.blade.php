@extends('salon.includes.master')

@section('content')
    <section class="section section-single" style="background-image: url(images/big-bg-3.jpg); background-size: cover;">
        <div class="section-single-inner">
            <div class="section-single-header">
                <div class="container">
                    <a class="brand" href="{{ route('site.coming-soon.index') }}"><img src="{{ asset('images/logo.png') }}" alt="brand" width="137" height="47"/></a>
                </div>
            </div>
            <div class="section-single-main">
                <div class="container">
                    <h2>Сайт скоро появится</h2>
                    <div class="countdown-wrap">
                        <div class="DateCountdown" data-type="until" data-date="2019-08-01 00:00:00" data-format="wdhms" data-color="#76d7e6" data-bg="rgba(246, 246, 246, 1)" data-width="0.05"></div>
                    </div>
                    <p><span style="max-width: 840px;">Оставьте вашу почту, и мы сообщим вам о нашем запуске.</span></p>
                    <div class="rd-mailform-wrap block-sm">
                        <form class="rd-form rd-mailform rd-form-inline" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="{{ route('site.subscribe.store') }}">
                            @csrf
                            <div class="form-wrap">
                                <input class="form-input" id="subscribe-form-email" type="email" name="email" data-constraints="@Email @Required">
                                <label class="form-label" for="subscribe-form-email">Email</label>
                            </div>
                            <div class="form-button">
                                <button class="button button-primary" type="submit">Подписаться</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="section-single-footer">
                <div class="container">
                    <p class="rights">Medlight &copy; <span class="copyright-year"></span></p>
                </div>
            </div>
        </div>
    </section>
@endsection