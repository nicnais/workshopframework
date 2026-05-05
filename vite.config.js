import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
<<<<<<< HEAD
            input: ['resources/css/app.css', 'resources/js/app.js'],
=======
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
>>>>>>> 572453d98a59b3961920483a9425a2b3ae6aa061
            refresh: true,
        }),
    ],
});
