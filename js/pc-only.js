$(window).on('load', function () {
    var contentHeight = jQuery("html, body").height(),
        windowHeight = jQuery(window).height(),
        target = jQuery('#sidebar').find('.fix'),
        targetHeight = target.outerHeight(),
        targetPosition = target.position(),
        footer = jQuery("#footer"),
        footerHeight = footer.outerHeight(),
        footerPosition = footer.position(),
        footerTop = footerPosition.top,
        panelHeight = jQuery('#panel').outerHeight(),
        catlistHeight = jQuery('.cat_list').outerHeight(),
        mainHeight = jQuery('.main').outerHeight(),
        subHeight = jQuery('.sub').outerHeight();

    jQuery(window).on('resize', function () {
        windowHeight = jQuery(this).height();
    });

});

jQuery(document).ready(function () {

    var box = $("#blog-header");
    var boxTop = box.offset().top;

    $(window).scroll(function(){
        if($(window).scrollTop() >= boxTop){

            box.addClass("fixed");
            $("body").css("margin-top","40px");

        }else{

            box.removeClass("fixed");
            $("body").css("margin-top","0px");
        }
    });

    //ふわっとなる挙動
        jQuery('.content_full , .content ,#panel , #footer ,#breadcrumb').fadeMover({
            'effectType': 3,
            'outDelay' : '30',
            'nofadeOut': 'nonmover'
        });



    jQuery('.party-people').click(function () {
        jQuery('.cover').animate({
            opacity: "toggle"
        }
                                );
    });

    //パラパラ漫画
    var rootPath = 'http://comman.devel2.comman.co.jp/wp-content/themes/comman_abe_made/img/';

    var abeMotions = [
        rootPath + 'member/abe/abe01.jpg',
        rootPath + 'member/abe/abe02.jpg',
        rootPath + 'member/abe/abe03.jpg',
        rootPath + 'member/abe/abe04.jpg',
        rootPath + 'member/abe/abe05.jpg',
        rootPath + 'member/abe/abe06.jpg',
        rootPath + 'member/abe/abe07.jpg',
        rootPath + 'member/abe/abe08.jpg'
    ];

    var sanoMotions = [
        rootPath + 'member/sano/sano01.jpg',
        rootPath + 'member/sano/sano02.jpg',
        rootPath + 'member/sano/sano03.jpg',
        rootPath + 'member/sano/sano04.jpg',
        rootPath + 'member/sano/sano05.jpg',
        rootPath + 'member/sano/sano06.jpg',
        rootPath + 'member/sano/sano07.jpg',
        rootPath + 'member/sano/sano08.jpg'
    ];

    var shiraiMotions = [
        rootPath + 'member/shirai/shirai01.jpg',
        rootPath + 'member/shirai/shirai02.jpg',
        rootPath + 'member/shirai/shirai03.jpg',
        rootPath + 'member/shirai/shirai04.jpg',
        rootPath + 'member/shirai/shirai05.jpg',
        rootPath + 'member/shirai/shirai06.jpg',
        rootPath + 'member/shirai/shirai07.jpg',
        rootPath + 'member/shirai/shirai08.jpg'
    ];

    var bandoMotions = [
        rootPath + 'member/bando/bando01.jpg',
        rootPath + 'member/bando/bando02.jpg',
        rootPath + 'member/bando/bando03.jpg',
        rootPath + 'member/bando/bando04.jpg',
        rootPath + 'member/bando/bando05.jpg',
        rootPath + 'member/bando/bando06.jpg',
        rootPath + 'member/bando/bando07.jpg',
        rootPath + 'member/bando/bando08.jpg'
    ];

    var kaideMotions = [
        rootPath + 'member/kaide/kaide01.jpg',
        rootPath + 'member/kaide/kaide02.jpg',
        rootPath + 'member/kaide/kaide03.jpg',
        rootPath + 'member/kaide/kaide04.jpg',
        rootPath + 'member/kaide/kaide05.jpg',
        rootPath + 'member/kaide/kaide06.jpg',
        rootPath + 'member/kaide/kaide07.jpg',
        rootPath + 'member/kaide/kaide08.jpg'
    ];

    var fujikawaMotions = [
        rootPath + 'member/fujikawa/fujikawa01.jpg',
        rootPath + 'member/fujikawa/fujikawa02.jpg',
        rootPath + 'member/fujikawa/fujikawa03.jpg',
        rootPath + 'member/fujikawa/fujikawa04.jpg',
        rootPath + 'member/fujikawa/fujikawa05.jpg',
        rootPath + 'member/fujikawa/fujikawa06.jpg',
        rootPath + 'member/fujikawa/fujikawa07.jpg',
        rootPath + 'member/fujikawa/fujikawa08.jpg'
    ];

    var ogawaMotions = [
        rootPath + 'member/ogawa/ogawa01.jpg',
        rootPath + 'member/ogawa/ogawa02.jpg',
        rootPath + 'member/ogawa/ogawa03.jpg',
        rootPath + 'member/ogawa/ogawa04.jpg',
        rootPath + 'member/ogawa/ogawa05.jpg',
        rootPath + 'member/ogawa/ogawa06.jpg',
        rootPath + 'member/ogawa/ogawa07.jpg',
        rootPath + 'member/ogawa/ogawa08.jpg'
    ];

    jQuery('.member__photo').mouseover(function () {
        jQuery(this).find('.cover').css('display', 'none');
    });
    jQuery('.member__photo').mouseout(function () {
        jQuery(this).find('.cover').css('display', 'block');
    });

    jQuery('.member__photo-sano').mouseover(function () {
        jQuery(this).find('.cover').css('display', 'none');
    });
    jQuery('.member__photo').mouseout(function () {
        jQuery(this).find('.cover').css('display', 'block');
    });

    jQuery('.member').each(function () {

        jQuery('#abe').rollerblade({
            imageArray: abeMotions,
            sensitivity: 15,
            drag: false,
            auto: false,
            edgeStop: true
        });

        jQuery('#fujikawa').rollerblade({
            imageArray: fujikawaMotions,
            sensitivity: 15,
            drag: false,
            auto: false,
            edgeStop: false
        });

        jQuery('#sano').rollerblade({
            imageArray: sanoMotions,
            sensitivity: 15,
            drag: false,
            auto: false,
            edgeStop: false
        });

        jQuery('#kaide').rollerblade({
            imageArray: kaideMotions,
            sensitivity: 15,
            drag: false,
            auto: false,
            edgeStop: false
        });

        jQuery('#shirai').rollerblade({
            imageArray: shiraiMotions,
            sensitivity: 15,
            drag: false,
            auto: false,
            edgeStop: false
        });

        jQuery('#bando').rollerblade({
            imageArray: bandoMotions,
            sensitivity: 15,
            drag: false,
            auto: false,
            edgeStop: false
        });

        jQuery('#ogawa').rollerblade({
            imageArray: ogawaMotions,
            sensitivity: 15,
            drag: false,
            auto: false,
            edgeStop: false
        });
    });
});


