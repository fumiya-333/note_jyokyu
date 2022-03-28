<header>
  <div class="wrap-left">
    <div class="logo">
      <a href="<?php echo HOME_URL ?>"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png"></a>
    </div>
    <nav class="nav" id="nav">
      <ul>
        <li><a href="<?php echo HOME_URL ?>">ホーム</a></li>
        <li><a href="<?php echo Constants::CORRECT_URL ?>">お知らせ</a></li>
        <li><a href="<?php echo Constants::BLOG_URL ?>"><?= Constants::BREADCLUMB_TITLE_BLOG ?></a></li>
        <li><a href="<?php echo Constants::RATE_PLUN_URL ?>">コース・料金</a></li>
        <li id="li-btn-area" style="display: none;"><button class="btn-warning btn-doc-req">資料請求</button><button class="btn-navy-blue btn-contact">お問い合わせ</button></li>
      </ul>
    </nav>
  </div>
  <div class="wrap-right">
    <div class="text-area">
      <div class="active-time">平日08:00〜20:00</div>
      <div class="phone-number">0123-456-7890</div>
    </div>
    <button class="btn-warning btn-doc-req">資料請求</button>
    <button class="btn-navy-blue btn-contact">お問い合わせ</button>
  </div>
  <div class="hamburger">
    <button class="btn-hamburger" id="btn-hamburger">
      <span class="btn-hamburger-line" id="btn-hamburger-line"></span>
    </button>
  </div>
</header>