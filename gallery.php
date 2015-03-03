<?php if(!is_mobile()): ?>

<div class="site-gallery">
    <ul>
        <?php
$args = array(
    'posts_per_page' => 15 ,
    'post_type' =>work,
    'orderby'   => 'rand'
);
$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
        <li>

            <div class="gallery-thum">



                <?php if( get_field('thumbnail') ): ?>
                <a href="<?php the_permalink() ?>">
                    <img src="<?php the_field('thumbnail'); ?>" alt="<?php the_title() ?>">
                </a>

                <h2 class="gallery__title">
                    <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                </h2>

                <?php endif; ?>

            </div><!--/.gallery-thum-->

        </li>

        <?php endforeach; /* ループの終了 */ ?>
        <?php wp_reset_postdata(); /* 取得したデータのリセット */ ?>
    </ul>
</div>

<?php endif; ?>


