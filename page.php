<?php get_header(); ?>

<div id="contents">
  <div class="container">
    <main>
    <?php if(have_posts()):while(have_posts()):the_post(); ?>
      <article>
        <h1 class="article-title"><?php the_title(); ?></h1>
        <?php the_post_thumbnail(); ?>
        <div class="text"><?php the_content(); ?></div>
      </article>
    <?php endwhile;endif; ?>
  </main>

    <?php get_sidebar(); ?>
  </div>
</div>
<!-- /contents -->

<div id="re-top">
  <a href="#top" class="gotop"></a>
</div>

<?php get_footer(); ?>
