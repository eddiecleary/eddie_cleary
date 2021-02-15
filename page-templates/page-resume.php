<?php
    /*
        Template Name: Resume Page

        @package eddiecleary
    */
?>

<?php get_header(); ?>

<main id="resume" class="mt-12 md:mt-24">
    <section class="hero container flex flex-col md:flex-row md:flex-wrap md:justify-center content-center">
        <div class="max-w-md md:order-2">
            <?php get_template_part('template-parts/svg', 'resume'); ?>
        </div>
        <div class="mt-8 md:order-1 md:mr-24 text-center md:relative md:top-4">
            <h1 class="text-xl md:text-5xl">Eddie Cleary</h1>
            <h2 class="text-base mt-1 md:text-2xl md:mt-4">Full-Stack CMS Web Developer</h2>
        </div>
    </section>
    <section class="experience container mt-12 md:mt-24 max-w-2xl text-center">
        <h3 class="resume-heading text-center">– Experience –</h3>
        <div class="mt-6 text-center md:mt-12">
            <h5 class="text-ec-grey text-xl md:text-2xl">Personal Study</h5>
            <p class="text-xs md:text-base mt-2">September 2018 – Today</p>
            <p class="text-base mt-2 md:mt-4">Completed 4 website projects to showcase my skills in web development. Became confident in my abilities through hard work and determination.</p>
        </div>
        <div class="mt-8">
            <h5 class="text-ec-grey text-xl md:text-2xl">Verizon Wireless</h5>
            <p class="text-xs md:text-base mt-2">September 2012 – September 2018</p>
            <p class="text-base mt-2 md:mt-4">Achieved Annual Winner’s Circle 4 times (Top 15% of sales reps). Offered management position after 1 year but declined because sales paid more and I didn’t see Verizon Wireless as a long term career.</p>
        </div>
    </section>
    <section class="experience container mt-12 md:mt-24 max-w-2xl text-center">
        <h3 class="resume-heading text-center">– Education –</h3>
        <div class="mt-6 md:mt-12">
            <h5 class="text-ec-grey text-xl md:text-2xl">Self Taught Web Dev.</h5>
            <p class="text-xs md:text-base mt-2">January 2018 – Now</p>
            <p class="text-base mt-2 md:mt-4">Completed numerous online courses covering topics including ReactJS, ES6 Javascript, CSS3, Headless CMS, Gatsby and much more...</p>
        </div>
        <div class="mt-8">
            <h5 class="text-ec-grey text-xl md:text-2xl">Georgia Gwinnett College</h5>
            <p class="text-xs md:text-base mt-2">2009</p>
            <p class="text-base mt-2 md:mt-4">Completed 1 semester of college with a 4.0. GPA Left college because I didn’t see how learning biology was going to help me in pursuing my freelance dreams.</p>
        </div>
        <div class="mt-8">
            <h5 class="text-ec-grey text-xl md:text-2xl">Grayson High School</h5>
            <p class="text-xs md:text-base mt-2">2007</p>
            <p class="text-base mt-2 md:mt-4">Made good grades in school; graduated with a 3.0. Completed a 540 hour IT/Networking course and passed the COMPTIA A+ Technical certification.</p>
        </div>
        <div class="mt-8 md:mt-16 text-center">
            <a download href="http://eddiecleary.local/wp-content/uploads/2021/02/eddie-cleary-resumé.pdf" class="btn btn-primary">Download PDF Resumé <span class="ec ec-Download text-2xl relative top-1 ml-2"></span></a>
        </div>
    </section>

</main>

<?php get_footer(); ?>