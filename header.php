<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Noto+Serif+JP:wght@500&family=Shippori+Mincho&display=swap" rel="stylesheet">


</head>

<body <?php body_class(); ?>>

  <header class="header">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="header__logo"> Tecool</a>
    <nav class="header-nav pc">
      <ul class="header-nav__ul">
        <li class="header-nav__list"><a href="archive.html">Topics</a></li>
        <li class="header-nav__list"><a href="archive-styles.html">Style</a></li>
        <li class="header-nav__list"><a href="<?php echo home_url('about'); ?>">About</a></li>
      </ul>
    </nav>
  </header>
  <div class="menu tab" id="menu">
    <span class="menu__line--top"></span>
    <span class="menu__line--middle"></span>
    <span class="menu__line--bottom"></span>
  </div>

  <nav class="header__nav--sp tab" id="header__nav--sp">
    <ul class="header-nav__ul--sp">
      <li class="header-nav__list--sp"><a href="archive.html">Topics</a></li>
      <li class="header-nav__list--sp"><a href="archive-styles.html">Style</a></li>
      <li class="header-nav__list--sp"><a href="<?php echo home_url('about'); ?>">About</a></li>
      <li class="header-nav__list--sp header__logo"><a href="page-about.html">Tecool</a></li>
    </ul>
  </nav>