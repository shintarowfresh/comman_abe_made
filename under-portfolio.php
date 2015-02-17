<?php
/*
*コンテンツ下用のテンプレート
*/
?>

<div class=" three-one section">
    <h2 class="sec_title">制作実績</h2>

    <ul class="three">

        <?php
        $args = array(
            'posts_per_page' => 3 ,
            'post_type' =>work
        );
        $myposts = get_posts( $args );
        foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
        <li>
            <a href="<?php the_permalink() ?>"><!--サムネ画像-->
                <?php if( get_field('thumbnail') ): ?>
                <div class="img_container" style=" background-image:url(<?php the_field('thumbnail'); ?>); background-repeat: no-repeat;"></div>
                <?php endif; ?>
            </a>

            <div class="work_meta_box">
                <ul>
                    <li><span class="date metatext"><?php the_time('Y.n.j'); ?></span></li>
                    <li><h2 class="title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2></li>
                    <li class="work_disc"><p><?php the_field('index_work_meta'); ?></p></li>
                </ul>
            </div>
        </li>

        <?php endforeach; /* ループの終了 */ ?>
        <?php wp_reset_postdata(); /* 取得したデータのリセット */ ?>

    </ul>

</div>
