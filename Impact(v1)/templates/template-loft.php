<?php
/*
Template Name: Subpage

*/
?>

<?php get_header();?>


<img class="first-right-circle circle" src="<?php echo get_field('right_circle')?>" alt="circle">
<img class="first-left-circle circle" src="<?php echo get_field('left_circle')?>" alt="circle">
<img class="sub-page-second-right-circle circle" src="<?php echo get_field('right_circle')?>" alt="circle">

<div class="subpage-banner-container">
    <div class="subpage-banner-wrapper">
        <div class="subpage-banner-left">
            <div class="subpage-heading">
            <?php $sub_page_banner_items = get_field('subpage_banner_items');?>
            <h1><?php echo $sub_page_banner_items['banner_heading']?></h1>
            <h2><?php echo $sub_page_banner_items['banner_subheading']?></h2>
            </div>
         <div class="subpage-banner-bottom">
             <div class="banner-bottom-text">
         <h1><?php echo $sub_page_banner_items['banner_text']?></h1>
         </div>
         <div class="banner-bottom-button">
             <h1><?php echo $sub_page_banner_items['banner_button_text']?></h1>
             <a href="<?php echo $sub_page_banner_items['subpage_banner_button_link']?>"><button><img class="" src="<?php echo $sub_page_banner_items['banner_button_image']?>" alt="Button image"></button></a>
         </div>
         </div>
        </div>
        <div class="subpage-banner-right">

        <img class="" src="<?php echo $sub_page_banner_items['banner_image']?>" alt="Button image">
        </div>
    </div>
</div>


<div class="subpage-info-bar-container">
    <div class="subpage-info-bar-wrapper">
    <?php $sub_info_section = get_field('information_bar');?>
    <div class="subpage-info-bar-top">
        <div class="info-section-container">
            <?php $info_bar_section_one = $sub_info_section['bar_one'];?>
            <div class="info-section-left">
            <img class="" src="<?php echo $info_bar_section_one['image']?>" alt="Publication Image">
            </div>
            <div class="info-section-right">
            <h1><?php echo $info_bar_section_one['heading']?></h1>
            <h2><?php echo $info_bar_section_one['text']?></h2>
            </div>
        </div>
        <div class="info-section-container">
        <?php $info_bar_section_two = $sub_info_section['bar_two'];?>
            <div class="info-section-left">
            <img class="" src="<?php echo $info_bar_section_two['image']?>" alt="Publication Image">
            </div>
            <div class="info-section-right">
            <h1><?php echo $info_bar_section_two['heading']?></h1>
            <h2><?php echo $info_bar_section_two['text']?></h2>
            </div>
        </div>
        </div>
        <div class="subpage-info-bar-bottom">
        <div class="info-section-container">
        <?php $info_bar_section_three = $sub_info_section['bar_three'];?>
            <div class="info-section-left">
            <img class="" src="<?php echo $info_bar_section_three['image']?>" alt="Publication Image">
            </div>
            <div class="info-section-right">
            <h1><?php echo $info_bar_section_three['heading']?></h1>
            <h2><?php echo $info_bar_section_three['text']?></h2>
            </div>
        </div>
        <div class="info-section-container">
        <?php $info_bar_section_four = $sub_info_section['bar_four'];?>
            <div class="info-section-left">
            <img class="" src="<?php echo $info_bar_section_four['image']?>" alt="Publication Image">
            </div>
            <div class="info-section-right">
            <h1><?php echo $info_bar_section_four['heading']?></h1>
            <h2><?php echo $info_bar_section_four['text']?></h2>
            </div>
</div>
        </div>
    </div>
    
</div>


<div class="subpage-mobile-image-container">
    <div class="subpage-mobile-image-wrapper">
    <img class="sub-page-image-mobile" src="<?php echo $sub_page_banner_items['banner_image']?>" alt="Button image">
    </div>
