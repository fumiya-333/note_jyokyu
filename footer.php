<footer>
  <div class="footer-contents">
    <div class="footer-inner-contents">
      <div class="inner-contents-left">
        <ul>
          <li><a href="<?php echo HOME_URL ?>">ホーム</a></li>
          <li><a href="<?php echo Constants::CORRECT_URL ?>">お知らせ</a></li>
          <li><a href="<?php echo Constants::BLOG_URL ?>">ブログ</a></li>
          <li><a href="<?php echo Constants::RATE_PLUN_URL ?>">コース・料金</a></li>
        </ul>
      </div>
      <div class="inner-contents-right">
        <img src="<?php bloginfo('template_directory'); ?>/img/footer_logo.png">
        <div class="number-box">
          <div class="phone-number">0123-456-7890</div>
          <div class="active-time">平日08:00~20:00</div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom-contents">
    <div class="copy-right">© 2020 Engress. </div>
  </div>
</footer>
<?php wp_footer(); ?>