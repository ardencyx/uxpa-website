<?php

/**

 * The Sidebar containing the main widget areas.

 *

 * @package ThemeGrill

 * @subpackage Spacious

 * @since Spacious 1.0

 */

?>



<div id="secondary">

	<?php do_action( 'spacious_before_sidebar' ); ?>

		<?php 

			if( is_page_template( 'page-templates/contact.php' ) ) {

				$sidebar = 'spacious_contact_page_sidebar';

			}

			else {

				$sidebar = 'spacious_right_sidebar';

			}

		?>



		<?php if ( ! dynamic_sidebar( $sidebar ) ) : ?>



			<aside id="search" class="widget widget_search">

				<?php get_search_form(); ?>

			</aside>



			<aside id="archives" class="widget">

				<h1 class="widget-title"><?php _e( 'Archives', 'spacious' ); ?></h1>

				<ul>

					<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>

				</ul>

			</aside>



			<aside id="meta" class="widget">

				<h1 class="widget-title"><?php _e( 'Meta', 'spacious' ); ?></h1>

				<ul>

					<?php wp_register(); ?>

					<li><?php wp_loginout(); ?></li>

					<?php wp_meta(); ?>

				</ul>

			</aside>



		<?php endif; ?>

	<?php do_action( 'spacious_after_sidebar' ); ?>

</div>