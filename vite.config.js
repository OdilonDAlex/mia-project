import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
<<<<<<< HEAD
                'resources/css/input.css'
=======
                'resources/js/header.js',
                'resources/css/header.css'
>>>>>>> survey
            ],
            refresh: true,
        }),
    ],
});
