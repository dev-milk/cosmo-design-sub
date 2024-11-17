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
          <div class="text">
            <?php
              if (mb_strlen(strip_tags(get_the_content()), 'UTF-8') > 80) {
                $content = mb_substr(strip_tags(get_the_content()), 0, 80, 'UTF-8');
                echo $content . '…';
              } else {
                echo strip_tags(get_the_content());
              }
            ?>
          </div>
          <div class="item-center">
          <div class="readmore"><a href="<?php the_permalink(); ?>">READ MORE</a></div>
          </div>
        </article>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php my_paging_nav(); ?>
        </main>

        <?php get_sidebar(); ?>
      </div>
      </div>
      <!-- /contents -->

      <div id="hero-area">
        <div class="hero-left">
          <!-- <img src="./img/hero-img.png" alt="夏の大三角形" /> -->
          <img src="<?php echo esc_url(get_theme_file_uri('img/hero-img.png')); ?>" alt="夏の大三角形">
        </div>
        <div class="hero-right">
          <h1>星空のひとときを、日常から離れて</h1>
           <ul>
            <li>最後に星を見たのいつだろう？</li>
            <li>無限に広がる宇宙、その果てには何があるのか？</li>
            <li>誰もが抱く宇宙への憧れと好奇心にフォーカスして、</li>
            <li>宇宙の神秘や科学を探求していきます。</li>
           </ul>
        </div>
      </div>

      <div id="re-top">
        <a href="#top" class="gotop"></a>
      </div>

      <?php get_footer(); ?>
