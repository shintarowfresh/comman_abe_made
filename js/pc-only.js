$(window).on('load',function (){
    var contentHeight = $("html, body").height(),
        windowHeight = $(window).height(),
        target = $('#sidebar').find('.fix'),
        targetHeight = target.outerHeight(),
        targetPosition = target.position(),
        footer = $("#footer"),
        footerHeight = footer.outerHeight(),
        footerPosition = footer.position(),
        footerTop = footerPosition.top;

    $(window).on('resize',function () {
        windowHeight = $(this).height();
    });

    $('#fix').each( function (){

        $(window).on('scroll',function () {


            var scrollTop = $(this).scrollTop(),
                visibleBottom = scrollTop + windowHeight,
                targetBottom = targetPosition.top + targetHeight,
                footerPosition = footer.position(),
                footerTop = footerPosition.top;

            console.log(targetBottom);

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
                    'position':'static'
                });
            }
        });
    });
});

//jQuery(document).ready(function () {
//
//    $('#fix').each( function () {
//        //サイドバーの固定
//        var contentHeight = $("html, body").height();
//        var windowHeight = $(window).height();
//        var target = $('#sidebar').find('.fix');
//        var targetHeight = target.outerHeight();
//        var targetPosition = target.position();
//        var footer = $("#footer");
//        var footerHeight = footer.outerHeight();
//        var footerPosition = footer.position();
//        var footerTop = footerPosition.top;
//
//        $(window).resize(function () {
//            windowHeight = $(this).height();
//        });
//
//        $(window).scroll(function() {
//
//            var scrollTop = $(this).scrollTop(),
//
//                visibleBottom = scrollTop + windowHeight,
//
//                targetBottom = targetPosition.top + targetHeight,
//
//                footerPosition = footer.position(),
//
//                footerTop = footerPosition.top;
//
//            if (visibleBottom >= targetBottom) {
//
//                if (visibleBottom >= footerTop) {
//
//                    target.css({
//                        position: "fixed",
//                        bottom: visibleBottom - footerTop + 'px'
//                    });
//
//                } else {
//
//                    target.css({
//                        position: "fixed",
//                        bottom: 0
//                    });
//                }
//
//            } else {
//
//                target.css({
//                    position: "static",
//                    bottom: "auto"
//                });
//            }
//        });
//
//    });
//
//});
