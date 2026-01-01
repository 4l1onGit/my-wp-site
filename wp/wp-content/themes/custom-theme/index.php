<?php 
get_header(); 
    
    while( have_posts() ) {
        the_post();
        the_title( '<a  href="' . get_permalink() . '"><h1>', '</h1></a>' );
        the_content();
        ?>
<hr /> <?php
    }
    ?>