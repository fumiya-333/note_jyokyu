<?php
$paginate_base = get_pagenum_link(1);
if (strpos($paginate_base, '?') || !$GLOBALS["wp_rewrite"]->using_permalinks()) {
    $paginate_format = '';
    $paginate_base = add_query_arg('paged', '%#%');
} else {
    $paginate_format = (substr($paginate_base, -1, 1) == '/' ? '' : '/') .
user_trailingslashit('page/%#%/', 'paged');
    $paginate_base .= '%_%';
}

$args["base"] = $paginate_base;
$args["format"] = $paginate_format;
?>

<div class="p-pagination">
  <div class="p-pnavi">
    <?= paginate_links($args) ?>
  </div>
</div>
