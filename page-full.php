<?php
/**
 * page-full.php
 *
 * The full width page
 *
 * @author pjh
 * @copyright 2014 - 2015
 * @link http://codex.wordpress.org/Pages
 * @since BigBooty 1.0.0
 */
?>

<?php get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="jumbotron">
    <div class="container">

    <h1><?php the_title(); ?></h1>

    </div>
</div>

<div class="container">   
    <div class="row">
        <div class="col-md-12">

            <?php the_content(); ?>

            <?php endwhile; else: ?>
          
            <div class="page-header">
                <h1>No Booty Here!</h1>
            </div>

            <p>There doesn't seem to be anything here as yet!</p>

            <?php endif; ?>

        </div>      
    </div>
</div>

<?php get_footer(); ?>
