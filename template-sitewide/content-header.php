<?php 
    $dyw_square = get_field('square_logo', 72);
    $dyw_horizontal = get_field('horizontal_logo', 72);
    $launch = get_field('date', 72);
    $channels = get_field('social_channel', 72)
?>

<!-- 
	MENU BAR
 -->
<div class="container-fluid bg-dyw-hotPink text-white" id="menu-bar">
    <div class="row d-lg-none">
        <div id="netflix-mobile" class="col-12 netflix-component">
                <?php if(!$launch):?>


                    <h2>On</h2>
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/netflix-white.png" alt="Netflix">
                    <h2>Soon</h2>



                <?php elseif(strtotime($launch)>time()) :?>


                    <h2>On</h2>
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/netflix-white.png" alt="Netflix">
                    <h2><?php echo $launch; ?></h2>


                <?php elseif(strtotime($launch)<time()) :?>


                    <h2>Now On</h2>
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/netflix-white.png" alt="Netflix">


                <?php endif; ?>
        </div>
    </div>
    <div class="row">
        <div class="col-6 col-md-4 col-lg-3 col-xxl-2" id="logo">
			<a href="<?php echo get_home_url() ?>">
            <img  class="img-fluid" src="<?php echo esc_url($dyw_horizontal['url']); ?>" alt="<?php echo esc_attr($dyw_horizontal['alt']); ?>" />
			</a>
		</div>
        <div class="d-none d-lg-block col-4 offset-1 offset-xxl-2" id="netflix-info">
			<div>

                <?php if(!$launch):?>


                <span>On</span>
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/netflix-white.png" alt="Netflix">
                <span>Soon</span>



                <?php elseif(strtotime($launch)>time()) :?>


                <span>On</span>
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/netflix-white.png" alt="Netflix">
                <span><?php echo $launch; ?></span>


                <?php elseif(strtotime($launch)<time()) :?>


                <span>Now On</span>
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/netflix-white.png" alt="Netflix">


                <?php endif; ?>


			</div>
		</div>
        <div class="d-none d-lg-block col-3 mx-auto d-flex justify-content-center align-items-center" id="social-icons">
			<div>
                <?php if( have_rows('social_channel', 72) ): ?>
                    <?php while( have_rows('social_channel', 72) ): the_row(); ?>
                        <a href="<?php the_sub_field('channel_link') ?>" class="btn btn-info"><?php the_sub_field('channel_icon') ?></a>
                    <?php endwhile; ?>
                <?php endif; ?>
			</div>
		</div>
        <div class="col-6 col-lg-1 ms-auto d-flex justify-content-end align-items-center" id="burger-nav">
			<div id="open-menu-btn" class="text-white"><i class="fa-solid fa-bars"></i></div>
		</div>
    </div>
</div>

<!-- 
	HIDDEN MENU BAR
 -->
<div class="container-fluid bg-dyw-hotPink text-white" id="menu-hidden">
    <div class="row d-lg-none">
        <div id="netflix-mobile" class="col-12 netflix-component">
                <h2>On</h2>
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/netflix-white.png" alt="Netflix">
				<h2><?php echo get_option('blogdescription'); ?></h2>
        </div>
    </div>
    <div class="row">
        <div class="col-6 col-md-4 col-lg-2" id="logo">
			<a href="<?php echo get_home_url() ?>">
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/dyw-logo.png" alt="Do Your Worst">
			</a>
		</div>
        <div class="d-none d-lg-block col-5 offset-1" id="netflix-info">
			<div>
				<span>On</span>
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/netflix-white.png" alt="Netflix">
				<span><?php echo get_option('blogdescription'); ?></span>
			</div>
		</div>
        <div class="d-none d-lg-block col-3 mx-auto d-flex justify-content-center align-items-center" id="social-icons">
			<div>
				<a href="" class="btn btn-info"><i class="fa-brands fa-facebook-f"></i></a>
				<a href="" class="btn btn-info"><i class="fa-brands fa-instagram"></i></a>
				<a href="" class="btn btn-info"><i class="fa-brands fa-tiktok"></i></a>
				<a href="" class="btn btn-info"><i class="fa-brands fa-youtube"></i></a>
				<a href="" class="btn btn-info"><i class="fa-brands fa-twitter"></i></a>
			</div>
		</div>
        <div class="col-6 col-lg-1 ms-auto d-flex justify-content-end align-items-center" id="burger-nav">
			<div id="open-menu-btn" class="text-white"><i class="fa-solid fa-bars"></i></div>
		</div>
    </div>
</div>

<!-- 
	WRAPPER
 -->
<div class="wrapper"></div>

<!-- 
	MENU (OPEN)
 -->

<div class="container-fluid" id="menu">
    <div class="row h-100">
        <div class="col-12 text-end" id="close-icon">
            <i id="close-menu-btn" class="fa-solid fa-xmark"></i>
        </div>
        <div class="row h-75 d-flex justify-content-center align-items-center">
            <div class="row">
                <div class="col-12 text-center" id="menu-logo">
                    <a href="<?php echo get_home_url() ?>">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/dyw-logo-square.png" alt="Do Your Worst">
                    </a>
                </div>
                <div class="col-12 my-5 text-center" id="menu-content">
                    <?php
                        $primaryNav = wp_get_nav_menu_items('2');
                        
                        foreach ( $primaryNav as $navItem ) {

                            if($navItem->title != get_the_title()){
                                echo '<a href="'.$navItem->url.'" class="btn btn-warning">'.$navItem->title.'</a> <br>';
                            } else {
                                echo '<a href="'.$navItem->url.'" class="btn btn-danger">'.$navItem->title.'</a> <br>';
                            }
                        
                        }				

                    ?>
                </div>
                <div class="col-12 mx-auto d-flex justify-content-center align-items-center" id="social-icons">
                    <div>
                    <?php if( have_rows('social_channel', 72) ): ?>
                        <?php while( have_rows('social_channel', 72) ): the_row(); ?>
                            <a href="<?php the_sub_field('channel_link') ?>" class="btn btn-info"><?php the_sub_field('channel_icon') ?></a>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- 
	MOBILE ONLY SIDEBAR
 -->
 <div id="social-sidebar" class="text-center d-lg-none">
                <?php if( have_rows('social_channel', 72) ): ?>
                    <?php while( have_rows('social_channel', 72) ): the_row(); ?>
                        <a href="<?php the_sub_field('channel_link') ?>" class="btn btn-info"><?php the_sub_field('channel_icon') ?></a>
                    <?php endwhile; ?>
                <?php endif; ?>
</div>


