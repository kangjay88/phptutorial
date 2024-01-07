<?php 
    get_header(); 

    while(have_posts()) {
        //these are built-in functions
        //the_post() keeps track of the post user is currently on - eliminates need for "count"
        the_post(); ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_content(); //includes the post's content ?> 
        <hr>
    <?php }

    get_footer();
?>