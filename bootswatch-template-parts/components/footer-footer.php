<?php
/**
 * The footer.
 *
 * @package Bootswatch
 */

$author = [
	'name'  => __( 'Nabil Kadimi', 'bootswatch' ),
	'title' => __( 'Independent WordPress Developer', 'bootswatch' ),
	'url'   => 'https://kadimi.com',
];

?>

<div class="mbootswatch-footer">
	<div class="mbootswatch-footer-inner">
		<footer class="container bg-dark text-light" role="contentinfo">
			<?php if ( is_active_sidebar( 'footer' ) ) { ?>
				<div class="row">
					<?php dynamic_sidebar( 'footer' ); ?>
				</div>
			<?php } ?>
		</footer>
	</div>
</div>