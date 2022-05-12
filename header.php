<!--
Team
Modules
-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="https://use.typekit.net/kph3lfh.css">
  <link rel="stylesheet" href="style.css">
  <title>CCMI</title>
</head>
<body>
<header class="site-header">
  <div class="container">
    <div class="grid grid--1-to-2">
      <div>
        <a href="index.php" class="site-name">CCMI</a>
      </div>
      <nav class="site-nav">
        <button id="menuButton" class="menu-button closed">
          <img src="images/menu.svg" alt="Menu button" class="open">
          <img src="images/x.svg" alt="Close menu" class="close">
        </button>
        <ul id="menu">
          <li><a href="index.php" <?php if ($page === 'home') : ?>class="current"<?php endif; ?>>Home</a></li>
          <li><a href="about.php" <?php if ($page === 'about') : ?>class="current"<?php endif; ?>>Who We Are</a></li>
          <li><a href="news.php" <?php if ($page === 'news') : ?>class="current"<?php endif; ?>>News</a></li>
          <li><a href="demosProjects.php" <?php if ($page === 'demosProjects') : ?>class="current"<?php endif; ?>>Demos &amp; Projects</a></li>
          <li><a href="publications.php" <?php if ($page === 'publications') : ?>class="current"<?php endif; ?>>Publications</a></li>
          <li><a href="contact.php" <?php if ($page === 'contact') : ?>class="current"<?php endif; ?>>Contact Us</a></li>
        </ul>
      </nav>
    </div>
  </div>
</header>