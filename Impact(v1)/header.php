<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
    <title>Impact</title>
</head>

<body class="site"<?php body_class();?>>
<div class="site-content">
    <div class="site-container">


<header>
<div class="header-container">
<a href="https://impact.prontoleads.co.uk/"><img src="<?php echo get_field('header_logo','option')?>" alt="Impact-logo"></a>
    <div class="nav-links-container">
        <div class="nav-upper-menu">
<?php wp_nav_menu(
array(
    'theme_location' => 'nav-top-menu',
    'menu_class' => 'nav-top-bar'

)
);
?>
</div>


<div class="nav-lower-menu">
<?php wp_nav_menu(
array(
    'theme_location' => 'nav-bottom-menu',
    'menu_class' => 'nav-bottom-bar'

)
);
?>



</div>

</div>


<div class="mobile-items">
<?php $header_banner_items = get_field('header_phone_section','option');?>
<a class="none-stlying" href="tel:01512219866"><img class="header-phone-icon" src="<?php echo $header_banner_items['header_phone_image']?>" alt="Header phone icon"></a>


<div class="burger">
    <div class="line1"></div>
    <div class="line2"></div>
    <div class="line3"></div>
    </div>
</div>
</div>
</header>

