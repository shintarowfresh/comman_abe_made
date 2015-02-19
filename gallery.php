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
                <a href="<?php the_permalink() ?>">
                    <?php if( get_field('thumbnail') ): ?>
                    <img src="<?php the_field('thumbnail'); ?>" alt="<?php the_title() ?>">
                    <?php endif; ?>
                </a>
            </div>

        </li>

        <?php endforeach; /* ループの終了 */ ?>
        <?php wp_reset_postdata(); /* 取得したデータのリセット */ ?>
    </ul>
</div>

<?php endif; ?>


