<?php
/**
 * フッター
 */
?>

    <!-- footer -->
    <div id="footer" class="footer" role="contentinfo">

        <?php if(is_home()): ?>

        <div class="social content_width">

            <div class="inner">
                <div class="sns-section">
                    <a class="twitter-timeline" href="https://twitter.com/konkatsusns/lists/comman-staff" data-widget-id="555579654145200128">https://twitter.com/konkatsusns/lists/comman-staffのツイート</a>
                </div>
                <div class="sns-section">
                    <div class="fb-like-box" data-href="https://www.facebook.com/comman.inc" data-height="450" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="true" data-show-border="false"></div>
                </div>
            </div>

        </div><!--/.social-->

        <?php elseif( is_post_type_archive('work') || is_tax() ) :?>

        <div class="social content_width">

            <div class="inner">
                <div class="sns-section">
                    <a class="twitter-timeline" href="https://twitter.com/konkatsusns/lists/comman-staff" data-widget-id="555579654145200128">https://twitter.com/konkatsusns/lists/comman-staffのツイート</a>
                </div>
                <div class="sns-section">
                    <div class="fb-like-box" data-href="https://www.facebook.com/comman.inc" data-height="450" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="true" data-show-border="false"></div>
                </div>
            </div>

        </div><!--/.social-->

        <?php elseif( is_archive() ): ?>

        <?php
        // 記事下の制作実績
        get_template_part( 'under','post' ); ?>

        <?php elseif( is_single() ): ?>

        <?php
        // 記事下の制作実績
        get_template_part( 'under','post' ); ?>

        <?php elseif( is_page('contact') ): ?>
        <?php elseif( is_page('price') ): ?>
        <?php elseif( is_page('company') ): ?>

        <?php
        // 記事下の制作実績
        get_template_part( 'under','post' ); ?>

        <div class="social content_width">

            <div class="inner">
                <div class="sns-section">
                    <a class="twitter-timeline" href="https://twitter.com/konkatsusns/lists/comman-staff" data-widget-id="555579654145200128">https://twitter.com/konkatsusns/lists/comman-staffのツイート</a>
                </div>
                <div class="sns-section">
                    <div class="fb-like-box" data-href="https://www.facebook.com/comman.inc" data-height="450" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="true" data-show-border="false"></div>
                </div>
            </div>

        </div><!--/.social-->

        <?php elseif( is_page() ): ?>

        <?php
        // 記事下の制作実績
        get_template_part( 'under','post' ); ?>

        <?php else: ?>

        <?php endif; ?>





        <a class="btn btn_full to_top"><i class="fa fa-angle-double-up"></i> Top</a>

        <div class="content_width">

            <div class="inner">

                <div class="foot_form">

                </div>

                <ul class="foot_navi">
                    <li><a href="/privacypolicy/">プライバシーポリシー</a></li>
                    <li><a href="/sitepolicy/">サイトポリシー</a></li>
                </ul>

                <p class="copyright"><i class="fa fa-copyright"></i> Comman.inc</p>
            </div><!--/.inner-->
        </div><!--/.content_width-->
    </div><!--/.footer-->

</div><!--/.wrapper-->

<?php if( is_post_type_archive('work') || is_tax() || is_archive() ) :?>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.autopager-1.0.0.js"></script>
    <script>
        //  最大ページ数取得
        var maxpage = <?php echo $wp_query->max_num_pages; ?>;

        jQuery('#loading').css('display', 'none');

        if(maxpage == 1) {
            jQuery('#next').css('display','none');
        } else {
            jQuery('#next').css('display','block');
        };

        jQuery.autopager({
            content: '.container',// 読み込むコンテンツ
            link: '#next a', // 次ページへのリンク
            autoLoad: false,// スクロールの自動読込み解除

            start: function(current, next){
                jQuery('#loading').css('display', 'block');
                jQuery('#next a').css('display', 'none');
            },

            load: function(current, next){
                jQuery('#loading').css('display', 'none');
                jQuery('#next a').css('display', 'block');
                if( current.page >= maxpage ){ //最後のページ
                    jQuery('#next a').hide(); //次ページのリンクを隠す
                }
            }
        });

        jQuery('#next a').click(function(){ // 次ページへのリンクボタン
            jQuery.autopager('load'); // 次ページを読み込む
            return false;
        });
    </script>
   <?php endif ;?>

<?php if(is_mobile()):?>
<?php else :?>
<script src="<?php echo get_template_directory_uri(); ?>/js/pc-only.js"></script>
<?php endif ;?>

        <?php wp_footer(); ?>
    </body>

</html>
