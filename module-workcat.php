<div class="cat_list">
    <a id="shutter" class="nonmover" href="javascript:void(0)">
        <span class="btn_cross"></span>
        <span>実績をカテゴリーから探す</span>
    </a>
    <div class="shutter">

        <?php
        // カスタム分類名
        $taxonomy = 'work_category';
        // パラメータ
        $args = array(
            // 子タームの投稿数を親タームに含める
            'pad_counts' => true,
            // 投稿記事がないタームも取得
            'hide_empty' => true
        );
        // カスタム分類のタームのリストを取得
        $terms = get_terms( $taxonomy , $args );

        if ( count( $terms ) != 0 ) {
            echo '<ul class="tarm-list">';
            // タームのリスト $terms を $term に格納してループ
            foreach ( $terms as $term ) {
                // タームのURLを取得
                $term = sanitize_term( $term, $taxonomy );
                $term_link = get_term_link( $term, $taxonomy );
                if ( is_wp_error( $term_link ) ) {
                    continue;
                }
                // 子タームの場合はCSSクラス付与
                if( $term->parent != 0 ) {
                    echo '<li class="children">';
                } else {
                    echo '<li>';
                }
                // タームのURLと名称を出力
                echo '<a href="' . esc_url( $term_link ) . '">' . $term->name . '(' . $term->count . ')</a>';
                echo '</li>';
            }

            echo '</ul>';
        }?>

       <h3>提供しているサービスの一覧</h3>

        <?php wp_nav_menu( array(
            'theme_location'=>'init-cat',
            'container'     =>'',
            'menu_class'    =>'',
            'items_wrap'    =>'<ul id="in-catlist-menu">%3$s</ul>'));
        ?>

        <?php get_search_form(); ?>

    </div><!--/.shutter-->
</div><!--/.cat_list-->
