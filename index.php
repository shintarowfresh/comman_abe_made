<?php
/**
 * メインのテンプレートファイル
 *
 * WordPressテーマに必要な2つのテンプレートファイルのうち最も基本的なもの（もう一つは style.css）。
 * 特定のクエリに一致しない時にページを表示するため読み込まれる。
 * 例: home.phpファイルが存在しない時に使われる。
 * 詳しくは Codex へ: http://codex.wordpress.org/Template_Hierarchy
 *
 */
get_header(); ?>

<div class="content content_width" role="main">

    <div class="three-two">
        <div class="inner">
            <div class="main">
            

                <?php
                // content.php を読み込む
                get_template_part( 'content' ); ?>

            </div><!--/.main-->

            <div class="sub"><!--サイドバー-->

                <?php get_sidebar(); ?>

            </div><!--/.sub-->
        </div><!--/.inner-->
    </div><!--/.three-two-->

</div><!--/.content-->

<?php get_footer(); ?>
