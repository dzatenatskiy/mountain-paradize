///Genre Ajax Filtering


let bg = document.querySelector('.mouse-parallax-bg');
window.addEventListener('mousemove', function(e) {
    let x = e.clientX / window.innerWidth;
    let y = e.clientY / window.innerHeight;  
    bg.style.transform = 'translate(-' + x * 50 + 'px, -' + y * 50 + 'px)';
});
$( document ).ready(function() {
    var $menu = $(".head");
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100 && $menu.hasClass("head")) {
            $menu.removeClass("head").addClass("fixed");
        } else if ($(this).scrollTop() <= 100 && $menu.hasClass("fixed")) {
            $menu.removeClass("fixed").addClass("head");
        }
    }); 
    $(".elementor-inline-item").on("click", "a", function(event) {
    event.preventDefault();
    var id = $(this).attr('href'),
        top = $(id).offset().top - 150 + "px";
    $('body,html').animate({
        scrollTop: top
    }, 1500);
});

$(".videoinsta .PrimaryCTA a").text(function(index, text) { 
    return text.replace('View more on Instagram', 'Посмотреть'); 
});
});
jQuery(function ($) {
    $(function () {
        
           
        var max = $('div.max').data('max');
        var min = $('div.min').data('min');

        $("#slider_price").slider({
            range: true,
            min: min,
            max: max,
            values: [min, max],
            step: 100,
            slide: function (event, ui) {
                //Поле минимального значения
                $("#price").val($("#slider_price").slider("values", 0));
                //Поле максимального значения
                $("#price2").val($("#slider_price").slider("values", 1));
            }
        });
        //Записываем значения ползунков в момент загрузки страницы
        //То есть значения по умолчанию
        $("#price ").val($("#slider_price").slider("values", 0));
        $("#price2").val($("#slider_price").slider("values", 1));

    });

    var mh1 = 0;
    /*$(".blog-wrap").each(function () {
        var h_block1 = parseInt($(this).height());
        if(h_block1 > mh1) {
          mh1 = h_block1;
        };
    });
    $(".blog-wrap").height(mh1);*/
    $('.form-service-select').niceSelect();
    $('.service-main-nice').niceSelect();
    $('.service-side-nice').niceSelect();
    /*var previousScroll = 0,
    headerOrgOffset = $('#header').offset().top;
    $('#header-wrap').height($('#header').height());
    $(window).scroll(function() {
        var currentScroll = $(this).scrollTop();
        if(currentScroll > headerOrgOffset) {
            if (currentScroll > previousScroll) {
                $('#header').fadeOut();
            } else {
                $('#header').fadeIn();
                $('#header').addClass('fixed');
            }
        } else {
             $('#header').removeClass('fixed');   
        }
        previousScroll = currentScroll;
    });*/
    $('.open-button').click(function () {
        $(this).toggleClass('open');
    });
    $('#my-menu').find('.menu-item-has-children').append('<i class="fa fa-plus-square"></i>');
    $('#my-menu').find('.menu-item-has-children').append('<i class="fa fa-minus-square"></i>');
    $('.mobile-menu').click(function () {
        $('#my-menu').slideToggle(300);
    });
    $('.menu-item-has-children>.fa').click(function () {
        $(this).parent().find('.sub-menu').slideToggle(300);
        $(this).parent().toggleClass('sub-open');
    });
    $('a[href="#service_aside_table"]').click(function () {
        var day = $(this).data('day');
        $('.dateday').val(day);
        var service = $(this).data('service');
        $('.dateservice').val(service);
    });
    //E-mail Ajax Send
    //Documentation & Example: https://github.com/agragregra/uniMail
    $("form.sidebar-form").submit(function () { //Change
        var th = $(this);
        var day = $('.dateday').val();
        var service = $('.dateservice').val();
        $.ajax({
            type: "POST",
            url: "https://xn----8sbhycugqd1i.xn--p1ai/wp-content/themes/mountine-paradise/mail.php", //Change
            data: th.serialize()
        }).done(function () {
            $('.success').addClass('success-done');
            setTimeout(function () {
                // Done Functions
                window.location.href = "https://xn----8sbhycugqd1i.xn--p1ai/%d1%81%d0%bf%d0%b0%d1%81%d0%b8%d0%b1%d0%be-%d0%b7%d0%b0-%d0%b7%d0%b0%d1%8f%d0%b2%d0%ba%d1%83/"
            }, 1000);
        });
        return false;
    });

    $("form.popup-form").submit(function () { //Change
        var th = $(this);
        var day = $('.dateday').val();
        var service = $('.dateservice').val();
        $.ajax({
            type: "POST",
            url: "https://xn----8sbhycugqd1i.xn--p1ai/wp-content/themes/mountine-paradise/mail.php", //Change
            data: th.serialize()
        }).done(function () {
            $('.success').addClass('success-done');
            setTimeout(function () {
                // Done Functions
                window.location.href = "https://xn----8sbhycugqd1i.xn--p1ai/%d1%81%d0%bf%d0%b0%d1%81%d0%b8%d0%b1%d0%be-%d0%b7%d0%b0-%d0%b7%d0%b0%d1%8f%d0%b2%d0%ba%d1%83/"
            }, 1000);
        });
        return false;
    });

    $(".success_form").submit(function () { //Change
        var th = $(this);
        var day = $('.dateday').val();
        var service = $('.dateservice').val();
        $.ajax({
            type: "POST",
            url: "https://xn----8sbhycugqd1i.xn--p1ai/wp-content/themes/mountine-paradise/mail.php", //Change
            data: th.serialize()
        }).done(function () {
            $('.success').addClass('success-done');
            setTimeout(function () {
                // Done Functions
                setInterval('location.reload()', 1000);
            }, 1000);
        });
        return false;
    });
    /*
        headerOrgOffset
    var owl = $('.mainslider')
    owl.owlCarousel({
        loop:true,
        nav:false,
        items:1,
        navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
        autoplay:true,
        autoplayTimeout:4000,
        autoplayHoverPause:true
    })
    */
    var review = $('.review-slider');
    review.owlCarousel({
        loop: true,
        items: 4,
        margin: 10,
        nav: true,
        navText: ["<img src='https://xn--d1acvi.xn----8sbhycugqd1i.xn--p1ai/wp-content/uploads/2021/01/prev.svg'>", "<img src='/wp-content/uploads/2021/01/next.svg'>"],
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
            },
            480: {
                items: 2,
            },
            768: {
                items: 2,
            },
            992: {
                items: 4,
            }
        }
    })
    /*
    var blogslider = $('.blog-slider');
    blogslider.owlCarousel({
        loop:true,
        margin:30,
        nav:true,
        dots: true,
        navText:["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
        autoplay:true,
        autoplayTimeout:10000,
        autoplayHoverPause:true,
        responsive : {
          0 : {
            items:1,
            stagePadding: 40,
            center:true
          },
          480 : {
            items:1,
            stagePadding: 40,
            center:true
          },
          768 : {
            items:4,
            stagePadding: 40,
            center:true
          },
          992 : {
            items:4,
          }
        }
    })
    
    var noteslider = $('.note-wrap');
    noteslider.owlCarousel({
        loop: true,
        margin: 30,
        nav: true,
        navText: ["<img src='/wp-content/uploads/2021/01/prev.svg'>", "<img src='/wp-content/uploads/2021/01/next.svg'>"],
        autoplay: true,
        autoplayTimeout: 10000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
                stagePadding: 40,
                center: true
            },
            480: {
                items: 1,
                stagePadding: 40,
                center: true
            },
            768: {
                items: 2,
                stagePadding: 40,
                center: true
            },
            992: {
                items: 4,
            }
        }
    })*/
    /*
    var noteslidermain = $('.note-wrap-main');
    noteslidermain.owlCarousel({
        loop:true,
        margin:30,
        nav:true,
        navText:["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
        autoplay:true,
        autoplayTimeout:4000,
        autoplayHoverPause:true,
        responsive : {
          0 : {
            items:1,
            stagePadding: 40,
            center:true
          },
          480 : {
            items:1,
            stagePadding: 40,
            center:true
          },
          768 : {
            items:2,
            stagePadding: 40,
            center:true
          },
          992 : {
            items:4,
          },
          1200 : {
            items:4,
          }
        }
    })*/
    /*
var grid = $('.grid');
grid.owlCarousel({
    items:4,
    loop:true,
    margin:30,
    nav:false,
    dots: true,
    navText:["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
    autoplay:true,
    autoplayTimeout:10000,
    autoplayHoverPause:true,
     responsive : {
      0 : {
        items:1,
        stagePadding: 40,
        center:true
      },
      480 : {
        items:1,
        stagePadding: 40,
        center:true
      },
      768 : {
        items:3,
        stagePadding: 40,
        center:true
      },
      992 : {
        items:4,
        stagePadding: 40,
        center:true
      },
    }
})
*/
    var related = $('.related');
    related.owlCarousel({
        loop: true,
        margin: 30,
        nav: true,
        navText: ["<img src='/wp-content/uploads/2021/01/prev.svg'>", "<img src='/wp-content/uploads/2021/01/next.svg'>"],
        autoplay: true,
        autoplayTimeout: 10000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
                stagePadding: 40,
                center: true
            },
            480: {
                items: 1,
                stagePadding: 40,
                center: true
            },
            768: {
                items: 2,
                stagePadding: 40,
                center: true
            },
            992: {
                items: 3,
            },
            1200: {
                items: 4,
            }
        }
    })

