<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<?php 
	$args = array(
			'orderby'	 => 'id',
			'order'		 => 'ASC',
			'hide_empty' => false,
		);
	$taxonomies = get_terms('jobtype', $args);
?>
		<ul class="rimNavi">
			<?php foreach ($taxonomies as $taxonomy) : ?>
			<li class="rimNavi__list"><a href="#<?= $taxonomy->slug ?>"><?= $taxonomy->name ?></a></li>
			<?php endforeach; ?>
		</ul>

		<div class="rimStaff">
			<?php foreach ($taxonomies as $taxonomy) : ?>

			<section class="rimStaff__introduction" id="<?= $taxonomy->slug ?>">
				<h2 class="rimStaff__job"><?= $taxonomy->name ?></h2>	
				<?php 
					$args = array(
							'posts_per_page'	=> -1,
							'orderby'			=> 'id',
							'order'				=> 'ASC',
							'post_type'			=> 'staff',
							'tax_query'	=> array(
									array(
										'taxonomy'	=> 'jobtype',
										'field'		=> 'slug',
										'terms'		=> $taxonomy->slug
										),
									),
							);
					$staffs = get_posts($args);
					// print_r($staffs);
				?>
				<dl class="rimStaff__staff">
					<?php foreach($staffs as $staff) : ?>
					<dt class="rimStaff__name"><?= $staff->post_title ?></dt>
					<dd class="rimStaff__clients">
						<div>
							<?= $staff->post_content ?>
						</div>
					</dd>
					<?php endforeach; ?>
				</dl>
			</section>

			<?php endforeach; ?>
		</div>

<?php get_footer(); ?>
