<div id="breadcrumb" class="variable breadcrumb">

    <div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
        <a href="<?php echo home_url(); ?>" itemprop="url">
            <span class="pan-home" itemprop="title">カンマン｜徳島のweb制作会社です</span>
        </a>
    </div>


    <?php if( get_post_type()=='work' ) : //カスタム投稿のシングルページの場合 ?>

    <div>
        <a href="<?php echo home_url(); ?>/work/">制作実績</a>
    </div>

    <div class="this-post">
        <?php the_title(''); ?> 様
    </div>

    <?php elseif( is_single() ) : //ブログ投稿の場合 ?>

    <?php /*--- カテゴリーが階層化している場合に対応させる --- */ ?>
    <?php $postcat = get_the_category(); ?>
    <?php $catid = $postcat[0]->cat_ID; ?>
    <?php $allcats = array($catid); ?>
    <?php
    while(!$catid==0) {    /* すべてのカテゴリーIDを取得し配列にセットするループ */
    $mycat = get_category($catid);     /* カテゴリーIDをセット */
    $catid = $mycat->parent;     /* 上で取得したカテゴリーIDの親カテゴリーをセット */
    array_push($allcats, $catid);
    }
    array_pop($allcats);
    $allcats = array_reverse($allcats);
    ?>
    <?php /*--- 親カテゴリーがある場合は表示させる --- */ ?>
    <?php foreach($allcats as $catid): ?>
    <div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
        <a href="<?php echo get_category_link($catid); ?>" itemprop="url">
            <span itemprop="title"><?php echo get_cat_name($catid); ?></span>
        </a>
    </div>
    <?php endforeach; ?>

    <div class="post-tag">
        <?php the_tags( '', '' ); ?>
    </div>


    <?php /*--- 記事タイトル --- */ ?>
    <div class="this-post">この記事</div>



    <?php elseif( is_page() ) : //個別ページの場合 ?>


    <?php foreach ( array_reverse(get_post_ancestors($post->ID)) as $parid ) { ?>
    <div>
        <a href="<?php echo get_page_link( $parid );?>" title="<?php echo get_page($parid)->post_title; ?>">
            <?php echo get_page($parid)->post_title; ?></a>
    </div>
        <?php } ?>

    <div class="this-post">
        <?php the_title(''); ?>
    </div>








    <?php elseif( is_category() ) : //カテゴリーアーカイブページの場合 ?>

    <?php /*--- カテゴリーが階層化している場合に対応させる --- */ ?>
    <?php $catid = $cat; /* 表示中のカテゴリーIDをセット */ ?>
    <?php $allcats = array(); /* 親カテゴリーをセットする配列を初期化しておく */ ?>
    <?php
while(!$catid==0) {    /* すべてのカテゴリーIDを取得し配列にセットするループ */
    $mycat = get_category($catid);     /* カテゴリーIDをセット */
    $catid = $mycat->parent;     /* 上で取得したカテゴリーIDの親カテゴリーをセット */
    array_push($allcats, $catid);
}
array_pop($allcats);
$allcats = array_reverse($allcats);
    ?>
    <?php /*--- 親カテゴリーがある場合は表示させる --- */ ?>
    <?php foreach($allcats as $catid): ?>
    <div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
        <a href="<?php echo get_category_link($catid); ?>" itemprop="url">
            <span itemprop="title"><?php echo get_cat_name($catid); ?></span>
        </a>
    </div>
    <?php endforeach; ?>
    <?php /*--- 最下層のカテゴリ名を表示 --- */ ?>
    <div class="this-post"><?php single_cat_title(); ?></div>






    <?php elseif( is_tag() ) : //タグアーカイブページの場合 ?>

    <?php /*--- 親タグがある場合は表示させる --- */ ?>
    <?php foreach($allcats as $catid): ?>
    <div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
        <a href="<?php echo get_category_link($catid); ?>" itemprop="url">
            <span itemprop="title"><?php echo get_cat_name($catid); ?></span>
        </a>
    </div>
    <?php endforeach; ?>
    <?php /*--- タグ名の表示 --- */ ?>
    <div class="this-post"><?php single_cat_title(); ?></div>







    <?php elseif( is_author() ) : //投稿者ページの場合 ?>

    <div class="this-post">
        投稿者 : <?php the_author_meta('display_name', get_query_var('author')); ?>
    </div>



    <?php elseif( is_search() ) : //投稿者ページの場合 ?>

    <div class="this-post">
        検索結果
    </div>

    <?php endif ;?>

</div>
