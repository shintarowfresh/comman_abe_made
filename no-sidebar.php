<?php
/*
Template Name: no-sidebar
*/
?>

<?php get_header(); ?>

<div class="content content_width" role="main">

    <article <?php post_class(); ?>>

        <header>

        <?php if( is_page( 'price' ) ) :?>

            <div class="variable">
                <h3 class="sub_title">Price</h3>
                <h5 class="sub_title st1">お見積もり</h5>
            </div>

        <?php elseif( is_page( 'recruit' ) ) :?>

            <div class="variable">
                <h3 class="sub_title">Recruit</h3>
                <h5 class="sub_title st1">求人情報について</h5>
            </div>

        <?php elseif( is_page( 'works' ) ) :?>

            <div class="variable">
                <h3 class="sub_title">Service</h3>
                <h5 class="sub_title st1">カンマンに出来ること</h5>
            </div>


            <?php elseif( is_page( 'contact' ) ) :?>

            <div class="variable">
                <h3 class="sub_title">C<span>o</span>ntact</h3>
                <h5 class="sub_title st1">お問い合わせについて</h5>
            </div>

        <?php elseif( is_page( 'flow' ) ) :?>
            <div class="variable">
                <h3 class="sub_title">fr<span>o</span>w</h3>
                <h5 class="sub_title st1">制作の流れ</h5>
            </div>
        <?php else :?>

            <h2><?php the_title(); ?></h2>

        <?php endif ;?>

        </header>

        <section>

           <div class="inner">
               <?php the_content(); // 記事を表示 ?>
           </div>

        </section>

        <footer>
            <div class="variable">
                <span class="last-updated">最終更新日:<?php the_modified_date('Y/m/d') ?></span>
            </div>

        </footer>

    </article>

</div><!--/.content-->


<?php get_footer(); ?>
