<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mountine-paradise
 */
?>
</div><!-- #content -->
<div class="footer_image mouse-parallax">
    <div class="elementor-background-overlay"></div>
    <img src="<?php echo fw_get_db_settings_option('footer_image')['url']; ?>" alt="">
    <div class="cloud_footer mouse-parallax-bg"></div>
</div>

<footer id="footer_main">
    <div>
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-3">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
                        <img src="https://xn----8sbhycugqd1i.xn--p1ai/wp-content/uploads/2017/10/лого-горы-4.png" alt="">
                    </a>
                    <div class="footer-contact">

                        <a href="tel:<?php echo fw_get_db_settings_option('settings_phone'); ?>" class="contact"><i
                                    class="fa fa-phone"
                                    aria-hidden="true"></i><?php echo fw_get_db_settings_option('settings_phone'); ?>
                        </a>
                        <a href="mailto:<?php echo fw_get_db_settings_option('settings_adress'); ?>" class="contact"><i
                                    class="fa fa-envelope"
                                    aria-hidden="true"></i><?php echo fw_get_db_settings_option('settings_adress'); ?>
                        </a>

                        <div class="__sc">
                            <a class="__vk"
                               href="<?php echo fw_get_db_settings_option('settings_vk_link'); ?>"
                               rel="nofollow noopener"
                               target="_blank"><i class="fa fa-vk" aria-hidden="true"></i></a>
                            <!--<a class="__insta hidden-xs hidden-sm"
                               href="<?php echo fw_get_db_settings_option('settings_inst_link'); ?>"
                               rel="nofollow noopener"
                               target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>-->
                            <!--<a href="<?php echo fw_get_db_settings_option('settings_inst_link_m'); ?>"
                               class="hidden-md hidden-lg" rel="nofollow noopener"
                               target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>-->
                            <a class="__wh" href="https://wa.me/79284724378" rel="nofollow noopener"
                               target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                            <a class="__tg" href="https://t.me/alexmountains" rel="nofollow noopener"
                               target="_blank"><i class="fa fa-telegram" aria-hidden="true"></i></a>
                        </div>
                    
                    <a href="#callback" class="btn __callback">Заказать звонок</a>
                    <a class="__polkf" href="https://горный-рай.рф/%d0%bf%d0%be%d0%bb%d0%b8%d1%82%d0%b8%d0%ba%d0%b0-%d0%ba%d0%be%d0%bd%d1%84%d0%b8%d0%b4%d0%b5%d0%bd%d1%86%d0%b8%d0%b0%d0%bb%d1%8c%d0%bd%d0%be%d1%81%d1%82%d0%b8/" class="__menu-item">Политика конфиденциальности</a>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-2">
                    <div class="h4">Меню</div>
                    <div class="line"></div>
                    <nav>
                        <?php $menu = 'footer1';
                        $headermenu = wp_nav_menu(array('theme_location' => $menu,)); ?>
                    </nav>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-2">
                    <div class="h4">Регионы походов</div>
                    <div class="line"></div>
                    <nav>
                        <?php $menu = 'footer2';
                        $headermenu = wp_nav_menu(array('theme_location' => $menu,)); ?>
                    </nav>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-2">
                    <div class="h4">Типы походов</div>
                    <div class="line"></div>
                    <nav>
                        <?php $menu = 'footer3';
                        $headermenu = wp_nav_menu(array('theme_location' => $menu,)); ?>
                    </nav>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div id="vk_groups"> </div>
                    <script type="text/javascript">
                        VK.Widgets.Group("vk_groups", {mode: 3, width: "262", height: "400"}, 97620157);
                    </script>
                   

                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-md-offset-3 d-flex __paym-logo">
                    <span>Прием платежей через:</span> <img src="https://xn----8sbhycugqd1i.xn--p1ai/wp-content/uploads/2021/03/robokassa.svg">
                </div>
                <div class="col-xs-12">
                    <div class="mountait-copy">© <?php echo date("Y"); ?> | Путешествие в Горный рай. Все права
                        Защищены
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>

