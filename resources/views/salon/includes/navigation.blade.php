<!-- Page Header-->
<header class="section page-header">
    <!-- RD Navbar-->
    <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-classic rd-navbar-classic-minimal" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-main-outer">
                <div class="rd-navbar-main">
                    <!-- RD Navbar Panel-->
                    <div class="rd-navbar-panel">
                        <!-- RD Navbar Toggle-->
                        <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                        <!-- RD Navbar Brand-->
                        <div class="rd-navbar-brand">
                            <a class="brand" href="{{ route('site.index') }}">
                                <img src="{{ asset('images/logo.png') }}" alt="" width="137" height="47"/>
                            </a>
                        </div>
                    </div>

                    <div class="rd-navbar-main-element">
                        <div class="rd-navbar-nav-wrap">
                            <ul class="rd-navbar-nav">
                                @include('salon.includes.navigation.home')
                                @include('salon.includes.navigation.about')
                                @include('salon.includes.navigation.services')
{{--                                @include('salon.includes.navigation.gallery')--}}
{{--                                @include('salon.includes.navigation.blog')--}}
{{--                                @include('salon.includes.navigation.pages')--}}
                                @include('salon.includes.navigation.contacts')
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>