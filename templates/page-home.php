<?php 
/**
Template Name: Home page
Template Post Type: page
*/
?>

<?php get_header() ?>

<!-- 
    TRAILER
 -->
<div class="container-fluid px-0 bg-dark">
    <p><?php echo get_field('trailer_iframe_code') ?></p>
</div>




<!-- 
    MEET THE CAST
 -->
 <?php echo get_template_part('template-home/content', 'cast') ?>




<!-- 
    FIND OUT MORE
-->
<?php echo get_template_part('template-home/content', 'find-more') ?>




<!-- 
    PRESS OFFICE AND INTERVIEWS
-->
<?php echo get_template_part('template-home/content', 'press') ?>


<?php get_footer() ?>