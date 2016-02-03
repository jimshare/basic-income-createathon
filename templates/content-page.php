    <!-- Intro Header -->
    <header id="page-top" class="intro">
        <div class="intro-body">
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
    	        <p>
    	            <a href="#organize" class="btn btn-default btn-main page-scroll">Organize Your Own</a>
    	        </p>
            </div>
        </div>
    </section>

    <!-- Basic Income Section -->
    <section id="basic_income" class="text-center">
        <div class="wide-section white-background">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <?php echo types_render_field("basic-income-info", array("output"=>"html")); ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Create-A-Thons Section -->
    <section id="createathons" class="container content-section text-center">
        <div class="row">
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
                      <ul>

                    <?php while ( $upcoming_createathon_loop->have_posts() ) : $upcoming_createathon_loop->the_post(); ?>

                        <li class="createathon-entry">
                            <a href="<?php echo types_render_field("event-url",array("raw"=>true));?>" target="_blank"><?php the_title();?></a>: <?php echo types_render_field("location-and-date", array("raw"=>true));?>
                        </li>
                    
                      
                    <?php endwhile; 
                    wp_reset_postdata();
                  endif; ?>
                  </ul>

                <h2>Past Create-A-Thons</h2>
                <ul>
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
                        <li class="createathon-entry">
                            <a href="<?php echo types_render_field("event-url",array("raw"=>true));?>" target="_blank"><?php the_title();?></a>: <?php echo types_render_field("location-and-date", array("raw"=>true));?>
                        </li>

                    <?php endwhile; 
                    wp_reset_postdata();
                  endif; ?>
                  </ul>
                
            </div>
        </div>
    </section>

    <!-- Organize Section -->
    <section id="organize" class="text-center">
        <div class="wide-section image-section createathon-background">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Organize Your Own Create-A-Thon</h2>
                    <?php echo types_render_field("organizing-information", array("output"=>"html")); ?>
                    <p>
                      <a href="/organize" class="btn btn-default btn-main">Get Started</a>
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
