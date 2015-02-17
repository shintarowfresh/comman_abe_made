<?php
/**
Template Name: works-child
 *
 */
get_header(); ?>

<div class="content content_width" role="main">

    <div class="three-two">

        <div class="inner">

            <div class="main">

                <article <?php post_class(); ?>>

                    <header>

                        <h2><?php the_title(); ?></h2>

                    </header>

                    <section>
                        <?php the_content(); // 記事を表示 ?>
                    </section>

                    <footer>
                        <p class="last-p">［最終更新日］<?php the_modified_date('Y/m/d') ?></p>
                    </footer>

                </article>

                <?php
                //カテゴリーリスト
                get_template_part( 'module','workcat' ); ?>

            </div><!--/.main-->

            <div class="sub"><!--サイドバー-->

                <?php get_sidebar(); ?>

            </div><!--/.sub-->

        </div><!--/.inner-->

    </div><!--/.three-two-->

    <?php if ( is_page( 'rakuten' ) ) :?>

    <div class="inner">

        <h2>ショップサポート・ECサイト制作実績</h2>

        <div class="three-one">

            <ul class="three">

                <?php
                $args = array(
                    'posts_per_page' => 3 ,
                    'post_type' =>work ,
                    'tax_query' => array(
                        array(
                            'taxonomy'=>'work_category',
                            'field'=>'slug',
                            'terms' => array( 'rakuten-2', 'ec' ),
                        ),
                    )
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

        </div><!--/.three-one-->

    </div><!--/.inner-->

    <?php elseif ( is_page( 'system' ) ) :?>

    <div class="inner">

        <h2>システム開発実績</h2>

        <div class="three-one">

            <ul class="three">

                <?php
                $args = array(
                    'posts_per_page' => 3 ,
                    'post_type' =>work ,
                    'tax_query' => array(
                        array(
                            'taxonomy'=>'work_category',
                            'field'=>'slug',
                            'terms' => 'systems',
                        ),
                    )
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

        </div><!--/.three-one-->

    </div><!--/.inner-->

    <?php elseif ( is_page( 'sns' ) ) :?>

    <div class="inner">

        <h2>SNSサイト構築実績</h2>

        <div class="three-one">

            <ul class="three">

                <?php
                $args = array(
                    'posts_per_page' => 3 ,
                    'post_type' =>work ,
                    'tax_query' => array(
                        array(
                            'taxonomy'=>'work_category',
                            'field'=>'slug',
                            'terms' => 'sns',
                        ),
                    )
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

        </div><!--/.three-one-->

    </div><!--/.inner-->

    <?php elseif ( is_page( 'hosting' ) ) :?>

    <div class="inner">

        <h2>ホスティングサービス導入クライアント</h2>

        <div class="three-one">

            <ul class="three">

                <?php
                $args = array(
                    'posts_per_page' => 3 ,
                    'post_type' =>work ,
                    'tax_query' => array(
                        array(
                            'taxonomy'=>'work_category',
                            'field'=>'slug',
                            'terms' => 'hosting',
                        ),
                    )
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

        </div><!--/.three-one-->

    </div><!--/.inner-->

    <?php elseif ( is_page( 'kurumasagashi' ) ) :?>

    <div class="inner">

        <h2>クルマサガシ導入クライアント</h2>

        <div class="three-one">

            <ul class="three">

                <?php
                $args = array(
                    'posts_per_page' => 3 ,
                    'post_type' =>work ,
                    'tax_query' => array(
                        array(
                            'taxonomy'=>'work_category',
                            'field'=>'slug',
                            'terms' => 'kurumasagashi',
                        ),
                    )
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

        </div><!--/.three-one-->

    </div><!--/.inner-->

    <?php elseif ( is_page( 'dtp' ) ) :?>

    <?php elseif ( is_page( 'homepage' ) ) :?>

    <div class="inner">

        <h2>サイト制作実績</h2>

        <div class="three-one">

            <ul class="three">

                <?php
                $args = array(
                    'posts_per_page' => 3 ,
                    'post_type' =>work ,
                    'tax_query' => array(
                        array(
                            'taxonomy'=>'work_category',
                            'field'=>'slug',
                            'terms' => array( 'wordpress', 'homepage', 'responsive'),
                        ),
                    )
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

        </div><!--/.three-one-->

    </div><!--/.inner-->

    <?php endif ; ?>


</div><!--/.content-->

<?php get_footer(); ?>
