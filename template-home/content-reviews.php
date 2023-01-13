
<?php 

$posts = get_posts(array(
    'posts_per_page'    => -1,
    'post_type'         => 'review',
    'meta_key'          => 'rating',
    'orderby'           => 'meta_value',
    'order'             => 'DESC'
));

if( $posts ): ?>
        

<div class="row">
            <div class="col-12">
                <div class="findout-divs rounded bg-dyw-hotPink" id="reviews">
                    <h2>Reviews</h2>




                    <div class="row">



                    
                        <?php foreach( $posts as $post ): 
                            
                            setup_postdata( $post );
                            
                            ?>
                            <div class="col-12 px-0 row mt-3 mx-auto pt-2" id="single-review">
                                <div class="col-6">
                                    <span class="rock"><?php the_title() ?></span>
                                </div>
                                <div class="col-6 text-end">
                                    <?php 
                                    $rating = get_field('rating');
                                    $float = (float)$rating;
                                    
                                    for ($x = 0; $x <= $float -1; $x++) {
                                        echo '<i class="fa-sharp fa-solid fa-star"></i>';
                                      }
                                      echo "<span class='ms-1'>" . $rating . "/5</span>"
                                    ?>
                                </div>
                                <div class="col-12 pt-3">
                                    <?php the_content() ?>
                                </div>
                                <hr>
                            </div>
                        
                        <?php endforeach; ?>
                        
                        
                        <?php wp_reset_postdata(); ?>

                    



                    </div>







        </div>
    </div>
</div>

<?php endif; ?>