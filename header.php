<?php
/**
 * ヘッダー
 *
 * <head> セクション
 *
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>
<html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]>
<html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]>
<html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

    <head>

        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title><?php wp_title(); ?></title>

        <meta name="description" content="<?php bloginfo( 'description' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <style type="text/css">
            .panel {
                display: none;
            }
        </style>

        <!--アイコンフォント-->
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <!-- google web fonts-->
        <link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700|Roboto:100,700,400|Playfair+Display+SC:700,400' rel='stylesheet' type='text/css'>

        <?php
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js', array() ,null );
        ?>

        <?php wp_head(); ?>
        <?php if( is_home() ) :?>

        <script type="text/javascript">

            $(function () {

                //トップページのフェードしてる画像
                $('.bgs').bgswitcher({
                    images: [
                        "<?php echo get_stylesheet_directory_uri(); ?>/img/bgs01.png",
                        "<?php echo get_stylesheet_directory_uri(); ?>/img/bgs02.png",
                        "<?php echo get_stylesheet_directory_uri(); ?>/img/bgs03.png",
                        "<?php echo get_stylesheet_directory_uri(); ?>/img/bgs04.png"
                    ],
                    interval: "4000",
                });
            });

        </script>

        <?php elseif(is_page('company')): ?>
        <!--会社概要ページ　google-map用-->
        <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCrytOY8q8mDgKCf-Ht3FfJa8yu_SCJWBg&sensor=true"></script>
        <?php else :?>
        <?php endif ; ?>

        <?php if(!is_mobile()):?>
        <script src="<?php echo get_template_directory_uri(); ?>/js/pc-only.js"></script>
        <?php endif ;?>

    </head>

    <body <?php body_class(); ?> onload="initialize();">
        <!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

        <div id="fb-root"></div>
        <script type="text/javascript">// <![CDATA[
            $script([
                "//platform.twitter.com/widgets.js",
                "//connect.facebook.net/ja_JP/all.js#xfbml=1",
                "https://apis.google.com/js/plusone.js",
                "//b.st-hatena.com/js/bookmark_button.js"], function() {
            })
            // ]]></script>

        <!--ローダー-->
        <div id="loader_bg">

            <div id="loader">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/load.gif" width="300" height="300" alt="カンマンローディング"/>
            </div>

        </div>

        <div id="wrapper" class="wrapper">

            <!--ヘッダー部分-->
            <div class="head">

                <div class="variable">
                    <a class="panel_btn" href=""><span class="panel_btn_icon"></span></a>
                    <a class="panel_btn_pc" href=""><span class="panel_btn_icon"></span></a>

                    <div class="logo">
                        <h1>
                            <a href="<?php echo home_url(); ?>">
                                <?php bloginfo('name'); ?>
                            </a>
                        </h1>
                    </div>

                    <nav id="globalnavi" class="menu" role="navigation">

                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location'  => 'primary',
                                'container'         => '',
                            )); ?>

                    </nav>

                </div>

            </div><!--/.haed-->

            <!--開閉するパネル部分-->
            <div class="panel" style="display:none;">
                <div class="variable">
                    <div class="col clearfix">
                        <div class="box_1 facebook_like_center">
                            <p><i class="fa fa-thumbs-o-up faa-bounce animated"></i>カンマンの最新情報はFacebookページでも配信しています！</p>

                            <div class="fb-like" data-href="https://www.facebook.com/comman.inc" data-layout="box_count" data-action="like" data-show-faces="false" data-share="false"></div>
                        </div>

                        <div class="box_2 latest_list">
                            <h3><i class="fa fa-bolt faa-vertical animated"></i>新着</h3>
                            <ul>

                                <?php
                                $args = array( 'posts_per_page' => 5 );
                                $myposts = get_posts( $args );
                                foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                                                                <?php
                                $cat = get_the_category();
                                if ($cat[0]->parent !=0 ) {
                                    $parent= get_category($cat[0]->parent) ;
                                    $catname = $parent->cat_name; //カテゴリー名
                                    $catslug = $parent->slug; //スラッグ名
                                } else {
                                    $catname = $cat[0]->cat_name; //カテゴリー名
                                    $catslug = $cat[0]->slug; //スラッグ名
                                }
                                ?>

                                <li>
                                    <span class="<?php echo $catslug; ?> meta_cat_icon"><?php echo $catname; ?></span>
                                    <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
                                    <span>(<?php the_time('Y.n.j'); ?>)</span>
                                </li>

                                <?php endforeach; /* ループの終了 */ ?>
                                <?php wp_reset_postdata(); /* 取得したデータのリセット */ ?>

                            </ul>
                        </div>

                        <div class="box_1">

                            <h3><i class="fa fa-youtube-play faa-pulse animated"></i>カンマンチャンネルの最新動画</h3>

                            <div class="video">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/V4xvr2fkF5Q?list=PLuFK1lOCb7Od20M1WaIh7doNg6GmJ5eGJ" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div><!--/.col-->
                </div><!--/.variable-->
            </div><!--/.panel-->

            <?php if (is_home())://トップページのみ ?>

            <!--お知らせバナー-->
            <div class="head_top_news content_full">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bosyu.png" alt="募集する">
                <img class="news_banner_mobile" src="<?php echo get_stylesheet_directory_uri(); ?>/img/bannar_news_mobile.png" alt="プログラマー募集" />
            </div>

            <!--画像イメージ領域-->
            <div class="img_sec content_full">

                <div class="bgs"></div><!--スライダーの画像はヘッダー内で差し替え-->

                <!--トップページのコピー部分-->
                <div class="top-copy">
                    <p class="bigtext">
                        iT<span>で</span><br>
                        人<span>と</span>技術<span>と</span>人<span>を</span><br>
                        繋<span class="just">いでいく</span>
                    </p>
                    <p class="small-text">
                        カンマンはすべての発信する人を応援する<br>
                        徳島のWeb制作会社です。
                    </p>
                </div>

            </div>

            <?php elseif( is_post_type_archive('work') || is_tax() ) :?>

            <div class="banner-sec">
            </div>

            <?php else :?>

            <?php
            // パンくずを読み込む
            get_template_part( 'breadcrumb' ); ?>

            <?php endif ; //トップページのみ ?>
