<!-- <div class="container-fluid bg-dyw-hotPink text-white" id="menu-bar">
	<div class="row">
		<div class="col-2" id="logo">
			<a href="<?php echo get_home_url() ?>">
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/dyw-logo.png" alt="Do Your Worst">
			</a>
		</div>
		<div class="col-4 offset-2" id="netflix-info">
			<div>
				<h2>On</h2>
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/netflix-white.png" alt="Netflix">
				<h2><?php echo get_option('blogdescription'); ?></h2>
			</div>
		</div>
		<div class="col-3 mx-auto d-flex justify-content-center align-items-center" id="social-icons">
			<div>
				<a href="" class="btn btn-lg btn-info"><i class="fa-brands fa-facebook-f"></i></a>
				<a href="" class="btn btn-lg btn-info"><i class="fa-brands fa-instagram"></i></a>
				<a href="" class="btn btn-lg btn-info"><i class="fa-brands fa-tiktok"></i></a>
				<a href="" class="btn btn-lg btn-info"><i class="fa-brands fa-youtube"></i></a>
				<a href="" class="btn btn-lg btn-info"><i class="fa-brands fa-twitter"></i></a>
			</div>
		</div>
		<div class="col-1 ms-auto d-flex justify-content-end align-items-center" id="burger-nav">
			<div id="close-menu-btn" class="text-white"><i class="fa-solid fa-bars"></i></div>
		</div>
	</div>
</div> -->

<div class="container-fluid bg-dyw-hotPink text-white" id="menu-bar">
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

<div class="wrapper"></div>

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
                        <a href="" class="btn btn-info"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="" class="btn btn-info"><i class="fa-brands fa-instagram"></i></a>
                        <a href="" class="btn btn-info"><i class="fa-brands fa-tiktok"></i></a>
                        <a href="" class="btn btn-info"><i class="fa-brands fa-youtube"></i></a>
                        <a href="" class="btn btn-info"><i class="fa-brands fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

