<?php
if ( is_front_page() ) :
    get_template_part('templates/header', 'home');
elseif ( is_page_template( 'template-content.php' ) ) :
    get_template_part('templates/header', 'about');
elseif ( is_page_template( 'template-guide.php' ) ) :
    get_template_part('templates/header', 'about');
else:
    get_template_part('templates/header', 'createathon');
endif;
?>
