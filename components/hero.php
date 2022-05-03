<?php if (is_home() || is_front_page()) : ?>
  <section class="hero">
    <div class="hero-inner">
      <div class="hero-title">TOEFL対策はEngress</div>
      <div class="hero-sub-title">日本人へのTOEFL指導歴豊かな講師陣のコーチング型TOEFLスクール</div>
      <div class="btn-doc-rea-area">
        <button class="btn-warning btn-doc-req">資料請求</button>
      </div>
      <div class="contact-link-area">
        <a href="<?= Constants::CONTACT_URL ?>">お問い合わせ</a>
      </div>
    </div>
  </section>
<?php else : ?>
  <section class="hero-fix">
    <div class="hero-fix-inner" style="background-image: url(<?= $args["hero_fix_bg_img"] ?>);">
      <div class="hero-fix-title">
        <?= $args["hero_fix_title"] ?>
      </div>
    </div>
  </section>
<?php endif; ?>
