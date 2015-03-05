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
                               <img class="cover" src="<?php echo get_stylesheet_directory_uri(); ?>/img/member/kaide/cover.jpg" alt="bando">

                               <div id="kaide">
                                   <img class="rollerblade-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/member/kaide/kaide01.jpg" alt="bando"></div>

                           </div>
                           <div class="member__name">
                               <span class="name">貝出 康</span>
                               <span class="position">General Manager</span>
                           </div>

                           <div class="member__sns">

                               <?php if( get_field('blog' ,'user_5') ||get_field('twitter' ,'user_5') ||get_field('facebook' ,'user_5') ) :?>
                               <a href="javascript:void(0);" class="member__sns__btn nonmover"><i class="fa fa-bars"></i></a>
                               <?php endif ;?>

                               <ul id="m-s">
                                   <?php if( get_field('blog' ,'user_5') ) :?>
                                   <li>
                                       <a href="<?php the_field('blog', 'user_5'); ?>"><i class="fa fa-pencil"></i></a>
                                   </li>
                                   <?php endif ;?>

                                   <?php if( get_field('twitter' ,'user_5') ) :?>
                                   <li>
                                       <a href="https://twitter.com/<?php the_field('twitter', 'user_5'); ?>"><i class="fa fa-twitter"></i></a>
                                   </li>
                                   <?php endif ;?>

                                   <?php if( get_field('facebook' ,'user_5') ) :?>
                                   <li>
                                       <a href="<?php the_field('facebook', 'user_5'); ?>"><i class="fa fa-facebook-official"></i></a>
                                   </li>
                                   <?php endif ;?>
                               </ul>

                           </div>

                       </li>

                       <li>
                           <div class="member__photo">
                               <img class="cover" src="<?php echo get_stylesheet_directory_uri(); ?>/img/member/ogawa/cover.jpg" alt="bando">

                               <div id="ogawa">
                                   <img class="rollerblade-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/member/ogawa/ogawa01.jpg" alt="bando">
                               </div>
                           </div>
                           <div class="member__name">
                               <span class="name">小川 裕司</span>
                               <span class="position">Wed Director</span>
                           </div>

                           <div class="member__sns">

                               <?php if( get_field('blog' ,'user_3') ||get_field('twitter' ,'user_3') ||get_field('facebook' ,'user_3') ) :?>
                               <a href="javascript:void(0);" class="member__sns__btn nonmover"><i class="fa fa-bars"></i></a>
                               <?php endif ;?>

                               <ul id="m-s">
                                   <?php if( get_field('blog' ,'user_') ) :?>
                                   <li>
                                       <a href="<?php the_field('blog', 'user_'); ?>"><i class="fa fa-pencil"></i></a>
                                   </li>
                                   <?php endif ;?>

                                   <?php if( get_field('twitter' ,'user_') ) :?>
                                   <li>
                                       <a href="https://twitter.com/<?php the_field('twitter', 'user_'); ?>"><i class="fa fa-twitter"></i></a>
                                   </li>
                                   <?php endif ;?>

                                   <?php if( get_field('facebook' ,'user_') ) :?>
                                   <li>
                                       <a href="<?php the_field('facebook', 'user_'); ?>"><i class="fa fa-facebook-official"></i></a>
                                   </li>
                                   <?php endif ;?>
                               </ul>

                           </div>

                       </li>

                       <li>
                           <div class="member__photo">
                               <img class="cover" src="<?php echo get_stylesheet_directory_uri(); ?>/img/member/bando/cover.jpg" alt="bando">

                               <div id="bando">
                                   <img class="rollerblade-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/member/bando/bando01.jpg" alt="bando">
                               </div>
                           </div>

                           <div class="member__name">
                               <span class="name">板東 勝也</span>
                               <span class="position">Chief Technical Officer</span>
                           </div>

                           <div class="member__sns">

                               <?php if( get_field('blog' ,'user_3') ||get_field('twitter' ,'user_3') ||get_field('facebook' ,'user_3') ) :?>
                               <a href="javascript:void(0);" class="member__sns__btn nonmover"><i class="fa fa-bars"></i></a>
                               <?php endif ;?>

                               <ul id="m-s">
                                   <?php if( get_field('blog' ,'user_') ) :?>
                                   <li>
                                       <a href="<?php the_field('blog', 'user_'); ?>"><i class="fa fa-pencil"></i></a>
                                   </li>
                                   <?php endif ;?>

                                   <?php if( get_field('twitter' ,'user_') ) :?>
                                   <li>
                                       <a href="https://twitter.com/<?php the_field('twitter', 'user_'); ?>"><i class="fa fa-twitter"></i></a>
                                   </li>
                                   <?php endif ;?>

                                   <?php if( get_field('facebook' ,'user_') ) :?>
                                   <li>
                                       <a href="<?php the_field('facebook', 'user_'); ?>"><i class="fa fa-facebook-official"></i></a>
                                   </li>
                                   <?php endif ;?>
                               </ul>

                           </div>

                       </li>

                       <li>
                           <div class="member__photo">
                               <img class="cover" src="<?php echo get_stylesheet_directory_uri(); ?>/img/member/shirai/cover.jpg" alt="abe">

                               <div id="shirai">
                                   <img class="rollerblade-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/member/shirai/shirai01.jpg" alt="abe">
                               </div>
                           </div>
                           <div class="member__name">
                               <span class="name">白い たつ也</span>
                               <span class="position">Web Hengineer</span>
                           </div>

                           <div class="member__sns">

                               <?php if( get_field('blog' ,'user_3') ||get_field('twitter' ,'user_3') ||get_field('facebook' ,'user_3') ) :?>
                               <a href="javascript:void(0);" class="member__sns__btn nonmover"><i class="fa fa-bars"></i></a>
                               <?php endif ;?>

                               <ul id="m-s">
                                   <?php if( get_field('blog' ,'user_') ) :?>
                                   <li>
                                       <a href="<?php the_field('blog', 'user_'); ?>"><i class="fa fa-pencil"></i></a>
                                   </li>
                                   <?php endif ;?>

                                   <?php if( get_field('twitter' ,'user_') ) :?>
                                   <li>
                                       <a href="https://twitter.com/<?php the_field('twitter', 'user_'); ?>"><i class="fa fa-twitter"></i></a>
                                   </li>
                                   <?php endif ;?>

                                   <?php if( get_field('facebook' ,'user_') ) :?>
                                   <li>
                                       <a href="<?php the_field('facebook', 'user_'); ?>"><i class="fa fa-facebook-official"></i></a>
                                   </li>
                                   <?php endif ;?>
                               </ul>

                           </div>

                       </li>

                       <li>
                           <div class="member__photo member__photo-sano">

                               <img class="cover" src="<?php echo get_stylesheet_directory_uri(); ?>/img/member/sano/cover.jpg" alt="abe">

                               <div id="sano">

                                   <img class="rollerblade-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/member/sano/sano01.jpg" alt="abe">

                               </div>

                           </div>

                           <div class="member__name">
                               <span class="name">佐野 春香</span>
                               <span class="position">Designer</span>
                           </div>

                           <div class="member__sns">

                               <?php if( get_field('blog' ,'user_3') ||get_field('twitter' ,'user_3') ||get_field('facebook' ,'user_3') ) :?>
                               <a href="javascript:void(0);" class="member__sns__btn nonmover"><i class="fa fa-bars"></i></a>
                               <?php endif ;?>

                               <ul id="m-s">
                                   <?php if( get_field('blog' ,'user_') ) :?>
                                   <li>
                                       <a href="<?php the_field('blog', 'user_'); ?>"><i class="fa fa-pencil"></i></a>
                                   </li>
                                   <?php endif ;?>

                                   <?php if( get_field('twitter' ,'user_') ) :?>
                                   <li>
                                       <a href="https://twitter.com/<?php the_field('twitter', 'user_'); ?>"><i class="fa fa-twitter"></i></a>
                                   </li>
                                   <?php endif ;?>

                                   <?php if( get_field('facebook' ,'user_') ) :?>
                                   <li>
                                       <a href="<?php the_field('facebook', 'user_'); ?>"><i class="fa fa-facebook-official"></i></a>
                                   </li>
                                   <?php endif ;?>
                               </ul>

                           </div>

                       </li>

                       <li>
                           <div class="member__photo">

                               <img class="cover" src="<?php echo get_stylesheet_directory_uri(); ?>/img/member/abe/cover.jpg" alt="abe">


                              <div id="abe">
                                  <img class="rollerblade-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/member/abe/abe01.jpg" alt="abe">
                              </div>


                           </div>
                           <div class="member__name">
                               <span class="name">阿部 信太郎</span>
                               <span class="position">Front-end Engineer</span>
                           </div>

                           <div class="member__sns">

                               <?php if( get_field('blog' ,'user_2') ||get_field('twitter' ,'user_2') ||get_field('facebook' ,'user_2') ) :?>
                               <a href="javascript:void(0);" class="member__sns__btn nonmover"><i class="fa fa-bars"></i></a>
                               <?php endif ;?>

                               <ul id="m-s">
                                   <?php if( get_field('blog' ,'user_2') ) :?>
                                   <li>
                                       <a href="<?php the_field('blog', 'user_2'); ?>"><i class="fa fa-pencil"></i></a>
                                   </li>
                                   <?php endif ;?>

                                   <?php if( get_field('twitter' ,'user_2') ) :?>
                                   <li>
                                       <a href="https://twitter.com/<?php the_field('twitter', 'user_2'); ?>"><i class="fa fa-twitter"></i></a>
                                   </li>
                                   <?php endif ;?>

                                   <?php if( get_field('facebook' ,'user_2') ) :?>
                                   <li>
                                       <a href="<?php the_field('facebook', 'user_2'); ?>"><i class="fa fa-facebook-official"></i></a>
                                   </li>
                                   <?php endif ;?>
                               </ul>

                           </div>
                       </li>

                       <li>
                           <div class="member__photo">

                               <img class="cover" src="<?php echo get_stylesheet_directory_uri(); ?>/img/member/fujikawa/cover.jpg" alt="fujikawa">

                                  <div id="fujikawa">
                                   <img class="rollerblade-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/member/fujikawa/fujikawa01.jpg" alt="abe">
                               </div>

                           </div>
                           <div class="member__name">
                               <span class="name">藤川 真菜</span>
                               <span class="position">Intern</span>
                           </div>
                       </li>

                       <li>
                           <a class="party-people nonmover" href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/party.jpg" alt="パーティーしようぜ"></a>
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
