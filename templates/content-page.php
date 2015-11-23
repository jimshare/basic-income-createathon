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
                <h2>Past Create-A-Thons</h2>
                <p class="createathon-entry">
                    <a href="http://createathon-sf.universalincome.org/" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sf_createathon_team.jpg" />
                        San Francisco, CA (November 13-15, 2015)
                    </a>
                </p>
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
