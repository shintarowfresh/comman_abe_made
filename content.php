<?php
/**
 * ループの中身の部分
 */
 ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

    <article <?php post_class(); ?>>

        <div class="content-thum">

            <?php if(has_post_thumbnail()): ?>

                <?php if( is_single() ) : ?>

            <?php echo get_the_post_thumbnail($post->ID, 'single-eye',array('data-lazy' => 'false')); ?>

                <?php else :?>

                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>

                <?php endif ;?>

            <?php else :?>

            <a href="<?php the_permalink(); ?>"><img src="http://devimg.com/150x150" width="150" height="150"></a>

            <?php endif; ?>

        </div>

        <div class="content-main">

            <header>

                <time><?php the_time( 'Y.n.j' ); ?></time>

                <span class="meta tag"><i class="fa fa-tags"></i> <?php the_tags( '', '' ); ?></span>

                <?php if( is_single() ) :?>
                <h2 class="title">
                    <?php the_title(); ?>
                </h2>
                <?php else :?>
                <h2 class="title">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <?php endif ;?>


                <div class="share-count">

                    <span><?php if(function_exists('scc_get_share_total()')) echo scc_get_share_total(); ?><span>shares</span></span>

                </div>

            </header>

            <section>

                <?php if ( is_singular() ) : ?>

                    <?php the_content(); // 記事を表示 ?>

                <?php else: ?>

                    <?php the_excerpt(); // 記事の抜粋を表示 ?>

                <?php endif; ?>

            </section>

            <footer>

                <?php if ( is_singular() ) : ?>
                <p>この記事は「<?php the_category(' '); ?>」カテゴリーです。</p>

                <div class="fb-like" data-href="https://www.facebook.com/comman.inc" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>

                <?php else: ?>
                <?php endif; ?>

            </footer>

            <?php if( is_single() ) :?>

            <div class="cta">
                <div class="share">

                    <h3>シェアお願いします！</h3>

                    <?php
                    $canonical_url=get_permalink();//記事のURL取得
                    $title=wp_title( '', false, 'right' ).'｜'.get_bloginfo('name');//記事タイトル取得
                    $canonical_url_encode=urlencode($canonical_url);//記事URLエンコード
                    $title_encode=urlencode($title);//記事タイトルエンコード
                    ?>

                    <ul>
                        <li class="b-twitter">
                            <a class="btn__sns nonmover" href="http://twitter.com/share?url=<?php echo $canonical_url_encode;?>&text=<?php echo $title_encode;?>" onclick="window.open(this.href, 'FBwindow', 'width=550, height=350, menubar=no, toolbar=no, scrollbars=yes'); return false;"><i class="fa fa-twitter"></i>Twitter<span><?php if(function_exists('get_scc_twitter')) echo get_scc_twitter(); ?></span></a>
                        </li>
                        <li class="b-fb">
                            <a class="btn__sns nonmover" href="http://www.facebook.com/share.php?u=<?php echo $canonical_url_encode;?>" onclick="window.open(this.href, 'FBwindow', 'width=650, height=450, menubar=no, toolbar=no, scrollbars=yes'); return false;"><i class="fa fa-facebook-official"></i>シェア！<span><?php if(function_exists('get_scc_facebook')) echo get_scc_facebook(); ?></span></a>
                        </li>
                        <li class="b-hatena">
                            <a class="btn__sns nonmover" href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php echo $canonical_url_encode;?>&title=<?php echo $title_encode;?>" onclick="window.open(this.href, 'FBwindow', 'width=550, height=350, menubar=no, toolbar=no, scrollbars=yes'); return false;"><i class="fa fa-hatena"></i>はてブ<span><?php if(function_exists('get_scc_hatebu')) echo get_scc_facebook(); ?></span></a>
                        </li>
                        <li class="b-pocket">
                            <a class="btn__sns nonmover" href="http://getpocket.com/edit?url=<?php echo $canonical_url_encode;?>&title=<?php echo $title_encode;?>" onclick="window.open(this.href, 'FBwindow', 'width=550, height=350, menubar=no, toolbar=no, scrollbars=yes'); return false;"><i class="fa icon-pocket"></i>pocket<span><?php if(function_exists('get_scc_pocket')) echo get_scc_facebook(); ?></span></a>
                        </li>
                    </ul>

                </div><!--/.share-->

            </div><!--/.cta-->

            <div class="author">

                <h3><i class="fa fa-pencil"></i> この記事を書いた人</h3>

                <div class="sep">
                   <div class="thum">
                       <span class="auther-photo"><?php echo get_avatar( get_the_author_id(), 150 ); ?></span>
                   </div>
                   <div class="main-sec">
                       <span class="auther-name"><?php the_author_meta('nickname'); ?></span>
                       <span class="auther-disc"><?php the_author_meta('description'); ?></span>
                       <span class="auther-link"><a href="<?php echo get_author_posts_url( get_the_author_id() ); ?>"><?php the_author_meta('nickname'); ?>が書いた他の記事をチェック！</a></span>
                   </div>
               </div>

            </div><!--/.author-->

            <div class="one-more-post">
                <h3><i class="fa fa-newspaper-o"></i> もう１記事どうぞ！</h3>

                <ul class="tab">
                    <li class="select"><i class="fa fa-link"></i> 関連記事</li>
                    <li><i class="fa fa-heart-o"></i> 人気の記事</li>
                </ul>

                <ul class="tab-content">
                    <li>
                        <div class="related">
                            <ul>
                                <?php
                                //タグ情報から関連記事をランダムに呼び出す
                                $tags = wp_get_post_tags($post->ID);
                                $tag_ids = array();
                                foreach($tags as $tag):
                                array_push( $tag_ids, $tag -> term_id);
                                endforeach ;
                                $args = array(
                                    'post__not_in' => array($post -> ID),
                                    'posts_per_page'=> 5,
                                    'tag__in' => $tag_ids,
                                    'orderby' => 'rand',
                                );
                                $query = new WP_Query($args); ?>
                                <?php if( $query -> have_posts() && !empty($tag_ids) ): ?>
                                <?php while ($query -> have_posts()) : $query -> the_post(); ?>

                                <li>
                                    <div class="sep">
                                        <div class="thum">
                                            <?php if(has_post_thumbnail()): ?>

                                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>

                                            <?php else :?>

                                            <a href="<?php the_permalink(); ?>"><img src="http://devimg.com/150x150" width="150" height="150"></a>

                                            <?php endif; ?>

                                        </div>
                                        <div class="main-sec">

                                            <time><i class="fa fa-calendar"></i> <?php the_time( 'Y.n.j' ); ?></time>

                                            <h3 class="title">
                                                <a href="<?php echo esc_url(get_permalink($myposts->ID)); ?>">
                                                    <?php echo esc_html(get_the_title($myposts->ID)); ?>
                                                </a>
                                            </h3>

                                            <div class="share-count">
                                                <span><i class="fa fa-twitter-square"></i><?php if(function_exists('scc_get_share_twitter')) echo scc_get_share_twitter(); ?></span> <span><i class="fa fa-facebook-official"></i><?php if(function_exists('scc_get_share_facebook')) echo scc_get_share_facebook(); ?></span> <span><i class="fa fa-hatena"></i><?php if(function_exists('scc_get_share_hatebu')) echo scc_get_share_facebook(); ?></span>
                                            </div>
                                        </div>
                                    </div>

                                </li>

                                <?php endwhile;?>
                                <?php else:?>
                                <p>記事はありませんでした</p>
                                <?php
                                endif;
                                wp_reset_postdata();
                                ?>
                            </ul>
                        </div>
                    </li>

                    <li class="hide">
                        <div class="favorit-posts">

                            <ul>
                                <?php
                                $args = array(
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'meta_key' =>  'scc_share_count_total',
                                    'orderby'  =>  'meta_value_num',
                                    'posts_per_page' => 5
                                );

                                $myposts = new WP_Query($args);

                                if($myposts->have_posts()) : ?>
                                <?php while($myposts->have_posts()) : $myposts->the_post(); ?>


                                <li>
                                    <div class="sep">
                                        <div class="thum">
                                            <?php if(has_post_thumbnail()): ?>

                                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>

                                            <?php else :?>

                                            <a href="<?php the_permalink(); ?>"><img src="http://devimg.com/150x150" width="150" height="150"></a>

                                            <?php endif; ?>

                                        </div>
                                        <div class="main-sec">

                                            <time><i class="fa fa-calendar"></i> <?php the_time( 'Y.n.j' ); ?></time>

                                           <h3 class="title">
                                               <a href="<?php echo esc_url(get_permalink($myposts->ID)); ?>">
                                                   <?php echo esc_html(get_the_title($myposts->ID)); ?>
                                               </a>
                                           </h3>

                                            <div class="share-count">
                                                <span><i class="fa fa-twitter-square"></i><?php if(function_exists('get_scc_twitter')) echo get_scc_twitter(); ?></span> <span><i class="fa fa-facebook-official"></i><?php if(function_exists('get_scc_facebook')) echo get_scc_facebook(); ?></span> <span><i class="fa fa-hatena"></i><?php if(function_exists('get_scc_hatebu')) echo get_scc_facebook(); ?></span>
                                            </div>

                                        </div>
                                    </div>

                                </li>

                                <?php endwhile; ?>
                                <?php else : ?>
                                <p>記事が存在しません。</p>
                                <?php endif; wp_reset_postdata(); ?>

                            </ul>

                        </div>
                    </li>
                </ul>

            </div><!--/.one-more-post-->

            <?php endif ; ?><!--/.is_single-->

        </div><!--/.content-main-->

    </article>

<?php endwhile; // end of the loop. ?>
