<?php
  global $template;
?>
<script><?= CommonUtil::getAllConstants(); ?></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="<?= Constants::TEMP_DIR_JS ?>/jquery.js"></script>
<?php if (is_category()) : ?>
  <script src="<?= Constants::TEMP_DIR_JS ?>/archive.js"></script>
<?php else: ?>
  <script src="<?= Constants::TEMP_DIR_JS ?>/<?= pathinfo($template)["filename"] ?>.js"></script>
<?php endif; ?>
<?php if (is_page(mb_substr(Constants::FILE_PATH_PRICE_TABLE, 1))) : ?>
  <script src="https://unpkg.com/scroll-hint@latest/js/scroll-hint.min.js"></script>
<?php endif; ?>