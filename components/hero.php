<?php if (is_home() || is_front_page()) : ?>
  <section class="p-hero">
    <div class="p-hero__inner">
      <div class="p-hero__inner__title">TOEFL対策はEngress</div>
      <div class="p-hero__inner__sub-title">日本人へのTOEFL指導歴豊かな講師陣のコーチング型TOEFLスクール</div>
      <div class="p-hero__inner__btn-area">
        <button class="c-btn-doc-req p-hero__inner__btn-area-btn-doc-req">資料請求</button>
      </div>
      <div class="p-hero__inner__link-area">
        <a href="<?= Constants::CONTACT_URL ?>">お問い合わせ</a>
      </div>
    </div>
  </section>
<?php else : ?>
  <section class="p-hero-fix">
    <div class="p-hero-fix__inner" style="background-image: url(<?= $args["hero_fix_bg_img"] ?>);">
      <div class="p-hero-fix__inner__title">
        <?= $args["hero_fix_title"] ?>
      </div>
    </div>
  </section>
<?php endif; ?>
