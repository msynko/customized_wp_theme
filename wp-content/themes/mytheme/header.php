<!DOCTYPE html>

<html>

<head>

<?php wp_head();?>


</head>



<body <?php body_class();?>>

<div class="container">

<header class="sticky-top">

<?php wp_nav_menu(
    
    array('theme_location'=>'top-menu',
    'menu_class' => 'navigation'
    )
    
);?>
</div>
</header>