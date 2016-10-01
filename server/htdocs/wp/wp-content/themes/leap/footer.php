<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
	</div>

	<?php 
		$slug_name = basename(get_permalink()); 

		if (is_front_page() && is_home()) {
			get_footer('top');
		} else if ($slug_name === 'rim') {
			get_footer('rim');
		} else {
			get_footer('common');			
		}
	?>
</div>

<script src="/assets/js/jquery-3.1.1.min.js"></script>
<script src="/assets/js/leap.js"></script>

<?php wp_footer(); ?>
</body>
</html>