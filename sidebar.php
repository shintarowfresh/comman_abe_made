<?php
/**
 * サイトバー
 *
 *
 *
 */
?>

<div id="sidebar" class="sidebar">

    <?php if( is_child('works')):?>

    <a href="http://www.s-henkan.com/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/banner/c2.jpg" alt="C2"></a>

    <?php else :?>

    <div id="fix" class="fix">

        <aside>

            <?php if ( is_active_sidebar( 'sidebar-main' ) ) : ?>

        </aside>


        <?php dynamic_sidebar( 'sidebar-main' ); ?>


        <?php else : ?>

        <p>カンマンって制作会社でしょ？
            イエス！ 制作会社のやっている自社メディア「カンマンブログ」</p>

        </aside>

           <aside>

               <p>カンマンはLINE@始めました！</p>

           </aside>

    <aside class="banner--square">
        <a href="http://www.s-henkan.com/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/banner/c2.jpg" alt="C2"></a>
    </aside>

           <aide>
               <img src="http://placehold.it/300x300" />
           </aide>

    <aide>
        <img src="http://placehold.it/300x300" />
    </aide>

            <aside>
                広告枠
            </aside>

            <aside>
                結構実績があります。
                徳島婚活SNS
            </aside>



    <?php endif; ?>

</div><!--/.fix-->

    <?php endif ;?>

</div><!--/#sidebar-->
