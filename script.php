<?php
  global $template;
?>
<script><?= CommonUtil::getAllConstants(); ?></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="<?= bloginfo('template_directory'); ?>/jq/jquery.js"></script>
<?php if(is_category()) : ?> 
  <script src="<?= bloginfo('template_directory'); ?>/jq/archive.js"></script>
<?php else: ?>
  <script src="<?= bloginfo('template_directory'); ?>/jq/<?= pathinfo($template)["filename"] ?>.js"></script>
<?php endif; ?>
<?php if(is_page(Constants::RATE_PLUN_SLUG)) : ?> 
  <script src="https://unpkg.com/scroll-hint@latest/js/scroll-hint.min.js"></script>
<?php endif; ?>