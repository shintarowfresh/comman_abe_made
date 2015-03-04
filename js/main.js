jQuery(function ($) {
    'use strict';



    $('.member__sns__btn').click(function(){
        $(this).toggleClass('btn-on');
        $(this).next().slideToggle();
        return false;
    });



    $("a[href^='http://']").not('[href*="'+location.hostname+'"]').attr('target','_blank').addClass('nonmover');

    //タップの反応を改善
    $('.logo a , #globalnavi a').on('click touchend', function(e) {
        var el = $(this);
        var link = el.attr('href');
        window.location = link;
    });

    //制作実績ページの制作カテゴリー用シャッター
    $('#shutter').click(function () {
        $('.shutter').slideToggle(200);
        $('.btn_cross').toggleClass("close");
        $('.cat_list').toggleClass("open");
        return false;
    });


    //ふわっとなる挙動
        jQuery('.content_full').fadeMover({
            'effectType': 1,
            'nofadeOut': 'nonmover'
        });
        jQuery('.content').fadeMover({'outDelay': 300});
        jQuery('#panel').fadeMover({'outDelay': 600});
        jQuery('.content_full').fadeMover({'outDelay': 1000});
        jQuery('#footer').fadeMover({'outDelay': 2000});
        jQuery('#breadcrumb').fadeMover({'outDelay': 2000});

    var $panel = $('#panel');

    //ヘッダーにあるハンバーガーボタンの制御
    $(".panel_btn").click(function () {
        $("nav.menu").slideToggle(200);
        $(".panel_btn_icon").toggleClass("close");
        return false;
    });

    //ヘッダーにあるハンバーガーボタンの制御
    $(".panel_btn_pc").click(function () {
        $panel.slideToggle(200, function () {
            $('.panel .variable >div').fadeIn();
        });

        $(".panel_btn_icon").toggleClass("close");
        return false;
    });



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
                        'color': '',
                        'background': ''
                    });
                });
        } else {
            if ($(this).hasClass('wpcf7-not-valid')) {

            }else{
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
    $('a[href^=#]').click(function () {
        // スクロールの速度
        var speed = 600; // ミリ秒
        // アンカーの値取得
        var href = jQuery(this).attr("href");
        // 移動先を取得
        var target = jQuery(href == "#" || href == "" ? 'html' : href);
        // 移動先を数値で取得
        var position = target.offset().top;
        // スムーススクロール
        jQuery('body,html').animate({
            scrollTop: position
        }, speed, 'swing');
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




    $('.my-gallery').each(function(){
        //会社概要の外観部分のスライドショー制御
        $(this).swipeshow({
            autostart: true,
            /* Set to `false` to keep it steady */
            interval: 4000,
            /* Time between switching slides (ms) */
            speed: 1000,
            /* Animation speed (ms) */
            friction: 0.6,
            /* Bounce-back behavior; use `0` to disable */
            mouse: true /* enable mouse dragging controls */
        });
    });





    //上に戻るボタン
    $('#to_top').click(function () {
        //ページトップへ移動する
        $('html,body').animate({
            scrollTop: 0
        }, 'slow');
    });


});