// var cat = $('.category-wrap');
// cat.owlCarousel({
//     loop:true,
//     margin:30,
//     nav:true,
//     navText:["<img src='/wp-content/uploads/2021/01/prev.svg'>","<img src='/wp-content/uploads/2021/01/next.svg'>"],
//     responsive : {
//       0 : {
//         items:1,
//       },
//       480 : {
//         items:2,
//       },
//       768 : {
//         items:4,
//       },
//       992 : {
//         items:4,
//       },
//       1200 : {
//         items:5,
//       }
//     }
// })

// var type = $('.type-wrap');
// type.owlCarousel({
//     loop:true,
//     margin:30,
//     nav:true,
//     navText:["<img src='/wp-content/uploads/2021/01/prev.svg'>","<img src='/wp-content/uploads/2021/01/next.svg'>"],
//     responsive : {
//       0 : {
//         items:1,
//       },
//       480 : {
//         items:2,
//       },
//       768 : {
//         items:4,
//       },
//       992 : {
//         items:5,
//       },
//       1200 : {
//         items:5,
//       }
//     }
// })

    var type = $('.people-wrap');
    type.owlCarousel({
        loop: true,
        margin: 30,
        nav: true,
        navText: ["<img src='/wp-content/uploads/2021/01/prev.svg'>", "<img src='/wp-content/uploads/2021/01/next.svg'>"],
        responsive: {
            0: {
                items: 1,
            },
            480: {
                items: 2,
            },
            768: {
                items: 3,
            },
            992: {
                items: 4,
            },
            1200: {
                items: 4,
            }
        }
    })

    var type = $('.partners2');
    type.owlCarousel({
        loop: true,
        nav: true,
        margin: 30,
        navText: ["<img src='/wp-content/uploads/2021/01/prev.svg'>", "<img src='/wp-content/uploads/2021/01/next.svg'>"],
        responsive: {
            0: {
                items: 3,
            },
            480: {
                items: 3,
            },
            768: {
                items: 3,
            },
            992: {
                items: 3,
            },
            1200: {
                items: 3,
            }
        }
    })


    var mh1 = 0;
    $(".people-block").each(function () {
        var h_block1 = parseInt($(this).height());
        if (h_block1 > mh1) {
            mh1 = h_block1;
        }
        ;
    });
    $(".people-block").height(mh1);

    var catid = $("div.cat-gallery").data('catid');
    $(".cat-id-" + catid).addClass("cat-active");

    var typeid = $("div.type-gallery").data('typeid');
    $(".type-id-" + typeid).addClass("cat-active");


    $('a[href="#callback"]').magnificPopup({
        type: 'inline',

        fixedContentPos: false,
        fixedBgPos: true,

        overflowY: 'auto',

        closeBtnInside: true,
        preloader: false,

        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-slide-bottom'
    });

    $('a[href="#contactcall"]').magnificPopup({
        type: 'inline',

        fixedContentPos: false,
        fixedBgPos: true,

        overflowY: 'auto',

        closeBtnInside: true,
        preloader: false,

        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-slide-bottom'
    });

    $('a[href="#service_aside_table"]').magnificPopup({
        type: 'inline',

        fixedContentPos: false,
        fixedBgPos: true,

        overflowY: 'auto',

        closeBtnInside: true,
        preloader: false,

        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-slide-bottom'
    });

    $('a[href*=".jpg"]:not(.modula-item-link), a[href*=".jpeg"]:not(.modula-item-link), a[href*=".png"]:not(.modula-item-link), a[href*=".gif"]:not(.modula-item-link)').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        mainClass: 'mfp-img-mobile',
        image: {
            verticalFit: true
        },
        gallery: {
            enabled: true
        }
    });

    $('.gallery_item_img').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        mainClass: 'mfp-img-mobile',
        image: {
            verticalFit: true
        },
        gallery: {
            enabled: true
        }
    });
    $('.imgsearch').click(function () {
        $('.searchform input').removeClass('showInput');
        $(".searchform input").addClass('showInput');
    });
    $('ul.tabs li:first-child').addClass('current');
    $('ul.tabs li').click(function () {
        var tab = $(this).data('tab');

        $('.tab-container').removeClass('current');
        $('ul.tabs li').removeClass('current');
    
        $(this).addClass('current');
        $("#" + tab).addClass('current');
    })

    $('.tabs-link').click(function () {
        var tab = $(this).data('tab');


        $('.tab-container').removeClass('current');
        $('ul.tabs li').removeClass('current');

        $(this).addClass('current');
        $("#" + tab).addClass('current');
    })

    $('.des-btn').click(function () {
        var desTab = $(this).data('des');
        $('.active-des').removeClass('active-des');
        $('.des-btn.active').removeClass('active');
        $(this).addClass('active');

        $('.des').each(function () {
            desId = $(this).attr('id');
            if (desTab === desId) {
                $(this).addClass('active-des');
            } else {
                $(this).removeClass('active-des');
            }
        });

    })


    if (window.location.hash == "#718") {
        $('div#718').addClass('current');
    } else {
        $('div#422').addClass('current');
        $('.d422').addClass('current');
        $('.d422').find('div#422').addClass('current');
    }

