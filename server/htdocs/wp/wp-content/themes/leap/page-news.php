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

		<h2 class="title">NEWS</h2>
		<div class="main__contents news">
			<?php 
				$args = array(
						'posts_per_page' => -1,
						'post_type' => 'post'
					);
				$posts = get_posts($args);
			?>

			<?php if ($posts) : ?>
			<dl class="news__list">
				<?php foreach ($posts as $post) : ?>
				<dt class="news__date"><?= get_the_time('Y.m.d', $post->ID) ?></dt>
				<dd class="news__detail"><?= $post->post_content; ?></dd>
				<?php endforeach; ?>
			</dl>
			<?php endif; ?>

		</div>
<?php get_footer(); ?>
