<?php
/**
* #.# 制作実績のアーカイブ用テンプレート
*
*
*/
get_header(); ?>


<div class="content content_width" role="main">

    <div class="variable">
       <h3 class="sub_title">W<span>o</span>rks</h3>
       <h5 class="sub_title st2">制作実績</h5>
   </div>

    <div class="inner">

       <p>Webサイト構築だけではありません。<br>
       カンマンは技術力を武器に、あなたの「かなえたいこと」を強力にサポート出来ます。
       </p>

        <a class="btn__works" href="/works/">「カンマンの出来ること」を見てみる <i class="fa fa-arrow-circle-o-right"></i></a>

        <?php get_template_part( 'module','workcat' ); ?>

        <?php if(is_tax()): ?>

        <h2 class="tarm_title">
            <i class="fa fa-cube"></i> <?php single_tag_title(); ?>
        </h2>

        <?php endif ;?>

        <div class="container">

            <div class="three-one">
                <ul class="three">
                    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

                    <li>
                        <article>

                            <?php if( get_field('thumbnail') ): ?>
                            <a href="<?php the_permalink() ?>">
                                <div class="img_container" style=" background-image:url(<?php the_field('thumbnail'); ?>); background-repeat: no-repeat;"></div>
                            </a>
                            <?php endif; ?>

                            <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>

                            <?php if(is_post_type_archive( 'work' ) ):?>
                            <div class="cat_tarm_link">
                                <?php the_terms($post->ID,'work_category','',''); ?>
                            </div>
                            <?php endif ;?>

                        </article>
                    </li>

                    <?php endwhile; // end of the loop. ?>
                </ul>
            </div>
        </div>

        <div id="next">
            <a class="btn nonmover" href="<?php echo next_posts(0, false); ?>">さらに読み込む</a>
            <img id="loading" src="<?php echo get_template_directory_uri() ?>/img/icon-loading.gif" alt="読み込み中">
        </div>

    </div><!--/.inner-->


</div><!--/.content-->



<?php get_footer(); ?>
