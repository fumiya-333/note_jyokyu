<div class="p-article-pickup">
  <div class="p-article-pickup__inner">
    <div class="p-article-pickup__inner__title">おすすめの記事</div>
    <div class="p-article-pickup__inner__list">
      <?php
        $GLOBALS["BL_HELPER"]
        ->execWpQuery(
            array(
              "posts_per_page" => 3,
              "orderby" => "date",
              "order" => "DESC",
              "post_type" => "post",
              "tag" => "pickup"
            ),
            function () {
                echo <<< RESULT
                  <article class="p-article-pickup__inner__list__row">
                    <div class="p-article-pickup__inner__list__row__bg-img" style="background-image: url({$GLOBALS["CALL_HEAR_DOC_DEPLOY_FUNC"](CommonUtil::getPostThumbnailUrl())});">
                      <div class="p-article-pickup__inner__list__row__bg-img__category">
                        {$GLOBALS["CALL_HEAR_DOC_DEPLOY_FUNC"](get_the_category())[0]->cat_name}
                      </div>
                    </div>
                    <div class="p-article-pickup__inner__list__row__wrapper">
                      <div class="p-article-pickup__inner__list__row__wrapper__date">
                        {$GLOBALS["CALL_HEAR_DOC_DEPLOY_FUNC"](get_the_time(get_option("date_format")))}
                      </div>
                      <div class="p-article-pickup__inner__list__row__wrapper__title">
                        <a href="{$GLOBALS["CALL_HEAR_DOC_DEPLOY_FUNC"](get_the_permalink())}">{$GLOBALS["CALL_HEAR_DOC_DEPLOY_FUNC"](get_the_title())}</a>
                      </div>
                    </div>
                  </article>
RESULT;
            }
        );
      ?>
    </div>
  </div>
</div>
