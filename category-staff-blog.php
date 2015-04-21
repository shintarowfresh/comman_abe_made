<?php
/**
 * ブログアーカイブページのテンプレート
 *
 *
 */
get_header(); ?>

<div class="content content_width" role="main">

    <div class="feat-posts inner">

        <div class="feat-posts__inner">

            <div class="feat-carousel">
                <?php $args = array(
                    'date_query' => array(
                        array('after'=>'-2 weeks')
                    ),
                    'posts_per_page'=>'-1',
                    'tag' => 'feat',
                ); ?>

                <?php $query = new WP_Query( $args ); ?>
                <?php if( $query->have_posts() ) : ?>
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>

                <div>
                    <a href="<?php the_permalink(); ?>">
                        <div class="feat-posts__thum">
                            <img class="feat-posts__icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/feat.png" alt="注目の記事">
                            <?php the_post_thumbnail('single-eye'); ?>
                        </div>

                        <div class="feat-posts__title">
                            <h2 itemprop="name" class="title entry-title"><?php the_title(); ?></h2>
                        </div>
                    </a>
                </div>

                <?php endwhile; wp_reset_postdata(); ?>
                <?php else : ?>
                Not Found.
                <?php endif; ?>
            </div>

        </div><!-- /.feat-posts__inner -->

    </div><!-- /.feat-posts -->

    <div class="three-two">

        <div class="inner">

            <div class="main">

                <h3 class="sec-mein-head">新着記事！</h3>

                <div class="container">

                    <?php
                    // カテゴリーアーカイブ用のテンプレート呼び出し
                    get_template_part( 'content-catstaff' ); ?>

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
