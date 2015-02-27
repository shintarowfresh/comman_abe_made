<?php
/**
 * 固定ページ用のテンプレート
 *
 *
 */
get_header(); ?>

<div class="content content_width" role="main">

    <div class="three-two">

        <div class="inner">
            <div class="main">

                <article <?php post_class(); ?>>

                    <header>

                    <?php if( is_page( 'contact' ) ) :?>

                        <h3 class="sub_title">C<span>o</span>ntact</h3>
                        <h5 class="sub_title st1">お問い合わせ</h5>

                    <?php else :?>

                        <h2><?php the_title(); ?></h2>

                    <?php endif ;?>

                    </header>

                    <section>
                        <?php the_content(); // 記事を表示 ?>
                    </section>

                    <footer>
                        <span class="last-updated">最終更新日:<?php the_modified_date('Y/m/d') ?></span>
                    </footer>

                </article>

            </div><!--/.main-->

            <div class="sub"><!--サイドバー-->

                <?php get_sidebar(); ?>

            </div><!--/.sub-->
        </div><!--/.inner-->

    </div><!--/.three-two-->

</div><!--/.content-->

<?php get_footer(); ?>
