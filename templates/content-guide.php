    <!-- Intro Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <h1><?php the_title(); ?></h1>
            <div class="col-lg-8 col-lg-offset-2">
                <?php the_content(); ?>
            </div>
        </div>
    </section>

    <!-- Guide Section -->
    <section id="basic_income" class="text-center">
        <div class="wide-section white-background">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <?php echo types_render_field("guide-content", array("output"=>"html")); ?>
                </div>
            </div>
        </div>
    </section>