<div class="hidden">
    <form class="popup-form popup-form-footer callback zoom-anim-dialog contact frm-w-30" id="callback">

        <h2>Заказать обратный звонок</h2>

        <!-- Hidden Required Fields -->
        <input type="hidden" name="project_name" value="Горный рай">
        <input type="hidden" name="admin_email" value="<?php echo fw_get_db_settings_option('settings_adress'); ?>">
        <input type="hidden" name="form_subject" value="Заявка с сайта">
        <!-- END Hidden Required Fields -->
        <div class="row">
            <div class="col-md-12">
                <p>Имя:</p>
                <label>
                    <input type="text" name="Имя" placeholder="Введите ваше имя" required>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p>Телефон:</p>
                <label>
                    <input type="text" name="Телефон" placeholder="Введите ваш телефон" required>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <p>Сообщение:</p>
                <textarea type="text" name="Сообщение" rows="7" placeholder="Введите ваше сообщение"></textarea>
            </div>
        </div>
        <div class="ag__info">
            <p class="__fz_small d-flex"> 
                <input type="checkbox" value="false" id="customRadio1" class="customRadio1" style="display:none;">
                <label id="clickforcr1" class="clickforcr1" for="customRadio1">
                    <span class="svgcall mt-0">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"> 
                            <circle cx="10" cy="10" r="9" fill="white" stroke="#CFCFCF" stroke-width="2"></circle>
                        </svg>
                    </span>
                    Я даю <a href="https://горный-рай.рф/%d1%81%d0%be%d0%b3%d0%bb%d0%b0%d1%81%d0%b8%d0%b5-%d0%bd%d0%b0-%d0%be%d0%b1%d1%80%d0%b0%d0%b1%d0%be%d1%82%d0%ba%d1%83-%d0%bf%d0%b5%d1%80%d1%81%d0%be%d0%bd%d0%b0%d0%bb%d1%8c%d0%bd%d1%8b%d1%85-%d0%b4/" target="_blank">согласие</a> на обработку персональных данных в соответствии с <a href="https://горный-рай.рф/%d0%bf%d0%be%d0%bb%d0%b8%d1%82%d0%b8%d0%ba%d0%b0-%d0%ba%d0%be%d0%bd%d1%84%d0%b8%d0%b4%d0%b5%d0%bd%d1%86%d0%b8%d0%b0%d0%bb%d1%8c%d0%bd%d0%be%d1%81%d1%82%d0%b8/" target="_blank">политикой конфиденциальности</a>
                </label>
            </p>
            <div id="pnlTest" class="pnlTest">Пожалуйста, отметьте данное поле</div>
        </div>
        
        <button class="btn btnf btnSend __callback" disabled>Отправить</button>
        <div class="success">Ваша заявка успешно отправлена</div>
     
        <!-- <p class="pol_conf">Я даю <a href="https://горный-рай.рф/%d1%81%d0%be%d0%b3%d0%bb%d0%b0%d1%81%d0%b8%d0%b5-%d0%bd%d0%b0-%d0%be%d0%b1%d1%80%d0%b0%d0%b1%d0%be%d1%82%d0%ba%d1%83-%d0%bf%d0%b5%d1%80%d1%81%d0%be%d0%bd%d0%b0%d0%bb%d1%8c%d0%bd%d1%8b%d1%85-%d0%b4/" target="_blank">согласие</a> на обработку персональных данных в соответствии с <a href="https://горный-рай.рф/%d0%bf%d0%be%d0%bb%d0%b8%d1%82%d0%b8%d0%ba%d0%b0-%d0%ba%d0%be%d0%bd%d1%84%d0%b8%d0%b4%d0%b5%d0%bd%d1%86%d0%b8%d0%b0%d0%bb%d1%8c%d0%bd%d0%be%d1%81%d1%82%d0%b8/" target="_blank">политикой конфиденциальности</a></p> -->

    </form>
</div>

<?php wp_footer(); ?>


