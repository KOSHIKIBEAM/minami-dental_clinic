  <div class="p-sidebar">
      <div class="p-sidebar__content">
          <!-- secondary -->
          <aside id="secondary">
              <div class="c-subttl3__1">
                  <h2>クリニックの紹介</h2>
              </div>
              <div class="p-sidebar__item">
                  <div class="p-sidebar__item-img">
                      <img src="http://koshikibeam.website/minami-dentalclinic/wp-content/uploads/2023/07/sidebar-img_1.png" alt="sidebar-img">
                  </div>
                  <div class="p-sidebar__item-body">
                      <div class="p-sidebar__item-ttl">みなみ歯科クリニック</div>
                      <div class="p-sidebar__item-txt">お子様からご高齢の方まで、快適な空間で治療が受けられる場を作り、地域医療に貢献しきたいと考えております。</div>
                      <a href="/minami-dentalclinic/about/" class="p-sidebar__item-link">当院について</a>
                  </div>
              </div>
          </aside>
          <!-- secondary -->
      </div>
      <div class="p-sidebar__content">
          <div class="p-sidebar__content">
              <?php
                $args = array(
                    'post_type' => 'post', //投稿記事の種類を設定する
                    'posts_per_page' => 5, //投稿記事の数を設定する
                );
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) :
                ?>
                  <aside id="secondary">
                      <div class="c-subttl3__2">
                          <h2>新着記事</h2>
                      </div>
                      <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                          <a href="<?php the_permalink();  // 記事のリンクを表示 
                                    ?>" class="p-sidebar__archicle">
                              <div class="p-sidebar__archicle-img">
                                  <?php
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail('my_thumbnail');
                                    } else {
                                        echo '<img src="http://koshikibeam.website/minami-dentalclinic/wp-content/uploads/2023/08/no-img.jpg" alt="no-img">';
                                    }
                                    ?>
                              </div>
                              <div class="p-sidebar__archicle-body">
                                  <?php $category = get_the_category(); ?>
                                  <?php if ($category[0]) : ?>
                                      <div class="p-sidebar__archicle-category"><?php echo $category[0]->cat_name; ?></div>
                                  <?php endif; ?>
                                  <div class="p-sidebar__archicle-txt"><?php the_title(); ?></div>
                                  <time datetime="<?php the_time('c'); ?>" class="p-sidebar__archicle-date"><?php the_time('Y/n/j'); ?></time>
                              </div>
                          </a>
                      <?php endwhile; ?>
                      <?php wp_reset_postdata(); ?>
                  </aside>
              <?php endif; ?>
          </div>
          </aside>
          <!-- secondary -->
      </div>
      <div class="p-sidebar__content">
          <!-- secondary -->
          <aside id="secondary">
              <div class="c-subttl3__3">
                  <h2>カテゴリー</h2>
              </div>
              <div class="p-sidebar__list">
                  <?php
                    if (is_active_sidebar('sidebar_1')) {
                        dynamic_sidebar('sidebar_1');
                    }
                    ?>
              </div>
          </aside>
          <!-- secondary -->
      </div>
  </div>