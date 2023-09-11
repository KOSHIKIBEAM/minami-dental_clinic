 <?php get_header(); ?>

 <main>
     <!-- Slider main container -->
     <div class="p-swiper">
         <div class="swiper_1 swioer">
             <!-- Additional required wrapper -->
             <div class="swiper-wrapper">
                 <!-- Slides -->
                 <div class="swiper-slide">
                     <img class="u-hidden-sp" src="http://koshikibeam.website/minami-dentalclinic/wp-content/uploads/2023/07/top-01.png" alt="slide1">
                     <img class="u-hidden-pc u-hidden-tab" src="http://koshikibeam.website/minami-dentalclinic/wp-content/uploads/2023/07/top-01-sp.png" alt="slide1">
                     <div class="top-text">
                         <img src="<?php echo get_template_directory_uri(); ?>/img/01/top-text.png" alt="top-text.png">
                     </div>
                 </div>
                 <div class="swiper-slide">
                     <img class="u-hidden-sp" src="http://koshikibeam.website/minami-dentalclinic/wp-content/uploads/2023/07/top-02.png" alt="slide2">
                     <img class="u-hidden-pc u-hidden-tab " src="http://koshikibeam.website/minami-dentalclinic/wp-content/uploads/2023/07/top-02-sp.png" alt="slide2">
                     <div class="top-text">
                         <img src="<?php echo get_template_directory_uri(); ?>/img/01/top-text.png" alt="top-text.png">
                     </div>
                 </div>
                 <div class="swiper-slide">
                     <img class="u-hidden-sp" src="http://koshikibeam.website/minami-dentalclinic/wp-content/uploads/2023/07/top-03.png" alt="slide3">
                     <img class="u-hidden-pc u-hidden-tab" src="http://koshikibeam.website/minami-dentalclinic/wp-content/uploads/2023/07/top-03-sp.png" alt="slide3">
                     <div class="top-text">
                         <img src="<?php echo get_template_directory_uri(); ?>/img/01/top-text.png" alt="top-text.png">
                     </div>
                 </div>
             </div>
             <!-- If we need pagination -->
         </div>
         <div class="swiper-pagination"></div>
         <!-- If we need navigation buttons -->
         <div class="swiper-button-prev">
             <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="66" height="66" viewBox="0 0 66 66">
                 <defs>
                     <filter id="楕円形_426" x="0" y="0" width="66" height="66" filterUnits="userSpaceOnUse">
                         <feOffset dy="3" input="SourceAlpha" />
                         <feGaussianBlur stdDeviation="3" result="blur" />
                         <feFlood flood-opacity="0.161" />
                         <feComposite operator="in" in2="blur" />
                         <feComposite in="SourceGraphic" />
                     </filter>
                 </defs>
                 <g id="arrow-left" transform="translate(9 6)">
                     <g transform="matrix(1, 0, 0, 1, -9, -6)" filter="url(#楕円形_426)">
                         <circle id="楕円形_426-2" data-name="楕円形 426" cx="24" cy="24" r="24" transform="translate(9 6)" fill="#fff" />
                     </g>
                     <path id="パス_43758" data-name="パス 43758" d="M17.6,0V17.6H0" transform="translate(40.627 23.714) rotate(135)" fill="none" stroke="#c2c2c2" stroke-linecap="round" stroke-width="2" />
                 </g>
             </svg>

         </div>
         <div class="swiper-button-next">
             <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="66" height="66" viewBox="0 0 66 66">
                 <defs>
                     <filter id="楕円形_426" x="0" y="0" width="66" height="66" filterUnits="userSpaceOnUse">
                         <feOffset dy="3" input="SourceAlpha" />
                         <feGaussianBlur stdDeviation="3" result="blur" />
                         <feFlood flood-opacity="0.161" />
                         <feComposite operator="in" in2="blur" />
                         <feComposite in="SourceGraphic" />
                     </filter>
                 </defs>
                 <g id="arrow-right" transform="translate(9 6)">
                     <g transform="matrix(1, 0, 0, 1, -9, -6)" filter="url(#楕円形_426)">
                         <circle id="楕円形_426-2" data-name="楕円形 426" cx="24" cy="24" r="24" transform="translate(9 6)" fill="#fff" />
                     </g>
                     <path id="パス_43758" data-name="パス 43758" d="M17.6,17.6V0H0" transform="translate(19.818 11.269) rotate(45)" fill="none" stroke="#c2c2c2" stroke-linecap="round" stroke-width="2" />
                 </g>
             </svg>
         </div>
     </div>
     <div class="p-swiper__bottom">
         <div class="p-swiper__calendar">
             <img src="http://koshikibeam.website/minami-dentalclinic/wp-content/uploads/2023/07/medical-time-pc-1.png" alt="calendar">
         </div>
         <div class="p-swiper__info">
             <div class="p-swiper__info-top">
                 <div class="p-swiper__info-head">
                     <h2 class="p-swiper__info-ttl">お知らせ</h2>
                     <span class="p-swiper__info-sub">news</span>
                 </div>
                 <a href="http://koshikibeam.website/minami-dentalclinic/news/" class="p-swiper__info-link">過去のお知らせはこちら</a>
             </div>
             <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 1,
                    'no_found_rows' => true,  //ページャーを使う時はfalseに。
                );
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) :
                ?>
                 <!-- ループ前の開始タグ -->
                 <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                     <!-- 出力したい処理を記述 -->
                     <a href="http://koshikibeam.website/minami-dentalclinic/news/" class="p-swiper__info-body">
                         <time datetime="<?php the_time('c'); ?>" class="p-swiper__info-date"><?php the_time('Y/n/j'); ?></time>
                         <div class="p-swiper__info-newsttl"><?php the_title(); ?></div>
                     </a>

                 <?php endwhile; ?>
                 <!-- ループ後の閉じタグ -->
             <?php endif;
                wp_reset_postdata(); ?>
         </div>
     </div>

     <section id="top-concept" class="l-top__concept">
         <div class="p-top__concept">
             <div class="p-top__concept-items">
                 <div class="p-top__concept-body">
                     <h4 class="c-top__subttl">CONCEPT</h4>
                     <div class="p-top__concept-head">健康的で素敵な笑顔あふれる 街づくりを目指して</div>
                     <div class="p-top__concept-txt">私たちは最新の医療技術を追求すると共に、患者様とのコミュニケーションを大事することで、気軽に通いやすく些細なことでも相談できる「街の掛かり付け医」を目指しております。 お子様からご高齢の方まで、快適な空間で治療が受けられる場を作り、地域医療に貢献しきたいと考えております。</div>
                     <div class="p-top__concept-btn">
                         <a href="/minami-dentalclinic/about/" class="c-top__btn">当院について</a>
                     </div>
                 </div>
                 <div class="p-top__concept-img">
                     <img src="http://koshikibeam.website/minami-dentalclinic/wp-content/uploads/2023/07/concept-img1.png" alt="conceptimg">
                 </div>
             </div>
         </div>
     </section>
     <section id="top-recommend" class="l-top__recommend">
         <div class="p-top__recommend">
             <h2 class="c-ttl">当院の3つのおすすめ</h2>
             <div class="p-top__recommend-items">
                 <div class="p-top__recommend-item">
                     <div class="p-top__recommend-img">
                         <div class="p-top__recommend-img-top">
                             <img src="http://koshikibeam.website/minami-dentalclinic/wp-content/uploads/2023/07/recommend-1.png" alt="recommend-1">
                         </div>
                         <div class="p-top__recommend-img-main">
                             <img src="http://koshikibeam.website/minami-dentalclinic/wp-content/uploads/2023/07/recommend-img-01.png" alt="recommend-img-01">
                         </div>
                     </div>
                     <div class="p-top__recommend-txt">
                         <p>歯の治療において、小さな違和感は大きなストレスにつながります。 私たちは常に快適な歯科医療技術の研究を行っております。</p>
                     </div>
                 </div>
                 <div class="p-top__recommend-item">
                     <div class="p-top__recommend-img">
                         <div class="p-top__recommend-img-top">
                             <img src="http://koshikibeam.website/minami-dentalclinic/wp-content/uploads/2023/07/recommend-2.png" alt="recommend-2">
                         </div>
                         <div class="p-top__recommend-img-main">
                             <img src="http://koshikibeam.website/minami-dentalclinic/wp-content/uploads/2023/07/recommend-img-02.png" alt="recommend-img-02">
                         </div>
                     </div>
                     <div class="p-top__recommend-txt">
                         <p>「通いやすさ」も医院選びの重要なポイントと考え、2019年のリニューアルを期に更に駅の近くへ場所を移しました。</p>
                     </div>
                 </div>
                 <div class="p-top__recommend-item">
                     <div class="p-top__recommend-img">
                         <div class="p-top__recommend-img-top">
                             <img src="http://koshikibeam.website/minami-dentalclinic/wp-content/uploads/2023/07/recommend-3.png" alt="recommend-3">
                         </div>
                         <div class="p-top__recommend-img-main">
                             <img src="http://koshikibeam.website/minami-dentalclinic/wp-content/uploads/2023/07/recommend-img-03.png" alt="recommend-img-03">
                         </div>
                     </div>
                     <div class="p-top__recommend-txt">
                         <p>朝から夜までお仕事をされている方のために、診療時間を見直しました。<br><span class="u_fc_red">※駆け込みでも対応可能ですが、事前にご連絡いただけるとスムーズです。</span> </p>
                     </div>
                 </div>
             </div>
         </div>
     </section>

     <section id="top-medical" class="">
         <div class="p-bg-item1"></div>
         <div class="l-top__medical">
             <div class="p-top__medical">
                 <h2 class="c-ttl">診療案内</h2>
                 <div class="p-top__medical-items">
                     <a href="/minami-dentalclinic/medical/" class="p-top__medical-item">
                         <div class="p-top__medical-item-line">
                             <div class="p-top__medical-item-body">
                                 <div class="p-top__medical-item-head">一般診療</div>
                                 <div class="p-top__medical-item-txt">虫歯・入れ歯・小児歯科</div>
                             </div>
                         </div>
                     </a>
                     <a href="/minami-dentalclinic/medical/" class="p-top__medical-item">
                         <div class="p-top__medical-item-line">
                             <div class="p-top__medical-item-body">
                                 <div class="p-top__medical-item-head">特殊診療</div>
                                 <div class="p-top__medical-item-txt">インプラント・ホワイトニング <br>予防歯科・口腔外科・審美歯科</div>
                             </div>
                         </div>
                     </a>
                 </div>
                 <div class="p-top__medical-bottom-txt">
                     <p>当院では、患者さんの歯の健康状態や治療方針を丁寧にカウンセリングし、十分ご理解していただいた上で治療いたします。 痛みに配慮することと、可能な限り削らない・抜かない治療に努めております。<br><span class="u_fc_red">※特殊性の高い矯正治療などは保険の適応外となります。 これらの治療を行う際は事前に詳細と費用のご説明いたします。</span></p>
                 </div>
             </div>
         </div>
         <div class="p-bg-item2"></div>
         <div class="p-bg-item3"></div>
     </section>

     <section id="top-blog" class="l-top__blog">
         <div class="p-top__blog">
             <h2 class="c-ttl">スタッフブログ</h2>
             <div class="p-top__blog-items">
                 <?php
                    $args = array(
                        'post_type' => 'blog',
                        'posts_per_page' => 6,
                        'no_found_rows' => true,  //ページャーを使う時はfalseに。
                    );
                    $the_query = new WP_Query($args);
                    if ($the_query->have_posts()) :
                    ?>
                     <!-- ループ前の開始タグ -->
                     <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                         <!-- 出力したい処理を記述 -->
                         <a href="<?php the_permalink();  // 記事のリンクを表示 
                                    ?>" class="p-top__blog-item">
                             <?php
                                $days = 3;  // NEWを付ける期間
                                $today = date_i18n('U');  // 現在の時間
                                $entry = get_the_time('U');  // 投稿日の時間
                                $term = date('U', ($today - $entry)) / 86400;
                                if ($days > $term) {
                                    echo '<div class="p-top__blog-item-label">NEW</div>';
                                }
                                ?>
                             <div class="p-top__blog-item-img">
                                 <?php
                                    if (has_post_thumbnail()) {
                                        // アイキャッチ画像が設定されてればミディアムサイズで表示
                                        the_post_thumbnail('medium');
                                    } else {
                                        // なければnoimage画像をデフォルトで表示
                                        echo '<img src="http://koshikibeam.website/minami-dentalclinic/wp-content/uploads/2023/08/no-img.jpg" alt="no-img">';
                                    }
                                    ?>
                             </div>
                             <div class="p-top__blog-item-body">
                                 <?php $category = get_the_category(); ?>
                                 <?php if ($category[0]) : ?>
                                     <div class="p-top__blog-item-category"><?php echo $category[0]->cat_name; ?></div>
                                 <?php endif; ?>
                                 <div class="p-top__blog-item-txt u-hidden-sp"><?php the_title(); ?></div>
                                 <div class="p-top__blog-item-txt u-hidden-tab u-hidden-pc"><?php the_title(); ?></div>
                                 <time class="p-top__blog-item-date" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time>
                             </div>
                         </a>
                     <?php endwhile; ?>
                     <!-- ループ後の閉じタグ -->
                 <?php endif;
                    wp_reset_postdata(); ?>
             </div>
             <div class="p-top__blog-btn">
                 <a href="/minami-dentalclinic/blog/" class="c-top__btn"> スタッフブログ一覧はこちら</a>
             </div>
         </div>
     </section>
 </main>

 <?php get_footer(); ?>