window.onload =function () {
    sidebarFix();
}
/*  サイドバー追従
----------------------------------------------- */
function sidebarFix() {


    var tarObj = $("#sidebar");//ターゲットサイドバー
    tarObj.css({
        "position":"absolute"
    });
    $(".three-two .sub").css({"position":"relative"});

    //上下判定用
    var start_pos = 0;

    //移動範囲用
    var moveLimitBox = $(".three-two .main");//上下範囲の目安
    var moveLimitBoxMarginTop = parseInt( $(".three-two").css('margin-top'),10);
    var limitPosTop = moveLimitBox.position().top;

    //上スクロール時の余白
    var topMargin = 30;

    $(window).scroll(function(e){

        var tarPosTop = tarObj.position()['top'];
        var mainObj = $(".three-two .main");//サイドバーに付随するオブジェクト

        /* スクロール量取得 */
        winScrollTop = $(window).scrollTop();
        /* windowの高さ */
        winHeight = $(window).height();
        /* windowの幅 */
        winWidth = $(window).width();
        /* windowの幅 */
        sideBarStartWidth = 600;
        if( winWidth < sideBarStartWidth ){ return; }

        var current_pos = $(this).scrollTop();

        /*  下スクロール
        ----------------------------------------------- */
        if (current_pos > start_pos) {

            //スタート位置
            //ウインドの全体の下部分 > ターゲットオブジェクトのお尻におっついたら
            if( winScrollTop + winHeight > mainObj.position().top + tarObj.position().top +  tarObj.outerHeight()){
                tarObj.css({"top": winScrollTop - ( tarObj.height() + mainObj.position().top - winHeight )  + "px" });
            }

            //ウインドの全体の下部分
            //mainObjが下にたどり着いたら
            if( winScrollTop - limitPosTop > mainObj.outerHeight() - winHeight  ){
                tarObj.css({"top": mainObj.height() - tarObj.height() + "px" });
            }


        /*  上スクロール
        ----------------------------------------------- */
        } else {

            if( winScrollTop - limitPosTop + topMargin > 0 ){

                if( winScrollTop + topMargin < mainObj.position().top + tarObj.position().top ){

                    tarObj.css({"top": winScrollTop - mainObj.position().top + topMargin + "px" });

                }
            }else {

                tarObj.css({"top": "0px" });

            }

        }

        start_pos = current_pos;
    });


}

