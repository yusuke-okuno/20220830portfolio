<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>nokuo.web</title>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <?php wp_head(); ?>
</head>

<body>
  <header class="header">
    <div class="header-inner">
      <h1 class="site-title">
          <a href="<?php echo esc_url(home_url('/')); ?>">nokuo.web</a>
      </h1>
      <nav class="nav">
          <ul class="nav-menu">
            <li><a href='<?php echo esc_url(home_url('/')); ?>/services'>services</a></li>
            <li><a href='<?php echo esc_url(home_url('/')); ?>/works'>works</a></li>
            <li><a href='<?php echo esc_url(home_url('/')); ?>/about'>about</a></li>
            <li><a href='<?php echo esc_url(home_url('/')); ?>/contact'>contact</a></li>
          </ul>
      </nav>

      <div class="toggle_btn">
        <span></span>
        <span></span>
        <span></span>
      </div>

    </div>
  </header>

