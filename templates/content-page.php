    <!-- Intro Header -->
    <header id="page-top" class="intro">
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
                <?php echo types_render_field("basic-income-information", array("output"=>"html")); ?>
            </div>
        </div>
    </section>

    <!-- Create-A-Thon Section -->
    <section id="createathon" class="text-center">
        <div class="createathon-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
					<?php the_content(); ?>
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
                <p class="note">Having trouble with the Eventbrite interface? <a href="<?php echo types_render_field("eventbrite-backup-link", array("output"=>"raw")); ?>" target="_blank">Click here to go to the event page directly.</a></p>
            </div>
        </div>
    </section>

    <!-- Sponsors Section -->
    <section id="sponsors" class="text-center">
        <div class="sponsors-section">
            <div class="container">
				<div class="col-lg-8 col-lg-offset-2">
					<h2>Sponsors</h2>
					<p>This event would not be possible without the support of our generous sponsors. If your organization would like to support the Create-A-Thon as well, please <a href="#contact" class="page-scroll">let us know!</a></p>
					<div class="logo-box">
						<?php $the_query = new WP_Query(array(
							'post_type' => 'sponsor'
						));
						while ( $the_query->have_posts() ) : $the_query->the_post();
						?>

						<div class="col-lg-4 col-md-6 col-sm-6 .col-xs-12">
							<div class="logo">
							<?php if (types_render_field("sponsor-url", array("output" => "raw")) != '') : ?>
								<a href="<?php echo types_render_field("sponsor-url", array("output" => "raw")); ?>" target="_blank">
									<?php echo types_render_field("sponsor-logo", array("alt" => $post->post_title)); ?>
								</a>
							<?php else : ?>
									<?php echo types_render_field("sponsor-logo", array("alt" => $post->post_title)); ?>
							<?php endif; ?>
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
