<?php
    /*
    Template Name: Home page
    */
    ?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
<section class="container-fluid aboutbg text-center">

    <div class="container">
        <h2><?php the_field('titleforaboutme'); ?></h2><!--  custom field for the aboutme content-->
        <p class="particle"><?php the_field('subtitleforaboutme'); ?></p>
        <p class="about-text"><?php the_field('paragraphforaboutme'); ?></p>

        <div class="blocker"></div>

    </div><!--        CONTAINER-->

</section>

<section class="container-fluid articlesbg">
    <div class="container">
        <div class="row article-title text-center">

            <h3 class="text-center article-title "><?php the_field('titleforarticles'); ?></h3>

        </div><!--        row-->

        <div class="col-md-4 article-cent">
            <img class="img-responsive" alt=“portait” src="<?php the_field('articleimage1'); ?>">
            <h4><?php the_field('articletitle1'); ?></h4>
            <p><?php the_field('articleexcerpt1'); ?> </p>
            <a href="<?php the_field('readmore1'); ?>" class="readmore">CONTINUE READING</a>

        </div>

        <div class="col-md-4 article-cent">
            <img class="img-responsive" alt=“model” src="<?php the_field('articleimage2'); ?>">
            <h4><?php the_field('articletitle2'); ?></h4>
            <p><?php the_field('articleexcerpt2'); ?> </p>
            <a href="<?php the_field('readmore2'); ?>" class="readmore">CONTINUE READING</a>
        </div>

        <div class="col-md-4 article-cent">
            <img class="img-responsive" alt=“gamesdesign” src="<?php the_field('articleimage3'); ?>">
            <h4><?php the_field('articletitle3'); ?></h4>
            <p><?php the_field('articleexcerpt3'); ?> </p>
            <a href="<?php the_field('readmore3'); ?>" class="readmore">CONTINUE READING</a>

        </div>

    </div><!--    container-->



</section><!--    container-fluid-->
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>