<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css">
  <title><?php wp_title(); ?></title>
</head>
  <body>
<div id='wrapper'>
  <div id='header'>
        <a href="<?php bloginfo('url'); ?>"> <img src="http://placehold.it/250x100"></a>
  </div>

    <?php if(is_single()){ ?>
  <body>
        <div class='menuproyecto'>

    <?php } else { ?>
        <div class='menu'>
          <ul id='menumenu'>
            <li><a href="<?php bloginfo('url'); ?>/profile" id='profile'>Profile</a></li>
            <li><a href="<?php bloginfo('url'); ?>/category/works">Works</a></li>
          </ul>
        </div>

<?php } ?>
