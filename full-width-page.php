<?php
/*Template Name: custom full width page*/
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();?>



<?php
/* Start the Loop */
while ( have_posts() ) :
	the_post();
	get_template_part( 'template-parts/content/content-page' );


endwhile; // End of the loop.
?>

<div style="width: 100%"><iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
src="https://maps.google.com/maps?width=100%25&amp;height=200&amp;hl=en&amp;q=Barrie%20ON+(Featured%20Day%20care)&amp;t=&amp;z=11&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
<a href="https://www.gps.ie/golf-gps/">best golf gps</a></iframe></div>

<?php
get_footer();
?>

<main id="main" class="site-main full-width" role="main">
    <div class="container bg-main-container-color">
        <div class="static-page clearfix">
     <div class="footer-copyright text-center py-3">© 2022 Copyright:
    <a href="#"> Made By Tanya for comp 2109</a>
  </div>