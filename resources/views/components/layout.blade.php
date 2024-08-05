<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Document</title>
</head>

<body>
    <style id='wp-emoji-styles-inline-css' type='text/css'>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='wp-block-library-css'
        href='https://www.sport1tv.hu/wp-includes/css/dist/block-library/style.min.css?ver=6.6' type='text/css'
        media='all' />
    <style id='classic-theme-styles-inline-css' type='text/css'>
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style>
    <style id='global-styles-inline-css' type='text/css'>
        :root {
            --wp--preset--aspect-ratio--square: 1;
            --wp--preset--aspect-ratio--4-3: 4/3;
            --wp--preset--aspect-ratio--3-4: 3/4;
            --wp--preset--aspect-ratio--3-2: 3/2;
            --wp--preset--aspect-ratio--2-3: 2/3;
            --wp--preset--aspect-ratio--16-9: 16/9;
            --wp--preset--aspect-ratio--9-16: 9/16;
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flex {
            display: flex;
        }

        .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        .is-layout-flex> :is(*, div) {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        .is-layout-grid> :is(*, div) {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :root :where(.wp-block-pullquote) {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel='stylesheet' id='post_hit_counter-frontend-css'
        href='https://www.sport1tv.hu/wp-content/plugins/post-hit-counter/assets/css/frontend.css?ver=1.3.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='font-roboto-css'
        href='https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&#038;display=swap'
        type='text/css' media='all' />
    <link rel='stylesheet' id='vendor-css'
        href='https://www.sport1tv.hu/wp-content/themes/sporttv/assets/css/vendor/vendor.min.css?ver=6.6'
        type='text/css' media='all' />
    <link rel='stylesheet' id='style-css'
        href='https://www.sport1tv.hu/wp-content/themes/sporttv/assets/css/style.min.css?ver=6.6' type='text/css'
        media='all' />
    <link rel='stylesheet' id='cookierefresher-css-css'
        href='https://www.sport1tv.hu/wp-content/themes/sporttv/assets/css/cookierefresher.css?ver=6.6' type='text/css'
        media='all' />
    <link rel='stylesheet' id='post_hit_counter-widget-css'
        href='https://www.sport1tv.hu/wp-content/plugins/post-hit-counter/assets/css/widget.css?ver=1.3.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='tablepress-default-css'
        href='https://www.sport1tv.hu/wp-content/plugins/tablepress/css/build/default.css?ver=2.4' type='text/css'
        media='all' />
    <script type="text/javascript"
        src="https://www.sport1tv.hu/wp-content/themes/sporttv/assets/js/cookierefresher.js?ver=6.6"
        id="cookierefresher-js"></script>
    <script type="text/javascript" src="https://www.sport1tv.hu/wp-includes/js/jquery/jquery.min.js?ver=3.7.1"
        id="jquery-core-js"></script>
    <script type="text/javascript" src="https://www.sport1tv.hu/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1"
        id="jquery-migrate-js"></script>
    <script type="text/javascript"
        src="https://www.sport1tv.hu/wp-content/themes/sporttv/assets/js/extra/broken-image.js" id="broken-image-js">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="https://api.w.org/" href="https://www.sport1tv.hu/wp-json/" />
    <link rel="alternate" title="JSON" type="application/json" href="https://www.sport1tv.hu/wp-json/wp/v2/pages/2" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.sport1tv.hu/xmlrpc.php?rsd" />
    <link rel='shortlink' href='https://www.sport1tv.hu/' />
    <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed"
        href="https://www.sport1tv.hu/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.sport1tv.hu%2F" />
    <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed"
        href="https://www.sport1tv.hu/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.sport1tv.hu%2F&#038;format=xml" />

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/script.js') }}"></script>

    <!-- This site is using AdRotate v5.13.2 to display their advertisements - https://ajdg.solutions/ -->
    <!-- AdRotate CSS -->
    <style type="text/css" media="screen">
        .g {
            margin: 0px;
            padding: 0px;
            overflow: hidden;
            line-height: 1;
            zoom: 1;
        }

        .g img {
            height: auto;
        }

        .g-col {
            position: relative;
            float: left;
        }

        .g-col:first-child {
            margin-left: 0;
        }

        .g-col:last-child {
            margin-right: 0;
        }

        footer {
            border-color: #e7e7e7;
        }

        @media only screen and (max-width: 480px) {

            .g-col,
            .g-dyn,
            .g-single {
                width: 100%;
                margin-left: 0;
                margin-right: 0;
            }
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
    <!-- /AdRotate CSS -->

    <nav class="navbar navbar-toggleable-md">

        <div class="mobile-search">
            <a class="nav-link no-underline search" href="#0"><i class="fa fa-search" aria-hidden="true"></i></a>
            <form role="search" method="get" class="searchform" action="https://www.sport1tv.hu/">
                <div class="form-group">
                    <div class="easy-autocomplete" style="width: 100px;"><input type="text"
                            class="form-control search-input" name="s" value="" id="eac-7108" autocomplete="off">
                        <div class="easy-autocomplete-container" id="eac-container-eac-7108">
                            <ul></ul>
                        </div>
                    </div>
                    <input type="submit" class="form-control">
                </div>
            </form>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="stroke s-1"></span>
            <span class="stroke s-2"></span>
            <span class="stroke s-3"></span>
        </button>

        <div class="container">
            <div class="brand-and-categories">
                <a class="navbar-brand" href="https://www.sport1tv.hu">
                    <img class="hidden-md-down" src="https://www.sport1tv.hu/wp-content/uploads/2020/10/logo.png"
                        alt="">


                    <img class="hidden-lg-up mobile-logo"
                        src="https://www.sport1tv.hu/wp-content/uploads/2020/10/mobile-logo.svg" alt="">
                </a>

                <!--  <ul class="categories__wrapper">
        <?php/*
        wp_nav_menu([
            'menu' => 'header_categories',
            'theme_location' => 'header_categories',
            'container' => '',
            'container_id' => '',
            'container_class' => '',
            'menu_id' => false,
            'menu_class' => '',
            'items_wrap' => '%3$s',
            'fallback_cb' => 'bs4navwalker::fallback',
            'walker' => new bs4navwalker()
        ]); */?>
    </ul> -->
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
                    <li class="nav-item p-relative hidden-md-down">
                        <a class="nav-link no-underline search" href="#0">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </a>

                        <form role="search" method="get" class="searchform" action="https://www.sport1tv.hu/">
                            <div class="form-group">
                                <div class="easy-autocomplete" style="width: 24px;"><input type="text"
                                        class="form-control search-input" name="s" value="" id="eac-2989"
                                        autocomplete="off">
                                    <div class="easy-autocomplete-container" id="eac-container-eac-2989">
                                        <ul></ul>
                                    </div>
                                </div>
                                <input type="submit" class="form-control">
                            </div>
                        </form>
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
                    <img class="big-logo img-fluid"
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