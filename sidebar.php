<?php
/**
 * サイトバー
 */
?>

<div id="sidebar" class="sidebar">

    <?php if( is_child('works')):?>

    <a href="http://www.s-henkan.com/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/banner/c2.jpg" alt="C2"></a>

    <?php else :?>

    <aside>

        <?php if ( is_active_sidebar( 'sidebar-main' ) ) : ?>

    </aside>

        <?php else : ?>

    <div id="fix" class="fix">

        <aside class="side-cat-list">
            <h3 class="sec-mein-head">カテゴリ</h3>
            <ul>
                <?php wp_list_categories('orderby=name&depth=2&exclude=1&title_li='); ?>
            </ul>
        </aside>

        <aside class="side-search">
            <?php get_search_form(); ?>
        </aside>

        <aside class="banner--square">

            <div class="banner--square-wrap">
                <!--ブログのバナー-->
                <a href="/category/staff-blog/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/banner/blog.jpg" alt="スタッフブログ"></a>
            </div>

        </aside>

        <aside class="banner--square">

            <div class="banner--square-wrap">

            <a href="http://www.comman.co.jp/tag/%E3%81%86%E3%81%95%E3%81%8E/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/banner/sano.jpg" alt="さのさんはウサギ愛がすごい"></a>
            </div>

        </aside>

        <aside>

            <div class="banner--square-wrap">

            <a href="http://konkatsu-sns.com/?m=portal&a=page_user_top"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/banner/konkatu.jpg" alt="婚活SNS"></a>

            </div>

        </aside>

        <aside class="banner--square">

            <div class="banner--square-wrap">
            <!--C2のバナー-->
            <a href="http://www.s-henkan.com/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/banner/c2.jpg" alt="C2"></a>
            </div>

        </aside>

        <?php endif ;?>

    </div><!--/.fix-->

    <?php endif ;?>

</div><!--/#sidebar-->
