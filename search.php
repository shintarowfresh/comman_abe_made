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

                <?php if (have_posts()) :  ?>

                <?php
                $allsearch =& new WP_Query("s=$s&showposts=-1");
                $key = esc_html($s, 1);
                $count = $allsearch->post_count;
                echo '<h1>&#8216;'.$key.'&#8217; で検索した結果：'.$count.' 件</h1>';
                ?>



                <?php get_template_part( 'module','workcat' ); ?>

                <p>さらに制作実績で絞り込んだ結果は以下です。</p>

                <?php while (have_posts()) : the_post(); ?>

                <article>
                    <div class="content-thum">

                        <?php if( get_field('thumbnail') ): ?>

                        <div class="img_container" style=" background-image:url(<?php the_field('thumbnail'); ?>); background-repeat: no-repeat;"></div>

                        <?php elseif(has_post_thumbnail()): ?>

                        <div class="img_container" style=" background-image:url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>); background-repeat: no-repeat;"></div>

                        <?php else :?>

                        <a href="<?php the_permalink(); ?>"><img src="http://devimg.com/150x150" width="150" height="150"></a>

                        <?php endif; ?>

                    </div>

                    <div class="content-main">

                        <header>

                            <h2 class="title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>

                        </header>

                        <section>

                            <?php the_excerpt(); // 記事の抜粋を表示 ?>

                        </section>

                        <footer>

                        </footer>


                    </div><!--/.content-main-->
                </article>




                <?php endwhile; else : ?>

                <p>お探しの単語にまつわる投稿はありません。</p>

                <p>別の単語でお探しいただくか、カテゴリーより選んで下さい。</p>

                <?php get_template_part( 'module','workcat' ); ?>

                <?php endif ;?>


            </div><!--/.main-->

            <div class="sub"><!--サイドバー-->

                <?php get_sidebar(); ?>

            </div><!--/.sub-->
        </div><!--/.inner-->

    </div><!--/.three-two-->

</div><!--/.content-->


<?php get_footer(); ?>
