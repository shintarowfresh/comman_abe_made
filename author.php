<?php
/**
 * アーカイブ用のテンプレート
 *
 *
 */
get_header(); ?>

<div class="content content_width" role="main">

    <div class="three-two">
        <div class="inner">
            <div class="main">

                <h2><i class="fa fa-database"></i> <?php wp_title(''); ?>：記事一覧</h2>

                <div class="container">
                    <?php
                    // content.php を読み込む
                    get_template_part( 'content' ); ?>
                </div><!--/.container-->

                <div id="next">
                    <a class="btn nonmover" href="<?php echo next_posts(0, false); ?>">次を読み込む</a>
                    <img id="loading" src="<?php echo get_template_directory_uri() ?>/img/icon-loading.gif" alt="読み込み中">
                </div>

            </div><!--/.main-->

            <div class="sub"><!--サイドバー-->

                <?php get_sidebar(); ?>

            </div><!--/.sub-->
        </div><!--/.inner-->
    </div><!--/.three-two-->

</div><!--/.content-->

<?php get_footer(); ?>
