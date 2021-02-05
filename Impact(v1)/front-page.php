<?php get_header();?>


<div class="banner-container">
<div class="banner-wrapper">
<div class="banner-left">

<img class="first-right-circle circle" src="<?php echo get_field('right_circle')?>" alt="circle">
<img class="first-left-circle circle" src="<?php echo get_field('left_circle')?>" alt="circle">
<img class="second-right-circle circle" src="<?php echo get_field('right_circle')?>" alt="circle">
<img class="third-right-circle circle" src="<?php echo get_field('right_circle')?>" alt="circle">




<?php $banner_items = get_field('banner-items');?>
<h1><?php echo $banner_items['page_title']?></h1>

<h2><?php echo $banner_items['page_subtitle']?></h2>
<h3><?php echo $banner_items['page_title_paragraph']?></h3>
<div class="banner-button-container">
<a href="https://impact.prontoleads.co.uk/contact-us/"><button class="talk-to-us-button"><?php echo $banner_items['page_button_one']?></button></a>
<a href="https://impact.prontoleads.co.uk/about-us/"><button class="about-us-button"><?php echo $banner_items['page_button_two']?></button></a>
</div>
<div class="trustpilotrating-container">
<h4 class="trustPilot-text"><?php echo $banner_items['trustpilot_rating_text']?></h4>
<img class="trustPilot-image" src="<?php echo $banner_items['trustpilot-image']?>" alt="trustpilot-image">
    
    <h4 class="trustPilot-rating"><?php echo $banner_items['trustpliot-rating']?></h4>
</div>
</div>
<div class="banner-right">
    <img class="banner-image" src="<?php echo $banner_items['banner_image']?>" alt="banner-image">
</div>
</div>
</div>

<div class="publication-container">
    <div class="publication-wrapper">
    <div class="publication-inner-wrapper">
        <div class="publication-title">
    <?php $publication_items = get_field('publications-section');?>
    <h1><?php echo $publication_items['publications_featured_in']?></h1>
    </div>
    <div class="publication-images multiple-items2">
    <?php if(have_rows('publication_images')):?>
        <?php while(have_rows('publication_images')): the_row();?>
        <img class="" src="<?php echo get_sub_field('publication_image')?>">

        <?php endwhile?>
        <?php endif;?>


    </div>
        </div>
    </div>
    </div>


<div class="how-can-we-help-container">
    <div class="how-can-we-help-wrapper">
        <div class="how-can-we-help-top-text">
        <img class="banner-image-moved" src="<?php echo $banner_items['banner_image']?>" alt="banner-image">
        <?php $how_can_we_help_section = get_field('how_can_we_help_section');?>
        <img class="how-can-we-help-image" src="<?php echo $banner_items['banner_image']?>" alt="banner-image">
    <h1><?php echo $how_can_we_help_section['how_can_we_help']?></h1>
    <h2><?php echo $how_can_we_help_section['how_can_we_help_text']?></h2>
    </div>
    <div class="how-can-we-help-boxes">
        <div class="help-box">

        <?php $box_one = $how_can_we_help_section['help_box_one'];?>
        <div class="help-box-top">
        <img class="box-top-image-one help-box-image" src="<?php echo $box_one['box_one_image']?>" alt="Publication Image">
        </div>
        <img class="box-heading-image" src="<?php echo $box_one['box_one_heading']?>" alt="Publication Image">

        <h1><?php echo $box_one['box_one_subtext'];?></h1>
        <a href="<?php echo $box_one['box_one_button_link']?>"><button class="help-button-one"><?php echo $box_one['box_one_button_text'];?></button></a>
        </div>
        <div class="help-box">
        <?php $box_two = $how_can_we_help_section['help_box_two'];?>
        <div class="help-box-top">
        <img class="box-top-image-two help-box-image" src="<?php echo $box_two['box_two_image']?>" alt="Publication Image">
        </div>
        <img class="box-heading-image" src="<?php echo $box_two['box_two_heading']?>" alt="Publication Image">

        <h1><?php echo $box_two['box_two_subtext'];?></h1>
        <a href="<?php echo $box_two['box_two_button_link']?>"><button class="help-button-two"><?php echo $box_two['box_two_button_text'];?></button></a>
        </div>
        <div class="help-box">
        <?php $box_three = $how_can_we_help_section['help_box_three'];?>
        <div class="help-box-top">
        <img class="box-top-image-three help-box-image" src="<?php echo $box_three['box_three_image']?>" alt="Publication Image">
        </div>
        <img class="box-heading-image" src="<?php echo $box_three['box_three_heading']?>" alt="Publication Image">

        <h1><?php echo $box_three['box_three_subtext'];?></h1>
        <a href="<?php echo $box_three['box_three_button_link']?>"><button class="help-button-three"><?php echo $box_three['box_three_button_text'];?></button></a>
        </div>

