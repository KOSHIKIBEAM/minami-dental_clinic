<div class="l-fv">
    <div class="l-fv__inner">
        <div class="p-fv">
            <?php if (!is_home() || !is_front_page()) : ?>
                <div class="p-fv__reserve u-hidden-tab u-hidden-sp">
                    <a href="/minami-dentalclinic/reservation/" class="p-fv__reserve">
                        <img src="http://koshikibeam.website/minami-dentalclinic/wp-content/uploads/2023/07/footer-icon1.png" alt="footer-icon">
                        <p>WEB予約<br>はこちら</p>
                    </a>
                </div>
            <?php endif; ?>
            <div class="p-fv__img">
                <?php if (is_page('about')) : ?>
                    <img class="u-hidden-sp u-hidden-tab " src="http://koshikibeam.website/minami-dentalclinic/wp-content/uploads/2023/07/page-about_top.png" alt="page-about">
                    <img class="u-hidden-pc" src="http://koshikibeam.website/minami-dentalclinic/wp-content/uploads/2023/07/page-about_top-sp.png" alt="page-about">
                <?php elseif (is_page('medical')) : ?>
                    <img class="u-hidden-sp u-hidden-tab " src="http://koshikibeam.website/minami-dentalclinic/wp-content/uploads/2023/07/page-medical_top.png" alt="page-medical">
                    <img class="u-hidden-pc" src="http://koshikibeam.website/minami-dentalclinic/wp-content/uploads/2023/07/page-medical_top-sp.png" alt="page-medical">
                <?php elseif (is_page('staff')) : ?>
                    <img class="u-hidden-sp u-hidden-tab " src="http://koshikibeam.website/minami-dentalclinic/wp-content/uploads/2023/07/page-staff_top.png" alt="page-staff">
                    <img class="u-hidden-pc" src="http://koshikibeam.website/minami-dentalclinic/wp-content/uploads/2023/07/page-staff_top-sp.png" alt="page-staff">
                <?php elseif (is_single() || is_archive()) : ?>
                    <img class="u-hidden-sp u-hidden-tab " src="http://koshikibeam.website/minami-dentalclinic/wp-content/uploads/2023/07/archive_top.png" alt="archive_top">
                    <img class="u-hidden-pc" src="http://koshikibeam.website/minami-dentalclinic/wp-content/uploads/2023/07/archive_top-sp.png" alt="archive_top">
                <?php elseif (is_page('contact') || is_page('contact-thanks') || is_page('reservation') || is_page('reservation-thanks')) : ?>
                    <img class="u-hidden-sp u-hidden-tab " src="http://koshikibeam.website/minami-dentalclinic/wp-content/uploads/2023/07/page-contact_top.png" alt="page-contact">
                    <img class="u-hidden-pc" src="http://koshikibeam.website/minami-dentalclinic/wp-content/uploads/2023/07/page-contact_top-sp.png" alt="page-contact">
                <?php elseif (is_404()) : ?>
                <?php else : ?>
                    <!-- どれにも当てはまらない場合 -->
                <?php endif; ?>
                <div class="p-fv__txt">
                    <h2 class="p-fv__ttl">
                        <?php if (is_page('about')) : ?>
                            当院について
                        <?php elseif (is_page('medical')) : ?>
                            診療案内
                        <?php elseif (is_page('staff')) : ?>
                            スタッフ紹介
                        <?php elseif (is_single() || is_archive()) : ?>
                            スタッフブログ
                        <?php elseif (is_page('contact') || is_page('contact-thanks')) : ?>
                            お問い合わせ
                        <?php elseif (is_page('reservation') || is_page('reservation-thanks')) : ?>
                            WEB予約
                        <?php elseif (is_404()) : ?>

                        <?php else : ?>
                            <!-- どれにも当てはまらない場合 -->

                        <?php endif; ?>
                    </h2>
                    <p class="p-fv__subttl">
                        <?php if (is_page('about')) : ?>
                            ABOUT OUR CLINIC
                        <?php elseif (is_page('medical')) : ?>
                            MEDICAL
                        <?php elseif (is_page('staff')) : ?>
                            STAFF
                        <?php elseif (is_single() || is_archive()) : ?>
                            STAFF BLOG
                        <?php elseif (is_page('contact') || is_page('contact-thanks')) : ?>
                            CONTACT
                        <?php elseif (is_page('reservation') || is_page('reservation-thanks')) : ?>
                            RESERVE
                        <?php elseif (is_404()) : ?>
                            <!-- 404 Not Found ページが表示されている場合。 -->
                        <?php else : ?>
                            <!-- どれにも当てはまらない場合 -->
                        <?php endif; ?>
                    </p>
                </div>
            </div>
            <?php if (!is_home() && !is_front_page()) : ?>
                <?php get_template_part('template-parts/breadcrumbs'); ?>
            <?php endif; ?>
        </div>
    </div>

</div>