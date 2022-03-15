<?php
  $bl_helper = new BlHelper();
?>
<div class="article-pickup">
  <div class="article-pickup-contents">
    <div class="article-pickup-title">おすすめの記事</div>
    <div class="article-pickup-list">
      <?php
          echo $bl_helper->execGetWpQuery(
            "",
            array(
              'posts_per_page' => 3,
              'orderby' => 'date',
              'order' => 'DESC',
              "tag_id" => "pickup"
            ),
            "ViewHelper::getPickUpList"
          );
      ?>
    </div>
  </div>
</div>