    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

    <!-- Intro Header -->
    <header id="page-top" class="hero page-hero" style="background: url('<?php echo $image[0]; ?>') no-repeat center center scroll; background-size: cover;">
        <div class="hero-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <p class="preface-text">
                        	<?php echo types_render_field("home-preface-text", array("output"=>"raw")); ?>
                        </p>
                        <h1 class="brand-heading"><?php the_title(); ?></h1>
                        <p class="suffix-text">
                        	<?php echo types_render_field("home-suffix-text", array("output"=>"raw")); ?>
                        </p>
                        <a href="#about" class="btn btn-default btn-main page-scroll">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
    	        <?php the_content(); ?>
            </div>
        </div>
    </section>

    <!-- Create-A-Thons Section -->
    <section id="basic_income" class="text-center">
        <div class="wide-section white-background">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                
                  <?php 
                  $upcoming_createathon_loop = new WP_Query( array( 
                    'post_type' => 'create-a-thon',                 
                    'meta_key'   => 'wpcf-date',
                    'meta_type' => DATETIME,
                    'orderby' => 'meta_value_num',
                    'order' => 'ASC',
                    'posts_per_page' => -1,
                    'meta_query' => array(
                      array(
                        'key'     => 'wpcf-upcoming',
                        'value'   => 1
                      ),
                    ),
                  ) ); 
                  if ( $upcoming_createathon_loop->have_posts() ) : ?>
                    <h2>Upcoming Create-A-Thons</h2>

                      <p>
                      <?php while ( $upcoming_createathon_loop->have_posts() ) : $upcoming_createathon_loop->the_post(); ?>

                            <a href="<?php echo types_render_field("event-url",array("raw"=>true));?>" target="_blank"><?php the_title();?></a>: <?php echo types_render_field("location-and-date", array("raw"=>true));?>
                            <br/>                      
                        
                      <?php endwhile; 
                      wp_reset_postdata();
                    endif; ?>
                  </p>

                  <h2>Past Create-A-Thons</h2>
                  <p>
                  <?php 
                  $past_createathon_loop = new WP_Query( array( 
                    'post_type' => 'create-a-thon',                 
                    'meta_key'   => 'wpcf-date',
                    'meta_type' => DATETIME,
                    'orderby' => 'meta_value_num',
                    'order' => 'ASC',
                    'meta_query' => array(
                      array(
                        'key'     => 'wpcf-upcoming',
                        'value'   => 0
                      ),
                    ),
                    'posts_per_page' => -1
                  ) ); 
                      if ( $past_createathon_loop->have_posts() ) : while ( $past_createathon_loop->have_posts() ) : $past_createathon_loop->the_post(); 
                        ?>
                            <a href="<?php echo types_render_field("event-url",array("raw"=>true));?>" target="_blank"><?php the_title();?></a>: <?php echo types_render_field("location-and-date", array("raw"=>true));?>
                            <br/>

                      <?php endwhile; 
                      wp_reset_postdata();
                    endif; ?>
                  </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
				        <h2>Contact</h2>
                <?php echo types_render_field("contact-info", array("output"=>"html")); ?>
            </div>
        </div>
    </section>
