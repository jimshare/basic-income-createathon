    <!-- Intro Header -->
    <header id="page-top" class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <p class="preface-text">
                        	<?php echo types_render_field("preface-text", array("output"=>"raw")); ?>
                        </p>
                        <h1 class="brand-heading">Basic Income Create-A-Thon</h1>
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
						<?php echo types_render_field("sponsors", array("output"=>"html")); ?>
						
					</div><!--.logo-box-->
				</div>
			</div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
				<h2>Contact</h2>
                <p>Have questions about the Create-A-Thon, or want to help sponsor the event? You can reach us at <a href="mailto:<?php echo types_render_field("contact-email", array("output"=>"raw")); ?>"><?php echo types_render_field("contact-email", array("output"=>"raw")); ?></a>.</p>
                
            </div>
        </div>
    </section>
