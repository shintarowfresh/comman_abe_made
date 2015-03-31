<?php
/**
 * トップページ用のテンプレート
 *
 *
 */
get_header(); ?>

<div class="content content_width" role="main">

    <div class="index_info">
        <h3>お問い合わせをご希望のお客様へ</h3>

        <div class="inner">
            <ul>
                <li><a href="/company/#map_canvas">地図を見る</a></li>
                <li><a href="/company/#move-tel">電話をかける</a></li>
                <li><a href="/contact/">メールフォーム</a></li>
            </ul>
        </div>
    </div><!--/.index_info-->

    <div class="read-first">

       <div class="inner">

         <?php
          $post_2785 = get_post(2785);
          $content = $post_2785->post_content;
          $content = apply_filters('the_content', $content);
          $content = str_replace(']]>', ']]&gt;', $content);
          echo $content;
          ?>

       </div>
    </div><!--/.read-first-->

    <!-- 最近のお仕事 -->
    <div class="work_showcase three-one section">

        <div class="inner">

            <h3 class="sub_title">W<span>o</span>rks</h3>
            <h5 class="sub_title st1">制作物の紹介</h5>

            <ul class="three">

                <?php
                $args = array(
                    'posts_per_page' => 6 ,
                    'post_type' =>'work'
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

            <?php get_template_part( 'module','workcat' ); ?>

        </div><!--/inner-->

        <a href="/work/" class="btn__full">実績一覧</a>

    </div><!--/.work_showcase-->

    <!-- 2カラムスタート -->
    <div class="three-two">
        <div class="inner">

            <div class="main">
                <!--お知らせ記事ループ-->
                <div class="index_news section three-one">
                    <h4 class="sub_title">inf<span>o</span>mation</h4>
                    <h5 class="sub_title st1">カンマンからのお知らせ</h5>
                    <ul class="three">

                        <?php
                        $args = array(
                            'posts_per_page' => 3 ,//表示数
                            'category' => 1 //カテゴリー番号
                        );
                        $myposts = get_posts( $args );
                        foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

                        <li>
                            <span class="date metatext"><?php the_time('Y.n.j'); ?></span>
                            <h2 class="title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
                        </li>

                        <?php endforeach; /* ループの終了 */ ?>
                        <?php wp_reset_postdata(); /* 取得したデータのリセット */ ?>

                    </ul>

                    <a href="/category/news/" class="btn">more</a>
                </div><!--/index_news-->

                <!--ブログ用ループ-->
                <div class="index_blog section three-one">

                    <h4 class="sub_title">bl<span>o</span>g! bl<span>o</span>g! bl<span>o</span>g!</h4>
                    <h5 class="sub_title st2">スタッフブログ！</h5>
                    <ul class="three">

                    <?php
                    $args = array(
                    'posts_per_page' => 5 ,
                    'category' => 8
                    );
                    $myposts = get_posts( $args );
                    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

                        <li>
                            <a href="<?php the_permalink();?>">
                                <div class="img_container" style=" background-image:url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>); background-repeat: no-repeat;"></div>
                            </a>

                            <div class="index_news_metabox">
                                <ul>

                                    <li><span class="date metatext"><?php the_time('Y.n.j'); ?></span></li>
                                    <li><h2 class="title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2></li>
                                </ul>
                            </div>
                        </li>

                        <?php endforeach; /* ループの終了 */ ?>
                        <?php wp_reset_postdata(); /* 取得したデータのリセット */ ?>

                    </ul>

                    <a href="/category/staff-blog/" class="btn">more</a>

                </div><!--/index_blog-->
            </div><!--/.main-->

            <div class="sub"><!--サイドバー-->

                <?php get_sidebar(); ?>

            </div><!--/.sub-->

        </div><!--/.inner-->

    </div><!--/.three-two-->

</div><!--/.content-->

<?php get_footer(); ?>
