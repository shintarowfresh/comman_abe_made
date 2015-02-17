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
ページ。
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

            <aside>
                モバイル対応の最適解
                C2
            </aside>

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
