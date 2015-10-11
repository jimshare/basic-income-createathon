<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<section class="content">
  <div class="contents">
    <?php while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?>>

      <h1><?php the_title(); ?></h1>
      <div class="tags">
        <?php echo get_the_tag_list('<span class="tag">','</span><span class="tag">','</span>' ); ?>
      </div><!--.tags-->
      <hr>
      <?php get_template_part('templates/entry-meta'); ?>
      <div class="share">
        <ul>
          <li><a class='fb-share' href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink());?>" target="_blank" onclick="window.open(this.href,'targetWindow','toolbar=no,location=no,status=no, menubar=no, scrollbars=yes,resizable=yes,width=600, height=250'); return false;">Share on Facebook</a></li>

          <li><a class='tw-share' href="https://twitter.com/share?&amp;text=<?php echo urlencode('Read more: ');?>&amp;via=EricKingsonNY" data-via="EricKingsonNY" data-text="Check out this blog post from Eric Kingson:" target="_blank" onclick="window.open(this.href,'targetWindow','toolbar=no,location=no,status=no, menubar=no, scrollbars=yes,resizable=yes,width=600, height=200'); return false;">Tweet</a></li>
          <li><a class='em-share' href="mailto:?subject=Check%20out%20this%20post&amp;body=<?php echo urlencode(the_permalink()); ?>" target="_blank">Email</a></li>
        </ul>
      </div><!--.share-->
      <div class="clear-fix"></div>

      <div class="entry">

        <?php the_content(); ?>
      
      </div>
      <hr>
    </article><!--.post-->
    <?php endwhile; ?>
    <a class="red button" href="/news">Read Other News</a>
  </div><!--.contents-->
</section><!--.content-->
