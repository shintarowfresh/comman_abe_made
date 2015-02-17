<?php
/**
 * カスタム投稿「」用のテンプレート
 *
 *
 */
 
get_header(); ?>


    <div class="main wrapper clearfix">
    
    <div class="content">
    
    カスタム投稿のアレ！
    
    <p class="disc001"><?php the_field('add'); ?></p>
    
<?php 
$image = get_field('photo');
$size = 'item_img';
if( $image ) {

	echo wp_get_attachment_image( $image, $size );

}
?>
    
    <?php
    // content.php を読み込む
    get_template_part( 'content' ); ?>
    
    
        <ul>
            <li><?php the_taxonomies( $args ); ?> </li>
        </ul>
    
    
    
    
    
    </div>
    
    <?php get_sidebar(); ?>
    
    </div> <!-- #main -->



<?php get_footer(); ?>