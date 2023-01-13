<?php 
/**
Template Name: Screenings page
Template Post Type: page
*/
?>

<?php get_header() ?>


<div class="section">
    
    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-lg-start">
                <h1><?php the_title() ?></h1>
            </div>
        </div>
    </div>


    <?php $images = get_field('gallery'); $size = 'full'; if($images) : ?>
    <div class="pt-3">
        <div class="carousel">
            <div class="carousel-slider">
            <?php foreach( $images as $image ): ?>
                <div class="carousel-slide"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"></div>
            <?php endforeach; ?>
            </div>
        </div>
    </div>

    <script src="<?php echo get_template_directory_uri() ?>/js/carousel.js"></script>
    <?php endif; ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <?php the_content() ?>
            </div>
        </div>
    </div>







</div>






<?php get_footer() ?>