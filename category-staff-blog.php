<?php
/**
 * アーカイブ用のテンプレート
 *
 *
 */
get_header(); ?>

<div class="content content_width" role="main">

  <?php if( !is_mobile() ) :?>

    <div class="feat-posts inner">

      <div class="feat-posts__inner">

        <h3>注目の記事！</h3>

      <ul>
        <?php $args = array(
          'posts_per_page'=>'4',
    'tag' => 'feat',
); ?>

<?php $query = new WP_Query( $args ); ?>
<?php if( $query->have_posts() ) : ?>
    <?php while ( $query->have_posts() ) : $query->the_post(); ?>

      <li>
        <a href="<?php the_permalink(); ?>">
          <div class="feat-posts__thum">
            <?php the_post_thumbnail('single-eye'); ?>
          </div>

        <div class="feat-posts__title">
          <h2 itemprop="name" class="title entry-title"><?php the_title(); ?></h2>
        </div>
      </a>
      </li>

    <?php endwhile; wp_reset_postdata(); ?>
<?php else : ?>
    Not Found.
<?php endif; ?>
      </ul>
    </div><!-- /.feat-posts__inner -->
    </div><!-- /.feat-posts -->

<?php endif ; //モバイルの時は出さない ?>

    <div class="three-two">
        <div class="inner">
            <div class="main">

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
