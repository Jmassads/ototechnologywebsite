<!-- HERO
================================================== -->

<?php
$thumbnail_url	= wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );

$hero_section_button_text	= get_field('hero_section_button_text');

?>

<section id="hero" style="background: url('<?php echo $thumbnail_url; ?>') no-repeat">
    <article>
        <h1><?php bloginfo('name'); ?></h1>
        <h2><?php bloginfo('description'); ?></h2>
        <button class="btn btn-hero btn-lg btn-link rounded-0"><?php echo $hero_section_button_text;?></button>
    </article>
</section><!-- HERO -->