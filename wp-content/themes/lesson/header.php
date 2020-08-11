<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;utf-8"/>
    <meta name="description" content="abrakadabra"/>
    <meta name="keywords" content="key"/>  
    <title>CSS3+HTML5</title>
    <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/css/style.css" type="text/css"/>
    <link href="image/icon1.ico" rel="shortcut icon"  type="image/x-icon"/>
</head>
<body>
     <header>
<a href="<?php __DIR__?>"title="На главную"id="logo" class="logoc"><?php bloginfo('name')?></a>
 <span id="contact"><a href="about.html">О нас</a></span>
 <input type="text" placeholder="Давай помогу найти" class="field"/>
 <!-- <span class="right"> -->
         <!-- <span id="registration" class="contact">
         <a href="registation.html" title="Регистрация">Регистрация</a>
                </span>
            <span id="entrance" class="contact">
            <a href="/login.html" title="Вход">Вход</a>
         </span> -->
         <?php 
         $args=array('theme_location'=>'',
         'menu'=>'',
         'container'=>'nav',
         'conteiner_class'=>'contact',
         'container_id'=>'',
         'menu_class'=>'right',
         'menu_id'=>'',
         'echo'=>'true',
         'items_wrap'=>'<ul id = "%1$s" class = "%2$s">%3$s</ul>',
         'fallback_cb'=>'wp_page_menu',
         'before'=>'',
         'after'=>'',
         'link_before'=>'',
         'link_after'=>'',
         'depth'=>0,
         'walker'=>'',
        'item_spacing'=>'preserve');
         wp_nav_menu($args);
         ?>
         <!-- </span> -->
     </header>