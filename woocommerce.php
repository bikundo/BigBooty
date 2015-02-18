<?php
/**
 * woocommerce.php
 *
 * Woocommerce Product Page
 *
 * @author pj hampton
 * @link http://docs.woothemes.com/document/third-party-custom-theme-compatibility/
 * @since BigBooty 1.1.0
 */
?>

<?php get_header(); ?>

<div class="container">   
    <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-md-9">

        <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-med" data-toggle="offcanvas">View Sidebar</button>
        </p>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="page-header">
            <h1><?php the_title(); ?></h1>
        </div>

        <?php the_content(); ?>

        <?php endwhile; else: ?>
          
        <div class="page-header">
            <h1>Oh no!</h1>
        </div>

        <p>No content is appearing for this page!</p>

        <?php endif; ?>

        </div>
      
    <?php get_sidebar(); ?>

    </div>
</div>

<?php get_footer(); ?>