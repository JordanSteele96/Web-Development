<?php
/*
Template Name: About us

*/
?>


<?php get_header();?>


<img class="first-right-circle circle" src="<?php echo get_field('right_circle')?>" alt="circle">

<div class="aboutus-banner-container">
<div class="aboutus-banner-wrapper">
<?php $aboutus_banner_items = get_field('about_us_banner_section');?>
<div class="aboutus-banner-left">

            <h1><?php echo $aboutus_banner_items['about_us_banner_heading']?></h1>
            <h2><?php echo $aboutus_banner_items['about_us_banner_subheading']?></h2>
            <h3><?php echo $aboutus_banner_items['about_us_banner_subtext']?></h3>
        <div class="aboutus-banner-trustpilot">
        <?php $aboutus_banner_trustpilot = $aboutus_banner_items['about_us_banner_trustpilot_group'];?>
        <h1><?php echo $aboutus_banner_trustpilot['about_us_banner_trustpilot_heading']?></h1>
        <img class="" src="<?php echo $aboutus_banner_trustpilot['about_us_banner_trustpilot_image']?>" alt="">
        <h2><?php echo $aboutus_banner_trustpilot['about_us_banner_trustpilot_rating']?></h2>
</div>
            </div>
            <div class="aboutus-banner-right">
            <img class="" src="<?php echo $aboutus_banner_items['about_us_banner_image']?>" alt="">
</div>
</div>
</div>


<div class="aboutus-we-specialize-container">
<div class="aboutus-we-specialize-wrapper">
<?php $aboutus_specialize_items = get_field('we_specialize_section');?>
<h1><?php echo $aboutus_specialize_items['we_specialize_heading']?></h1>


<div class="we-specialize-box-container">
        <?php if(have_rows('we_specialize_boxes')):?>
            <?php while(have_rows('we_specialize_boxes')): the_row();?>
            <div class="we-specialize-box">
                <div class="we-specialize-box-center">
            <img class="we-specialize-top-image" src="<?php echo get_sub_field('we_specialize_box_image')?>" alt="Cusomter-image">
            </div>
            <h1><?php the_sub_field('we_specialize_box_heading');?></h1>
            <h2><?php the_sub_field('we_specialize_box_subheading');?></h2>
            <div class="we-specialize-box-right">
            <img class="" src="<?php echo get_sub_field('we_specialize_box_bottom_image')?>" alt="Cusomter-image">
        </div>
        </div>
            <?php endwhile?>
        <?php endif;?>
        </div>

    </div>
    </div>

<div class="aboutus-contactus-container">
    <div class="aboutus-contactus-wrapper">
    <?php $aboutus_contact_items = get_field('aboutus_contact_section');?>
    <div class="aboutus-contactus-left">
    <img class="" src="<?php echo $aboutus_contact_items['aboutus_contact_image']?>" alt="Contact image">

    </div>
    <div class="aboutus-contactus-right">
    <h1><?php echo $aboutus_contact_items['aboutus_contact_heading']?></h1>
    <h2><?php echo $aboutus_contact_items['aboutus_contact_subheading']?></h2>

    <div class="aboutus-contactus-right-form">
    <?php echo $aboutus_contact_items['aboutus_contact_form']?>
    </div>

    </div>
    </div>
</div>

<?php get_footer();?>