</div>
    </div>
</div>
<div class="certifide-energy-provider-container">
    <div class="certifide-energy-provider-wrapper">
    <?php $certified_items = get_field('certified_provider_section');?>
    <h1><?php echo $certified_items['certified_provider_heading']?></h1>
    <div class="certified-image-container">
    <img class="" src="<?php echo $certified_items['certified_provider_image_one']?>" alt="Publication Image">
    <img class="" src="<?php echo $certified_items['certified_provider_image_two']?>" alt="Publication Image">
    <img class="" src="<?php echo $certified_items['certified_provider_image_three']?>" alt="Publication Image">
    <img class="" src="<?php echo $certified_items['certified_provider_image_four']?>" alt="Publication Image">
    </div>
    </div>
</div>

<div class="who-are-we-container">
    <div class="who-are-we-wrapper">
    <?php $who_are_we_items = get_field('who_are_we_section');?>
        <div class="who-are-we-left">
        <img class="" src="<?php echo $who_are_we_items['who_are_we_image']?>" alt="Publication Image">
        </div>
        <div class="who-are-we-right">
        <h1><?php echo $who_are_we_items['who_are_we_heading']?></h1>
        <h2><?php echo $who_are_we_items['who_are_we_subtext']?></h2>
        </div>
    </div>
</div>


<div class="customer-reviews-container">

    <div class="customer-reviews-wrapper">

    <?php $customer_reviews_items = get_field('customer_reviews_section');?>
    <img src="<?php echo $customer_reviews_items['left_arrow']?>" class="left" alt="" srcset="">
    <img src="<?php echo $customer_reviews_items['right_arrow']?>" class="right" alt="" srcset="">
    <h1><?php echo $customer_reviews_items['customer_review_heading']?></h1>
        <h2><?php echo $customer_reviews_items['customer_review_subtext']?></h2>
    
        <img class="quoation-left" src="<?php echo $customer_reviews_items['quotation_mark_left']?>" alt="quotation-left">
        <img class="quoation-right" src="<?php echo $customer_reviews_items['quotation_mark_right']?>" alt="quotation-right">

<div class="customer-reviews-section multiple-items">



        <?php if(have_rows('customer_reviews')):?>

            <?php while(have_rows('customer_reviews')): the_row();?>
            <div class="customer-review">
                <div class="customer-review-top-section">
            <img class="customer-image" src="<?php echo get_sub_field('customer_image')?>" alt="Cusomter-image">
            <h1><?php the_sub_field('customer_review');?></h1>
            <img class="review-image" src="<?php echo get_sub_field('review_image')?>" alt="Publication Image">
            </div>
            <div class="customer-name">
                <h3> - </h3>
           <h2><?php the_sub_field('customer_name');?></h2>
           </div>
            <div class="customer-rating">
            <img class="" src="<?php echo get_sub_field('rating_image')?>" alt="Publication Image">
            <?php the_sub_field('rating_score');?>
            </div>
                </div>

            <?php endwhile?>
        <?php endif;?>

    </div>
    </div>
</div>

<div class="help-container">
    <div class="help-wrapper">
        <div class="help-left">
        <?php $help_items = get_field('help_section');?>
        <img class="" src="<?php echo $help_items['help_image']?>" alt="Publication Image">
        </div>
        <div class="help-right">
        <h1><?php echo $help_items['help_heading'];?></h1>
        <div class="help-button-container">
        <a href="https://impact.prontoleads.co.uk/contact-us/"><button class="help-bottom-button-one"><?php echo $help_items['help_button_one'];?></button></a>
        <a href="https://impact.prontoleads.co.uk/about-us/"><button class="help-bottom-button-two"><?php echo $help_items['help_button_two'];?></button></a>
        </div>
        </div>

    </div>
</div>
</div>
<?php get_footer();?>




