<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
    <main class="easybiz-main">
        <div class="container">
            <article class="easybiz-page">
                <header class="easybiz-page__header">
                    <h1 class="easybiz-page__title"><?php the_title(); ?></h1>
                </header>
                <div class="easybiz-page__content">
                    <?php the_content(); ?>
                </div>
            </article>
        </div>
    </main>
<?php endwhile; ?>

<?php get_footer(); ?>