

<?php $dyw_square = get_field('square_logo', 72); ?>

<div class="container-fluid" id="loading-screen">
    <div class="row">
        <div class="col-12 col-lg-4 ">

            <?php 
            $repeater = get_field( 'gifs', 72 );
            $gif = array_rand( $repeater, 1 ); 
            $url =  $repeater[$gif]['gif_square'];
            ?>

        <div class="gif-holder mx-auto">
            <img src="<?php echo $url ?>" alt="">
        </div>

        </div>
        <div class="col-12 col-lg-8  text-center">
            <img id="loading-logo" src="<?php echo esc_url($dyw_square['url']); ?>" alt="<?php echo esc_attr($dyw_square['alt']); ?>" />
        </div>

        <div id="loading-message">
            <h2>Loading...</h2>
        </div>
    </div>
    
</div>