 <?php get_header(); ?>

 <section id="contact" class="l-contact">
     <div class="l-contact__inner">
         <form id="js-form" action="" class="p-contact" method="post">
             <p class="p-contact__toptext">
                 お急ぎの方は、お電話(TEL 03-1234-5678)での連絡がスムーズです。<br> 以下のフォームからお問い合わせ頂いた場合、ご連絡が2～3日後になる場合がございます。 <br>また、メールアドレスの入力間違いにより送信できない事が発生しておりますので、メールアドレスは正しくご入力下さい。<br> <span class="u_fc_red">※3営業日以内に当院からの返信がない場合には、お電話(TEL 03-1234-5678)にてお問い合わせ下さい。</span>
             </p>
             <dl class="p-contact__list">
                 <div class="p-contact__ttl">
                     <h2 class="c-ttl">お問い合わせ<br class="u-hidden-tab u-hidden-pc">フォーム</h2>
                 </div>
                 <div class="p-contact__item">
                     <dt class="p-contact__item-ttl">
                         <div class="p-contact__item-txt">お名前
                             <span class="p-contact__item-label">必須</span>
                         </div>
                     </dt>
                     <dd class="p-contact__item-input">
                         <input type="text" name="" required placeholder="山田　太郎" />
                     </dd>
                 </div>
                 <div class="p-contact__item">
                     <dt class="p-contact__item-ttl">
                         <div class="p-contact__item-txt">フリガナ
                             <span class="p-contact__item-label">必須</span>
                         </div>
                     </dt>
                     <dd class="p-contact__item-input">
                         <input type="text" name="" required placeholder="ヤマダ　タロウ" />
                     </dd>
                 </div>
                 <div class="p-contact__item">
                     <dt class="p-contact__item-ttl">

                         <div class="p-contact__item-txt">メールアドレス
                             <span class="p-contact__item-label">必須</span>
                         </div>
                     </dt>
                     <dd class="p-contact__item-input">
                         <input type="email" name="" required placeholder="xxx@example.com" />
                     </dd>
                 </div>
                 <div class="p-contact__item">
                     <dt class="p-contact__item-ttl">
                         <div class="p-contact__item-txt">
                             電話番号
                             <span class="p-contact__item-label">必須</span>
                         </div>
                     </dt>
                     <dd class="p-contact__item-input">
                         <input type="email" name="" required placeholder="000-0000-0000" />
                     </dd>
                 </div>
                 <div class="p-contact__item">
                     <dt class="p-contact__item-ttl">
                         <div class="p-contact__item-txt">
                             お問い合わせ内容
                             <span class="p-contact__item-label">必須</span>
                         </div>
                     </dt>
                     <dd class="p-contact__item-input">
                         <textarea name="" required placeholder="ご自由にご記入ください。"></textarea>
                     </dd>
                 </div>
             </dl>
             <div class="p-contact__submit">
                 <button id="js-submit" type="submit" class="p-contact__submit-btn" disabled>返信</button>
             </div>
         </form>
     </div>
 </section>

 <?php get_footer(); ?>