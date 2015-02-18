//ローダーの読み込み制御
/*jQuery(function () {
    'use strict';
    jQuery('.wrapper').css('display', 'none');
    jQuery('#loader_bg ,#loader').css('display', 'block');
});
jQuery(window).load(function ($) { //全ての読み込みが完了したら実行
    'use strict';
    jQuery('#loader_bg').delay(900).fadeOut(800);
    jQuery('#loader').delay(600).fadeOut(500);
    jQuery('.wrapper').css('display', 'block');

    function stopload() {
            $('#wrap').css('display', 'block');
            $('#loader-bg').delay(900).fadeOut(800);
            $('#loader').delay(600).fadeOut(300);
        }
        //10秒たったら強制的にロード画面を非表示

    $(function () {
        setTimeout(function () {
            stopload();
        }, 10000);
    });
});*/

jQuery(document).ready(function () {
    'use strict';

    //フォーム系の挙動
    var $wpcf7 = $('.wpcf7-form');
    var $wpcf7V = $('.wpcf7-form.invalid');
    var $cf7IT = $wpcf7.find('input.wpcf7-validates-as-required , textarea.wpcf7-validates-as-required');
    var $cf7ITV = $wpcf7V.find('input.wpcf7-validates-as-required , textarea.wpcf7-validates-as-required');

    $cf7IT.blur(function () {
        if ($(this).val() == '') {
            $(this).val('必須項目です').css('color', '#E7ABAB')
                .one('focus', function () {
                    $(this).val('').css({
                    'color':'',
                    'background': ''
                    });
                });
        } else {
            if($(this).hasClass('wpcf7-not-valid')) {

            } else {
                $(this).css('background', '#FAF9E3');
            }
        }
    });

    $cf7ITV.css('background', '#FAF9E3');

    $('.wpcf7 .show-after , .wpcf7 .show-after2').css('display', 'none');
    $('#cf-content ').on('change', function () {
        $('.wpcf7 .show-after').fadeIn(400, function () {
            $(this).css('display', 'table');
        });
    });

    $('#response .first input').change(function () {
        $('.wpcf7 .show-after2').fadeIn(400, function () {
            $(this).css('display', 'table');
        });
    });





    // #で始まるアンカーをクリックした場合に処理
    jQuery('a[href^=#]').click(function () {
        // スクロールの速度
        var speed = 600; // ミリ秒
        // アンカーの値取得
        var href = jQuery(this).attr("href");
        // 移動先を取得
        var target = jQuery(href == "#" || href == "" ? 'html' : href);
        // 移動先を数値で取得
        var position = target.offset().top;
        // スムーススクロール
        jQuery('body,html').animate({scrollTop: position}, speed, 'swing');
        return false;
    });





    //ブログ記事下の関連記事切り替えタブ
    $('.tab li').click(function () {

        //.index()を使いクリックされたタブが何番目かを調べ、
        //indexという変数に代入します。
        var index = $('.tab >li').index(this);

        //コンテンツを一度すべて非表示にし、
        $('.tab-content >li').css('display', 'none ');

        //クリックされたタブと同じ順番のコンテンツを表示します。
        $('.tab-content >li').eq(index).css('display', 'block');

        //一度タブについているクラスselectを消し、
        $('.tab >li').removeClass('select');

        //クリックされたタブのみにクラスselectをつけます。
        $(this).addClass('select');
    });





    //会社概要の外観部分のスライドショー制御
    $(".my-gallery").swipeshow({
        autostart: true,    /* Set to `false` to keep it steady */
        interval: 4000,     /* Time between switching slides (ms) */
        speed: 1000,         /* Animation speed (ms) */
        friction: 0.6,      /* Bounce-back behavior; use `0` to disable */
        mouse: true        /* enable mouse dragging controls */
    });




    //制作実績ページの制作カテゴリー用シャッター
    $('.shutter').css('display', 'none');
    $('a#shutter').click(function () {
        $('.shutter').slideToggle(200);
        $('.btn_cross').toggleClass("close");
        $('.cat_list').toggleClass("open");
        return false;
    });




    //グローバルナビを押したときの挙動
    jQuery('#globalnavi a').click(function () {
        $('body').stop(true).animate({
            marginTop: "30px",
            opacity: 'toggle'
        }, {
            duration: 500,
        });
    });




    //ヘッダーにあるハンバーガーボタンの制御
    $(".panel_btn").click(function () {
        $("nav.menu").slideToggle(200);
        $(".panel_btn_icon").toggleClass("close");
        return false;
    });

    //ヘッダーにあるハンバーガーボタンの制御
    $(".panel_btn_pc").click(function () {
        $(".panel").slideToggle(200);
        $(".panel_btn_icon").toggleClass("close");
        return false;
    });




    //ボタン(id:move-page-top)のクリックイベント
    $('.to_top').click(function () {
        //ページトップへ移動する
        $('html,body').animate({
            scrollTop: 0
        }, 'slow');
    });
});





//会社概要でgooglemapを描写
function initialize() {
    'use strict';
    var latlng = new google.maps.LatLng(34.060224, 134.557671);
    var myOptions = {
        zoom: 15,
        center: latlng,
        mapTypeControlOptions: {
            mapTypeIds: ['noText', google.maps.MapTypeId.ROADMAP]
        }
    };
    var map = new google.maps.Map(document.getElementById('map_canvas'), myOptions);

    var markerOpts = {
        position: latlng,
        map: map,
        title: "株式会社カンマン",
        animation: google.maps.Animation.DROP
    };
    // 直前で作成したMarkerOptionsを利用してMarkerを作成
    var marker = new google.maps.Marker(markerOpts);

    var styleOptions = [{
        stylers: [
            {
                "visibility": "simplifed"
            },
            {
                "hue": "#D32117"
            },
            {
                "gamma": 1.37
            },
            {
                "lightness": 27
            },
            {
                "saturation": 35
            }
        ],
        elementType: "geometry",
        featureType: "all"
    }];
    var styledMapOptions = {
        name: 'カンマンスタイル'
    },
        lopanType = new google.maps.StyledMapType(styleOptions, styledMapOptions);
    map.mapTypes.set('noText', lopanType);
    map.setMapTypeId('noText');
}
