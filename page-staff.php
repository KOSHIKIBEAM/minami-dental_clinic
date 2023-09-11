 <?php get_header(); ?>

 <main>
     <section id="director" class="l-staff__director">
         <div class="l-staff__director-inner">
             <div class="p-staff__ttl">
                 <h2 class="c-ttl">院長のあいさつ</h2>
             </div>
             <div class="p-staff__director">
                 <div class="p-staff__director-greeting">
                     <div class="p-staff__director-greeting-top">
                         <div class="p-staff__director-body">
                             <div class="p-staff__director-body-top">
                                 <div class="p-staff__director-head">気軽に相談できる <br>街の歯医者さんでありたい。</div>
                                 <div class="p-staff__director-text">当院は治療はもちろん、予防歯科にも力を入れておりますので、お口に関する相談だけでもお越しいただきたいと考えております。<br><br> 「患部を直すこと」より「未然に防ぐこと」が最も良い歯科医療と言えますので、些細なことでも気軽に話せる街の歯医者さんとして、明るい街づくりに貢献していきたいと考えております。</div>
                             </div>
                             <div class="p-staff__director-body-bottom">
                                 <div class="p-staff__director-clinicname">みなみ歯科クリニック</div>
                                 <div class="p-staff__director-directorname"> 院長　南 俊雄</div>
                             </div>
                         </div>
                     </div>
                     <div class="p-staff__director-picture u-hidden-pc">
                         <img src="http://koshikibeam.website/minami-dentalclinic/wp-content/uploads/2023/07/staff1.png" alt="staff1">
                     </div>
                     <div class="p-staff__director-greeting-bottom">
                         <div class="p-staff__director-career">
                             <div class="c-subttl1">
                                 <h2>経歴</h2>
                             </div>
                             <div class="p-staff__director-career-wrap">
                                 <div class="p-staff__director-career-text">2004年</div>
                                 <div class="p-staff__director-career-text">東京医科歯科大学歯学部 卒業</div>
                             </div>
                             <div class="p-staff__director-career-wrap">
                                 <div class="p-staff__director-career-text">2008年</div>
                                 <div class="p-staff__director-career-text">東京歯科大学歯学研究科大学院修了<br> 博士(歯学)取得</div>
                             </div>
                             <div class="p-staff__director-career-wrap">
                                 <div class="p-staff__director-career-text">2012年</div>
                                 <div class="p-staff__director-career-text">みなみ歯科クリニック 開院</div>
                             </div>
                         </div>
                         <div class="p-staff__director-license">
                             <div class="c-subttl1">
                                 <h2>資格</h2>
                             </div>
                             <div class="p-staff__director-license-wrap">
                                 <div class="p-staff__director-license-name">歯科医師臨床研修指導歯科医</div>
                                 <div class="p-staff__director-license-name">博士(歯学)</div>
                                 <div class="p-staff__director-license-name">衛生検査技師</div>
                             </div>

                         </div>
                     </div>
                 </div>
                 <div class="p-staff__director-picture u-hidden-sp u-hidden-tab">
                     <img src="http://koshikibeam.website/minami-dentalclinic/wp-content/uploads/2023/07/staff1.png" alt="staff1">
                 </div>
             </div>
         </div>
     </section>

     <!-- Slider main container -->
     <div class="swiper_2 swiper">
         <!-- Additional required wrapper -->
         <div class="swiper-wrapper">
             <!-- Slides -->
             <div class="swiper-slide"><img src="http://koshikibeam.website/minami-dentalclinic/wp-content/uploads/2023/07/staff-slider1.png" alt="staff-slider"></div>
             <div class="swiper-slide"><img src="http://koshikibeam.website/minami-dentalclinic/wp-content/uploads/2023/07/staff-slider1-1.png" alt="staff-slider"></div>
             <div class="swiper-slide"><img src="http://koshikibeam.website/minami-dentalclinic/wp-content/uploads/2023/07/staff-slider1-2.png" alt="staff-slider"></div>
             <div class="swiper-slide"><img src="http://koshikibeam.website/minami-dentalclinic/wp-content/uploads/2023/07/staff-slider1-3.png" alt="staff-slider"></div>
             <div class="swiper-slide"><img src="http://koshikibeam.website/minami-dentalclinic/wp-content/uploads/2023/07/staff-slider1-4.png" alt="staff-slider"></div>
         </div>
     </div>

     <section id="staff" class="l-staff__dh">
         <div class="l-staff__dh-inner">
             <div class="p-staff__ttl">
                 <h2 class="c-ttl">スタッフ紹介</h2>
             </div>
             <div class="p-staff__dh">
                 <div class="p-staff__dental-hygienist">
                     <div class="c-subttl2">
                         <h2>歯科衛生士</h2>
                     </div>
                     <div class="p-staff__items">

                         <?php
                            $args = array(
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'dental-hygienist', //タクソノミーを指定
                                        'field' => 'slug', //ターム名をスラッグで指定する
                                        'terms' => array('dental-hygienist') //表示したいタームをスラッグで指定
                                    ),
                                ),
                                'post_type' => 'staffs', //カスタム投稿名
                                'posts_per_page' => -1 //表示件数（-1で全ての記事を表示）
                            );
                            ?>
                         <?php query_posts($args); ?>
                         <?php if (have_posts()) : ?>
                             <?php while (have_posts()) : the_post(); ?>
                                 <div class="p-staff__item">
                                     <div class="p-staff__item-img">
                                         <?php
                                            if (has_post_thumbnail()) {
                                                // アイキャッチ画像が設定されてればミディアムサイズで表示
                                                the_post_thumbnail('full');
                                            } else {
                                                // なければnoimage画像をデフォルトで表示
                                                echo '<img src="http://koshikibeam.website/minami-dentalclinic/wp-content/uploads/2023/08/no-img.jpg" alt="no-img">';
                                            }
                                            ?>
                                     </div>
                                     <div class="p-staff__item-body">
                                         <div class="p-staff__item-jobname">歯科衛生士</div>
                                         <div class="p-staff__item-name"><?php the_title(); ?></div>
                                     </div>
                                     <table>
                                         <tbody>
                                             <?php if (get_field('birthplace')) : ?>
                                                 <tr>
                                                     <th>出身地</th>
                                                     <td><?php the_field('birthplace'); ?></td>
                                                 </tr>
                                             <?php endif; ?>
                                             <?php if (get_field('hobby')) : ?>
                                                 <tr>
                                                     <th>趣味</th>
                                                     <td><?php the_field('hobby'); ?></td>
                                                 </tr>
                                             <?php endif; ?>
                                             <?php if (get_field('favorite_food')) : ?>
                                                 <tr>
                                                     <th>好きな食べ物</th>
                                                     <td><?php the_field('favorite_food'); ?></td>
                                                 </tr>
                                             <?php endif; ?>
                                         </tbody>
                                     </table>
                                 </div>
                         <?php
                                endwhile;
                            endif;
                            ?>
                         <?php wp_reset_query(); ?>

                         <div class="p-staff__dental-assistant">
                             <div class="c-subttl2">
                                 <h2>歯科助手</h2>
                             </div>
                             <div class="p-staff__items">
                                 <?php
                                    $args = array(
                                        'tax_query' => array(
                                            array(
                                                'taxonomy' => 'dental-assistant', //タクソノミーを指定
                                                'field' => 'slug', //ターム名をスラッグで指定する
                                                'terms' => array('dental-assistant') //表示したいタームをスラッグで指定
                                            ),
                                        ),
                                        'post_type' => 'staffs', //カスタム投稿名
                                        'posts_per_page' => -1 //表示件数（-1で全ての記事を表示）
                                    );
                                    ?>
                                 <?php query_posts($args); ?>
                                 <?php if (have_posts()) : ?>
                                     <?php while (have_posts()) : the_post(); ?>
                                         <div class="p-staff__item">
                                             <div class="p-staff__item-img">
                                                 <?php
                                                    if (has_post_thumbnail()) {
                                                        // アイキャッチ画像が設定されてればミディアムサイズで表示
                                                        the_post_thumbnail('full');
                                                    } else {
                                                        // なければnoimage画像をデフォルトで表示
                                                        echo '<img src="http://koshikibeam.website/minami-dentalclinic/wp-content/uploads/2023/08/no-img.jpg" alt="no-img">';
                                                    }
                                                    ?>
                                             </div>
                                             <div class="p-staff__item-body">
                                                 <div class="p-staff__item-jobname">歯科衛生士</div>
                                                 <div class="p-staff__item-name"><?php the_title(); ?></div>
                                             </div>
                                             <table>
                                                 <tbody>
                                                     <?php if (get_field('birthplace')) : ?>
                                                         <tr>
                                                             <th>出身地</th>
                                                             <td><?php the_field('birthplace'); ?></td>
                                                         </tr>
                                                     <?php endif; ?>
                                                     <?php if (get_field('hobby')) : ?>
                                                         <tr>
                                                             <th>趣味</th>
                                                             <td><?php the_field('hobby'); ?></td>
                                                         </tr>
                                                     <?php endif; ?>
                                                     <?php if (get_field('favorite_food')) : ?>
                                                         <tr>
                                                             <th>好きな食べ物</th>
                                                             <td><?php the_field('favorite_food'); ?></td>
                                                         </tr>
                                                     <?php endif; ?>
                                                 </tbody>
                                             </table>
                                         </div>
                                 <?php
                                        endwhile;
                                    endif;
                                    ?>
                                 <?php wp_reset_query(); ?>
                             </div>
                         </div>
                     </div>
                 </div>
     </section>
 </main>

 <?php get_footer(); ?>