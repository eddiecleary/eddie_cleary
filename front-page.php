<?php get_header(); ?>

<main class="index">
    <section class="hero container mx-auto mt-8 sm:mt-16">
        <div class="hero text-center flex flex-col justify-center">
            <h1 class="text-2xl sm:text-3xl md:text-4xl">Eddie Cleary is a Freelance <br class="hidden md:block"> Web Developer</h1>
            <h2 class="text-sm sm:text-base md:text-2xl mt-4 md:mt-6">— Looking for remote opportunities —</h2>
            <div class="flex w-full sm:w-3/4 md:w-1/2 md:max-w-xs mx-auto justify-center mt-8">
                <a href="#" class="btn btn-primary w-5/12 hover:bg-ec-grey">Hire me</a>
                <a href="#" class="btn btn-link hover:text-ec-blue">View Resumé</a>
            </div>
        </div>
        <picture>
            <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/hero-lg.svg">
            <img class="mt-16 block mx-auto w-full sm:w-11/12 md:w-3/4 max-w-2xl" src="<?php echo get_template_directory_uri(); ?>/assets/images/hero.svg" />
        </picture>
    </section>
    <section id="about" class="about container mx-auto mt-16 md:mt-24 text-center">
        <h3 class="text-2xl sm:text-3xl md:text-4xl">About Me</h3>
        <img class="w-full max-w-xs block mx-auto mt-8 border-solid border-2 border-ec-blue" src="<?php echo get_template_directory_uri(); ?>/assets/images/about.jpg" alt="Eddie Cleary Freelance Web Developer Portrait" >
        <h4 class="mt-4 text-xl md:mt-8 md:text-2xl">Front End Web Developer</h4>
        <p class="mt-4 text-sm sm:text-base mx-auto md:w-7/12 md:text-lg">With over 3 years of web development experience, making websites is my <em>passion</em>! I love making my designs as <strong>minimilastic</strong> and <strong>user-friendly</strong> as possible.</p>
    </section>
    <section class="experience container mx-auto mt-16 md:mt-24">
        <h3 class="text-2xl sm:text-3xl md:text-4xl text-center">Programming Languages</h3>
        <div class="linecontainer sm:mt-12 md:mt-16 relative mt-8">
            <div class="theline mx-auto">
                <svg id="thesvg" viewBox="0 0 521 2399" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linecap="round" stroke-miterlimit="1">
                    <path fill="none" d="M.002 0H520.98v2398.997H.002z"/>
                    <path class="endcap" id="endcap" d="M192.68 2381.005a6.75 6.75 0 01-1.806 6.297 6.75 6.75 0 01-6.297 1.806c-17.25-3.985-51.423-11.866-69.513-16.041a6.761 6.761 0 01-4.976-4.72 6.771 6.771 0 011.719-6.64l53.471-53.472a6.771 6.771 0 016.64-1.718 6.761 6.761 0 014.72 4.975c4.176 18.09 12.064 52.255 16.042 69.513z" fill="#18a0fb"/>
                    <path class="theline" id="theline" d="M1595.31 100s200 0 200 200-400 200-400 400 400 200 400 400-400 200-400 400 400 200 400 400-400 200-400 400c0 49.87 31.09 93.53 76.99 132.51" fill="none" stroke="#ccc" stroke-width="5" transform="matrix(1 0 0 1 -1337.312 -94)"/>
                    <circle
                    class="scrubcircle"
                    id="scrubcircle"
                    cx="1543.93"
                    cy="248.62"
                    r="15"
                    fill="#cccccc"
                    transform="translate(-1129.746 1550.326) scale(1.02838)"
                    />
                    <circle class="circle" id="circle1" cx="1543.93" cy="248.62" r="48.62" fill="#18a0fb" transform="translate(-1129.746 -49.676) scale(1.02838)"/>
                    <circle class="circle" id="circle2" cx="1543.93" cy="248.62" r="48.62" fill="#18a0fb" transform="translate(-1529.748 350.323) scale(1.02838)"/>
                    <circle class="circle" id="circle3" cx="1543.93" cy="248.62" r="48.62" fill="#18a0fb" transform="translate(-1129.746 750.323) scale(1.02838)"/>
                    <circle class="circle" id="circle4" cx="1543.93" cy="248.62" r="48.62" fill="#18a0fb" transform="translate(-1529.748 1150.323) scale(1.02838)"/>
                    <circle class="circle" id="circle5" cx="1543.93" cy="248.62" r="48.62" fill="#18a0fb" transform="translate(-1129.746 1550.326) scale(1.02838)"/>
                </svg>
            </div>
            <div class="flex flex-col absolute top-0 w-full md:w-3/4 abs-center">
                <article class="w-1/2 flex flex-col text-center mt-16 md:mt-14 self-start">
                    <h5 class="underline text-lg sm:text-xl md:text-2xl">Web Stack</h5>
                    <ul class="">
                        <li class="mt-2 md:mt-1 text-sm sm:text-base md:text-lg">HTML5</li>
                        <li class="mt-2 md:mt-1 text-sm sm:text-base md:text-lg">CSS3</li>
                        <li class="mt-2 md:mt-1 text-sm sm:text-base md:text-lg">Es6 Javascript</li>
                    </ul>
                </article>
                <article class="w-1/2 flex flex-col text-center mt-24 md:mt-32 sm:relative sm:-top-6 md:-top-12 self-end">
                    <h5 class="underline text-lg md:text-2xl">Front-End</h5>
                    <ul class="">
                        <li class="mt-2 md:mt-1 text-sm sm:text-base md:text-lg">React</li>
                        <li class="mt-2 md:mt-1 text-sm sm:text-base md:text-lg">Gatsby</li>
                        <li class="mt-2 md:mt-1 text-sm sm:text-base md:text-lg">GSAP</li>
                    </ul>
                </article>
                <article class="w-1/2 flex flex-col text-center mt-24 md:mt-22 sm:relative sm:-top-6 md:-top-12 self-start">
                    <h5 class="underline text-lg md:text-2xl">Back-End</h5>
                    <ul class="">
                        <li class="mt-2 md:mt-1 text-sm sm:text-base md:text-lg">Headless CMS</li>
                        <li class="mt-2 md:mt-1 text-sm sm:text-base md:text-lg">Node.js</li>
                        <li class="mt-2 md:mt-1 text-sm sm:text-base md:text-lg">Firebase</li>
                    </ul>
                </article>
                <article class="w-1/2 flex flex-col text-center mt-24 sm:relative sm:-top-6 md:-top-12 self-end">
                    <h5 class="underline text-lg md:text-2xl">Deployment</h5>
                    <ul class="">
                        <li class="mt-2 md:mt-1 text-sm sm:text-base md:text-lg">Netlify</li>
                        <li class="mt-2 md:mt-1 text-sm sm:text-base md:text-lg">Nginx/Linux</li>
                        <li class="mt-2 md:mt-1 text-sm sm:text-base md:text-lg">Git</li>
                    </ul>
                </article>
                <article class="w-1/2 flex flex-col text-center mt-24 md:mt-16 sm:relative sm:-top-6 md:-top-12 self-start">
                    <h5 class="underline text-lg md:text-2xl">Design</h5>
                    <ul class="">
                        <li class="mt-2 md:mt-1 text-sm sm:text-base md:text-lg">Figma/Sketch</li>
                        <li class="mt-2 md:mt-1 text-sm sm:text-base md:text-lg">CSS/SASS/BEM</li>
                        <li class="mt-2 md:mt-1 text-sm sm:text-base md:text-lg">Affinity + Adobe</li>
                    </ul>
                </article>
            </div>
        </div>
    </section>
    <section id="portfolio" class="projects container mx-auto mt-16 md:mt-24 text-center">

        <h4 class="text-xl md:text-4xl mb-4 md:mb-12">Eddie's Recent Projects</h4>

        <!-- Gallery Start -->
        <ul class="gallery">
        <?php
        $posts = get_posts([
            'post_type'         => 'project',
            'posts_per_page'    => '4',
        ]);
        foreach($posts as $post) {
            setup_postdata($post); ?>

            <a href="<?php the_permalink(); ?>" class="gallery__link">
                <li class="gallery__item">
                    <div class="gallery__overlay">
                        <h5 class="gallery__title text-2xl"><?php the_title(); ?></h5>
                        <div class="gallery__description w-3/4"><?php the_excerpt(); ?></div>
                        <ul class="gallery__tag-list">
                        <?php foreach (get_the_tags() as $tag) : ?>
                            <li class="gallery__tag">
                                <?php z_taxonomy_image($tag->term_id); ?>
                            </li>
                        <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="gallery__image">
                        <?php the_post_thumbnail(); ?>
                    </div>
                </li>
            </a>
        <?php }
        wp_reset_postdata();
        ?>
        </ul>
        <!-- Gallery End -->

    </section>
    <section class="resume container mx-auto mt-16 md:mt-24 text-center">
        <h3 class="text-2xl sm:text-3xl md:text-4xl">Resumé</h3>
        <div class="mt-12 sm:w-11/12 md:w-full max-w-md mx-auto">
            <svg
                className="resume"
                id="resume"
                viewBox="0 0 460 285"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                >
                <rect
                    className="bottom"
                    id="bottom"
                    x="0.556376"
                    y="2.4923"
                    width="264.753"
                    height="265.188"
                    transform="matrix(0.96331 0.301464 -0.740759 0.695454 202.011 8.59227)"
                    fill="#525152"
                    stroke="#525152"
                    strokeWidth="5"
                />
                <rect
                    className="btn left"
                    id="btnLeft"
                    width="56.7901"
                    height="14.9215"
                    rx="7.46077"
                    transform="matrix(0.963094 0.301666 -0.740263 0.69561 136.768 214.031)"
                    fill="#6D6C6D"
                />
                <rect
                    className="btn right"
                    id="btnRight"
                    width="56.79"
                    height="14.9214"
                    rx="7.46072"
                    transform="matrix(0.963096 0.301664 -0.740268 0.695608 207.187 236.087)"
                    fill="#18A0FB"
                />
                <rect
                    className="heading 2"
                    id="heading2"
                    width="73.1175"
                    height="9.05959"
                    rx="4.5298"
                    transform="matrix(0.963093 0.301668 -0.74026 0.695611 92.9181 124.178)"
                    fill="#cccccc"
                />
                <rect
                    className="p 3"
                    id="p3"
                    width="193.796"
                    height="11.7241"
                    rx="5.86205"
                    transform="matrix(0.963094 0.301667 -0.740263 0.69561 75.5603 140.489)"
                    fill="#6D6C6D"
                />
                <rect
                    className="p 4"
                    id="p4"
                    width="141.266"
                    height="11.7241"
                    rx="5.86205"
                    transform="matrix(0.963095 0.301666 -0.740265 0.695609 60.5695 154.576)"
                    fill="#6D6C6D"
                />
                <rect
                    className="heading 1"
                    id="heading1"
                    width="73.1175"
                    height="9.05959"
                    rx="4.52979"
                    transform="matrix(0.963093 0.301668 -0.74026 0.695611 152.881 67.8317)"
                    fill="#cccccc"
                />
                <rect
                    className="p 1"
                    id="p1"
                    width="193.796"
                    height="11.7241"
                    rx="5.86205"
                    transform="matrix(0.963093 0.301667 -0.740261 0.69561 135.524 84.1421)"
                    fill="#6D6C6D"
                />
                <rect
                    className="p 2"
                    id="p2"
                    width="141.266"
                    height="11.7241"
                    rx="5.86204"
                    transform="matrix(0.963094 0.301667 -0.740262 0.69561 120.533 98.2286)"
                    fill="#6D6C6D"
                />
                <rect
                    className="top"
                    id="top"
                    x="0.556375"
                    y="2.49229"
                    width="264.753"
                    height="58.0118"
                    transform="matrix(0.96331 0.301464 -0.74076 0.695454 202.011 8.59227)"
                    fill="#6D6C6D"
                    stroke="#6D6C6D"
                    strokeWidth="5"
                />
                <rect
                    className="title"
                    id="title"
                    width="141.263"
                    height="16.0195"
                    rx="8.00974"
                    transform="matrix(0.96311 0.301672 -0.740283 0.69563 199.159 29.4846)"
                    fill="#525152"
                />
            </svg>
        </div>
        <p class="mt-6 md:w-1/2 mx-auto sm:w-10/12 md:mt-12 md:text-lg">Download or view my resumé. Review the details of my work history and education.</p>
    </section>
    <section id="contact" class="contact container mx-auto mt-16 md:mt-24 text-center">
        <h5 class="text-2xl sm:text-3xl md:text-4xl">Let's Get in Touch!</h5>
        <p class="mt-8 mx-auto sm:w-11/12 md:w-1/2">For inquiries, feel free to send an email or write a short message below, and I will get back to you as soon as possible!</p>
        <div class="text-6xl flex justify-center my-10">
            <a href="https://www.linkedin.com/in/eddie-cleary" target="_blank"><span class="ec ec-linkedin pr-8 inline-block"></span></a>
            <a href="https://github.com/eddiecleary" target="_blank"><span class="ec ec-Github"></span></a>
        </div>
        <a class="text-ec-blue md:text-xl inline-block" href="mailto:eddie@eddiecleary.com">eddie@eddiecleary.com</a>
        <?php echo do_shortcode('[contact-form-7 id="20" title="Contact form 1" html_class="flex flex-wrap justify-between"]'); ?>
    </section>

</main>

<?php get_footer(); ?>