</div>
<div class="subpage-information-section-container">
    
    <div class="subpage-information-section-wrapper">
    
    <?php $sub_information_section = get_field('information_body');?>
        <div class="inforamtion-section-left">
        <img class="" src="<?php echo $sub_information_section['image']?>" alt="Publication Image">
        </div>
        <div class="inforamtion-section-right">

        <h1><?php echo $sub_information_section['heading']?></h1>
        <h2><?php echo $sub_information_section['sub_heading']?></h2>
        <h3><?php echo $sub_information_section['text_body']?></h3>

        <div class="inforamtion-section-right-button-container">
        <h1><?php echo $sub_information_section['button_text']?></h1>
        <button><img class="" src="<?php echo $sub_page_banner_items['banner_button_image']?>" alt="Button image"></button>
        </div>
        </div>

    </div>
</div>


<div class="certifide-energy-provider-container">
    <div class="certifide-energy-provider-wrapper">
    <?php $certified_items = get_field('certified_provider');?>
    <h1 class="sub-page-certified-energy"><?php echo $certified_items['heading']?></h1>
    <div class="certified-image-container">
    <img class="" src="<?php echo $certified_items['image_one']?>" alt="Publication Image">
    <img class="" src="<?php echo $certified_items['image_two']?>" alt="Publication Image">
    <img class="" src="<?php echo $certified_items['image_three']?>" alt="Publication Image">
    <img class="" src="<?php echo $certified_items['image_four']?>" alt="Publication Image">
    </div>
    </div>
</div>


<div class="subpage-who-are-we-container">
<div class="subpage-who-are-we-wrapper">
<?php $who_are_we = get_field('who_are_we');?>
<div class="subpage-who-are-we-left">
<img class="" src="<?php echo $who_are_we['who_are_we_image']?>" alt="Publication Image">
</div>
<div class="subpage-who-are-we-right">
    <h1><?php echo $who_are_we['who_are_we_heading']?></h1>
    <h2><?php echo $who_are_we['who_are_we_text']?></h2>
</div>

</div>
</div>



<div class="publication-container">
    <div class="publication-wrapper">
    <div class="publication-inner-wrapper">
    <div class="publication-title">
    <?php $sub_page_pulication_items = get_field('subpage_publication_section');?>
    <h1><?php echo $sub_page_pulication_items['sub_page_publication_heading']?></h1>
    </div>
    <div class="publication-images multiple-items2">
    <?php if(have_rows('publication_subpage_images')):?>
        <?php while(have_rows('publication_subpage_images')): the_row();?>
        <img class="" src="<?php echo get_sub_field('publication_subpage_image')?>">

        <?php endwhile?>
        <?php endif;?>


    </div>
        </div>
    </div>
    </div>

<div class="subpage-how-can-we-help-container">
<div class="subpage-how-can-we-help-wrapper">
<?php $sub_page_how_can_we_help = get_field('subpage_how_can_we_help');?>
    <h1><?php echo $sub_page_how_can_we_help['how_can_we_help_heading']?></h1>
    <h2><?php echo $sub_page_how_can_we_help['how_can_we_help_subtext']?></h2>
</div>

</div>



<div class="sub-page-help-container">
    <div class="sub-page-help-wrapper">
        <div class="sub-page-help-left">
        <?php $subpage_help_items = get_field('subpage_how_we_can_help_two');?>
        <img class="" src="<?php echo $subpage_help_items['subpage_how_we_can_help_two_image']?>" alt="Publication Image">
        </div>
        <div class="sub-page-help-right">
        <h1><?php echo $subpage_help_items['subpage_how_we_can_help_two_heading'];?></h1>
        <div class="sub-page-help-button-container">
        <a href="https://impact.prontoleads.co.uk/contact-us/"><button class="sub-page-help-bottom-button-one"><?php echo $subpage_help_items['subpage_how_we_can_help_two_button_text'];?></button></a>
            <button class="sub-page-help-bottom-button-two"><img class="" src="<?php echo $subpage_help_items['subpage_how_we_can_help_two_button_image']?>" alt="Button image"></button>
        </div>
        </div>

    </div>
</div>
</div>



<?php get_footer();?>