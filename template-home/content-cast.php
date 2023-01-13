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