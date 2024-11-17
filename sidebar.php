<aside id="sidebar">
<section class="side-item">
    <img src="<?php echo esc_url(get_theme_file_uri('img/auther.svg')); ?>" alt="作者プロフィール" class="author-img">
    <h3 class="side-title">Auther</h3>
    <p class="profile">
    星と歴史が好きな有閑マダムを目指す普通の会社員です。こちらのブログは作者のオリジナルテーマ（ポートフォリオにて紹介）を使用しています。
    </p>
  </section>

  <section class="side-item">
    <?php get_search_form(); ?>
  </section>

 
  <section class="archive">
    <?php dynamic_sidebar('sidebar'); ?>
  </section>
</aside>
