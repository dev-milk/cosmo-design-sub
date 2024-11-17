<?php
/*
Template Name: お問い合わせ
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
              <p>＊こちらのフォームは閲覧用です。<br>お問い合わせはポートフォリオのフォームをお使いください。</p>
              </div>
            <form action="my-server-script.php" method="POST">
              <div class="form-row">
                <div class="form-label">
                  <label for="name">お名前</label>
                  <span>必須</span>
                </div>
                <input type="text" id="name" name="name" placeholder="Your Name" required>
              </div>
              <div class="form-row">
                <div class="form-label">
                  <label for="email">メールアドレス:</label>
                  <span>必須</span>
                </div>
                <input type="email" id="email" name="email" placeholder="Your mail address" required>
              </div>
              <div class="form-row">
                <div class="form-label">
                  <label for="message">お問い合わせ内容</label>
                  <span>必須</span>
                </div>
                <textarea id="message" name="message" rows="5"placeholder="Your Message" required></textarea>
              </div>
              <div class="form-row">
                <div class="button-center">
                  <button type="submit">送信</button>
                </div>
              </div>
            </form>
              </div>
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
