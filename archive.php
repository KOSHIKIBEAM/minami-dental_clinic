 <?php get_header(); ?>

 <main>

     <section id="blog" class="l-blog">
         <div class="l-blog__inner">
             <div class="p-blog">
                 <div class="p-blog__items">
                     <?php
                        if (have_posts()) :
                            while (have_posts()) : the_post();
                        ?>
                             <a href="<?php the_permalink();  // 記事のリンクを表示 
                                        ?>" class="p-blog__item">
                                 <div class="p-blog__item-wrap">
                                     <?php
                                        $post_time = get_the_time('U');
                                        $days = 3; //New!を表示させる日数
                                        $last = time() - ($days * 24 * 60 * 60);
                                        if ($post_time > $last) {
                                            echo '<div class="p-blog__item-label">NEW</div>';
                                        }
                                        ?>
                                     <div class="p-blog__item-img">
                                         <?php
                                            if (has_post_thumbnail()) {
                                                the_post_thumbnail('my_thumbnail');
                                            } else {
                                                echo '<img src="https://koshikibeam.website/minami-dentalclinic/wp-content/uploads/2023/08/no-img.jpg" alt="no-img.jpg">';
                                            }
                                            ?>
                                     </div>
                                 </div>
                                 <div class="p-blog__item-body">
                                     <?php $category = get_the_category(); ?>
                                     <?php if ($category[0]) : ?>
                                         <div class="p-blog__item-category"><?php echo $category[0]->cat_name; ?></div>
                                     <?php endif; ?>
                                     <div class="p-blog__item-txt"><?php
                                                                    if (mb_strlen($post->post_title) > 40) {
                                                                        $title = mb_substr($post->post_title, 0, 40);
                                                                        echo $title . '. . .';
                                                                    } else {
                                                                        echo $post->post_title;
                                                                    }
                                                                    ?></div>
                                     <time class="p-blog__item-date" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time>
                                 </div>
                             </a>
                     <?php
                            endwhile;
                        endif;
                        ?>
                 </div>
                 <?php get_template_part('template-parts/pagination'); ?>
             </div>
             <?php get_template_part('template-parts/sidebar'); ?>
         </div>
     </section>
 </main>

 <?php get_footer(); ?>