<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!--script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 2,
      slidesPerColumn: 2,
      spaceBetween: 10,
        navigation: {
         nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
        
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
</script-->
<script>
      var swiper = new Swiper(".swiper-container", {
        slidesPerView: 2,
        grid: {
          rows: 2,
        },
        spaceBetween: 10,
		  navigation: {
         nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });
    </script>
<script>
    var sticky = new Sticky('.__regf');
    /*$('.mainsler').slick({
dots: true,
arrows: false,
/*prevArrow: '<div class="prev"></div>',
nextArrow: '<div class="next"></div>',*/
    /* infinite: true,
       autoplay: true,
     autoplaySpeed: 6000,
     speed: 300,
     slidesToShow: 1,
     slidesToScroll: 1,
   infinite: true,
     responsive: [
       {
         breakpoint: 1024,
         settings: {
           slidesToShow: 1,
           slidesToScroll: 1,
           infinite: true,
           dots: false
         }
       },
       {
         breakpoint: 768,
         settings: {
           slidesToShow: 1,
           dots: false,
           slidesToScroll: 1
         }
       },
       {
         breakpoint: 480,
         settings: {
           slidesToShow: 1,
           dots: false,
           slidesToScroll: 1
         }
       }
     ]
   });*/


    $('.category-wrp').slick({
        dots: false,

        prevArrow: '<div class="prev"></div>',
        nextArrow: '<div class="next"></div>',
        infinite: false,
        speed: 300,
        slidesToShow: 5,
        slidesToScroll: 1,
        infinite: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 4,
                    dots: false,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    dots: false,
                    slidesToScroll: 1
                }
            }
        ]
    });
    $('.type-wrp').slick({
        dots: false,
        prevArrow: '<div class="prev"></div>',
        nextArrow: '<div class="next"></div>',
        //infinite: false,
        speed: 300,
        slidesToShow: 5,
        slidesToScroll: 1,
        infinite: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false,
                    rows: 1,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 4,
                    dots: false,
                    slidesToScroll: 2,
                    rows: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    rows: 2,
                    slidesPerRow: 1,
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
        ]
    });

     $('.type-wrapin').slick({
        dots: false,

        prevArrow: '<div class="prev"></div>',
        nextArrow: '<div class="next"></div>',
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    dots: false,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    dots: false,
                    slidesToScroll: 1
                }
            }
        ]
    });
    $('.gridt').slick({
        dots: false,

        prevArrow: '<div class="prev"></div>',
        nextArrow: '<div class="next"></div>',
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    dots: false,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    dots: false,
                    slidesToScroll: 1
                }
            }
        ]
    });
    
    $('.note-wrap-main').slick({
        dots: false,

        prevArrow: '<div class="prev"></div>',
        nextArrow: '<div class="next"></div>',
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    dots: false,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    dots: false,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.people-wrp').slick({
        dots: false,

        prevArrow: '<div class="prev"></div>',
        nextArrow: '<div class="next"></div>',
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    dots: false,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    dots: false,
                    slidesToScroll: 1
                }
            }
        ]
    });
    $('.blog-slide').slick({
        dots: false,

        prevArrow: '<div class="prev"></div>',
        nextArrow: '<div class="next"></div>',
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    dots: false,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    dots: false,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.note-wrp').slick({
        dots: false,

        prevArrow: '<div class="prev"></div>',
        nextArrow: '<div class="next"></div>',
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    dots: false,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    dots: false,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.relate').slick({
        dots: false,

        prevArrow: '<div class="prev"></div>',
        nextArrow: '<div class="next"></div>',
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    dots: false,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    dots: false,
                    slidesToScroll: 1
                }
            }
        ]
    });
    $('.grid2').slick({
        dots: false,

        prevArrow: '<div class="prev"></div>',
        nextArrow: '<div class="next"></div>',
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    dots: false,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    dots: false,
                    slidesToScroll: 1
                }
            }
        ]
    });
    // $('.type-wrp').slick({
    //     dots: false,
    //     prevArrow: '<div class="prev"></div>',
    //     nextArrow: '<div class="next"></div>',
    //     infinite: false,
    //     speed: 300,
    //     slidesToShow: 6,
    //     slidesToScroll: 1,
    //     infinite: true,
    //     responsive: [
    //         {
    //             breakpoint: 1024,
    //             settings: {
    //                 slidesToShow: 4,
    //                 slidesToScroll: 1,
    //                 infinite: true,
    //                 dots: false
    //             }
    //         },
    //         {
    //             breakpoint: 768,
    //             settings: {
    //                 slidesToShow: 2,
    //                 dots: false,
    //                 slidesToScroll: 2
    //             }
    //         },
    //         {
    //             breakpoint: 480,
    //             settings: {
    //                 slidesToShow: 1,
    //                 dots: false,
    //                 slidesToScroll: 1
    //             }
    //         }
    //     ]
    // });

    $('.cat-wrap').slick({
        dots: false,
        prevArrow: '<div class="prev"></div>',
        nextArrow: '<div class="next"></div>',
        infinite: false,
        speed: 300,
        slidesToShow: 5,
        slidesToScroll: 1,
        infinite: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    dots: false,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    dots: false,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.blog-sl').slick({
        dots: false,
        prevArrow: '<div class="prev"></div>',
        nextArrow: '<div class="next"></div>',
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    dots: false,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    dots: false,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.note-wrp-main').slick({
        dots: false,
        prevArrow: '<div class="prev"></div>',
        nextArrow: '<div class="next"></div>',
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    dots: false,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    dots: false,
                    slidesToScroll: 1
                }
            }
        ]
    });
