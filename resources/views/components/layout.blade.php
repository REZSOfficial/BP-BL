<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sport TV • Kvíz</title>
</head>

<body>
    <link rel='stylesheet' id='font-roboto-css'
        href='https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&#038;display=swap'
        type='text/css' media='all' />
    <link rel='stylesheet' id='vendor-css'
        href='https://www.sport1tv.hu/wp-content/themes/sporttv/assets/css/vendor/vendor.min.css?ver=6.6'
        type='text/css' media='all' />
    <link rel='stylesheet' id='style-css'
        href='https://www.sport1tv.hu/wp-content/themes/sporttv/assets/css/style.min.css?ver=6.6' type='text/css'
        media='all' />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/script.js') }}"></script>

    <!-- This site is using AdRotate v5.13.2 to display their advertisements - https://ajdg.solutions/ -->
    <!-- AdRotate CSS -->
    <style type="text/css" media="screen">
        footer {
            border-color: #e7e7e7;
        }

        .main {
            margin-top: 76px;
        }

        @media (max-width: 990px) {
            .main {
                margin-top: 0px;
            }
        }
    </style>

    <nav class="navbar navbar-toggleable-md">
        <div class="container">
            <div class="brand-and-categories">
                <a class="navbar-brand" href="https://www.sport1tv.hu">
                    <img class="hidden-md-down" src="https://www.sport1tv.hu/wp-content/uploads/2020/10/logo.png"
                        alt="">


                    <img class="hidden-lg-up mobile-logo"
                        src="https://www.sport1tv.hu/wp-content/uploads/2020/10/mobile-logo.svg" alt="">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav ml-auto">
                    <li id="menu-item-86"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-86 nav-item"><a
                            href="https://www.sport1tv.hu/tv-musor/" class="nav-link">TV-műsor</a></li>
                    <li id="menu-item-87"
                        class="menu-item menu-item-type-post_type_archive menu-item-object-stories menu-item-87 nav-item">
                        <a href="https://www.sport1tv.hu/sztori/" class="nav-link">Sztorik</a>
                    </li>
                    <li id="menu-item-88"
                        class="menu-item menu-item-type-post_type_archive menu-item-object-videos menu-item-88 nav-item">
                        <a href="https://www.sport1tv.hu/video/" class="nav-link">Videók</a>
                    </li>
                    <li id="menu-item-89"
                        class="menu-item menu-item-type-post_type_archive menu-item-object-blogs menu-item-89 nav-item">
                        <a href="https://www.sport1tv.hu/blog/" class="nav-link">Blogok</a>
                    </li>
                    <li id="menu-item-90"
                        class="menu-item menu-item-type-post_type_archive menu-item-object-podcasts menu-item-90 nav-item">
                        <a href="https://www.sport1tv.hu/podcasts/" class="nav-link">Podcastek</a>
                    </li>
                    <li id="menu-item-100891"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-100891 nav-item"><a
                            href="https://amcn-hu.com/sport1tv-klub/?utm_source=Website&amp;utm_medium=AMCNsite&amp;utm_campaign=KlubTab&amp;utm_term=Sport%20TV&amp;utm_content=Tab"
                            class="nav-link">Klub</a>
                    </li>

                    <li class="nav-item hidden-lg-down">
                        <a class="nav-link no-underline pl-0 pr-0" href="https://www.facebook.com/sport1tv/"
                            title="Facebook">
                            <i class="fa fa-facebook border" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="nav-item hidden-lg-down">
                        <a class="nav-link no-underline pl-0 pr-0"
                            href="https://www.youtube.com/channel/UCKDIB5KO0nFdMhMYeOdduhA" title="Youtube">
                            <i class="fa fa-youtube border" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="nav-item hidden-lg-up">
                        <a class="nav-link no-underline pl-0 pr-0 float-left" href="https://www.facebook.com/sport1tv/"
                            title="Facebook">
                            <i class="fa fa-facebook border" aria-hidden="true"></i>
                        </a>
                        <a class="nav-link no-underline pl-0 pr-0 float-left"
                            href="https://www.youtube.com/channel/UCKDIB5KO0nFdMhMYeOdduhA" title="Youtube">
                            <i class="fa fa-youtube border" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="main">
        @yield('content')
    </main>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <img class="img-fluid"
                        src="https://www.sport1tv.hu/wp-content/uploads/2021/09/AMCNI_CNE_Horiz_Wht-300x97.png" alt="">
                </div>
                <div class="col-12">
                    <div class="footer-logos">

                        <div class="logo">
                            <a href="http://ce.amc.com/" target="_blank">
                                <img class="img-fluid"
                                    src="https://www.sport1tv.hu/wp-content/uploads/2018/09/White_AMC_Logo_CMYK.svg"
                                    alt="">
                            </a>
                        </div>
                        <div class="logo">
                            <a href="http://filmcafetv.hu/" target="_blank">
                                <img class="img-fluid"
                                    src="https://www.sport1tv.hu/wp-content/uploads/2018/09/FILMCAFE_logo_turkiz_final.svg"
                                    alt="">
                            </a>
                        </div>
                        <div class="logo">
                            <a href="http://filmmaniatv.hu/" target="_blank">
                                <img class="img-fluid"
                                    src="https://www.sport1tv.hu/wp-content/uploads/2018/09/FILMMANNIA_Logo_WHITE.svg"
                                    alt="">
                            </a>
                        </div>
                        <div class="logo">
                            <a href="http://www.tvpaprika.hu/" target="_blank">
                                <img class="img-fluid"
                                    src="https://www.sport1tv.hu/wp-content/uploads/2021/09/TV-Paprika-Logo_FINAL_alpha_small-300x74.png"
                                    alt="">
                            </a>
                        </div>
                        <div class="logo">
                            <a href="http://www.spektrumtv.hu/" target="_blank">
                                <img class="img-fluid"
                                    src="https://www.sport1tv.hu/wp-content/uploads/2022/05/SPK_logo_color_2k22.svg"
                                    alt="">
                            </a>
                        </div>
                        <div class="logo">
                            <a href="http://www.spektrumhome.hu/" target="_blank">
                                <img class="img-fluid"
                                    src="https://www.sport1tv.hu/wp-content/uploads/2022/05/SPKH_LOGO_2k22_ORANGE.svg"
                                    alt="">
                            </a>
                        </div>
                        <div class="logo">
                            <a href="http://www.minimax.hu/" target="_blank">
                                <img class="img-fluid"
                                    src="https://www.sport1tv.hu/wp-content/uploads/2021/07/minimax_3Dlogo_main_color-300x204.png"
                                    alt="">
                            </a>
                        </div>
                        <div class="logo">
                            <a href="http://www.jimjam.tv/" target="_blank">
                                <img class="img-fluid"
                                    src="https://www.sport1tv.hu/wp-content/uploads/2019/06/JimJam-_logo_new3-300x76.png"
                                    alt="">
                            </a>
                        </div>

                    </div>
                </div>


                <div class="col-12 text-center">
                    <p class="copyright"> </p>
                </div>
                <div class="col-12 text-center">
                    <ul class="legal-docs">
                        <li><a target="_blank"
                                href="https://www.sport1tv.hu/front-page/felhasznalasi-feltetelek/">Felhasználási
                                feltételek</a>
                        </li>


                        <li class="separator hidden-xs-down">|</li>
                        <li><a target="_blank"
                                href="https://www.sport1tv.hu/visszaeles-bejelentes">Visszaélés-bejelentés</a>
                        </li>

                        <li class="separator hidden-xs-down">|</li>
                        <li><a target="_blank" href="https://www.sport1tv.hu/front-page/adatvedelem/">Adatvédelem és
                                adatkezelés</a>
                        </li>

                        <li class="separator hidden-xs-down">|</li>
                        <li>
                            <a target="_blank" href="https://www.sport1tv.hu/front-page/impresszum/">Impresszum</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>