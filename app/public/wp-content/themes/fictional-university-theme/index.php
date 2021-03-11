<?php
get_header();

while (have_posts()) {
    the_post();
    ?>
    <h2>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h2>
    <section>
        <?php the_content(); ?>
    </section>
    <hr>
    <?php
}

get_footer();
?>
