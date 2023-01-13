<?php get_header() ?>

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-dyw-palePink">PRESS OFFICE & INTERVIEWS</h2>
                <h2><?php the_title(); ?></h2>
            </div>
        </div>
    </div>

    <div class="container-fluid px-0 my-5">
        <?php 
            $image = get_field('image');
            if( !empty( $image ) ): ?>
                <img class="img-fluid w-100" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
    </div>

    <div class="container">
        <div class="row my-3">
            <div class="col-12">
                <span id="publication-name"><b><?php echo get_field('name_of_publication') ?></b></span>
                <spaan> - <?php echo get_field('date') ?></span>
            </div>
            <div class="row">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</div>


<?php
    $next_post = get_adjacent_post( false, '', false);
    $next_post_url = get_the_permalink($next_post);

    $previous_post = get_adjacent_post( false, '', true);
    $previous_post_url = get_the_permalink($previous_post);
?>

<div class="container mb-5">
    <div class="row">
        <div class="col12 d-flex justify-content-center">
        

            <?php if(get_permalink() != $previous_post_url):?>
                <a class="btn btn-warning" href="<?php echo $previous_post_url;?>"><i class="fa-solid fa-arrow-left"></i> Previous post</a>
            <?php endif; ?>
            <?php if(get_permalink() != $next_post_url):?>
                <a class="btn btn-warning" href="<?php echo $next_post_url;?>">Next post <i class="fa-solid fa-arrow-right"></i></a>
            <?php endif; ?>
            
        </div>
    </div>
</div>


<?php get_footer() ?>