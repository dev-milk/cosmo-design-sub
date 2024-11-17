<form method="get" id="searchform" action="<?php echo esc_url(home_url()); ?>">
  <input type="text" name="s" id="s" placeholder="サイト内検索">
  <button type="submit">
    <img src="<?php echo esc_url(get_theme_file_uri('img/search.png')); ?>" alt="">
  </button>
</form>
