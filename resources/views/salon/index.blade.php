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
            <p>Мы предоставляем широкий спектр услуг, чтобы вы <br class="d-none d-sm-inline">выглядели чистыми, привлекательными и оригинальными.</p>
        </div>
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-4">
                    <div class="box-service-modern">
                        <div class="box-icon-classic box-icon-classic-vertical">
                            <div class="icon-classic-aside">
                                <div class="icon-classic">
                                    <svg version="1.1" xmlns="https://www.w3.org/2000/svg" x="0px" y="0px" width="80px" height="79px" viewbox="0 0 80 79" enable-background="new 0 0 80 79" xml:space="preserve">
                                        <path d="M57.805,45.6c2.708-0.118,5.171-0.317,7.312-0.671c2.246-0.371,9.083-1.501,9.083-7.008  c0-6.467-15.144-15.711-25.329-18.602c5.837-1.259,8.962-3.659,8.962-7.066C57.833,6.587,48.879,0,37.333,0  c-11.546,0-20.5,6.587-20.5,12.252c0,4.265,4.873,6.961,13.874,7.804c-10.661,2.737-18.937,8.517-18.937,14.38  c0,5.851,8.064,9.06,18.174,10.458C15.756,48.781,0,58.434,0,68.454c0,2.556,0.822,4.662,2.443,6.256  c4.639,4.564,15.223,4.404,28.633,4.209c5.748-0.087,12.165-0.086,17.913,0.001c2.663,0.041,5.215,0.08,7.631,0.08  c9.716,0,17.231-0.624,20.941-4.273c1.62-1.593,2.44-3.698,2.44-6.253c0-4.616-2.601-9.613-7.325-14.07  C68.562,50.524,63.44,47.532,57.805,45.6z M19.135,12.252c0-4.007,7.642-9.953,18.198-9.953c10.556,0,18.198,5.945,18.198,9.953  c0,3.571-6.973,5.79-18.198,5.79C26.108,18.042,19.135,15.824,19.135,12.252z M14.265,34.436c0-5.962,13.784-13.528,29.275-13.528  c8.185,0,28.165,11.163,28.165,17.012c0,1.457-0.725,3.513-6.995,4.549c-4.55,0.753-10.724,0.809-17.842,0.8  c-2.294-0.211-4.618-0.255-6.945-0.125c-0.193,0.011-0.393,0.031-0.59,0.046C24.378,42.646,14.265,39.2,14.265,34.436z  M75.632,72.774c-3.812,3.751-14.373,3.586-26.603,3.406c-2.896-0.045-5.921-0.089-9.029-0.089c-3.086,0-6.088,0.043-8.965,0.087  c-12.263,0.181-22.846,0.339-26.666-3.42c-1.092-1.075-1.624-2.483-1.624-4.303c0-9.877,21.912-21.698,37.334-22.572  c13.606-0.78,24.788,4.925,30.711,10.514c4.109,3.877,6.466,8.279,6.466,12.078C77.256,70.293,76.725,71.7,75.632,72.774z"></path>
                                    </svg>
                                </div>
                                <h4 class="icon-classic-title"><a href="#">Расслабление</a></h4>
                            </div>
                            <div class="icon-classic-body">
                                <p>Омолаживающие и расслабляющие программы для тела и лица.</p>
                            </div>
                        </div>
                        <div class="box-service-modern-img">
                            <img src="images/home-4-3-390x312.jpg" alt="" width="390" height="312"/>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box-service-modern box-service-modern-reverse">
                        <div class="box-icon-classic box-icon-classic-vertical">
                            <div class="icon-classic-aside">
                                <div class="icon-classic">
                                    <svg version="1.1" xmlns="https://www.w3.org/2000/svg" x="0px" y="0px" width="60px" height="79px" viewbox="0 0 60 79" enable-background="new 0 0 60 79" xml:space="preserve">
                                        <g>
                                            <path d="M58.939,70.706c1.66-3.072,1.364-6.899-0.834-10.778c-2.105-3.718-5.738-7.073-10.228-9.447    c-3.97-2.099-8.209-3.22-12.111-3.22c-2.01-1.021-4.2-1.78-6.503-2.272v-2.574c8.64-2.745,14.931-10.995,14.931-20.722    C44.194,9.732,34.678,0,22.982,0S1.77,9.732,1.77,21.694c0,9.727,6.292,17.978,14.932,20.722v2.574C7.073,47.056,0,53.745,0,61.663    C0,71.223,10.309,79,22.982,79c5.963,0,11.543-1.703,15.825-4.777c3.104,1.216,6.219,1.813,9.07,1.813    C52.865,76.036,57.043,74.214,58.939,70.706z M4.05,21.694c0-10.718,8.493-19.438,18.931-19.438s18.931,8.719,18.931,19.438    c0,10.717-8.493,19.437-18.931,19.437S4.05,32.411,4.05,21.694z M18.982,42.995c1.296,0.254,2.632,0.392,4,0.392    c1.368,0,2.704-0.138,4-0.392v1.601c-1.311-0.173-2.646-0.271-4-0.271c-1.365,0-2.7,0.095-4,0.268V42.995z M22.982,76.744    c-11.414,0-20.701-6.765-20.701-15.081c0-8.316,9.287-15.081,20.701-15.081c2.871,0,5.653,0.434,8.226,1.252    c-0.858,0.234-1.646,0.549-2.377,0.919c-1.883-0.488-3.847-0.746-5.849-0.746c-9.936,0-18.019,6.126-18.019,13.656    s8.083,13.655,18.019,13.655c4.253,0,8.318-1.138,11.558-3.194c0.412,0.244,0.821,0.49,1.253,0.717    c0.2,0.106,0.403,0.196,0.603,0.297C32.658,75.474,27.971,76.744,22.982,76.744z M32.422,70.754    c-2.718,1.491-6.004,2.307-9.441,2.307c-8.678,0-15.738-5.114-15.738-11.399c0-6.286,7.06-11.399,15.738-11.399    c1.123,0,2.232,0.096,3.318,0.267c-0.625,0.616-1.152,1.313-1.569,2.085C21.823,57.996,25.236,65.592,32.422,70.754z    M36.868,70.851c-0.6-0.317-1.173-0.656-1.733-1.005c-0.006-0.004-0.012-0.008-0.017-0.011    c-7.189-4.498-10.915-11.458-8.376-16.156c1.28-2.369,4.011-3.83,7.691-4.115c0.437-0.034,0.881-0.051,1.331-0.051    c3.525,0,7.392,1.031,11.038,2.959c4.11,2.173,7.417,5.213,9.313,8.56c1.804,3.184,2.092,6.243,0.812,8.613    C54.189,74.711,45.189,75.253,36.868,70.851z"></path>
                                            <path d="M24.192,31.183c0.16,0.078,0.33,0.114,0.497,0.114c0.423,0,0.829-0.234,1.026-0.635l7.641-15.568    c0.275-0.561,0.039-1.236-0.528-1.507c-0.565-0.273-1.249-0.04-1.524,0.522l-7.641,15.568    C23.39,30.236,23.626,30.911,24.192,31.183z"></path>
                                            <path d="M25.604,34.221c-0.275,0.561-0.039,1.236,0.527,1.507c0.16,0.078,0.33,0.114,0.497,0.114    c0.423,0,0.829-0.233,1.026-0.635l7.641-15.568c0.275-0.56,0.039-1.236-0.528-1.507c-0.565-0.273-1.249-0.039-1.524,0.522    L25.604,34.221z"></path>
                                        </g>
                                    </svg>
                                </div>
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
                                <div class="icon-classic">
                                    <svg version="1.1" xmlns="https://www.w3.org/2000/svg" x="0px" y="0px" width="53px" height="79px" viewbox="0 0 53 79" enable-background="new 0 0 53 79" xml:space="preserve">
                                        <g>
                                            <path d="M24.517,49.505c0-4.036-3.404-7.318-7.589-7.318c-4.185,0-7.59,3.283-7.59,7.318    c0,4.036,3.405,7.318,7.59,7.318C21.113,56.824,24.517,53.541,24.517,49.505z M16.929,54.697c-2.969,0-5.384-2.329-5.384-5.191    c0-2.862,2.415-5.191,5.384-5.191c2.968,0,5.383,2.329,5.383,5.191C22.312,52.368,19.897,54.697,16.929,54.697z"></path>
                                            <path d="M32.595,42.187c-4.185,0-7.59,3.283-7.59,7.318c0,4.036,3.405,7.318,7.59,7.318    c4.185,0,7.589-3.283,7.589-7.318C40.184,45.47,36.78,42.187,32.595,42.187z M32.595,54.697c-2.969,0-5.384-2.329-5.384-5.191    c0-2.862,2.415-5.191,5.384-5.191c2.968,0,5.383,2.329,5.383,5.191C37.978,52.368,35.563,54.697,32.595,54.697z"></path>
                                            <path d="M18.367,49.346h-2.811c-0.609,0-1.103,0.476-1.103,1.064c0,0.587,0.494,1.064,1.103,1.064h2.811    c0.609,0,1.103-0.476,1.103-1.064C19.47,49.822,18.977,49.346,18.367,49.346z"></path>
                                            <path d="M34.359,49.346h-2.811c-0.609,0-1.103,0.476-1.103,1.064c0,0.587,0.494,1.064,1.103,1.064h2.811    c0.609,0,1.103-0.476,1.103-1.064C35.462,49.822,34.968,49.346,34.359,49.346z"></path>
                                            <path d="M50.106,22.208c0.27-0.629,0.478-1.276,0.665-1.868c0.095-0.301,0.186-0.59,0.281-0.858    c0.767-2.174,1.208-3.992,1.389-5.726c0.415-3.992-0.681-7.672-3.006-10.096c-1.847-1.925-4.564-3.183-7.65-3.54    c-6.279-0.723-16.443,1.751-18.307,9.383c-0.014,0.058-0.002,0.114-0.005,0.17c-6.556,0.664-13.412,3.655-17.228,7.854    c-4.499,4.953-5.611,11.874-6.056,16.649c-0.259,2.779-0.378,5.741,0.499,8.572c0.799,2.579,1.694,4.821,4.377,5.995    c0.087,0.516,0.199,1.418,0.199,2.656c0,12.897,10.503,27.6,19.715,27.6c8.858,0,18.902-13.591,19.663-26.101    c2.572-2.175,4.076-5.212,4.988-7.358c2.118-4.992,3.249-10.177,3.364-15.412C53.048,27.655,52.795,24.178,50.106,22.208z    M24.979,76.873c-7.322,0-17.51-12.836-17.51-25.472c0-1.903-0.238-3.122-0.332-3.532C6.996,41.117,12.68,36.16,24.477,32.746    c0.167-0.005,0.334-0.011,0.502-0.011c10.636,0,17.509,7.327,17.509,18.665c0,0.292-0.011,0.583-0.022,0.875    c-0.003,0.025-0.001,0.049-0.002,0.074C41.975,64.671,32.118,76.873,24.979,76.873z M47.588,44.734    c-0.627,1.478-1.558,3.42-2.942,5.094c-0.526-9.444-5.784-16.278-13.844-18.466c3.699-0.67,7.528-1.585,8.669-4.285    c0.743-1.755,0.19-3.849-1.689-6.404c-0.352-0.478-1.041-0.591-1.538-0.252c-0.496,0.34-0.613,1.004-0.261,1.483    c1.388,1.886,1.874,3.357,1.446,4.37c-0.809,1.914-4.921,2.631-8.225,3.209c-1.235,0.216-2.402,0.42-3.383,0.675    C12.578,33.616,5.75,38.889,5.005,46.233c-1.128-0.882-1.626-2.228-2.203-4.092c-0.77-2.488-0.655-5.206-0.415-7.774    c0.417-4.478,1.443-10.953,5.518-15.437c4.428-4.874,13.804-8.066,20.909-7.106c3.097,0.416,7.233,1.821,9.358,6.149    c0.261,0.531,0.918,0.759,1.469,0.506c0.551-0.252,0.785-0.886,0.525-1.417c-2.016-4.104-5.835-6.644-11.047-7.345    c-1.08-0.145-2.201-0.199-3.344-0.182c1.807-5.746,10.191-7.949,15.747-7.303c2.568,0.297,4.802,1.318,6.295,2.872    c1.897,1.977,2.783,5.053,2.43,8.439c-0.163,1.568-0.57,3.237-1.282,5.253c-0.102,0.288-0.2,0.601-0.302,0.924    c-0.391,1.24-0.835,2.645-1.684,3.217c-0.345,0.231-0.853,0.321-1.263,0.223c-0.246-0.058-0.413-0.169-0.499-0.329    c-0.279-0.523-0.944-0.727-1.485-0.457c-0.541,0.269-0.754,0.911-0.474,1.432c0.379,0.709,1.064,1.212,1.928,1.418    c0.283,0.067,0.578,0.101,0.874,0.101c0.775,0,1.559-0.225,2.183-0.645c0.268-0.181,0.498-0.397,0.712-0.628    c1.31,1.088,1.901,3.012,1.835,6.031C50.68,35.056,49.603,39.986,47.588,44.734z"></path>
                                            <path d="M28.86,65.861c-2.378,2.288-5.364,2.357-7.792,0.186c-0.446-0.399-1.143-0.375-1.559,0.056    c-0.414,0.431-0.389,1.103,0.058,1.503c1.597,1.429,3.448,2.14,5.296,2.14c1.955,0,3.907-0.795,5.555-2.38    c0.431-0.415,0.432-1.088,0.002-1.504C29.99,65.447,29.292,65.447,28.86,65.861z"></path>
                                        </g>
                                    </svg>
                                </div>
                                <h4 class="icon-classic-title"><a href="#">Возрастные изменения</a></h4>
                            </div>
                            <div class="icon-classic-body">
                                <p>Морщины и возрастные изменения - это не для нас!</p>
                            </div>
                        </div>
                        <div class="box-service-modern-img">
                            <img src="images/home-4-5-390x312.jpg" alt="" width="390" height="312"/>
                        </div>
                    </div>
                </div>
            </div>
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