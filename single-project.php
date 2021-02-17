<?php
/**
 * The template for displaying all project post type
 *
 */

get_header(); ?>


<main id="single-project" class="w-10/12 mx-auto">

    <section class="hero container flex justify-center mt-20">
        <div class="text-center">
            <h1 class="text-5xl"><?php the_title(); ?></h1>
            <h5 class="mt-2">Launched on: <?php echo get_the_date(); ?></h5>
        </div>

    </section>
    <section class="container mt-16">
        <a href="<?php echo esc_url(get_field('site_url')) ?>" target="_blank">
            <div class="">
                <?php the_post_thumbnail(); ?>
            </div>
        </a>
    </section>
    <section class="container mt-12 flex items-center justify-between">
        <div class="text-left w-7/12 relative left-6">
            <div class="project-highlight-bar">
                <?php echo get_field('excerpt'); ?>
            </div>
        </div>
        <div class="text-center">
            <a href="<?php echo esc_url(get_field('site_url')) ?>" class="btn btn-primary btn-icon relative" target="_blank">Visit Live Site <span class="ec ec-new-tab text-4xl right-6 absolute top-1/2 transform -translate-y-1/2"></span></a>
        </div>
    </section>
    <?php if(have_rows('main_content')): ?>
        <section class="container mt-24 project-post-content">
            <?php while( have_rows('main_content' )): the_row();
                $heading = get_sub_field('heading');
                $description = get_sub_field('description');
                $button = get_sub_field('button');
                $image = get_sub_field('image');
                $size = 'full';
            ?>
            <article class="flex mt-24 project-wrapper justify-between">
                <div class="project-text w-full max-w-2xl flex flex-col justify-center">
                    <?php if( !empty($heading)): ?>
                        <div class="relative project-heading">
                            <h3 class="text-3xl project-heading-dot"><?php echo $heading ?></h3>
                        </div>
                    <?php endif; ?>
                    <?php if( !empty($description)): ?>
                        <div class="mt-6"><?php echo $description ?></div>
                    <?php endif; ?>
                    <?php if( !empty($button)): ?>
                        <div class="mt-6">
                            <a target="<?php echo esc_attr($button['target']) ?>" href="<?php echo esc_url($button['url']) ?>" alt="<?php echo $button['alt'] ?>" class="btn btn-primary"><?php echo esc_html($button['title']) ?></a>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="project-image md:ml-10">
                    <?php if( !empty($image)){
                        echo wp_get_attachment_image($image, $size);
                    } ?>
                </div>
            </article>
            <?php endwhile; ?>
        </section>
    <?php endif; ?>
    <section class="container mt-24">
        <div class="mt-6">
            <h3 class="text-center mt-12 text-3xl">Technologies Used:</h3>
            <ul class="flex w-full justify-center mt-6">
                <?php foreach (get_the_tags() as $tag) : ?>
                    <li class="w-12 mx-9">
                        <div class="flex flex-col items-center">
                            <?php z_taxonomy_image($tag->term_id); ?>
                            <h5 class="mt-2"><?php echo $tag->name ?></h5>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>
</main>

<?php get_footer(); ?>