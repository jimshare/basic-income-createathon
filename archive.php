<section class="news hero">
</section><!--.news.hero-->

<section class="content">
  <div class="contents">
    <?php
      do_action('get_header');
      get_template_part('templates/page','header');
    ?>
    <hr>
    <?php if (!have_posts()) : ?>
     <div class="alert alert-warning">
       <?php _e('Sorry, no results were found.', 'sage'); ?>
     </div>
     <?php get_search_form(); ?>
   <?php endif; ?>

   <?php while (have_posts()) : the_post();  
   //Only show posts not case-studies or other post types
   if (get_post_type(get_the_ID()) == 'post'): get_template_part('templates/content', get_post_type() != 'post' ? get_post_type(get_the_ID()) : get_post_format()); 
   endif ?>

   
   <?php endwhile; ?>

  </div><!--.contents-->
</section><!--.content-->
 <?php bones_page_navi('','',$wp_query); ?>
<div class="clear-fix">