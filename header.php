<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div
 * id="content">
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mountine-paradise
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta name="yandex-verification" content="ddece02645232790"/>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <meta name="yandex-verification" content="1274b0d41651b1ec"/>
    
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <style>
      html,
      body {
        position: relative;
        height: 100%;
      }

      body {
        background: #eee;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color: #000;
        margin: 0;
        padding: 0;
      }

      .swiper {
        width: 100%;
        height: 100%;
        margin-left: auto;
        margin-right: auto;
      }

      .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        height: calc((100% - 30px) / 2);

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }
    </style>
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:regular,italic,bold,bolditalic" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="https://vk.com/js/api/openapi.js?168"></script>
    <?php wp_head(); ?>
    </head>

<body <?php body_class(); ?>>
<!-- VK Widget -->
<div id="vk_api_transport"></div>
<script type="text/javascript">
    window.vkAsyncInit = function() {
        VK.init({
            apiId: 6727381,
            onlyWidgets: true
        });
    };
    var el = document.createElement("script");
    el.type = "text/javascript";
    el.src = "https://vk.com/js/api/openapi.js?169";
    el.async = true;
    document.getElementById("vk_api_transport").appendChild(el);
</script>
<noscript>
    <img height="1" width="1"
         src="https://www.facebook.com/tr?id=2257498551162720&ev=PageView&noscript=1"/>
</noscript>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe async src="https://www.googletagmanager.com/ns.html?id=GTM-N3TG95Z"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<header id="header" class="head">
    <div class="header-top">
        <div class="container">
            <div class="phone-block">
                <div class="row">
                    <div class="col-md-5">
                        <a href="tel:<?php echo fw_get_db_settings_option('settings_phone'); ?>"
                           class="pull-left"><i class="fa fa-phone"
                                                aria-hidden="true"></i><?php echo fw_get_db_settings_option('settings_phone'); ?>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="mailto:<?php echo fw_get_db_settings_option('settings_adress'); ?>"
                           class="pull-left hidden-xs hidden-sm"><i class="fa fa-envelope"
                                                                    aria-hidden="true"></i><?php echo fw_get_db_settings_option('settings_adress'); ?>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <div class="pull-right">
                            <a href="<?php echo fw_get_db_settings_option('settings_vk_link'); ?>"
                           class="__vk hidden-xs hidden-sm" rel="nofollow noopener"
                           target="_blank"><i class="fa fa-vk" aria-hidden="true"></i></a>
                        <a href="<?php echo fw_get_db_settings_option('settings_vk_link_m'); ?>"
                           class="hidden-md hidden-lg" rel="nofollow noopener"
                           target="_blank"><i class="fa fa-vk" aria-hidden="true"></i></a>
                        <!--<a href="<?php echo fw_get_db_settings_option('settings_inst_link'); ?>"
                           class="__insta hidden-xs hidden-sm" rel="nofollow noopener"
                           target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="<?php echo fw_get_db_settings_option('settings_inst_link_m'); ?>"
                           class="hidden-md hidden-lg" rel="nofollow noopener"
                           target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>-->
                        <a class="__wh" href="https://wa.me/79284724378" rel="nofollow noopener"
                           target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                        <a class="__tg" href="https://t.me/alexmountains" rel="nofollow noopener"
                           target="_blank"><i class="fa fa-telegram" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="attention-header">
        <div class="container">
            <div class="attention-img">
                <a href="<?php echo fw_get_db_settings_option('attention_link'); ?>"><?php echo fw_get_db_settings_option('attention_header'); ?></a>
            </div>
        </div>
    </div>
    <div class="top-line">
        <div class="container-fluid">
            <div class="row">
                
                <div class="col-ie-4 logo-img">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
                        <img src="<?php echo fw_get_db_settings_option('logo_image')['url']; ?>"
                             alt="">
                    </a>
                </div>
                <div class="col-ie-2 hidden-xs hidden-sm">
                    <nav itemscope itemtype="https://schema.org/SiteNavigationElement">
                        <?php $menu = 'home';
                        $headermenu = wp_nav_menu(['theme_location' => $menu,]); ?>
                    </nav>
                </div>
                
                <div class="col-ie-1 hidden-md hidden-lg">
                    <a href="#callback" class="btn btn-default mobile-btn __callb"><i class="fa fa-phone" aria-hidden="true"></i></a>
                </div>
                <div class="col-ie-3 hidden-xs hidden-sm">
                     
                    <div class="header_searchform">
                        <?php get_search_form(); ?>
                    </div>
                </div>
                <div class="col-ie-4 hidden-xs hidden-sm">
                    <a href="#callback" class="btn __callback">Заказать звонок</a>
                </div>
                <div class="col-ie-3 hidden-md hidden-lg mobile-menu">
                   <div class="bgR">
                        <a class="open-button">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

</header>

<div class="mobile-menu-wrap">
    <nav id="my-menu" itemscope itemtype="https://schema.org/SiteNavigationElement">
        <?php $menu = 'home';
        $headermenu = wp_nav_menu(['theme_location' => $menu,]); ?>
        <div class="header_searchform">
            <?php get_search_form(); ?>
        </div>
    </nav>
</div>
