 <?php get_header(); ?>

 <section id="reservation" class="l-reservation">
     <div class="l-reservation__inner">
         <form id="js-form" action="" class="p-reservation__" method="post">
             <div class="p-reservation__top">
                 <div class="p-reservation__tel">
                     <div class="p-reservation__tel-ttl">
                         お電話でのご予約/ご相談
                     </div>
                     <div class="p-reservation__tel-txt">
                         03-1234-5678
                     </div>
                     <div class="p-reservation__tel-time">
                         (年中無休 AM9:00〜PM22:00)
                     </div>
                 </div>
                 <div class="p-reservation__mail">
                     <div class="p-reservation__mail-ttl">
                         メールでのご予約/ご相談
                     </div>
                     <div class="p-reservation__mail-txt">
                         【ご予約に関しての注意点】 メールアドレスの入力間違いにより送信できない事が発生しておりますので、メールアドレスは正しくご入力下さい。<br> ※24時間以内に当院からの返信がない場合には、お電話(TEL 03-1234-5678)にてお問い合わせ下さい。
                     </div>
                 </div>
             </div>
             <dl class="p-reservation__list">
                 <div class="p-reservation__ttl">
                     <h2 class="c-ttl">予約フォーム</h2>
                 </div>
                 <div class="p-reservation__item">
                     <dt class="p-reservation__item-ttl">
                         <div class="p-reservation__item-txt">お名前
                             <span class="p-reservation__item-label">必須</span>
                         </div>
                     </dt>
                     <dd class="p-reservation__item-input">
                         <input type="text" name="" required placeholder="山田　太郎" />
                     </dd>
                 </div>
                 <div class="p-reservation__item">
                     <dt class="p-reservation__item-ttl">
                         <div class="p-reservation__item-txt">フリガナ
                             <span class="p-reservation__item-label">必須</span>
                         </div>
                     </dt>
                     <dd class="p-reservation__item-input">
                         <input type="text" name="" required placeholder="ヤマダ　タロウ" />
                     </dd>
                 </div>
                 <div class="p-reservation__item">
                     <dt class="p-reservation__item-ttl">
                         <div class="p-reservation__item-txt">
                             電話番号
                             <span class="p-reservation__item-label">必須</span>
                         </div>
                     </dt>
                     <dd class="p-reservation__item-input">
                         <input type="email" name="" required placeholder="000-0000-0000" />
                     </dd>
                 </div>
                 <div class="p-reservation__item">
                     <dt class="p-reservation__item-ttl">
                         <div class="p-reservation__item-txt">メールアドレス
                             <span class="p-reservation__item-label">必須</span>
                         </div>
                     </dt>
                     <dd class="p-reservation__item-input">
                         <input type="email" name="" required placeholder="xxx@example.com" />
                     </dd>
                 </div>
                 <div class="p-reservation__item">
                     <dt class="p-reservation__item-ttl">
                         <div class="p-reservation__item-txt">初診/再診
                             <span class="p-reservation__item-label">必須</span>
                         </div>
                     </dt>
                     <dd class="p-reservation__item-input">
                         <div class="p-reservation__radio">
                             <fieldset class="p-reservation__radio-input">
                                 <label>
                                     <input type="radio" name="radio-001" checked />
                                     初診
                                 </label>
                                 <label>
                                     <input type="radio" name="radio-001" />
                                     再診
                                 </label>
                             </fieldset>
                         </div>
                     </dd>
                 </div>
                 <div class="p-reservation__item">
                     <dt class="p-reservation__item-ttl">
                         <div class="p-reservation__item-txt">診療内容
                             <span class="p-reservation__item-label">必須</span>
                         </div>
                         <br><span class="u_fz-sm">※(複数選択可)</span>
                     </dt>
                     <dd class="p-reservation__item-input">
                         <div class="p-reservation__item-input-radio">
                             <div class="p-reservation__item-input-radio-wrap">
                                 <input id="checkbox" class="checkbox" type="checkbox">
                                 <label for="checkbox">虫歯</label>
                             </div>
                             <div class="p-reservation__item-input-radio-wrap">
                                 <input id="checkbox" class="checkbox" type="checkbox">
                                 <label for="checkbox">被せ物がとれた</label>
                             </div>
                             <div class="p-reservation__item-input-radio-wrap">
                                 <input id="checkbox" class="checkbox" type="checkbox">
                                 <label for="checkbox">矯正歯科</label>
                             </div>
                             <div class="p-reservation__item-input-radio-wrap">
                                 <input id="checkbox" class="checkbox" type="checkbox">
                                 <label for="checkbox">咬み合わせ</label>
                             </div>
                             <div class="p-reservation__item-input-radio-wrap">
                                 <input id="checkbox" class="checkbox" type="checkbox">
                                 <label for="checkbox">歯周病</label>
                             </div>
                             <div class="p-reservation__item-input-radio-wrap">
                                 <input id="checkbox" class="checkbox" type="checkbox">
                                 <label for="checkbox">小児歯科</label>
                             </div>
                             <div class="p-reservation__item-input-radio-wrap">
                                 <input id="checkbox" class="checkbox" type="checkbox">
                                 <label for="checkbox">入れ歯</label>
                             </div>
                             <div class="p-reservation__item-input-radio-wrap">
                                 <input id="checkbox" class="checkbox" type="checkbox">
                                 <label for="checkbox">インプラント</label>
                             </div>
                             <div class="p-reservation__item-input-radio-wrap">
                                 <input id="checkbox" class="checkbox" type="checkbox">
                                 <label for="checkbox">その他</label>
                             </div>
                         </div>
                     </dd>
                 </div>
                 <div class="p-reservation__item">
                     <dt class="p-reservation__item-ttl">
                         <div class="p-reservation__item-txt">ご連絡方法
                             <span class="p-reservation__item-label">必須</span>
                         </div>
                     </dt>
                     <dd class="p-reservation__item-input">
                         <div class="p-reservation__item-input-select">
                             <label class="selectbox-003">
                                 <select>
                                     <option>メール1</option>
                                     <option>メール2</option>
                                     <option>メール3</option>
                                 </select>
                             </label>
                         </div>
                     </dd>
                 </div>
                 <div class="p-reservation__item">
                     <dt class="p-reservation__item-ttl">
                         <div class="p-reservation__item-txt">希望日
                             <span class="p-reservation__item-label">必須</span>
                         </div>
                     </dt>
                     <dd class="p-reservation__item-input">
                         <div class="p-reservation__item-input-date">
                             <input type="date" name="" />
                             <input type="date" name="" />
                             <input type="date" name="" />
                         </div>
                     </dd>
                 </div>
                 <div class="p-reservation__item">
                     <dt class="p-reservation__item-ttl">
                         <div class="p-reservation__item-txt">
                             お問い合わせ内容
                             <span class="p-reservation__item-label">必須</span>
                         </div>
                     </dt>
                     <dd class="p-reservation__item-input">
                         <textarea name="" required placeholder="ご自由にご記入ください。"></textarea>
                     </dd>
                 </div>
             </dl>
             <div class="p-reservation__submit">
                 <button id="js-submit" type="submit" class="p-reservation__submit-btn" disabled>返信</button>
             </div>
         </form>
     </div>
 </section>

 <?php get_footer(); ?>