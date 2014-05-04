<?php
/*
Template Name: PencilCasePage
*/
?>
<?php get_header(); ?>
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

<style>
body{

	width: auto;
}

#maincontent{

	background-color: #FCF9F5;
	width: 95%;
	margin: auto;
}

#displaycontent{

	width: 60%;
	margin:auto;
	background: #FCF9F5;
	text-align: left;
}

#displaycontent a{

	color: black;
}

ul.breadcrumbs {
    list-style: none;
    padding: 0;
    margin: 0;
    font-size:12px;
}
ul.breadcrumbs li {
    float: left;
    margin: 0 5px 0 0;
    padding: 0;
}
</style>