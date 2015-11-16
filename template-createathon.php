<?php
/**
 * Template Name: Create-A-Thon Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'createathon'); ?>
<?php endwhile; ?>
