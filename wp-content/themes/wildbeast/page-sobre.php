<?php 
// Template Name: Sobre
?>
<?php get_header() ?>
    <h1><?php the_field('titulo_do_sobre_text')?></h1>
    <h2><?php the_field('descricao_do_sobre_text_field')?></h2>
    <img src="<?php the_field('foto_sobre'); ?>" alt="<?php the_field('foto_sobre_descricao') ?>">
<?php get_footer() ?>

    