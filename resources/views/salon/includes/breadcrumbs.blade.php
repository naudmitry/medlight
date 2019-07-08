<section class="section-page-title" style="background-image: url(images/page-title-1-1920x305.jpg); background-size: cover;">
    <div class="container">
        <h1 class="page-title">{{ $title }}</h1>
    </div>
</section>
<section class="breadcrumbs-custom">
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            <li><a href="{{ route('site.index') }}">Главная</a></li>
            <li class="active">{{ $title }}</li>
        </ul>
    </div>
</section>