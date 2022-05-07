<section class="p-post">
  <div class="p-post__inner">
    <div class="p-post__inner__blog">
      <div class="p-post__inner__blog__title">
        <?= Constants::BREADCLUMB_TITLE_BLOG ?>
      </div>
      <div class="p-post__inner__blog__list">
        <?php
          $GLOBALS["BL_HELPER"]
          ->execWpQuery(
              array(
                "posts_per_page" => 3,
                "orderby" => "date",
                "order" => "DESC",
                "post_type" => "post"
              ),
              function () {
                  echo <<< RESULT
                    <article class="p-post__inner__blog__list__row">
                      <div class="p-post__inner__blog__list__row__bg-img" style="background-image: url({$GLOBALS["CALL_HEAR_DOC_DEPLOY_FUNC"](CommonUtil::getPostThumbnailUrl())});">
                        <div class="p-post__inner__blog__list__row__bg-img__category">
                          {$GLOBALS["CALL_HEAR_DOC_DEPLOY_FUNC"](get_the_category())[0]->cat_name}
                        </div>
                      </div>
                      <div class="p-post__inner__blog__list__row__wrapper">
                        <div class="p-post__inner__blog__list__row__wrapper__title">
                          <a href="{$GLOBALS["CALL_HEAR_DOC_DEPLOY_FUNC"](get_the_permalink())}">{$GLOBALS["CALL_HEAR_DOC_DEPLOY_FUNC"](get_the_title())}</a>
                        </div>
                        <div class="p-post__inner__blog__list__row__wrapper__date">
                          {$GLOBALS["CALL_HEAR_DOC_DEPLOY_FUNC"](get_the_time(get_option("date_format")))}
                        </div>
                      </div>
                    </article>
RESULT;
              }
          );?>
      </div>
    </div>
    <div class="p-post__inner__correct">
      <div class="p-post__inner__correct__title">お知らせ</div>
      <div class="p-post__inner__correct__list">
        <?php
          $GLOBALS["BL_HELPER"]
          ->execWpQuery(
              array(
                "posts_per_page" => 3,
                "orderby" => "date",
                "order" => "DESC",
                "post_type" => "correct",
              ),
              function () {
                  echo <<< RESULT
                    <article class="p-post__inner__correct__list__row">
                      <div class="p-post__inner__correct__list__row__date">{$GLOBALS["CALL_HEAR_DOC_DEPLOY_FUNC"](get_the_time(get_option("date_format")))}</div>
                      <div class="p-post__inner__correct__list__row__title"><a href="{$GLOBALS["CALL_HEAR_DOC_DEPLOY_FUNC"](get_the_permalink())}">{$GLOBALS["CALL_HEAR_DOC_DEPLOY_FUNC"](get_the_title())}</a></div>
                    </article>
RESULT;
              }
          );
        ?>
      </div>
    </div>
  </div>
</section>
