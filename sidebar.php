<aside class="l-sidebar">
  <div class="l-sidebar__title">関連記事</div>
  <div class="l-sidebar__connection-article-list">
    <?php
      $GLOBALS["BL_HELPER"]
      ->execWpQuery(
          array(
            "posts_per_page" => 3,
            "orderby" => "date",
            "order" => "DESC",
            "post_type" => "post",
            "cat" => get_the_category()[0]->cat_ID
          ),
          function () {
              echo <<< RESULT
                <article class="l-sidebar__connection-article-list__row">
                  <div class="l-sidebar__connection-article-list__row__img">
                    <img src="{$GLOBALS["CALL_HEAR_DOC_DEPLOY_FUNC"](CommonUtil::getPostThumbnailUrl())}" width="100" height="70">
                  </div>
                  <div class="l-sidebar__connection-article-list__row__wrapper">
                    <div class="l-sidebar__connection-article-list__row__wrapper__title"><a href="{$GLOBALS["CALL_HEAR_DOC_DEPLOY_FUNC"](get_the_permalink())}">{$GLOBALS["CALL_HEAR_DOC_DEPLOY_FUNC"](get_the_title())}</a></div>
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
                <a href="{$GLOBALS["CALL_HEAR_DOC_DEPLOY_FUNC"](get_category_link($category->term_id))}">・{$category->name}</a>
              </div>
            </div>
RESULT;
      }
    ?>
  </div>
</aside>
