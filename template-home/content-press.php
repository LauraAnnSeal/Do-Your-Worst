<?php 

$posts = get_posts(array(
    'posts_per_page'    => -1,
    'post_type'         => 'press',
    'meta_key'          => 'date',
    'orderby'           => 'meta_value',
    'order'             => 'DESC'
));

$count_posts = wp_count_posts( 'press' )->publish;

if( $posts): ?>

<div class="section">
    <div class="container">
        <div class="row">

    <div class="col-12 text-center">
        <h1>PRESS OFFICE & INTERVIEWS</h1> 
    </div>







    <?php foreach( $posts as $post ): 
        setup_postdata( $post );?>



        <div class="col-12">
            <div class="press bg-dyw-palePink rounded mt-3 mx-auto pt-4">
                <h2><?php the_title() ?></h2>
                <span><b><?php echo get_field('name_of_publication') ?></b></span>
                <br>
                <span><?php echo get_field('date') ?></span>
                <?php 
                $image = get_field('image');
                if( !empty( $image ) ): ?>
                    <div class="img-box mt-2">
                        <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    </div>
                <?php endif; ?>
                <p class="my-3">
                    <?php echo get_the_excerpt(); ?>
                </p>
                <a href="<?php echo get_permalink() ?>" class="btn btn-lg btn-warning">Read More</a>
            </div>
        </div>

        

    <?php endforeach; ?>
    <?php wp_reset_postdata(); ?>




    </div>
    </div>
</div>

<?php endif; ?>