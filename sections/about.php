<section class="about" id="about">

	<div class="container">

		<!-- SECTION HEADER -->

		<div class="section-header">

			<!-- SECTION TITLE -->

			<?php 
			$zerif_about_title = get_theme_mod('zerif_about_title',__('About','zerif-lite'));
			
			if( !empty($zerif_about_title) ):
				echo '<h2  class="dark-text">'.__($zerif_about_title,'zerif-lite').'</h2>';
			endif;
			?>
		</div><!-- / END SECTION HEADER -->
			
		<!-- SECTION CONTENT -->
			
		<div class="section-content">
			<?php

				$zerif_about_text = get_theme_mod('zerif_about_text',__('Add a text in Customizer, "About section"','zerif-lite'));

				if( !empty($zerif_about_text) ):

					echo '<span  class="dark-text">';

						echo __($zerif_about_text,'zerif-lite');

					echo '</span>';

				endif;

			?>
		</div><!-- / END SECTION CONTENT -->

	</div> <!-- / END CONTAINER -->

</section> <!-- END ABOUT US SECTION -->