</script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function () {
            try {
                w.yaCounter46900290 = new Ya.Metrika({
                    id: 46900290,
                    clickmap: true,
                    trackLinks: true,
                    accurateTrackBounce: true,
                    webvisor: true
                });
            } catch (e) {
            }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () {
                n.parentNode.insertBefore(s, n);
            };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/46900290" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
<!-- /Yandex.Metrika counter -->
<!-- Google Tag Manager -->
<script async>(function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start':
                new Date().getTime(), event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-N3TG95Z');</script>
<!-- End Google Tag Manager -->
<!-- Facebook Pixel Code -->
<script async>
    !function (f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function () {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = true;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '2257498551162720');
    fbq('track', 'PageView');
</script>
<!-- End Facebook Pixel Code -->
<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
    (function () {
        document.jivositeloaded = 0;
        var widget_id = '3uG0fYZmMg';
        var d = document;
        var w = window;

        function l() {
            var s = d.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = '//code.jivosite.com/script/widget/' + widget_id;
            var ss = document.getElementsByTagName('script')[0];
            ss.parentNode.insertBefore(s, ss);
        }//эта строка обычная для кода JivoSite
        function zy() {
            //удаляем EventListeners
            if (w.detachEvent) {//поддержка IE8
                w.detachEvent('onscroll', zy);
                w.detachEvent('onmousemove', zy);
                w.detachEvent('ontouchmove', zy);
                w.detachEvent('onresize', zy);
            } else {
                w.removeEventListener("scroll", zy, false);
                w.removeEventListener("mousemove", zy, false);
                w.removeEventListener("touchmove", zy, false);
                w.removeEventListener("resize", zy, false);
            }
            //запускаем функцию загрузки JivoSite
            if (d.readyState == 'complete') {
                l();
            } else {
                if (w.attachEvent) {
                    w.attachEvent('onload', l);
                } else {
                    w.addEventListener('load', l, false);
                }
            }
            //Устанавливаем куку по которой отличаем первый и второй хит
            var cookie_date = new Date();
            cookie_date.setTime(cookie_date.getTime() + 60 * 60 * 28 * 1000); //24 часа для Москвы
            d.cookie = "JivoSiteLoaded=1;path=/;expires=" + cookie_date.toGMTString();
        }

        if (d.cookie.search('JivoSiteLoaded') < 0) {//проверяем, первый ли это визит на наш сайт, если да, то назначаем EventListeners на события прокрутки, изменения размера окна браузера и скроллинга на ПК и мобильных устройствах, для отложенной загрузке JivoSite.
            if (w.attachEvent) {// поддержка IE8
                w.attachEvent('onscroll', zy);
                w.attachEvent('onmousemove', zy);
                w.attachEvent('ontouchmove', zy);
                w.attachEvent('onresize', zy);
            } else {
                w.addEventListener("scroll", zy, {capture: false, passive: true});
                w.addEventListener("mousemove", zy, {capture: false, passive: true});
                w.addEventListener("touchmove", zy, {capture: false, passive: true});
                w.addEventListener("resize", zy, {capture: false, passive: true});
            }
        } else {
            zy();
        }
    })();</script>
<!-- {/literal} END JIVOSITE CODE -->

<!--[if lte IE 9]>
<script async src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->

<script>

</script>
<script src="//cdn.callibri.ru/callibri.js" type="text/javascript" charset="utf-8"></script> 
</body>
</html>