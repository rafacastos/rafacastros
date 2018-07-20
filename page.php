

<?php get_header(); ?>

<section class="container">
    <article class="col-lg-12">
        <?php
if (have_posts() ) {
    while (have_posts() ) {
        the_post ();
?>
            <h2>
                <?php the_title(); ?>
            </h2>
    </article>
</section>
<?php the_content(); ?>
<?php
    }
}
?>
    </div>






<?php get_footer(); ?>
