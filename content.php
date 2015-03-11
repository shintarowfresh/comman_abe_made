<?php
/**
 * ループの中身の部分
 */
 ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

    <article <?php post_class(); ?>>

        <?php if( !is_single()) : ?>

        <?php if(has_post_thumbnail()): ?>
        <div class="content-thum">
            <a href="<?php the_permalink(); ?>" style=" display: block; background-image:url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>); background-repeat: no-repeat;"><?php the_post_thumbnail(); ?></a>

            <?php
            $days = 1;
            $today = date_i18n('U');
            $entry = get_the_time('U');
            $elapsed = date('U',($today - $entry)) / 43200;
            if( $days > $elapsed ){
                echo '<span class="new">本日更新！</span>';
            }
            ?>

        </div><!--/.content-thum-->
        <?php else :?>
        <div class="content-thum">
            <a href="<?php the_permalink(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/no-thum.png" alt="サムネイルはありません"></a>

            <?php
            $days = 1;
            $today = date_i18n('U');
            $entry = get_the_time('U');
            $elapsed = date('U',($today - $entry)) / 86400;
            if( $days > $elapsed ){
                echo '<span class="new">本日更新！</span>';
            }
            ?>
        </div><!--/.content-thum-->
        <?php endif ;?>
        <?php endif ; ?>

        <div itemscope itemtype="http://schema.org/Article" class="content-main">

            <header>

                <time itemprop="datePublished" content="<?php the_time( 'Y-n-j' ); ?>"><?php the_time( 'Y.n.j' ); ?></time>

                <?php if( is_single() ) :?>

                <span class="meta tag"><i class="fa fa-tags"></i> <?php the_tags( '', '' ); ?></span>

                <h2 itemprop="name" class="title">
                    <?php the_title(); ?>
                </h2>
                <?php else :?>

                <span class="auther-name"><i class="fa fa-pencil"></i> <span itemprop="author" itemscope itemtype="http://schema.org/Person"><span itemprop="name"><?php the_author_meta('nickname'); ?></span></span></span>

                <h2 class="title">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <?php endif ;?>


                <div class="single__meta-data">

                   <?php if( is_single() ) :?>
                    <div class="who-wrote">
                        <span class="auther-name"><i class="fa fa-pencil"></i> <span itemprop="author" itemscope itemtype="http://schema.org/Person"><span itemprop="name"><?php the_author_meta('nickname'); ?></span></span></span>
                    </div>
                    <?php endif ;?>

                    <div class="share-count">

                        <?php if( is_single() ) : ?>
                        <span><?php if(function_exists('scc_get_share_total')) echo scc_get_share_total(); ?><span>shares</span></span>
                        <?php else : ?>
                        <span><i class="fa fa-twitter-square"></i><?php if(function_exists('scc_get_share_twitter')) echo scc_get_share_twitter(); ?></span> <span><i class="fa fa-facebook-official"></i><?php if(function_exists('scc_get_share_facebook')) echo scc_get_share_facebook(); ?></span> <span><i class="fa fa-hatena"></i><?php if(function_exists('scc_get_share_hatebu')) echo scc_get_share_hatebu(); ?></span>
                        <?php endif ; ?>

                    </div>
                </div>



            </header>

            <section itemprop="articleBody">

                <?php if ( is_singular() ) : ?>

                <div class="content-thum">
                    <?php echo get_the_post_thumbnail($post->ID, 'single-eye',array('data-lazy' => 'false')); ?>
                </div><!--/.content-thum-->


                <?php if(strpos(get_the_content(),'id="more-')) :
                global $more; $more = 0;
                the_content(''); ?>


                <?php
                $mycontent = $post->post_content;
                $word = mb_strlen(strip_tags($mycontent));
                $m = floor($word / 600)+1;
                $est = ($m == 0 ? '' : $m) ;
                ?>

                <div class="read-later">
                    <span class="countdown">この記事を読了するためには約 <b><?php echo $est; ?></b> 分必要です。</span>

                    <span>
                        <a class="nonmover btn--twitter" href="http://twitter.com/share?text=後で読む。//<?php the_title(); ?>&url=<?php the_permalink(); ?>&hashtags=#カンマン" onClick="window.open(encodeURI(decodeURI(this.href)), 'tweetwindow', 'width=650, height=470, personalbar=0, toolbar=0, scrollbars=1, sizable=1'); return false;" rel="nofollow"><i class="fa fa-twitter"></i> 後で読む</a>
                    </span>
                    <span>

                        <a href="http://b.hatena.ne.jp/entry/<?php the_permalink(); ?>" class="hatena-bookmark-button" data-hatena-bookmark-title="<?php the_title(); ?>" data-hatena-bookmark-layout="standard-balloon" data-hatena-bookmark-lang="ja" title="このエントリーをはてなブックマークに追加"><img src="https://b.st-hatena.com/images/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a>

                    </span>
                    <span>
                        <a data-pocket-label="pocket" data-pocket-count="horizontal" class="pocket-btn" data-lang="en"></a>
                    </span>

                </div><!--/.read-later-->


                <?php $more = 1;
                the_content('', true );
                else : the_content();
                endif; ?>

                <?php else: ?>

                    <?php the_excerpt(); // 記事の抜粋を表示 ?>

                <?php endif; ?>

            </section>

            <footer>

                <?php if ( is_singular() ) : ?>
                <p>この記事は「<?php the_category(' '); ?>」カテゴリーです。</p>

                <div class="fb-like scale" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>

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
                            <a class="btn__sns nonmover" href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php echo $canonical_url_encode;?>&title=<?php echo $title_encode;?>" onclick="window.open(this.href, 'FBwindow', 'width=550, height=350, menubar=no, toolbar=no, scrollbars=yes'); return false;"><i class="fa fa-hatena"></i>はてブ<span><?php if(function_exists('get_scc_hatebu')) echo get_scc_hatebu(); ?></span></a>
                        </li>
                        <li class="b-pocket">
                            <a class="btn__sns nonmover" href="http://getpocket.com/edit?url=<?php echo $canonical_url_encode;?>&title=<?php echo $title_encode;?>" onclick="window.open(this.href, 'FBwindow', 'width=550, height=350, menubar=no, toolbar=no, scrollbars=yes'); return false;"><i class="fa icon-pocket"></i>pocket<span><?php if(function_exists('get_scc_pocket')) echo get_scc_pocket(); ?></span></a>
                        </li>

                        <li class="b-line">
                                <a href="http://line.me/R/msg/text/?<?php the_title(); ?>%0D%0A<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/linebutton_30x30.png" width="30" height="30" alt="LINEで送る" /></a>

                        </li>

                    </ul>

                </div><!--/.share-->

            </div><!--/.cta-->

            <div class="col">
                <div class="box_2 col__under">
                    <h3 class="col__under-posts"><i class="fa fa-facebook-official"></i> FBページをいいね！で応援よろしくお願いします！</h3>

                    <div class="fb-like" data-href="https://www.facebook.com/comman.inc?ref=notif&amp;notif_t=page_new_likes" data-width="300" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>

                </div>
                <div class="box_2 col__under">
                    <div class="author">

                        <h3><i class="fa fa-pencil"></i> この記事を書いた人</h3>

                        <?php
                        $author_id = get_the_author_meta( 'ID' );
                        $author_badge = get_field('author_badge', 'user_'. $author_id ); // image field, return type = "Image Object"
                        ?>
                        <!--<img src="<?php echo $author_badge['url']; ?>" alt="<?php echo $author_badge['alt']; ?>" />-->

                        <div class="sep">
                            <div class="thum">
                                <span class="auther-photo"><img src="<?php the_field('author-photo', 'user_'. $author_id); ?>" alt="<?php the_author_meta('nickname'); ?>"></span>
                            </div>

                            <div class="main-sec">
                                <span class="auther-name"><?php the_author_meta('nickname'); ?></span>

                                <span class="author__responsible"><?php the_field('responsible', 'user_'. $author_id); ?></span>

                                <span class="auther-disc"><?php the_author_meta('description'); ?></span>

                                <span class="auther-link"><a href="<?php echo get_author_posts_url( $author_id ); ?>"><?php the_author_meta('nickname'); ?>が書いた他の記事をチェック！</a></span>
                            </div>
                        </div>

                    </div><!--/.author-->
                </div>
            </div>

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
                                );
                                $query = new WP_Query($args); ?>
                                <?php if( $query -> have_posts() && !empty($tag_ids) ): ?>
                                <?php while ($query -> have_posts()) : $query -> the_post(); ?>

                                <li>
                                    <div class="sep">
                                        <div class="thum">
                                            <?php if(has_post_thumbnail()): ?>

                                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

                                            <?php else :?>

                                            <a href="<?php the_permalink(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/no-thum.png" alt="サムネイルはありません"></a>

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
                                                <span><i class="fa fa-twitter-square"></i><?php if(function_exists('scc_get_share_twitter')) echo scc_get_share_twitter(); ?></span> <span><i class="fa fa-facebook-official"></i><?php if(function_exists('scc_get_share_facebook')) echo scc_get_share_facebook(); ?></span> <span><i class="fa fa-hatena"></i><?php if(function_exists('scc_get_share_hatebu')) echo scc_get_share_hatebu(); ?></span>
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

                                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

                                            <?php else :?>

                                            <a href="<?php the_permalink(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/no-thum.png" alt="サムネイルはありません"></a>

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
                                                <span><i class="fa fa-twitter-square"></i><?php if(function_exists('get_scc_twitter')) echo get_scc_twitter(); ?></span> <span><i class="fa fa-facebook-official"></i><?php if(function_exists('get_scc_facebook')) echo get_scc_facebook(); ?></span> <span><i class="fa fa-hatena"></i><?php if(function_exists('get_scc_hatebu')) echo get_scc_hatebu(); ?></span>
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
