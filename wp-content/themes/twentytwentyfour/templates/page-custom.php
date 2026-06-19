<?php
/*
Template Name: My Custom Layout
*/
get_header(); // Pulls in your site header
?>

<div class="custom-content">
    <!-- Add your HTML or custom PHP loop content here -->
    <?php while ( have_posts() ) : the_post(); the_content(); endwhile; ?>
    <h2>Hi, this is custopm page template </h2>
</div>


<?php get_footer(); // Pulls in your site footer ?>