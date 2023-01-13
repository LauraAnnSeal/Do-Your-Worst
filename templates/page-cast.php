<?php 
/**
Template Name: Cast page
Template Post Type: page
*/
?>

<?php get_header() ?>


<div class="section">
    <div class="container">


        <div class="row mb-md-5">
            <div class="col-12 text-center text-lg-start">
                <h1><?php the_title() ?></h1>
            </div>
        </div>


        <!-- 
                LEADS
         -->
        <div class="row">
            <?php if( have_rows('leads') ): ?>
                <?php while( have_rows('leads') ): the_row(); 
                    $image = get_sub_field('photograph');
                    ?>
                    <div class="col-12 my-4 row mx-0 px-0">
                        <div class="col-12 col-md-6">
                            <img class="rounded img-fluid w-100" src="<?php echo esc_url( $image ['url'] ); ?>" alt="<?php echo get_sub_field('full_name') ?>">
                        </div>
                        <div class="col-12 col-md-6 mt-3">
                            <h2><?php echo get_sub_field('full_name') ?></h2>
                            <span class="rock text-dyw-mustard"><?php echo get_sub_field('character_name') ?></span>
                            <p class="mt-3">
                                <?php echo get_sub_field('short_bio') ?>
                            </p>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <!-- 
            OTHER ACTORS
         -->

        <div class="row mt-5">
            <?php if( have_rows('actors') ): ?>
                <?php while( have_rows('actors') ): the_row(); 
                    $image = get_sub_field('photograph');
                    ?>
                    <div class="col-12 col-md-6 col-xxl-4 my-4 row mx-0 px-0 d-flex justify-content-start align-items-center flex-column">
                        <div class="col-12 text-center">
                            <?php 
                                if( !empty( $image ) ): ?>
                                    <img class="actor-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php else: ?>
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/actor-image-placeholder.jpg" alt="<?php echo get_sub_field('actor_name') ?>" class="actor-img">
                            <?php endif; ?>
                        </div>
                        <div class="col-12 mt-3 text-center">
                            <h3><?php echo get_sub_field('actor_name') ?></h3>
                            <span class="rock text-dyw-mustard"><?php echo get_sub_field('character_name') ?></span>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

    </div>
</div>


<?php get_footer() ?>