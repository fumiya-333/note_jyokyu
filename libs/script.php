<script><?= CommonUtil::getAllJsConstants(); ?></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="<?= Constants::TMP_DIR_URI_JS ?>/jquery.js"></script>
<?php if (is_category()) : ?>
  <script src="<?= Constants::TMP_DIR_URI_JS ?>/archive.js"></script>
<?php else: ?>
  <script src="<?= Constants::TMP_DIR_URI_JS ?>/<?= pathinfo($GLOBALS["template"])["filename"] ?>.js"></script>
<?php endif; ?>
<?php if (is_page(mb_substr(Constants::FILE_PATH_PRICE_TABLE, 1))) : ?>
  <script src="https://unpkg.com/scroll-hint@latest/js/scroll-hint.min.js"></script>
<?php endif; ?>
