    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <p class="preface-text">
                        	<?php echo types_render_field("preface-text", array("output"=>"raw")); ?>
                        </p>
                        <h1 class="brand-heading"><?php the_title(); ?></h1>
                        <p class="intro-text">
                        	<?php echo types_render_field("location-and-date", array("output"=>"raw")); ?>
                        </p>
                        <a href="#register" class="btn btn-default btn-main page-scroll">
                            Register
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="basic_income" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
				<?php the_content(); ?>
            </div>
        </div>
    </section>

    <!-- Createathon Section -->
    <section id="createathon" class="text-center">
        <div class="createathon-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <?php echo types_render_field("createathon-information", array("output"=>"html")); ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Register Section -->
    <section id="register" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Register</h2>
                <?php echo types_render_field("registration-information", array("output"=>"html")); ?>
                <p>
                	<iframe src="<?php echo types_render_field("eventbrite-link", array("output"=>"raw")); ?>" frameborder="0" height="370" width="100%" vspace="0" hspace="0" marginheight="5" marginwidth="5" scrolling="auto" allowtransparency="true"></iframe>
                </p>
            </div>
        </div>
    </section>

    <!-- Sponsors Section -->
    <section id="sponsors" class="text-center">
        <div class="sponsors-section">
            <div class="container">
				<div class="col-lg-8 col-lg-offset-2">
					<h2>Sponsors</h2>
					<p>This event would not be possible without the support of our generous sponsors.</p>
					<div class="logo-box">
						<?php $the_query = new WP_Query(array(
							'post_type' => 'sponsor'
						));
						while ( $the_query->have_posts() ) : $the_query->the_post(); 
						?>
						
						<div class="col-lg-4 col-md-6 col-sm-6 .col-xs-12">
							<div class="logo">
								<a href="<?php echo types_render_field("sponsor-url", array("output" => "raw")); ?>" target="_blank">
									<?php echo types_render_field("sponsor-logo", array("alt" => $post->post_title)); ?>
								</a>
							</div>
						</div>

						<?php endwhile; wp_reset_postdata(); ?>
					</div>
				</div>
			</div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
				<h2>Contact</h2>
                <?php echo types_render_field("contact-information", array("output"=>"html")); ?>
            </div>
        </div>
    </section>
        