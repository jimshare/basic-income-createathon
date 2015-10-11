<?php
/* Welcome to Bones :)
This is the core Bones file where most of the
main functions & features reside. If you have 
any custom functions, it's best to put them
in the functions.php file.

Developed by: Eddie Machado
URL: http://themble.com/bones/
*/

//New Bones Page Navi

function bones_page_navi($before = '', $after = '', $custom_query = "") {
    global $wpdb, $wp_query;

    //Check for custom query variable, if set, assign to navi_query, if not, assign main wp_query to navi_query
    if (isset($custom_query) && $custom_query != '') {
        $navi_query = $custom_query;

    } else {
        $navi_query = $wp_query;
    }
    //change $posts_per_page variable to be set with the new navi_query
    $posts_per_page = intval($navi_query->query_vars['posts_per_page']);
    $paged = intval(get_query_var('paged'));
    $numposts = $navi_query->found_posts; //update with navi_query
    $max_page = $navi_query->max_num_pages; //update with navi_query
    if ( $numposts <= $posts_per_page ) { return;  }
    if(empty($paged) || $paged == 0) {
        $paged = 1;
    }
    $pages_to_show = 4;
    $pages_to_show_minus_1 = $pages_to_show-1;
    $half_page_start = floor($pages_to_show_minus_1/2);
    $half_page_end = ceil($pages_to_show_minus_1/2);
    $start_page = $paged - $half_page_start;
    if($start_page <= 0) {
        $start_page = 1;
    }
    $end_page = $paged + $half_page_end;
    if(($end_page - $start_page) != $pages_to_show_minus_1) {
        $end_page = $start_page + $pages_to_show_minus_1;
    }
    if($end_page > $max_page) {
        $start_page = $max_page - $pages_to_show_minus_1;
        $end_page = $max_page;
    }
    if($start_page <= 0) {
        $start_page = 1;
    }

    echo $before.'<nav class="page-navigation"><ul class="bones_page_navi clear-fix">'."";
    if ($start_page >= 2 && $pages_to_show < $max_page) {
        $first_page_text = __( "First", 'bonestheme' );
        echo '<li class="bpn-first-page-link"><a href="'.get_pagenum_link().'" title="'.$first_page_text.'">'.$first_page_text.'</a></li>';
    }
    echo '<li class="bpn-prev-link">';
    previous_posts_link('Previous');
    echo '</li>';
    for($i = $start_page; $i  <= $end_page; $i++) {
        if($i == $paged) {
            echo '<li class="bpn-current">'.$i.'</li>';
        } else {
            echo '<li><a href="'.get_pagenum_link($i).'">'.$i.'</a></li>';
        }
    }
    echo '<li class="bpn-next-link">';
    next_posts_link('Next', $max_page);
    echo '</li>';
    if ($end_page < $max_page) {
        $last_page_text = __( "Last", 'bonestheme' );
        echo '<li class="bpn-last-page-link"><a href="'.get_pagenum_link($max_page).'" title="'.$last_page_text.'">'.$last_page_text.'</a></li>';
    }
    echo '</ul></nav>'.$after."";
} /* end page navi */


