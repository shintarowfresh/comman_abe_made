jQuery(document).ready(function () {

    $('#fix').each( function () {
        //サイドバーの固定
        var contentHeight = $("html, body").height();
        var windowHeight = $(window).height();
        var target = $('#sidebar').find('.fix');
        var targetHeight = target.outerHeight();
        var targetPosition = target.position();
        var footer = $("#footer");
        var footerHeight = footer.outerHeight();
        var footerPosition = footer.position();
        var footerTop = footerPosition.top;

        $(window).resize(function () {
            windowHeight = $(this).height();
        });

        $(window).scroll(function() {

            var scrollTop = $(this).scrollTop();

            var visibleBottom = scrollTop + windowHeight;

            var targetBottom = targetPosition.top + targetHeight;

            var footerPosition = footer.position();

            var footerTop = footerPosition.top;

            if (visibleBottom >= targetBottom) {

                if (visibleBottom >= footerTop) {

                    target.css({
                        position: "fixed",
                        bottom: visibleBottom - footerTop + 'px'
                    });

                } else {

                    target.css({
                        position: "fixed",
                        bottom: 0
                    });
                }

            } else {

                target.css({
                    position: "static",
                    bottom: "auto"
                });
            }
        });

    });

});
