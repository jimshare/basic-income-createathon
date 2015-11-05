<?php
/**
 * Template Name: Content Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'content'); ?>
<?php endwhile; ?>
