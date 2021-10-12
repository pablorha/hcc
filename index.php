<?php get_header(); ?>

<section id="home" class="section home">
    <div class="section-container">
        <h1 data-aos="fade-up" data-aos-duration="2000" data-aos-delay="1000"><?php bloginfo( 'description' ); ?></h1>
    </div>
</section>

<?php

$args = array( 
    'post_type' => 'section',
    'order' => 'asc'
);


 
// The Query
$the_query = new WP_Query( $args );

    $slug = rtrim(get_permalink(), '/');
    $slug = basename($slug);

    if ($echo === false) {
        return $slug;
    }


// The Loop
if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
        $the_query->the_post();

        $slug = rtrim(get_permalink(), '/');
        $slug = basename($slug);
    
        if ($echo === false) {
            return $slug;
        }
            
        echo '<section id="' . $slug . '" class="section" style="background-image: url(' . get_the_post_thumbnail_url() .'">';
        echo '<div class="section-container">';
        echo '<h2 data-aos="fade" data-aos-duration="2000">' . get_the_title() . '</h2>';
        echo the_content();
        echo '</div>';
        echo '</section>';
    }
} else {
    // no posts found
}
/* Restore original Post Data */
wp_reset_postdata();

?>

<?php get_template_part( 'template-parts/wwu', 'form' ); ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

