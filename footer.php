<footer class="l-footer-top">
  <div class="l-footer-top__inner">
    <div class="l-footer-top__inner__left">
      <ul>
        <li><a href="<?= HOME_URL ?>">ホーム</a></li>
        <li><a href="<?= Constants::CORRECT_URL ?>">お知らせ</a></li>
        <li><a href="<?= Constants::BLOG_URL ?>">ブログ</a></li>
        <li><a href="<?= Constants::PRICE_TABLE_URL ?>">コース・料金</a></li>
      </ul>
    </div>
    <div class="l-footer-top__inner__right">
      <div class="l-footer-top__inner__right__img-box">
        <img src="<?= Constants::TMP_DIR_URI_IMG ?>/logo.jpg">
      </div>
      <div class="l-footer-top__inner__right__number-box">
        <a href="tel:<?= Constants::PHONE_NUMBER_VAL ?>" class="c-phone-link l-footer-top__inner__right__number-box__phone-link"><?= Constants::PHONE_NUMBER_VAL ?></a>
        <div class="l-footer-top__inner__right__number-box__active-time"><?= Constants::ACTIVE_TIME ?></div>
      </div>
    </div>
  </div>
</footer>
<footer class="l-footer-bottom">
  <div class="l-footer-bottom__inner">
    <div class="c-copy-right">© 2020 Engress. </div>
  </div>
</footer>
<?= wp_footer(); ?>
