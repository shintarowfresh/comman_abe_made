<?php
/*
*Template Name: company-prof
*会社概要専用テンプレート
*/
?>

<?php get_header(); ?>

<div class="content content_width" role="main">

    <div class="variable">
        <h3 class="sub_title">inf<span>o</span>mation</h3>
        <h5 class="sub_title st1">カンマンについて</h3>
    </div>

    <div class="inner">

        <div class="section">

            <div class="hr">
                <span class="line"></span>
                <h6>会社近景</h6>
            </div>

            <div class="my-gallery swipeshow">
                <ul class="slides">
                    <li class="slide"><img class="align-center" src="<?php echo get_stylesheet_directory_uri(); ?>/img/com-appear01.png" alt="会社外観"></li>
                    <li class="slide"><img class="align-center" src="<?php echo get_stylesheet_directory_uri(); ?>/img/com-appear03.png" alt="会社外観"></li>
                    <li class="slide"><img class="align-center" src="<?php echo get_stylesheet_directory_uri(); ?>/img/com-appear02.png" alt="会社外観"></li>
                </ul>

                <div class='dots'></div>
            </div>

        </div>

        <?php the_content(); // 記事を表示 ?>

    </div><!--/.inner-->
</div><!--/.content-->


<?php get_footer(); ?>
