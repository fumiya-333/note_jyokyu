<aside class="l-sidebar">
  <div class="l-sidebar__title">関連記事</div>
  <div class="l-sidebar__connection-article-list">
    <?php
      $GLOBALS["bl_helper"]->execGetWpQuery(
    array(
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order' => 'DESC',
        'post_type' => 'post',
        'cat' => get_the_category()[0]->cat_ID
      ),
    function (array $sch_args) {
        echo <<< RESULT
          <article class="l-sidebar__connection-article-list__row">
            <div class="l-sidebar__connection-article-list__row__img">
              <img src="{$GLOBALS["call_hear_doc_deploy_func"](CommonUtil::getPostThumbnailUrl())}" width="100" height="70">
            </div>
            <div class="l-sidebar__connection-article-list__row__wrapper">
              <div class="l-sidebar__connection-article-list__row__wrapper__title"><a href="{$GLOBALS["call_hear_doc_deploy_func"](get_the_permalink())}">{$GLOBALS["call_hear_doc_deploy_func"](get_the_title())}</a></div>
            </div>
          </article>
RESULT;
    }
);
    ?>
  </div>
  <div class="l-sidebar__title">カテゴリー</div>
  <div class="l-sidebar__category-list">
    <?php
      foreach (get_categories() as $category) {
          echo <<< RESULT
            <div class="l-sidebar__category-list__row">
              <div class="l-sidebar__category-list__row__category-name">
                <a href="{$GLOBALS["call_hear_doc_deploy_func"](get_category_link($category->term_id))}">・{$category->name}</a>
              </div>
            </div>
RESULT;
      }
    ?>
  </div>
</aside>
