<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mega
 */
global $get_template_directory_uri, $delay;
		 ob_start();
		 $tel = get_field('phone', 'option');
		$tel_str = str_replace(" ","", $tel);  
?>

		<div class="container">
		<div class="Footer section">
			<div class="row">
				<div class="col">
					<div class="mb-4">Copyright © 2021</div>
					<div class="Footer__links">
						<?php $rows = get_field('links', 'option' );  if($rows ):    while ( have_rows('links', 'option') ) : the_row();
						  $index = array_rand( $rows );
						  ?>
							<a href="<?php echo the_sub_field('link_path'); ?>" class="text-body tdu me-2"><?php echo the_sub_field('link_name'); ?> </a>
						<?php  endwhile;  else :  endif;    ?>

					</div>
				</div>
				<div class="col-sm-auto text-sm-end pb-5">
					<div class="h4 mb-3"><a class="text-body" href="tel:<?php echo $tel_str; ?>"><?php echo $tel; ?></a></div>
					<a href="mailto:<?php echo the_field('email', 'option'); ?>"><?php echo the_field('email', 'option'); ?></a>
				</div>
			</div>
			<div class="row pb-5">
				<?php $rows = get_field('seritficates', 'option' );  if($rows ):    while ( have_rows('seritficates', 'option') ) : the_row();
						  $index = array_rand( $rows );
						  ?>
				<div class="col-auto">
					<a href="<?php echo the_sub_field('link_path'); ?>" target="_blank"><img src="<?php echo the_sub_field('image'); ?>" loading="lazy" alt=""></a>
				</div>
				<?php  endwhile;  else :  endif;    ?>
			</div>
				<?php echo the_field('text', 'option'); ?>
			<?php wp_nav_menu(); ?>
		</div>

	</div>

<?php wp_footer(); ?>
 
</body>
</html>
