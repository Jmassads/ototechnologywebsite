<?php
/**
 * The main template file.
 */
get_header(); ?>

    <section class="feature-image feature-image-default-alt" >
        <h1 class="page-title">Blog</h1>
    </section>

    <!-- BLOG CONTENT
    ================================================== -->
    <div class="container">
        <div class="row" id="primary">

            <main id="content" class="col-sm-8" role="main">

                <?php if (have_posts()) : ?>

                    <?php /* Start the Loop */ ?>
                    <?php while (have_posts()) : the_post(); ?>

                        <?php
                        get_template_part('template-parts/content', get_post_format());
                        ?>

                    <?php endwhile; ?>

                <?php else : ?>

                    <?php get_template_part('content', 'none'); ?>

                <?php endif; ?>

            </main><!-- content -->

            <!-- SIDEBAR
            ================================================== -->
            <aside class="col-sm-4">
                <?php get_sidebar(); ?>
            </aside>

        </div><!-- primary -->
    </div><!-- container -->

<?php get_footer(); ?>