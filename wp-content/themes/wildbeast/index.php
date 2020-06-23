<?php get_header() ?>
    <p>Usando Template Index</p>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <main class="content">
      <div class="titulo">
        <h1><?php the_title(); ?></h1>
        <span>da família canis lupus</span>
      </div>
    
    <p class="col-wide"><?php the_content(); ?></p>

    <?php endwhile; else: ?>
    <p><?php _e( 'Sorry, no posts matched your criteria' ); ?>

<?php endif; ?>
<?php get_footer() ?>

    