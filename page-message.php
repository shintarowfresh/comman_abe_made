<?php
/*
*メッセージページ用のテンプレート
*/
?>

<?php get_header(); ?>

<div class="content content_width" role="main">

    <article <?php post_class(); ?>>

        <header>

            <div class="variable">
                <h3 class="sub_title">Message</h3>
                <h5 class="sub_title st1">私たちが出来ること</h5>
            </div>

        </header>

        <section>

           <div class="inner">
               <?php the_content(); // 記事を表示 ?>


               <h2>私たちがカンマンです</h2>

               メンバー

            </div>

        </section>

        <footer>
            <div class="variable">
                <p class="foot-p">［最終更新日］<?php the_modified_date('Y/m/d') ?></p>
            </div>
        </footer>

    </article>

</div><!--/.content-->


<?php get_footer(); ?>
