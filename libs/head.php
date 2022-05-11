<head>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <!-- TODO:作成するサイトによっては消す start -->
  <meta name="robots" content="noindex">
  <!-- TODO:作成するサイトによっては消す end -->
  <meta name="format-detection" content="telephone=no">
  <meta name=”description“ content=“日本人へのTOEFL指導歴豊かな講師陣のコーチング型TOEFLスクール“>
  <link rel="stylesheet" href="<?= Constants::TMP_DIR_URI_CSS ?>/style.css">
  <?php if (is_page(mb_substr(Constants::FILE_PATH_PRICE_TABLE, 1))) : ?>
    <link rel="stylesheet" href="https://unpkg.com/scroll-hint@latest/css/scroll-hint.css">
  <?php endif; ?>
  <title><?= Constants::TITLE ?></title>
  <?php wp_head(); ?>
</head>
