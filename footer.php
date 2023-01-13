<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DOYOURWORST
 */

    $launch = get_field('date', 72);
	$dyw_square = get_field('square_logo', 72);

?>

<!-- 
		COUNTDOWN TIMER
 -->
	<div class="contianer-fluid" id="timer">
		<div class="container" id="timer-top-mobile">
			<div class="row d-flex justify-content-center align-items-center">
				<div class="col-4 white-line"></div>
				<div class="col-4">
					<img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/images/netflix-white.png" alt="Netflix">
				</div>
				<div class="col-4 white-line"></div>
			</div>
		</div>
		<div class="container">
			<div class="col-12 d-flex justify-content-between align-items-center">
			
				<div class="count-item" id="days">
					<span class="number">00</span>
					<span class="lable">Days</span>
				</div>
				<span class="seperator">:</span>
				<div class="count-item" id="hours">
					<span class="number">00</span>
					<span class="lable">Hours</span>
				</div>
				<span class="seperator">:</span>
				<div class="count-item" id="minutes">
					<span class="number">00</span>
					<span class="lable">minutes</span>
				</div>
				<span class="seperator">:</span>
				<div class="count-item" id="seconds">
					<span class="number">00</span>
					<span class="lable">Seconds</span>
				</div>
			</div>
		</div>
	</div>


	<!-- 
		FOOTER
	 -->

	<footer id="colophon" class="container-fluid">
	
		<div class="container py-5">
			<div class="row">
				<!-- col 1 -->
				<?php  if(strtotime($launch)>time()) :?>
				<div class="col-12 col-md-6">
					<h3><i class="fa-solid fa-bells"></i> Get notified when "Do Your Worst" hits Netflix</h3>
					<?php echo do_shortcode('[contact-form-7 id="156" title="Get Notified"]') ?>
				</div>

				<?php else: ?>

				<div class="col-12 col-md-6">
					<div>
						<img  class="h-100 w-100" src="<?php echo esc_url($dyw_square['url']); ?>" alt="<?php echo esc_attr($dyw_square['alt']); ?>" />
					</div>
				</div>

				<?php endif; ?>

				

				<!-- col 2 -->
				<div class="col-12 col-md-5 offset-md-1">
						<div class="mt-5">
						<?php if( have_rows('social_channel', 72) ): ?>
							<?php while( have_rows('social_channel', 72) ): the_row(); ?>
								<a href="<?php the_sub_field('channel_link') ?>" class="btn btn-info"><?php the_sub_field('channel_icon') ?></a>
							<?php endwhile; ?>
						<?php endif; ?>
						</div>
						<div class="mt-4">
							<a href="mailto:<?php echo get_field('contact_email', 72) ?>" class="btn btn-info me-1"><i class="fa-solid fa-envelope"></i></a>
							<span><?php echo get_field('contact_email', 72) ?></span>
						</div>
				</div>
			</div>
		</div>

	</footer><!-- #colophon -->

	<!-- 
		COPYRIGHT INFO
	-->

	<div class="container-fluid bg-dyw-hotPink py-5">
		<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<span class="rock"><?php echo get_field('copyright', 72) ?></span>
			</div>
		</div>
		</div>
	</div>



</div><!-- #page -->
<script>
	const launch_date = "<?php echo  get_field('date', 72); ?>"
</script>
<script src="<?php echo get_template_directory_uri() ?>/js/menu.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/countdown.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/loading.js"></script>

<?php wp_footer(); ?>



</body>
</html>
