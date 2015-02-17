<div class="three-one under-post-cont">

<div class="inner">

<h3 class="sub_title">W<span>o</span>ks</h3>
<h5 class="sub_title st1">カンマンの制作実績</h5>

<div class="btns">
<a class="btn-works" href="/work/">制作実績一覧を見る <i class="fa fa-arrow-circle-o-right"></i></a>
<a class="btn-works" href="/contact/">お問い合わせ <i class="fa fa-pencil-square-o"></i></a>
</div>

<ul class="three">

<?php
$args = array(
'posts_per_page' => 3 ,
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
</ul>
</div>
</li>

<?php endforeach; /* ループの終了 */ ?>
<?php wp_reset_postdata(); /* 取得したデータのリセット */ ?>

</ul>
</div>

</div><!--/.three-one-->