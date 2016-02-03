<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

    <!-- Intro Section -->
    <section id="about" class="container content-section text-center" style="background: url('<?php echo $image[0]; ?>') no-repeat center center scroll; background-size: cover; margin: 0;">
        <div class="row">
            <h1><?php the_title(); ?></h1>
            <div class="col-md-8 col-md-offset-2">
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

