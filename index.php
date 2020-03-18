<?php get_header(); /* Tells WordPress to include header.php */ ?>
<section class="container-fluid aboutbg text-center">

    <div class="container">
<?php
global $more;//define a global variable
$more = 0;// the global varibale is now equal to 0
query_posts('cat=2');//look for posts that have the category of 2
if(have_posts()) ://if we have posts to display
while(have_posts()) :the_post();//LOOP through all the posts and find the one that has a category of 2 get thet title and content
?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
        <div>
            <p class="about-text"><?php the_content() ?></p>
        </div>
        <?php
endwhile;
endif;
wp_reset_query();?>

<div class="blocker"></div>
        
    </div><!--        CONTAINER-->

</section>

<section class="container-fluid articlesbg">
    <div class="container">
        <div class="row article-title text-center">

            <h3>LATEST ARTICLES</h3>
        </div><!--        row-->

        <div class="col-md-4 article-cent">
            <img class="img-responsive" alt="portrait" src="http://206.189.45.97/~mesh21/sub2/wp-content/themes/starter_for_josh_site/images/portrait.jpg">
            <h4>A PORTRAIT</h4>
            <p class="date">12 December 2020</p>
            <p>STS has never been shy of seeking new terrains of investigation. More and more STS s cholars are starting to explore and intervene in the arts. This object of study brings new challenges and opportunities that we want to explore in this session. We would like to gather first of all simply new kinds of knowledge arising from STS study of the arts.
            </p>
            <p class="readmore">CONTINUE READING</p>
        </div>

        <div class="col-md-4 article-cent">
            <img class="img-responsive" alt="model" src="http://206.189.45.97/~mesh21/sub2/wp-content/themes/starter_for_josh_site/images/model.jpg">
            <h4>A MODEL</h4>
            <p class="date">Friday, November 10. 2019</p>
            <p>STS has never been shy of seeking new terrains of investigation. More and more STS s cholars are starting to explore and intervene in the arts. This object of study brings new challenges and opportunities that we want to explore in this session. We would like to gather first of all simply new kinds of knowledge arising from STS study of the arts.
            </p>
            <p class="readmore">CONTINUE READING</p>
        </div>

        <div class="col-md-4 article-cent">
            <img class="img-responsive" alt="games design" src="http://206.189.45.97/~mesh21/sub2/wp-content/themes/starter_for_josh_site/images/games_design.jpg">
            <h4>GAMES DESIGN</h4>
            <p class="date">Friday, November 10. 2019</p>
            <p>STS has never been shy of seeking new terrains of investigation. More and more STS s cholars are starting to explore and intervene in the arts. This object of study brings new challenges and opportunities that we want to explore in this session. We would like to gather first of all simply new kinds of knowledge arising from STS study of the arts.
            </p>
            <p class="readmore">CONTINUE READING</p>
        </div>

    </div><!--    container-->



</section><!--    container-fluid-->
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>