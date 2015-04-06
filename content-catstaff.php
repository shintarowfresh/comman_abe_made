<?php
/**
 * スタッフブログアーカイブ用ループテンプレート
 */
 ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

    <article <?php post_class(); ?>>

        <div class="content-thum">

            <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('single-eye'); ?>
            </a>

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

        <div itemscope itemtype="http://schema.org/Article" class="content-main">

            <header>

                <?php
                $author_id = get_the_author_meta( 'ID' );
                $author_badge = get_field('author_badge', 'user_'. $author_id );
                ?>

                <time itemprop="datePublished" content="<?php the_time( 'Y-n-j' ); ?>"><span class="entry-date date updated"><?php the_time( 'Y.n.j' ); ?></span></time>

                <span class="auther-name"><i class="fa fa-pencil"></i> <span class="vcard author" itemprop="author" itemscope itemtype="http://schema.org/Person"><span class="fn" itemprop="name"><?php the_author_meta('nickname'); ?></span></span></span>

                <h2 class="title entry-title">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>


                <div class="single__meta-data">

                    <div class="share-count">

                        <span><i class="fa fa-twitter-square"></i><?php if(function_exists('scc_get_share_twitter')) echo scc_get_share_twitter(); ?></span> <span><i class="fa fa-facebook-official"></i><?php if(function_exists('scc_get_share_facebook')) echo scc_get_share_facebook(); ?></span> <span><i class="fa fa-hatena"></i><?php if(function_exists('scc_get_share_hatebu')) echo scc_get_share_hatebu(); ?></span>

                    </div>

                </div>

            </header>

            <section itemprop="articleBody">

                <?php the_excerpt(); // 記事の抜粋を表示 ?>

            </section>

            <footer>
            </footer>

        </div><!--/.content-main-->

    </article>

<?php endwhile; // end of the loop. ?>