//$("#menu-home-1").find(".menu-item-49>a").html("Отчеты о <br> походах");
//$("#menu-home-2").find(".menu-item-49>a").html("Отчеты о <br> походах");


    $(function () {
        var $content = $('.partners-masonry');
        $content.imagesLoaded(function () {
            $content.masonry({
                itemSelector: '.col-xs-6'
            });
        });
    });

    /**
     * Кнопка наверх на jQuery.
     */
    $('body').append('<style>\
    .scrollTop{\
      display:none; z-index:9999; position:fixed; bottom:0; padding:1em 1em; right:30px; border-radius:.2em;\
      background:rgba(0,0,0,0.4); color:#fff;\
    }\
    .scrollTop:hover{ background:rgba(0,0,0,0.6); color:#fff; text-decoration:none; }\
    .scrollTop:before{ content:"▲"; /* ▲ ▴ △ ▵ ⏫ ⏶ ⧋ */ }\
  </style>');

    var speed = 500,
        $scrollTop = $('<a href="#" class="scrollTop"></a>').appendTo('body');

    $scrollTop.click(function (e) {
        e.preventDefault();

        $('html:not(:animated),body:not(:animated)').animate({scrollTop: 0}, speed);
    });

    //появление
    function show_scrollTop() {
        ($(window).scrollTop() > 300) ? $scrollTop.stop().fadeIn(600) : $scrollTop.stop().fadeOut(600);
    }

    $(window).scroll(function () {
        show_scrollTop();
    });
    show_scrollTop();

    $("#content-slider").lightSlider({
        auto: true,
        loop: true,
        vertical: true,
        pauseOnHover: true,
        item: 3,
        verticalHeight: 670
    });

    $('.form-service-select').change(function () {
        $('.form-data').html("");
        var postid = $(this).find(':selected').data('id');
        var ajax_url = ajax_genre_params.ajax_url;
        console.log(postid);
        $.ajax({
            url: ajax_url,
            type: "POST",
            data: {
                action: 'formajax',
                formid: postid
            },
            success: function (data) {
                $('.form-data').append(data);
            }
        });
    });

    $(".menu-item-2237").before("<p class='menu-h'>Типы походов</p>");
    $(".menu-item-2231").before("<p class='menu-h'>Регионы походов</p>");


    $(document).on('click', '.diff', function () {
        $(this).find(".diff-descr").toggleClass("pr-active");
    });

    $(document).mouseup(function (e) {
        var container = $(".diff");
        if (container.has(e.target).length === 0) {
            $(this).find(".diff-descr").removeClass("pr-active");
        }
    });

    $(document).on('click', '.service-first-select>p', function () {
        $(".service-select").toggleClass("service-active");
    });

    $(document).on('change', '.service-n-select>select', function () {
        var selectedPrice = $(this).children("option:selected").val();
        var priceid = $(this).data('priceid');
        $(".price-id-" + priceid).html(selectedPrice);
    });

    $('.raspis-seat').click(function () {
        $(this).find(".raspis-block").addClass('raspis-show');
    });


    $(document).mouseup(function (e) {
        var div = $(".raspis-block"); // тут указываем ID элемента
        if (!div.is(e.target) // если клик был не по нашему блоку
            && div.has(e.target).length === 0) { // и не по его дочерним элементам
            div.removeClass('raspis-show'); // скрываем его
        }
    });
