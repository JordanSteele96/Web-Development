<?php
/*
Template Name: Contact Us

*/
?>
<?php get_header();?>





<img class="first-right-circle circle" src="<?php echo get_field('right_circle')?>" alt="circle">

<div class="contactus-banner-container">
    <div class="contactus-banner-wrapper">
        <div class="contactus-banner-left">
        <?php $contact_banner_items = get_field('contact_us_banner_section');?>
            <h1><?php echo $contact_banner_items['contactus_banner_heading']?></h1>
            <h2><?php echo $contact_banner_items['contactus_banner_subtext']?></h2>

    <div class="banner-form">
    <?php echo $contact_banner_items['contactus_banner_form']?>
    </div>
    </div>
        <div class="contactus-banner-right">


            <img class="" src="<?php echo $contact_banner_items['contactus_banner_image']?>" alt="">
        </div>

</div>
</div>
<div class="contactus-get-in-touch-container">
<div class="contactus-get-in-touch-wrapper">
<?php $contact_more_items = get_field('contact_us_get_in_touch_section');?>
<div class="contactus-get-in-touch-left">
    <div class="contactus-get-in-touch-left-heading">
        <h1><?php echo $contact_more_items['contactus_get_in_touch_heading']?></h1>
        <h2><?php echo $contact_more_items['contactus_get_in_touch_subheading']?></h2>
    </div>
    <div class="contactus-get-in-touch-left-contact-info">
        <div class="contactus-get-in-touch-left-contact-subsection">
    <?php $phone_number_items = $contact_more_items['contactus_phone_number'];?>
    <div class="contactus-get-in-touch-left-contact-subsection-img">
    <img class="" src="<?php echo $phone_number_items['contact_us_phone_number_image']?>" alt="">
</div>
<div class="contactus-get-in-touch-left-contact-subsection-text">
    <h1 class="phone-number-text"><?php echo $phone_number_items['contact_us_phone_number_text']?></h1>
    </div>
    </div>
    <div class="contactus-get-in-touch-left-contact-subsection">
    <?php $phone_email_items = $contact_more_items['contactus_email_address'];?>
    <div class="contactus-get-in-touch-left-contact-subsection-img">
    <img class="" src="<?php echo $phone_email_items['contact_us_email_address_image']?>" alt="">
    </div>

    <div class="contactus-get-in-touch-left-contact-subsection-text">
    <h1><?php echo $phone_email_items['contact_us_email_address_text']?></h1>
    </div>
</div>

    </div>
</div>
<div class="contactus-get-in-touch-right">

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2376.416656450937!2d-2.9966752839758493!3d53.44313777515764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487b23b1b91b697b%3A0xfb6ef3f7aaf96d97!2sImpact%20Energy%20LTD!5e0!3m2!1sen!2suk!4v1608304179564!5m2!1sen!2suk" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
</div>
</div>



<?php get_footer();?>