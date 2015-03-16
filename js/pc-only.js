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

    jQuery('#fix').each(function () {

        jQuery(window).on('scroll', function () {

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
                    'position': 'static'
                });
            }
        });
    });
});

jQuery(document).ready(function () {
    
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
