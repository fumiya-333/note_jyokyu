<?php
  global $template;
?>
<head>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <!-- 作成するサイトによっては消す start -->
  <meta name="robots" content="noindex">
  <!-- 作成するサイトによっては消す end -->
  <meta name="format-detection" content="telephone=no">
  <meta name=”description“ content=“日本人へのTOEFL指導歴豊かな講師陣のコーチング型TOEFLスクール“>
  <?php if(is_category()) : ?> 
    <link rel="stylesheet" href="<?= bloginfo('template_directory') ?>/css/archive.css">
  <?php else: ?>
    <link rel="stylesheet" href="<?= bloginfo('template_directory') ?>/css/<?= pathinfo($template)["filename"] ?>.css">
  <?php endif; ?>
  <?php if(is_page(Constants::RATE_PLUN_SLUG)) : ?> 
    <link rel="stylesheet" href="https://unpkg.com/scroll-hint@latest/css/scroll-hint.css">
  <?php endif; ?>
  <title><?= Constants::TITLE ?></title>
  <?php wp_head(); ?>
</head>