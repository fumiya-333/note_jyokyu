<?php
  $paged = get_query_var("paged") ? get_query_var("paged") : 1;
  $cat = is_category() ? get_category(get_query_var("cat")) : "";
?>
<section class="p-blog">
  <div class="p-blog__inner">
    <div class="p-blog__inner__contents">
      <div class="p-blog__inner__contents__title"><?= !empty($cat) ? $cat->cat_name : "新着" ?>一覧</div>
      <div class="p-blog__inner__contents__list">
        <?php
          $GLOBALS["bl_helper"]->execGetWpQuery(
    array(
              'paged' => $paged,
              'posts_per_page' => 10,
              'orderby' => 'date',
              'order' => 'DESC',
              'post_type' => 'post',
              'cat' => !empty($cat) ? $cat->cat_ID : "新着",
            ),
    function (array $sch_args) {
        echo <<< RESULT
          <article class="p-blog__inner__contents__list__row">
            <div class="p-blog__inner__contents__list__row__bg-img" style="background-image: url({$GLOBALS["call_hear_doc_deploy_func"](CommonUtil::getPostThumbnailUrl())});">
              <div class="p-blog__inner__contents__list__row__bg-img__category">
                {$GLOBALS["call_hear_doc_deploy_func"](get_the_category())[0]->cat_name}
              </div>
            </div>
            <div class="p-blog__inner__contents__list__row__wrapper">
              <div class="p-blog__inner__contents__list__row__wrapper__date">
                {$GLOBALS["call_hear_doc_deploy_func"](get_the_time(get_option("date_format")))}
              </div>
              <div class="p-blog__inner__contents__list__row__wrapper__title">
                <a href="{$GLOBALS["call_hear_doc_deploy_func"](get_the_permalink())}">{$GLOBALS["call_hear_doc_deploy_func"](get_the_title())}</a>
              </div>
              <div class="p-blog__inner__contents__list__row__wrapper__content">
                {$GLOBALS["call_hear_doc_deploy_func"](get_the_excerpt())}
              </div>
            </div>
          </article>
  RESULT;
    }
);
        ?>
      </div>
    </div>
    <?php
      get_template_part(CommonUtil::joinDirPathComponents(Constants::FILE_PATH_PAGINATE), null, array(
        'total' => $GLOBALS["bl_helper"]->getWpQuery()->max_num_pages,
        'mid_size' => 2,
        'current' => ($paged ? $paged : 1),
        'prev_next' => false,
      ));
    ?>
  </div>
</section>
