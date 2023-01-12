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
<div class="container-fluid px-0">
    <p><?php echo get_field('trailer_iframe_code') ?></p>
</div>





<!-- 
    MEET THE CAST
 -->
<div class="section">
<div class="container">
    <div class="row">
        <div class="col-12 text-center text-lg-start">
            <h1><?php echo get_field('cast_heading') ?></h1>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="col-12 my-lg-3 d-md-flex justify-content-center align-items-center">
        <?php if( have_rows('cast_images') ): ?>
            <?php while( have_rows('cast_images') ): the_row(); 
                $image = get_sub_field('cast_image');
                ?>
                    <img class="cast_image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endwhile; ?>
        <?php endif; ?>
        </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12 mx-auto my-3">
            <?php echo get_field('cast_description') ?>
        </div>
        <div class="col-12 my-lg-3">
            
            <a href="<?php echo get_field('cast_button_link') ?>" class="btn btn-lg btn-warning">
                <i class="<?php echo get_field('cast_button_icon') ?>"></i>
                <?php echo get_field('cast_button_text') ?>
            </a> 

        </div>
    </div>
</div>

</div>




<!-- 
    FIND OUT MORE
-->

<div class="section bg-dyw-ruby">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-lg-start">
                <h1>Find out more</h1>
            </div>
        </div>
        <div class="row">


            <!-- Screening -->
            <div class="col-12 col-md-6">
                <div class="findout-divs rounded bg-dyw-hotPink">
                    <?php
                    $screening = get_field('screening');
                    if( $screening ): ?>
                    <h2><?php echo $screening['heading'] ?></h2>
                    <div class="img-box">
                        <img class="img-fluid" src="<?php echo esc_url( $screening['image']['url'] ); ?>" alt="<?php echo esc_attr( $screening['image']['alt'] ); ?>" />
                    <?php endif; ?>
                    </div>
                    <p class="my-3">
                    <?php echo $screening['description'] ?>
                    </p>
                    <a href="<?php echo $screening['button_link'] ?>" class="btn btn-lg btn-warning">
                        <i class="<?php echo $screening['button_icon'] ?>"></i>
                        <?php echo $screening['button_text'] ?>
                    </a> 
                </div>
            </div>


            <!-- BTS -->
            <div class="col-12 col-md-6">
                <div class="findout-divs rounded bg-dyw-hotPink">
                    <?php
                    $bts = get_field('behind_scenes');
                    if( $bts ): ?>
                    <h2><?php echo $bts['heading'] ?></h2>
                    <div class="img-box">
                        <img class="img-fluid" src="<?php echo esc_url( $bts['image']['url'] ); ?>" alt="<?php echo esc_attr( $bts['image']['alt'] ); ?>" />
                    <?php endif; ?>
                    </div>
                    <p class="my-3">
                    <?php echo $bts['description'] ?>
                    </p>
                    <a href="<?php echo $bts['button_link'] ?>" class="btn btn-lg btn-warning">
                        <i class="<?php echo $bts['button_icon'] ?>"></i>
                        <?php echo $bts['button_text'] ?>
                    </a> 
                </div>
            </div>


        </div>
    </div>
</div>




<!-- 
    PRESS OFFICE AND INTERVIEWS
-->


<?php get_footer() ?>