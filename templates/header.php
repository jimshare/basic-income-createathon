<?php
if ( is_front_page() ) :
    get_template_part('templates/header', 'home');
elseif ( is_page( 'about' ) ) :
    get_template_part('templates/header', 'about');
else:
    get_template_part('templates/header', 'default');
endif;
?>