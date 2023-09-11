 <?php get_header(); ?>

 <main>
     <section id="medical-main" class="l-medical__main">
         <div class="p-medical__main">
             <div class="p-medical__main-items">
                 <div class="p-medical__main-item">
                     <div class="p-medical__main-ttl-wrap">
                         <div class="p-medical__main-ttl">一般診療</div>
                         <div class="p-medical__main-subttl1">保険対象</div>
                     </div>
                     <div class="p-medical__main-btn-wrap">
                         <a href="/minami-dentalclinic/medical/" class="p-medical__main-btn">
                             <div class="p-medical__main-link">一般歯科</div>
                         </a>
                         <a href="/minami-dentalclinic/medical/" class="p-medical__main-btn">
                             <div class="p-medical__main-link">小児歯科</div>
                         </a>
                         <a href="/minami-dentalclinic/medical/" class="p-medical__main-btn">
                             <div class="p-medical__main-link">予防歯科</div>
                         </a>
                     </div>
                 </div>
                 <div class="p-medical__main-item">
                     <div class="p-medical__main-ttl-wrap">
                         <div class="p-medical__main-ttl">特殊診療</div>
                         <div class="p-medical__main-subttl2">実費</div>
                     </div>
                     <div class="p-medical__main-btn-wrap">
                         <a href="/minami-dentalclinic/medical/" class="p-medical__main-btn">
                             <div class="p-medical__main-link">入れ歯</div>
                         </a>
                         <a href="/minami-dentalclinic/medical/" class="p-medical__main-btn">
                             <div class="p-medical__main-link">矯正歯科</div>
                         </a>
                         <a href="/minami-dentalclinic/medical/" class="p-medical__main-btn">
                             <div class="p-medical__main-link">ホワイトニング</div>
                         </a>
                         <a href="/minami-dentalclinic/medical/" class="p-medical__main-btn">
                             <div class="p-medical__main-link">口腔外科</div>
                         </a>
                         <a href="/minami-dentalclinic/medical/" class="p-medical__main-btn">
                             <div class="p-medical__main-link">レーザー治療</div>
                         </a>
                     </div>
                 </div>
             </div>
         </div>
     </section>

     <section id="medical-items1" class="l-medical">
         <div class="l-medical__items">
             <div class="p-bg-item1"></div>
             <div class="p-medical">
                 <div class="p-medical__ttl">
                     <h2 class="c-ttl">一般診療</h2>
                 </div>
                 <div class="p-medical__items">
                     <?php
                        $args = array(
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'general', //タクソノミーを指定
                                    'field' => 'slug', //ターム名をスラッグで指定する
                                    'terms' => array('general') //表示したいタームをスラッグで指定
                                ),
                            ),
                            'post_type' => 'plan', //カスタム投稿名
                            'posts_per_page' => -1 //表示件数（-1で全ての記事を表示）
                        );
                        ?>
                     <?php query_posts($args); ?>
                     <?php if (have_posts()) : ?>
                         <?php while (have_posts()) : the_post(); ?>
                             <div class="p-medical__item">
                                 <div class="p-medical__item-top">
                                     <div class="p-medical__item-ttlwrap">
                                         <div class="p-medical__item-head"><?php the_title(); ?></div>
                                         <?php if (get_field('worries')) : ?>
                                             <div class="p-medical__item-lead"><?php the_field('worries'); ?></div>
                                         <?php endif; ?>
                                     </div>
                                     <div class="p-medical__item-label">
                                         <?php if (is_tax('general', 'general')) : ?>
                                             <img src="http://koshikibeam.website/minami-dentalclinic/wp-content/uploads/2023/07/medical_tag-01.png" alt="medical_tag-01">
                                         <?php elseif (is_tax('special', 'special')) : ?>
                                             <img src="http://koshikibeam.website/minami-dentalclinic/wp-content/uploads/2023/07/medical_tag-02.png" alt="medical_tag-02">
                                         <?php endif; ?>
                                     </div>
                                 </div>
                                 <div class="p-medical__item-body">
                                     <?php if (get_field('text')) : ?>
                                         <div class="p-medical__item-text"><?php the_field('text'); ?></div>
                                     <?php endif; ?>
                                     <div class="p-medical__item-img">
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
                                 </div>
                             </div>
                     <?php
                            endwhile;
                        endif;
                        ?>
                     <?php wp_reset_query(); ?>
                 </div>
             </div>
         </div>
         <div class="p-bg-item2"></div>
         <div class="p-bg-item3"></div>
         </div>
     </section>

     <section id="medical-items2" class="l-medical">
         <div class="l-medical__items">
             <div class="p-bg-item1"></div>
             <div class="p-medical">
                 <div class="p-medical__ttl">
                     <h2 class="c-ttl">特殊診療</h2>
                 </div>
                 <div class="p-medical__items">
                     <?php
                        $args = array(
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'special', //タクソノミーを指定
                                    'field' => 'slug', //ターム名をスラッグで指定する
                                    'terms' => array('special') //表示したいタームをスラッグで指定
                                ),
                            ),
                            'post_type' => 'plan', //カスタム投稿名
                            'posts_per_page' => -1 //表示件数（-1で全ての記事を表示）
                        );
                        ?>
                     <?php query_posts($args); ?>
                     <?php if (have_posts()) : ?>
                         <?php while (have_posts()) : the_post(); ?>
                             <div class="p-medical__item">
                                 <div class="p-medical__item-top">
                                     <div class="p-medical__item-ttlwrap">
                                         <div class="p-medical__item-head"><?php the_title(); ?></div>
                                         <?php if (get_field('worries')) : ?>
                                             <div class="p-medical__item-lead"><?php the_field('worries'); ?></div>
                                         <?php endif; ?>
                                     </div>
                                     <div class="p-medical__item-label">
                                         <?php if (is_tax('general', 'general')) : ?>
                                             <img src="http://koshikibeam.website/minami-dentalclinic/wp-content/uploads/2023/07/medical_tag-01.png" alt="medical_tag">
                                         <?php elseif (is_tax('special', 'special')) : ?>
                                             <img src="http://koshikibeam.website/minami-dentalclinic/wp-content/uploads/2023/07/medical_tag-02.png" alt="medical_tag">
                                         <?php endif; ?>
                                     </div>
                                 </div>
                                 <div class="p-medical__item-body">
                                     <?php if (get_field('text')) : ?>
                                         <div class="p-medical__item-text"><?php the_field('text'); ?></div>
                                     <?php endif; ?>
                                     <div class="p-medical__item-img">
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
                                 </div>
                             </div>
                     <?php
                            endwhile;
                        endif;
                        ?>
                     <?php wp_reset_query(); ?>
                 </div>
             </div>
             <div class="p-bg-item2"></div>
             <div class="p-bg-item3"></div>
         </div>
     </section>

 </main>

 <?php get_footer(); ?>