<?php
/*
Template Name: このサイトについて
*/
?>

<?php get_header(); ?>

<div id="contents">
  <div class="container">
    <main>
      <?php if (have_posts()): while (have_posts()): the_post(); ?>
          <article>
            <h1 class="article-title"><?php the_title(); ?></h1>
            <?php the_post_thumbnail(); ?>
            <div id="contact">
              <div class="text">
                <p>星と歴史が好きな有閑マダムを目指す普通の会社員です。<br>こちらのブログは作者のオリジナルテーマ（ポートフォリオにて紹介）を使用しています。</p>
              </div>
            </div>
          </article>
      <?php endwhile;
      endif; ?>
    </main>

    <?php get_sidebar(); ?>
  </div>
</div>
<!-- /contents -->

<div id="re-top">
  <a href="#top" class="gotop"></a>
</div>

<?php get_footer(); ?>
