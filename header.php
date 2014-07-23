<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <title><?php bloginfo('name'); ?> ｜<?php bloginfo('description'); ?></title>
    <meta name="keywords" content="Empowerment, 環境分析">
    <meta name="description" content="Empowerment（エンパワーメント）は、">
    <link rel="stylesheet" media="all" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
    <!-- Facebook -->
    <meta property="og:title" content="Empowerment（エンパワーメント）- 縁の下から支え続ける環境分析">
    <meta property="og:url" content="">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Empowerment">
    <meta property="og:image" content="">
    <meta property="og:description" content="Empowerment（エンパワーメント）は、">
    <!-- Twitetr Cards -->
<!-- <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@misterspotlight">
    <meta name="twitter:creator" content="@misterspotlight">
    <meta name="twitter:domain" content="HPのドメイン.comなど"> -->
    <!-- Favicon -->
    <!-- <link rel="icon" type="image/png" href=""> -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
    <script>
        (function ($) {
            $(function () {
                $(".slider").bxSlider({
                    useCSS: false,
                    auto: true,
                    autoControls: false,
                    pager: false,
                    mode: 'horizontal',
                    speed: 350,
                    prevText: '&lt;',
                    nextText: '&gt;',
                    pause: 8000,
                    autoHover: true
                });
                $(".bx-prev,.bx-next").wrapAll("<div class='prev-next'></div>");
                $('#scroll').click(function() {
                    $('html, body').animate({scrollTop:0},'slow');
                    return false;
                });
            });
        })(jQuery);
    </script>
<?php wp_head(); ?>
</head>
<body>
    <!-- wrap -->
    <div class="wrap" id="top">
        <!-- haeder -->
        <header>
            <div class="logo">
                <h1 class="t_hide"><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></h1>
            </div>
            <?php 
                wp_nav_menu( array(
                    'theme_location'  => 'gnav', 
                    'container'       => 'nav',
                    'menu_class'      => '',
                    'container_class' => 'g_nav',
                    'items_wrap'      => '<ul>%3$s</ul>',
                    ) );
            ?>
                <!-- <ul>
                    <li class="feature t_hide"><a href="feature.html">３つの特徴<span>Feature</span></a></li>
                    <li class="howto t_hide"><a href="howto.html">ご利用の流れ<span>How to use</span></a></li>
                    <li class="service t_hide"><a href="service.html">サービス案内<span>Service</span></a></li>
                    <li class="company t_hide"><a href="company.html">企業情報<span>Company</span></a></li>
                    <li class="contact t_hide"><a href="contact.html">お問い合わせ<span>Contact</span></a></li>
                </ul> -->
        </header>
        <hr class="sectioner_lb">
        <!-- haeder -->