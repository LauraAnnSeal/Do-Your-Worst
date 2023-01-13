<?php 
/**
Template Name: Crew page
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



    <?php

    $images = get_field('gallery');
    $size = 'full';
    if($images) :

    ?>
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

</div>

    <div class="container">


        <!-- 
            LEADS
        -->
        <div class="row">
            <div class="col-12 text-center text-lg-start"><h1><?php echo get_field('wdp_heading') ?></h1></div>
        </div>
        <div class="row">
        <?php if( have_rows('core_crew') ): ?>
            <?php while( have_rows('core_crew') ): the_row(); 
                $image = get_sub_field('headshot');
                ?>
                <div class="col-12 my-4 row mx-0 px-0">
                    <div class="col-12 col-md-6">
                        <img class="rounded img-fluid w-100" src="<?php echo esc_url( $image ['url'] ); ?>" alt="<?php echo get_sub_field('full_name') ?>">
                    </div>
                    <div class="col-12 col-md-6 mt-3">
                        <h2><?php echo get_sub_field('full_name') ?></h2>
                        <span class="rock text-dyw-mustard"><?php echo get_sub_field('role') ?></span>
                        <p class="mt-3">
                            <?php echo get_sub_field('bio') ?>
                        </p>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        </div>


    </div>


<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-12"><h1><?php echo get_field('title') ?></h1></div>
        </div>
        <div class="row">

        <?php if( have_rows('department_&_crew') ): ?>
            <?php while( have_rows('department_&_crew') ): the_row(); ?>
            <div class="col-12 my-3">
                <h2><?php echo get_sub_field('department_name') ?></h2>
                <p><?php echo get_sub_field('list_of_all_crew') ?></p>
            </div>
            <?php endwhile; ?>
        <?php endif; ?>

        </div>
    </div>
</div>




<?php get_footer() ?>