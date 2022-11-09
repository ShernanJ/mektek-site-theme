<!-- Developed by Shernan Javier / https://www.shernanjavier.com/ -->
<!-- Designed by Richie Kong / https://www.richiekong.design/ -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Primary Meta Tags -->
  <title>MekTek</title>
  <meta name="title" content="MekTek">
  <meta name="description" content="MekTek is a registered professional engineering consulting firm with a head office in Saskatoon and projects across Canada.">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://mektekinc.ca/">
  <meta property="og:title" content="MekTek">
  <meta property="og:description" content="MekTek is a registered professional engineering consulting firm with a head office in Saskatoon and projects across Canada.">
  <meta property="og:image" content="https://mektekinc.ca/wp-content/uploads/2022/09/M_RedMWithWhiteBackground.png">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://mektekinc.ca/">
  <meta property="twitter:title" content="MekTek">
  <meta property="twitter:description" content="MekTek is a registered professional engineering consulting firm with a head office in Saskatoon and projects across Canada.">
  <meta property="twitter:image" content="https://mektekinc.ca/wp-content/uploads/2022/09/M_RedMWithWhiteBackground.png">
  <meta name="keywords" content="mektek, engineering, consulting, canada">
  <meta name="robots" content="index, follow">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="language" content="English">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="/style.css" rel="stylesheet">
  <?php wp_head(); ?>
  <title>MekTek</title>
</head>

<body <?php body_class(); ?>>
  <nav class="top-nav">
    <a href="/">
      <img src=<?php echo get_template_directory_uri() . "/assets/images/MekTek_Logo.svg" ?> />
    </a>
    <div class="desktop-menu">
      <?php wp_nav_menu(
        array(
          'theme_location' => 'top-menu',
          'menu' => 'top-menu'
        )
      ); ?>
    </div>
    <div class="hamburger-wrapper">
      <div class="hamburger-menu"></div>
    </div>
    <div class="mobile-menu-overlay">
      <?php wp_nav_menu(
        array(
          'theme_location' => 'mobile-menu',
          'menu' => 'mobile-menu'
        )
      ); ?>
    </div>
    </div>
  </nav>