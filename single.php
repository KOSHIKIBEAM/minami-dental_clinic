 <?php get_header(); ?>

 <main>
     <section class="l-single">
         <div class="l-single__inner">
             <div class="p-single">
                 <div class="p-single__body">
                     <h1 class="p-single__ttl"><?php the_title(); ?></h1>
                     <div class="p-single__meta">
                         <time class="p-single__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.n.j'); ?></time>
                         <?php $category = get_the_category(); ?>
                         <?php if ($category[0]) : ?>
                             <div class="p-single__item-category"><?php echo $category[0]->cat_name; ?></div>
                         <?php endif; ?>
                     </div>
                     <div class="p-single-content"><?php the_content(); // 本文の表示 
                                                    ?></div>
                 </div>
                 <div class="p-single__btn">
                     <?php if (get_previous_post()) : ?>
                         <div class="p-single__btn-prev"><?php previous_post_link('%link', '前の記事'); ?></div>
                     <?php endif; ?>
                     <div class="p-single__btn-center"><a href="/minami-dentalclinic/news/">記事一覧</a></div>
                     <?php if (get_next_post()) : ?>
                         <div class="p-single__btn-next"><?php next_post_link('%link', '次の記事'); ?></div>
                     <?php endif; ?>
                 </div>
             </div>
             <?php get_template_part('template-parts/sidebar'); ?>
         </div>
     </section>

 </main>
 <?php get_footer(); ?>