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

               <div class="member three-one">
                   <ul class="three">
                       <li>
                           <div class="member__photo">
                               <img src="" alt="">
                           </div>
                           <div class="member__name">
                               <span class="name">貝出 康</span>
                               <span class="position">General Manager</span>
                           </div>
                       </li>

                       <li>
                           <div class="member__photo">
                               <img src="" alt="">
                           </div>
                           <div class="member__name">
                               <span class="name">小川 裕司</span>
                               <span class="position">Wed Director</span>
                           </div>
                       </li>

                       <li>
                           <div class="member__photo">
                               <img src="" alt="">
                           </div>
                           <div class="member__name">
                               <span class="name">板東 勝也</span>
                               <span class="position">Chief technical officer</span>
                           </div>
                       </li>

                       <li>
                           <div class="member__photo">
                               <img src="" alt="">
                           </div>
                           <div class="member__name">
                               <span class="name">白い たつ也</span>
                               <span class="position">Web Hengineer</span>
                           </div>
                       </li>

                       <li>
                           <div class="member__photo">
                               <img src="" alt="">
                           </div>
                           <div class="member__name">
                               <span class="name">佐野 春香</span>
                               <span class="position">Designer</span>
                           </div>
                       </li>

                       <li>
                           <div class="member__photo">

                               <img class="cover" src="<?php echo get_stylesheet_directory_uri(); ?>/img/member/abe/cover.png" alt="abe">


                              <div id="abe">
                                  <img class="rollerblade-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/member/abe/abe05.png" alt="abe">
                              </div>


                           </div>
                           <div class="member__name">
                               <span class="name">阿部 信太郎</span>
                               <span class="position">Front-end Engineer</span>
                           </div>
                       </li>

                       <li>
                           <div class="member__photo">
                               <img class="cover" src="<?php echo get_stylesheet_directory_uri(); ?>/img/member/abe/cover.png" alt="abe">

                                  <div id="fujikawa">
                                   <img class="rollerblade-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/member/abe/abe05.png" alt="abe">
                               </div>

                           </div>
                           <div class="member__name">
                               <span class="name">藤川 真菜</span>
                               <span class="position">Intern</span>
                           </div>
                       </li>

                   </ul>
               </div>

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
