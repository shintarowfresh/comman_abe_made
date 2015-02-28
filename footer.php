<?php
/**
 * フッター
 */
?>
    <div id="footer" class="footer" role="contentinfo">

        <?php if(is_home()): ?>

        <div class="social content_width">

            <div class="inner">

                <div class="sns-section">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/sns-tw-head.jpg" alt="カンマンのTwitter">
                    <a class="twitter-timeline" href="https://twitter.com/konkatsusns/lists/comman-staff" data-widget-id="555579654145200128">https://twitter.com/konkatsusns/lists/comman-staffのツイート</a>
                </div>

                <div class="sns-section">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/sns-fb-head.jpg" alt="カンマンのfacebookページ">
                    <div class="fb-like-box" data-href="https://www.facebook.com/comman.inc" data-height="450" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="true" data-show-border="false"></div>
                </div>
            </div>

        </div><!--/.social-->

        <?php elseif( is_post_type_archive('work') || is_tax() ) :?>

        <div class="social content_width">

            <div class="inner">

                <div class="sns-section">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/sns-tw-head.jpg" alt="カンマンのTwitter">
                    <a class="twitter-timeline" href="https://twitter.com/konkatsusns/lists/comman-staff" data-widget-id="555579654145200128">https://twitter.com/konkatsusns/lists/comman-staffのツイート</a>
                </div>

                <div class="sns-section">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/sns-fb-head.jpg" alt="カンマンのfacebookページ">
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
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/sns-tw-head.jpg" alt="カンマンのTwitter">
                    <a class="twitter-timeline" href="https://twitter.com/konkatsusns/lists/comman-staff" data-widget-id="555579654145200128">https://twitter.com/konkatsusns/lists/comman-staffのツイート</a>
                </div>

                <div class="sns-section">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/sns-fb-head.jpg" alt="カンマンのfacebookページ">
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


       <!--トップへのボタン-->
        <a id="to_top" class="btn__full to_top nonmover" href="#"><i class="fa fa-angle-double-up"></i> Top</a>

        <?php if(is_home()): ?>
        <?php elseif(is_page('contact')): ?>
        <?php elseif(is_archive()): ?>
        <?php else: ?>

        <?php
        // サイトギャラリー
        get_template_part( 'gallery' ); ?>

        <?php endif; ?>



        <div class="foot foot-copy">
            <div class="inner">

                <div>
                    人と技術と人を繋ぐ
                </div>

            </div><!--/.inner-->

        </div><!--/.content_width-->

        <div class="foot__info">
            <div class="inner">

                <div class="col mail-sns">
                    <div class="box_2">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/foot-mail.png" alt="メールアドレス">
                    </div>

                    <div class="box_2">

                       <ul>
                           <li><a class="icon-fb" href="https://www.facebook.com/comman.inc" target="_blank"></a></li>
                           <li><a class="icon-yt" href="https://www.youtube.com/channel/UCGj6L4LXylu7hZtHuObHECQ" target="_blank"></a></li>
                           <li><a class="icon-line" href="http://www.comman.co.jp/%E3%82%AB%E3%83%B3%E3%83%9E%E3%83%B3line%E5%A7%8B%E3%82%81%E3%81%9F%E3%82%88%E3%83%BC%EF%BC%81%E7%A4%BE%E5%93%A1%E3%81%8C%E5%BC%B5%E3%82%8A%E4%BB%98%E3%81%84%E3%81%A6%E3%81%BF%E3%82%93%E3%81%AA/"></a></li>
                       </ul>



                    </div>

                </div><!--/.col-->

                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/foot-info.png" alt="カンマンについて">

                <div class="col">
                    <div class="box_1">
                        <h6><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/foot-name.png" alt="株式会社カンマン"></h6>
                        <p><i class="fa fa-copyright"></i> Comman.inc</p>
                    </div>
                    <div class="box_1">
                        <ul>
                            <li><a href="/privacypolicy/">プライバシーポリシー</a></li>
                            <li><a href="/sitepolicy/">サイトポリシー</a></li>
                            <li><a href="/recruit/">採用情報</a></li>
                            <li><a href="https://plus.google.com/114203544397179410651" rel="publisher">Google+</a></li>
                        </ul>
                    </div>
                    <div class="box_1">
                       <h6>adress</h6>
                        <p>〒770-0943<br>徳島県徳島市<br>中昭和町2丁目39番地5</p>
                        <p><a href="/company/"><i class="fa fa-map-marker"></i> GoogleMapで見る</a></p>
                    </div>
                    <div class="box_1">
                       <h6>phone/fax</h6>
                        <p><i class="fa fa-phone"></i> 088-611-2333</p>
                        <p><i class="fa fa-fax"></i> 088-611-2332</p>
                    </div>

                </div><!--/.col-->
            </div><!--/.inner-->
        </div><!--/.foot__info-->
    </div><!--/.footer-->
</div><!--/.wrapper-->



<?php wp_footer(); ?>


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

<?php elseif(is_page('message')): ?>

<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/rollerblade.js"></script>

<?php elseif(is_page('company')): ?>

    <!--会社概要のスライダー-->
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.swipeshow.min.js"></script>

    <!--会社概要ページ　google-map用-->
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCrytOY8q8mDgKCf-Ht3FfJa8yu_SCJWBg&sensor=true"></script>
    <script type="text/javascript">
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
    </script>

<?php elseif( is_home() ) :?>

<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.bgswitcher.js"></script>
    <script type="text/javascript">
        jQuery(function () {

            //トップページのフェードしてる画像
            jQuery('.bgs').bgswitcher({
                images: [
                    "<?php echo get_stylesheet_directory_uri(); ?>/img/bgs01.jpg",
                    "<?php echo get_stylesheet_directory_uri(); ?>/img/bgs02.jpg",
                    "<?php echo get_stylesheet_directory_uri(); ?>/img/bgs03.jpg",
                    "<?php echo get_stylesheet_directory_uri(); ?>/img/bgs04.jpg"
                ],
                interval: "4000",
            });
        });
    </script>

<?php endif ;?>
<script type="text/javascript">// <![CDATA[
    $script([
        "//platform.twitter.com/widgets.js",
        "//connect.facebook.net/ja_JP/all.js#xfbml=1",
        "https://apis.google.com/js/plusone.js",
        "//b.st-hatena.com/js/bookmark_button.js"], function() {
    })
    // ]]></script>

<?php if(!is_mobile()):?>
<script src="<?php echo get_template_directory_uri(); ?>/js/pc-only.js"></script>
<?php endif ;?>

<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('a[href^=http]')
        .not('[href*="'+location.hostname+'"]')
        .attr({target:"_blank"})
        .addClass("nonmover")
        ;})
</script>

    </body>
</html>
