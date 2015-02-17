<?php
/**
 * 個別投稿「スタッフブログ」「お知らせ」用のテンプレート
 *
 *
 */
get_header(); ?>

<div class="content content_width" role="main">

    <div class="three-two">
        <div class="inner">
            <div class="main">

                <?php
                // content.php を読み込む
                get_template_part( 'content' ); ?>

                <?php comments_template(); ?>

            </div><!--/.main-->

            <div class="sub"><!--サイドバー-->

                <?php get_sidebar(); ?>

            </div><!--/.sub-->
        </div><!--/.inner-->
    </div><!--/.three-two-->

</div><!--/.content-->

<?php get_footer(); ?>
