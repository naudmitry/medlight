<footer class="section bg-default section-xs-type-1 footer-minimal">
    <div class="container">
        <div class="row row-30 align-items-lg-center justify-content-lg-between">
            <div class="col-lg-2">
                <div class="footer-brand">
                    <a href="{{ route('site.index') }}">
                        <img src="{{ asset('images/logo.png') }}" alt="logo" width="137" height="47"/>
                    </a>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="footer-nav">
                    <ul class="rd-navbar-nav">
                        <li class="rd-nav-item {{ (Request::url() == route('site.index') ? 'active' : '') }}">
                            <a class="rd-nav-link" href="{{ route('site.index') }}">Главная</a>
                        </li>
                        <li class="rd-nav-item {{ (Request::url() == route('site.about.index') ? 'active' : '') }}">
                            <a class="rd-nav-link" href="{{ route('site.about.index') }}">О нас</a>
                        </li>
                        <li class="rd-nav-item {{ (Request::url() == route('site.services.index') ? 'active' : '') }}">
                            <a class="rd-nav-link" href="{{ route('site.services.index') }}">Услуги</a>
                        </li>
                        <li class="rd-nav-item {{ (Request::url() == route('site.contacts.index') ? 'active' : '') }}">
                            <a class="rd-nav-link" href="{{ route('site.contacts.index') }}">Контакты</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<section class="bg-gray-100 section-xs text-center">
    <div class="container">
        <p class="rights"><span>&copy;</span> <span class="copyright-year"></span> <span>Все права защищены. </span> <a href="#">Политика конфидициальности</a></p>
    </div>
</section>