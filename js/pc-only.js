jQuery(window).on('load',function (){
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

    jQuery(window).on('resize',function () {
        windowHeight = jQuery(this).height();
    });

    jQuery('#fix').each( function (){

        jQuery(window).on('scroll',function () {

            var scrollTop = jQuery(this).scrollTop(),
                visibleBottom = scrollTop + windowHeight,
                targetBottom = targetPosition.top + targetHeight,
                footerPosition = footer.position(),
                footerTop = footerPosition.top;

            if (subHeight > mainHeight) {
                jQuery('.main').height(subHeight);
            }

            if (visibleBottom >= targetBottom) {

                if (visibleBottom >= footerTop) {

                    target.css({
                        'position': 'fixed',
                        'bottom': visibleBottom - footerTop + 'px'
                    });

                } else {

                    target.css({
                        'position': 'fixed',
                        'bottom': 0
                    });
                }

            } else {

                target.css({
                    'position':'static',
                });
            }
        });
    });
});

jQuery(document).ready(function() {

    //パラパラ漫画
    var rootPath = 'http://comman.devel2.comman.co.jp/wp-content/themes/comman_abe_made/img/';

    var abeMotions = [
        rootPath + 'member/abe/abe01.png',
        rootPath + 'member/abe/abe02.png',
        rootPath + 'member/abe/abe03.png',
        rootPath + 'member/abe/abe04.png',
        rootPath + 'member/abe/abe05.png',
        rootPath + 'member/abe/abe06.png',
        rootPath + 'member/abe/abe07.png',
        rootPath + 'member/abe/abe08.png'
    ];

    jQuery('.member__photo').mouseover(function(){
        jQuery(this).find('.cover').css('display','none')});
    jQuery('.member__photo').mouseout(function(){
        jQuery(this).find('.cover').css('display','block')});

    jQuery('.member').each(function(){

        jQuery('#abe').rollerblade({
            imageArray: abeMotions,
            sensitivity: 20,
            drag: false,
            auto: false,
            edgeStop:false
        });

        jQuery('#fujikawa').rollerblade({
            imageArray: abeMotions,
            sensitivity: 20,
            drag: false,
            auto: false,
            edgeStop:false
        });
    });


});
