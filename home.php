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

           <h2>世界のウェブサイトの数は1000000000を突破しました。</h2>

           <div class="social-btn">
               <ul>
                   <li class="tt"><a href="https://twitter.com/share" class="twitter-share-button" data-lang="ja">ツイート</a></li>
                   <li class="ff"><div class="fb-like" data-href="https://www.facebook.com/comman.inc" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div></li>
                   <li class="gg"><div class="g-plusone" data-annotation="inline" data-width="300"></div></li>
               </ul>
           </div>

           <p>ちなみにこれ「10<strong>おく</strong>」です。</p>

           <p><a href="http://www.afpbb.com/articles/-/3026121">世界のウェブサイト数、10億件を突破　写真1枚　国際ニュース：AFPBB News</a></p>

           <h3><i class="fa fa-comment-o"></i> 10億サイト！？　今からホームページを作ってももう遅い？　そんなことはありません。</h3>

           <h3><i class="fa fa-comment-o"></i> あなたのページはネットの中で主張できていますか？　確認できていますか？</h3>

           <p>インターネットの歴史は<strong>とにかく浅い</strong>んです。</p>

           <p>webの進化はすさまじいですが、それでもwebを使っての実践的な発信は<strong class="good">まだまだ始まったばかり。</strong></p>

           <p>もしあなたが<strong class="bad">乗り遅れてしまった</strong>と感じているのであれば、<strong class="good">問題ありません。</strong></p>

           <p><strong>するっと手になじんで、更新しやすく、制作会社だけに頼らないwebページ運営が可能だったら</strong>、webでもっとワクワク出来ませんか？</p>

           <h4 class="balloon">こんなお悩み、もってませんか？？</h4>

           <ul class="problem">
               <li><i class="fa fa-check-square-o"></i> webページを作りたいけど、誰に頼んでいいかわからない！　<strong>しっかり作ってサポートしてくれる人は誰？</strong></li>
               <li><i class="fa fa-check-square-o"></i> webページを管理する人と上手くコミュニケーション出来ない。<strong>何を言っているのかわからない！</strong></li>
               <li><i class="fa fa-check-square-o"></i> web担当者の<strong>モチベーションが落ちている！</strong></li>
           </ul>

           <p>とっても多いお悩みですが、解決するのは<strong class="bad">意外と大変</strong>ですよね。</p>

           <p>webをとりまくアレコレさえクリアーできれば、<strong>あなたはあなたの得意で生産的なことに時間をもっと使えるはずです。</strong></p>

           <h3><i class="fa fa-question-circle"></i> カンマンは何ができるの？　他とどう違うの？</h3>

           <p>カンマンはホームページ制作・システム開発の分野で<strong class="good">16年の実績</strong>がある徳島のホームページ制作会社です。</p>

           <p>webページを作ることはもちろん、運用や集客面でのサポートも、また、ネットを使って起きたトラブルにもトータルでサポート出来る確かな技術力をもってます。</p>

           <p>このホームページにはサンプルをたくさん用意しました。</p>

           <p>サンプルを見てビビッと来るものがあれば<a href="">簡単なフォーム</a>よりお問い合わせ下さい。<a href="">webサイト作成以外のご相談</a>もお気軽にどうぞ。</p>

           <h4 class="balloon">お電話にてお問い合わせのお客様へ</h4>

           <h4><strong><i class="fa fa-phone"></i> 088 - 611 - 2333</strong> 「ホームページを見て電話しました」</h4>

           <p>あなたのwebを使った発信のお手伝いが出来れば幸いです。</p>

           <a class="btn__works" href="/message/">カンマンについて、より詳しく <i class="fa fa-arrow-circle-o-right"></i></a>
           <a class="btn__works" href="/contact/">フォームからお問い合わせを送る <i class="fa fa-arrow-circle-o-right"></i></a>

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
                                    <li><h2 class="title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2></li>
                                    <li><span class="date metatext"><?php the_time('Y.n.j'); ?></span></li>
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
