<?php
/**
* ヘッダー
*
* <head> セクション
*
*/
?><!DOCTYPE html>
<!--[if lt IE 7]>
<html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]>
<html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]>
<html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<?php if(is_mobile()):?>
<html <?php language_attributes(); ?>>
<?php else :?>
<html <?php language_attributes(); ?> class="no-js">
<?php endif ;?>

<!--<![endif]-->
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?php wp_title(); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico" type="image/vnd.microsoft.icon">
<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico" type="image/vnd.microsoft.icon">

<link rel="apple-touch-icon" href="apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="apple-touch-icon-152x152.png">

<?php wp_enqueue_script( 'modernizr',get_template_directory_uri() . '/js/modernizr.js', array('jquery'), null ); ?>

    <?php if(is_category('staff-blog')):?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/bower_components/slick.js/slick/slick-theme.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/bower_components/slick.js/slick/slick.css">
    <?php endif ;?>

<?php wp_head(); ?>



<!--[if lt IE 9]>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/respond.min.js"></script>
<![endif]-->


<!--

　 　 　 　 　 　 _
　　　　　 　 /´　｀ヽ、＿__ ／⌒ｉ
.　　　　　　 { 　⌒ﾞヽ } ｉ {　｀ヽ　ｊ
　　　　　　　〉　　 　 ｊ　i ｉ 　 　〈
　　　　　　 ,′　　 　 　 　 　 　 ',
　　　 　 　 { __ 　 （●　 ●）　__ ｊ
.　　　　 　 ﾊ´　　　　 Ｏ　　　 ｀/
　　 　 　 ん ﾍ、三三人三三≠
.　 　 　 ∧　　/´￣｀) ー=彡/
　 　 　 ﾊ. 　 /　 ｀T′　ｰ=７
　　　　厂　 ,′ ｰ=!_ﾉ 　　 ,{　 　 　 ∠⌒)
　　 　 {ﾆ　 { 　　 ノ}ヽ　 ≠ﾊ　　 ∠ｰ／
　　　　Ⅶ、 ﾞく　　　　 イ／ ∧　∧y'
　　　　 Ⅵ‐　 　 ￣　 　 ／ ノ∨ｰ/
. 　 　 　 〉=　　　　　　　 ／／∧/
　 　 　 ∧=-　　　　　　　　 ／ /＼
　 　 　 {＝=-　　　　__ 　　　／ 　 ﾉヽ、
　　　　 ∨＝=-　　　{ `'＜_ノﾉ　 　 　 ＼
　　 　 　 ﾞく ノ　　　　ｊ　　　 `'ｰ-=　、　　＼
　　　　　 　 ｀フ=　　/　　　　　 　 　 ∨ノ　 }
　　　　　　 （_（（＿ノ　　　　　　　　 　 `ー '′

# We are comman inc.
-->

</head>

<?php if(is_page('company')): ?>
<body <?php body_class(); ?> onload="initialize();">
<?php else :?>
<body <?php body_class(); ?>>
<?php endif ;?>
    <h1 class="semantic"><?php wp_title(); ?></h1>

<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

    <div id="fb-root"></div>

        <div id="wrapper" class="wrapper">

            <img class="load" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-loading.gif" alt="ローディング">

            <!--ヘッダー部分-->
            <div class="head">

                <div class="variable">
                    <a class="panel_btn  nonmover" href="javascript:void(0)"><span class="panel_btn_icon" return false;></span></a>
                    <a class="panel_btn_pc  nonmover" href="javascript:void(0)"><span class="panel_btn_icon" return false;></span></a>

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
            <div id="panel" class="panel ">
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
                                    <a class="omission" href="<?php the_permalink();?>"><?php the_title(); ?></a>
                                    <span>(<?php the_time('Y.n.j'); ?>)</span>
                                </li>

                                <?php endforeach; /* ループの終了 */ ?>
                                <?php wp_reset_postdata(); /* 取得したデータのリセット */ ?>

                            </ul>
                        </div>

                        <div class="box_1">

                            <h3><i class="fa fa-youtube-play faa-pulse animated"></i>カンマンチャンネルの最新動画</h3>

                            <div class="video">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/BIB67qrmE74?list=PLuFK1lOCb7Od20M1WaIh7doNg6GmJ5eGJ&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div><!--/.col-->
                </div><!--/.variable-->
            </div><!--/.panel-->

            <?php if (is_home()): //トップページのみ ?>

            <!--お知らせバナー-->
            <div class="head_top_news content_full">
                <a href="/recruit/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bosyu.png" alt="募集する">
                <img class="news_banner_mobile" src="<?php echo get_stylesheet_directory_uri(); ?>/img/bannar_news_mobile.png" alt="プログラマー募集" /></a>
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
                        徳島のホームページ制作会社です。
                    </p>
                </div>

            </div>

            <?php elseif( is_post_type_archive('work') || is_tax() ) :?>

            <div class="banner-sec">
            </div>

            <?php elseif( is_category('staff-blog') ) :?>

            <div id="blog-header">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blog-head-logo.png" alt="かんマンのブログ！" id="blog-header-logo">
                <h5 class="blog-head-text">カンマンのオウンドメディア</h5>
            </div>

            <?php else :?>

            <?php
            // パンくずを読み込む
            get_template_part( 'breadcrumb' ); ?>

            <?php endif ; //トップページのみ ?>
