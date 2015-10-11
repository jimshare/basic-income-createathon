
<article class="post">
 <?php if ( has_post_thumbnail() ) : ?>
 <div class="right desktop-only">
   <?php 
     $img_id = get_post_thumbnail_id($post->ID); 
     $img = get_the_post_thumbnail($post->ID);
     $perm = get_permalink($post->ID);
     $alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true);
     ?>
     <a class="blog-link" href="<?php echo($perm); ?>" title="<?php echo($alt_text); ?>"><?php echo($img); ?></a>
    
 </div><!--.right-->
 <?php endif; ?>
  <div class="left">
    <div class="tags">
      <?php echo get_the_tag_list('<span class="tag">','</span><span class="tag">','</span>' ); ?>
    </div><!--.tags-->
    
    <h2><a href="<?php the_permalink()?>"><?php echo $post->post_title; ?></a></h2>
    <time class="date">August 26, 2015</time>
    <?php if ( has_post_thumbnail() ) : ?>
        <a class="blog-link mobile-only" href="<?php echo($perm); ?>" title="<?php echo($alt_text); ?>"><?php echo($img); ?></a>
    <?php endif; ?>
    <?php the_excerpt('Continue Reading...'); ?>
  </div><!--.left-->

  <div class="clear-fix">

</article><!--.post-->
