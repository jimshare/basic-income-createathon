<?php

use Roots\Sage\Config;
use Roots\Sage\Wrapper;

?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html lang="en" class="no-js ie6 lt-ie9"> <![endif]-->
<!--[if IE 7]>    <html lang="en" class="no-js ie7 lt-ie9"> <![endif]-->
<!--[if IE 8]>    <html lang="en" class="no-js ie8 lt-ie9"> <![endif]-->
<!--[if IE 9]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if gt IE 9]><!-->

<html class='no-js' lang="en-US">
<!--<![endif]-->

  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if lt IE 9]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>

    <?php include Wrapper\template_path(); ?>
       
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>

  </body>
</html>
