</body>
<?php wp_footer();?>
</div>
<div class="footer-container">
<div class="footer-wrapper">
<div class="footer-section-one">
<?php $Section_one_items = get_field('footer_section_one','option');
$contactLink = $Section_one_items['contact_us_link'];
if( $contactLink ): 
    $link_url = $contactLink['url'];
    $link_title = $contactLink['title'];
    $link_target = $contactLink['target'] ? $contactLink['target'] : '_self';
    ?>

<?php endif; ?>
<h1><?php echo $Section_one_items['heading']?></h1>
<h2><?php echo $Section_one_items['heading_subtext']?></h2><a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
<div class="footer-social">
    <a href="<?php echo $Section_one_items['facebook_url']; ?>" target="_blank"><img src="<?php 
          echo $Section_one_items['facebook_image']; ?>" alt="Facebook Image"/></a>
          <a href="<?php echo $Section_one_items['twitter_url']; ?>" target="_blank"><img src="<?php 
          echo $Section_one_items['twitter_image']; ?>" alt="Twitter Image"/></a>
</div>

<div class="footer-providers">
    <?php $provider_images = $Section_one_items['energy_providers']?>
<img class="" src="<?php echo $provider_images['provider_one']?>" alt="Publication Image">
<img class="" src="<?php echo $provider_images['provider_two']?>" alt="Publication Image">
<img class="" src="<?php echo $provider_images['provider_three']?>" alt="Publication Image">
<img class="" src="<?php echo $provider_images['provider_four']?>" alt="Publication Image">
</div>
</div>
<div class="footer-section-two">
<h1><?php echo get_field('footer_section_two_heading','option')?></h1>
<?php wp_nav_menu(
array(
    'theme_location' => 'footer-menu',
    'menu_class' => 'footer-menu'
)
);
?>

</div>
<div class="footer-section-three">
<?php $Section_three_items = get_field('footer_section_three','option'); ?>
<div class="telephone-container">
<?php $telephone_items = $Section_three_items['telephone']?>
<h1><?php echo $telephone_items['telephone_heading']?></h1>
<h2><?php echo $telephone_items['telephone_number']?></h2>
</div>
<div class="email-container">
<?php $email_items = $Section_three_items['email']?>
<h1><?php echo $email_items['email_heading']?></h1>
<h2><?php echo $email_items['email_address']?></h2>
</div>
<div class="address-container">
<?php $address_items = $Section_three_items['home']?>
<h1><?php echo $address_items['home_heading']?></h1>
<h2><?php echo $address_items['home_address']?></h2>
</div>
</div>

<div class="footer-section-four">
<?php $Section_four_items = get_field('footer_section_four','option');?>
<img class="" src="<?php echo $Section_four_items['impact_logo']?>" alt="Publication Image">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2376.416656450937!2d-2.9966752839758493!3d53.44313777515764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487b23b1b91b697b%3A0xfb6ef3f7aaf96d97!2sImpact%20Energy%20LTD!5e0!3m2!1sen!2suk!4v1608304179564!5m2!1sen!2suk" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>



</div>

</div>
</div>
</div>

</div>
</body>

</html>