<footer>
        <div id="footer">
            <div class="item">
              <div class="footer-logo">
                <a href="<?php echo esc_url(home_url()); ?>">
                  <img src="<?php echo esc_url(get_theme_file_uri('img/footer-logo.png')); ?>" alt="footer-logo">
                </a>
              </div>
            </div>
            <div class="item">
              <ul>
                <li>
                  <a href="<?php echo esc_url(home_url()); ?>">HOME</a>
                </li>
                <li>
                  <a href="<?php echo esc_url(home_url('/about/')); ?>">ABOUT</a>
                </li>
                <li class="list-item">
                <a href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a>
                </li>
              </ul>
            </div>
        </div>
        <div class="copyright"><small>&copy; <?php echo bloginfo('name'); ?></small></div>
    </footer>
  </div>
  <?php wp_footer(); ?>
</body>
</html>
