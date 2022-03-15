<?php
class ViewHelper {

  /**
   * ページネーションの取得
   *
   * @param [type] $args
   * @param [type] $paged
   * @return void
   */
  public static function getPaginate($args) {
    global $wp_rewrite;
    $paginate_base = get_pagenum_link(1);
    if(strpos($paginate_base, '?') || !$wp_rewrite->using_permalinks()){
        $paginate_format = '';
        $paginate_base = add_query_arg('paged','%#%');
    }else{
        $paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
        user_trailingslashit('page/%#%/','paged');
        $paginate_base .= '%_%';
    }

    $args["base"] = $paginate_base;
    $args["format"] = $paginate_format;
    $paginate = paginate_links($args);

    return <<< RESULT
      <div class="pagination">
        <div class="pnavi">
          {$paginate}
        </div>
      </div>
RESULT;
  }
}
