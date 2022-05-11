<header class="l-header">
  <div class="l-header__inner">
    <div class="l-header__inner__left">
      <div class="l-header__inner__left__logo-box">
        <a href="<?= HOME_URL ?>"><img src="<?= Constants::TMP_DIR_URI_IMG ?>/logo.jpg"></a>
      </div>
      <nav class="l-header__inner__left__nav" id="nav">
        <ul class="l-header__inner__left__nav__list">
          <li class="l-header__inner__left__nav__list__row"><a href="<?= HOME_URL ?>">ホーム</a></li>
          <li class="l-header__inner__left__nav__list__row"><a href="<?= Constants::CORRECT_URL  ?>">お知らせ</a></li>
          <li class="l-header__inner__left__nav__list__row"><a href="<?= Constants::BLOG_URL ?>"><?= Constants::BREADCLUMB_TITLE_BLOG ?></a></li>
          <li class="l-header__inner__left__nav__list__row"><a href="<?= Constants::PRICE_TABLE_URL ?>">コース・料金</a></li>
          <li class="l-header__inner__left__nav__list__row" id="l-header__inner__left__nav__list__row-last" style="display: none;">
            <button class="c-btn-doc-req l-header__inner__left__nav__list__row-btn-doc-req">資料請求</button>
            <button class="c-btn-contact l-header__inner__left__nav__list__row-btn-contact">お問い合わせ</button>
          </li>
        </ul>
      </nav>
    </div>
    <div class="l-header__inner__right">
      <div class="l-header__inner__right__active-contact">
        <div class="l-header__inner__right__active-contact__active-time">平日08:00〜20:00</div>
        <a href="tel:<?= Constants::PHONE_NUMBER_VAL ?>" class="c-phone-link l-header__inner__right__active-contact__phone-link"><?= Constants::PHONE_NUMBER_VAL ?></a>
      </div>
      <button class="c-btn-doc-req l-header__inner__right-btn-doc-req">資料請求</button>
      <button class="c-btn-contact l-header__inner__right-btn-contact">お問い合わせ</button>
    </div>
    <div class="c-hamburger">
      <button class="c-hamburger-btn">
        <span class="c-hamburger-btn-line"></span>
      </button>
    </div>
  </div>
</header>
