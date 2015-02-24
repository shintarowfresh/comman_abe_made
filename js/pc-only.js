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
