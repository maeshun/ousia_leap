<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

		<ul class="navi">
			<li class="navi__list"><a href="/about/">ABOUT</a></li>
			<li class="navi__list"><a href="/work/">WORKS&amp;GALLERY</a></li>
			<li class="navi__list"><a href="/news/">NEWS!</a></li>
			<li class="navi__list"><a href="/rim/">RIM</a></li>
		</ul>

<?php get_footer(); ?>
