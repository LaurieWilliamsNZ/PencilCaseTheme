<?php
/*
Template Name: PencilCaseBlog
*/
?>

<div id ="maincontent">
	<div id="displaycontent">
		<br>
		<?php if (function_exists('blix_breadcrumbs')) blix_breadcrumbs(); ?>
		<h1><?php the_title(); ?></h1>
		<br>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php the_content(); ?>
<?php endwhile; endif; ?>
</div>
</div>

<?php get_footer(); ?>
