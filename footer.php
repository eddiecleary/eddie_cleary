<?php
    /*
        This is the template for the footer

        @package eddiecleary
    */
?>

<footer class="footer container mx-auto flex flex-col text-center content-center mt-16 md:mt-20 pb-8">
    <div class="w-1/2 md:w-1/4 logo mx-auto">
        <?php

            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            if ( has_custom_logo() ) {
                the_custom_logo();
            }
        ?>
    </div>

    <div class="text-ec-grey w-full md:w-3/4 max-w-lg mx-auto">
        <?php wp_nav_menu(array(
            'theme_location'    => 'header',
            'container'         => false,
            'menu_class'        => 'flex flex-wrap py-6 justify-around text-center justify-between',
        )); ?>
    </div>

    <p>Copyright &copy; Eddie Cleary</p>
</footer>
</div> <!-- Site Outer -->

<?php wp_footer(); ?>
</body>
</html>