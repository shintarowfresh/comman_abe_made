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

        <aside class="banner--square">
            <!--ブログのバナー-->
            <a href="/category/staff-blog/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/banner/blog.jpg" alt="スタッフブログ"></a>
        </aside>

        <?php if( is_single() ) :?>
        <aside>
        <div class="side-fav-posts">
            <h3><i class="fa fa-trophy"></i> 人気記事ランキング</h3>

            <?php my_pop_list( 3, 5 ); ?>

        </div>
        </aside>
        <?php endif ;?>


        <aside>
            <a href="http://www.comman.co.jp/tag/%E3%81%86%E3%81%95%E3%81%8E/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/banner/sano.jpg" alt="さのさんはウサギ愛がすごい"></a>
        </aside>

        <aside>
            <a href="http://konkatsu-sns.com/?m=portal&a=page_user_top"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/banner/konkatu.jpg" alt="婚活SNS"></a>
        </aside>

        <aside class="banner--square">
            <!--C2のバナー-->
            <a href="http://www.s-henkan.com/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/banner/c2.jpg" alt="C2"></a>
        </aside>

    <?php endif ;?>

    </div><!--/.fix-->

    <?php endif ;?>

</div><!--/#sidebar-->
