<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title><?php echo bloginfo('name'); ?></title>
<meta name="viewport" content="width=device-width" />
<meta name="description" content="<?php bloginfo('description'); ?>">
<link rel="icon" href="<?php echo esc_url(get_theme_file_uri('favicon.ico')); ?>">

<?php wp_head(); ?>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-NHLJY41MVE"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-NHLJY41MVE');
</script>
</head>

<body id="top">
  <div class="wrap">

<header>
    <div class="container">
        <nav>
            <ul>
                <li><a href="<?php echo esc_url(home_url()); ?>">HOME</a></li>
                <li><a href="<?php echo esc_url(home_url('/about/')); ?>">ABOUT</a></li>
                <li><a href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a></li>
            </ul>
        </nav>

        <div class="sp-menu">
            <input type="checkbox" id="sp-menu_check">
            <label for="sp-menu_check" class="sp-menu_box">
              <span></span>
            </label>
            <div class="sp-menu_content">
              <ul class="sp-menu_list">
                <li class="sp-menu_item">
                  <a class="sp-menu_link" href="<?php echo esc_url(home_url()); ?>">Home</a>
                </li>
                <li class="sp-menu_item">
                  <a class="sp-menu_link" href="<?php echo esc_url(home_url('/about/')); ?>">ABOUT</a>
                </li>
                <li class="sp-menu_item">
                  <a class="sp-menu_link" href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a>
                </li>
              </ul>
            </div>
          </div>

        <div class="header-logo">
             <a href="<?php echo esc_url(home_url()); ?>">
            <img src="<?php echo esc_url(get_theme_file_uri('img/header-logo.png')); ?>" alt="logo">
          </a>
        </div>
        <div class="sp-logo">
        <a href="<?php echo esc_url(home_url()); ?>">
        <img src="<?php echo esc_url(get_theme_file_uri('img/sp-logo.png')); ?>" alt="logo">
          </a>
        <h1>宇宙サイエンスのブログ</h1>
        </div>
   </div>
</header>
<?php echo custom_breadcrumbs(); ?>
