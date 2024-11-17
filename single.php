<?php get_header(); ?>

<div id="contents">
        <div class="container">
        <main>
        <?php if(have_posts()): ?>
      <?php while(have_posts()):the_post(); ?>
        <?php
          $cat = get_the_category();
          $catname = $cat[0]->cat_name;
        ?>
        <article>
          <h2 class="article-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h2>
          <ul class="meta">
            <li><?php the_time('Y/m/d'); ?></li>
            <li><?php echo $catname; ?></li>
          </ul>
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
          <div class="text"><?php the_content(); ?></div>
        </article>
        <?php endwhile; ?>
    <?php endif; ?>

    <!-- 前の記事　次の記事 -->
    <div class="navigation">
    <ul class="page-numbers">
    <li class="navileft"><?php next_post_link('< %link', 'Nex', TRUE, ''); ?></li>
    <li class="naviright"><?php previous_post_link('%link >', 'Pre', TRUE, ''); ?></li>
    </ul>
    </div>

        </main>

        <?php get_sidebar(); ?>
      </div>
      </div>
      <!-- /contents -->

      <div id="re-top">
        <a href="#top" class="gotop"></a>
      </div>

      <?php get_footer(); ?>
