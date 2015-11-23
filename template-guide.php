<?php
/**
 * Template Name: Organizing Guide Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'guide'); ?>
<?php endwhile; ?>