/*
    $('.text-show').click(function () {
        $(this).toggleClass('text-show-1');
        $('.text-hid').toggleClass('text-hide-1');
        $('.xpandable-block').css('height', 'auto');
    });

    $('.text-hid').click(function () {
        $(this).toggleClass('text-hide-1');
        $('.text-show').toggleClass('text-show-1');
        $('.xpandable-block').css('height', '170px');
    });
*/
    $('.tab-link>span').click(function () {
        $(this).parent().toggleClass('current');
        $(this).parent().find(".tab-container").toggleClass('current');
    });
    var fs = $('.flexslider'),
        dataItem = 2,
        item = fs.find('.ms-image');

    for (var i = 0; i < item.length; i+=dataItem) {
        item.slice(i, i+dataItem).wrapAll('<li class="items"></li>');
    }
/*
    $(window).load(function() {
        fs.flexslider({
            selector: '.slides > .ms-image',
            animation: "slide",
            animationLoop: false,
            directionNav: false,
            slideshow: false,
            smoothHeight: true,
            itemMargin: 0,
            minItems: 1,
            maxItems: 1
        });
    });*/
});

jQuery( function($){
    $("#phone").mask("+7(999) 999-9999");
    $("#phone1").mask("+7(999) 999-9999");
    $("#phone2").mask("+7(999) 999-9999");
    $("#phone3").mask("+7(999) 999-9999");
    });

