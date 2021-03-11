<?php
while (have_posts()) {
    the_post();
    ?>
    <h2><?php the_title(); ?></h2>
    <section>
        <?php the_content(); ?>
    </section>
    <?php
}
?>

<!--<h2>--><?php //the_title(); ?><!--</h2>-->
<!--<section>-->
<!--    --><?php //the_content(); ?>
<!--</section>-->
<!--<a href="/">Back to home</a>-->
<!--why this still works?-->