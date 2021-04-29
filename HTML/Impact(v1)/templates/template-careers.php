<?php
/*
Template Name: Careers

*/
?>

<?php get_header();?>


<img class="first-right-circle circle" src="<?php echo get_field('right_circle')?>" alt="circle">
<img class="careers-first-left-circle circle" src="<?php echo get_field('left_circle')?>" alt="circle">


<div class="careers-banner-container">
    <div class="careers-banner-wrapper">
    <?php $careers_banner_items = get_field('careers_banner_section');?>

        <div class="careers-banner-wrapper-left">
            <h1><?php echo $careers_banner_items['career_banner_heading']?></h1>
            <h2><?php echo $careers_banner_items['career_banner_subheading']?></h2>
            <h3><?php echo $careers_banner_items['career_banner_text']?></h3>
        </div>
        <div class="careers-banner-wrapper-right">

        <img src="<?php echo $careers_banner_items['career_banner_image']?>" alt="Careers banner image">
        </div>
    </div>
</div>



<div class="careers-job-listings-container">
<?php $careers_listing_items = get_field('careers_listing_section');?>

    <div class="careers-job-listings-wrapper">
    <h1><?php echo $careers_listing_items['careers_listing_heading']?></h1>
    <div class="careers-job-listings-box-container">

  


    <?php if(have_rows('career_boxes')): $i = 1;?>
    <?php while(have_rows('career_boxes')): the_row();?>
    <div data-toggle="modal" data-target="#myModal-<?php echo $i;?>" class="careers-box">
            <h1><?php the_sub_field('careers_job_title');?></h1>
        <div class="careers-box-lower-section">
            <div class="careers-box-lower-section-item">
                <img src="<?php echo $careers_listing_items['careers_listing_location_icon']?>" alt="Careers banner image">
                <h2><?php the_sub_field('careers_job_location');?></h2>
            </div>
            <div class="careers-box-lower-section-item">
                <img src="<?php echo $careers_listing_items['careers_listing_salary_icon']?>" alt="Careers banner image">
                <h2><?php the_sub_field('careers_job_salary');?></h2>
            </div>
            <div class="careers-box-lower-section-item">
                <img src="<?php echo $careers_listing_items['careers_listing_hours_icon']?>" alt="Careers banner image">
                <h2><?php the_sub_field('careers_job_hours');?></h2>

                </div>
  
    </div>
    </div>
    <div class="modal" id="myModal-<?php echo $i;?>">
	  <div class="modal-dialog modal-dialog-centered">
	    <div class="modal-content">
	
	      <!-- Modal Header -->
	      <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">×</button>

	      </div>
	
	      <!-- Modal body -->
	      <div class="modal-body">
          <h1><?php the_sub_field('careers_job_title');?></h1>
          <div class="modal-careers-box-lower-section">
            <div class="modal-careers-box-lower-section-item">
                <img src="<?php echo $careers_listing_items['careers_listing_location_icon']?>" alt="Careers banner image">
                <h2><?php the_sub_field('careers_job_location');?></h2>
            </div>
            <div class="modal-careers-box-lower-section-item">
                <img src="<?php echo $careers_listing_items['careers_listing_salary_icon']?>" alt="Careers banner image">
                <h2><?php the_sub_field('careers_job_salary');?></h2>
            </div>
            <div class="modal-careers-box-lower-section-item">
                <img src="<?php echo $careers_listing_items['careers_listing_hours_icon']?>" alt="Careers banner image">
                <h2><?php the_sub_field('careers_job_hours');?></h2>
          </div>
          </div>
          <h2><?php the_sub_field('careers_job_description');?></h2>

          </div>

	      <!-- Modal footer -->
	      <div class="modal-footer">
          <h4><?php echo $careers_listing_items['careers_listing_apply_here']?></h4>
          <div class="modal-form">
          <?php echo $careers_listing_items['careers_form_popup']?>
          </div>
	      </div>
	    </div>
	  </div>
	</div>         
	<?php   $i++; // Increment the increment variable
	endwhile; //End the loop 
endif; ?>
    </div>
        </div>
</div>


<div class="careers-contact-form-container">
<div class="careers-contact-form-wrapper">
<?php $careers_form_items = get_field('careers_form_section');?>
<div class="careers-contact-form-left">
<img src="<?php echo $careers_form_items['careers_form_image']?>" alt="Careers form image">

</div>
<div class="careers-contact-form-right">
<h1><?php echo $careers_form_items['careers_form_heading']?></h1>
<h2><?php echo $careers_form_items['careers_form_subheading']?></h2>
<div class="careers-form">

<?php echo $careers_form_items['careers_form']?>

</div>
</div>

</div>
</div>





<div class="help-container">
    <div class="help-wrapper">
        <div class="help-left">
        <?php $careers_help_items = get_field('careers_let_us_know');?>
        <img class="" src="<?php echo $careers_help_items['careers_let_us_know_image']?>" alt="Publication Image">
        </div>
        <div class="help-right">
        <h1><?php echo $careers_help_items['careers_let_us_know_heading'];?></h1>
        <div class="help-button-container">
        <a href="https://impact.prontoleads.co.uk/contact-us/"><button class="careers-help-bottom-button-one"><?php echo $careers_help_items['careers_let_us_know_button_text_one'];?></button></a>
        <a href="https://impact.prontoleads.co.uk/about-us/"><button class="careers-help-bottom-button-two"><?php echo $careers_help_items['careers_let_us_know_button_text_two'];?></button></a>
        </div>
        </div>

    </div>
</div>
</div>





<?php get_footer();?>