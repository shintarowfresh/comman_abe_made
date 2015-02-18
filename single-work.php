<?php
/**
 * 制作委実績の個別投稿表示用テンプレート
 */
get_header(); ?>

<div class="content content_width" role="main">

    <div class="inner">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <article <?php post_class(); ?>>

            <header>
                <h1><?php the_title() ?></h1>
                <div class="single_cat_list">
                    <?php
                    // カスタム分類名
                    $taxonomy = 'work_category';

                    // パラメータ
                    $args = array(
                        // 投稿記事がないタームも取得
                        'hide_empty' => false
                    );

                    // カスタム分類のタームのリストを取得
                    $terms = get_terms( $taxonomy , $args );

                    if ( count( $terms ) != 0 ) {
                        echo '<ul class="tax_list">';

                        // タームのリスト $terms を $term に格納してループ
                        foreach ( $terms as $term ) {

                            $term = sanitize_term( $term, $taxonomy );
                            $term_link = get_term_link( $term, $taxonomy );
                            $tarmname = $tarm->slug;

                            // 投稿でタームのスラッグを選択していれば、current-catを付与
                            if ( is_object_in_term( get_the_ID(), $taxonomy, $term->slug ) ) {
                                echo '<li class="current-cat">';
                            } else {
                                echo '<li>';
                            }

                            // タームの名称を出力
                            echo '<a href="' . esc_url( $term_link ) . '">' . $term->name . '</a>';
                            echo '</li>';
                        }
                        echo '</ul>';
                    }
                    ?>
                </div>
            </header>

            <section>
                <?php if( get_field('thumbnail') ): ?>
                <div class="thum-just">
                    <div class="single_thumbnail" style=" background-image:url(<?php the_field('thumbnail'); ?>); background-repeat: no-repeat;"></div>
                </div>

                <?php endif; ?>

                <div class="post_content">
                    <?php the_content(); // 記事を表示 ?>
                    <p>アップロード：<time><?php the_time( 'Y.n.j' ); ?></time></p>
                </div>
            </section>

            <footer>
                <a class="btn" href="<?php the_field('link_url'); ?>" target="_blank">訪問する <i class="fa fa-external-link"></i></a>
            </footer>

        </article>

        <?php endwhile; endif; ?>

        <div class="three-one related-work">
            <h4 class="sub_title"><span>o</span>ther Work</h3>
            <h5 class="sub_title st1">関連する制作実績</h5>
            <ul class="three">
                <?php
                global $post;
                $term = array_shift(get_the_terms($post->ID, 'work_category')); //←ここが追加
                $args = array(
                    'numberposts' => 3, //８件表示(デフォルトは５件)
                    'post_type' => 'work', //カスタム投稿タイプ名
                    'taxonomy' => 'work_category', //タクソノミー名
                    'term' => $term->slug, //ターム名 ←ここが追加
                    'orderby' => 'rand', //ランダム表示
                    'post__not_in' => array($post->ID) //表示中の記事を除外
                );
                ?>
                <?php $myPosts = get_posts($args); if($myPosts) : ?>
                <?php foreach($myPosts as $post) : setup_postdata($post); ?>

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

                <?php endforeach; ?>
                <?php else : ?>
                <p>関連アイテムはまだありません。</p>
                <?php endif; wp_reset_postdata(); ?>
            </ul>
        </div>

        <a class="btn" href="/work/">制作実績一覧へ戻る</a>

    </div><!--/.inner-->
</div><!--/.content-->

<?php get_footer(); ?>
