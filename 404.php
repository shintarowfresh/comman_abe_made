<?php
/**
 * 404ページ
 *
 * URLの打ち間違いや、削除したページにアクセスされた時に表示するテンプレート
 *
 */
get_header(); ?>

<div class="content content_width" role="main">

    <div class="three-two">
        <div class="inner">
            <div class="main">

                <h3 class="sub_title">4<span>o</span>4</h3>
                <h5 class="sub_title">お探しのページは見つかりません。</h5>

                <p>とはいえ、せっかくお越し頂いたので、検索窓などいかがでしょうか？</p>

                <?php get_search_form(); ?>

            </div><!--/.main-->

            <div class="sub"><!--サイドバー-->

                <?php get_sidebar(); ?>

            </div><!--/.sub-->
        </div><!--/.inner-->
    </div><!--/.three-two-->

</div><!--/.content-->

<?php get_footer(); ?>
