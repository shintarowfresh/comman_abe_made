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

            <?php if( is_category( 'staff-blog' )  ) :?>

                <h3 class="sub_title">staff Bl<span>o</span>g</h3>
                <h5 class="sub_title st1"><?php wp_title(''); ?></h5>

            <?php else :?>

                <h2 class="main-title"><?php wp_title(''); ?></h2>

            <?php endif ;?>

                <div class="container">
                      <?php
                        // content.php を読み込む
                        get_template_part( 'content' ); ?>
                  </div>

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
