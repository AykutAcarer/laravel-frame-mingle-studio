import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/all.css',
                'resources/css/animate.css',
                'resources/css/baguetteBox.min.css',
                'resources/css/bootsnav.css',
                'resources/css/bootstrap.min.css',
                'resources/css/bootstrap-select.css',
                'resources/css/carousel-ticker.css',
                'resources/css/code_animate.css',
                'resources/css/custom.css',
                'resources/css/jquery-ui.css',
                'resources/css/owl.carousel.min.css',
                'resources/css/responsive.css',
                'resources/css/style.css',
                'resources/css/superslides.css',
                'resources/js/jquery-3.2.1.min.js',
                'resources/js/popper.min.js',
                'resources/js/bootstrap.min.js',
                'resources/js/jquery.superslides.min.js',
                'resources/js/bootstrap-select.js',
                'resources/js/inewsticker.js',
                'resources/js/bootsnav.js',
                'resources/js/images-loded.min.js',
                'resources/js/isotope.min.js',
                'resources/js/owl.carousel.min.js',
                'resources/js/baguetteBox.min.js',
                'resources/js/form-validator.min.js',
                'resources/js/contact-form-script.js',
                'resources/js/custom.js',
                'resources/js/jquery.nicescroll.min.js',
                'resources/js/app.js',
                'resources/js/jquery-ui.js'
            ],
            refresh: true,
        }),
    ],
});
