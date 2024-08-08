import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/input.css',
                'resources/css/header.css',
                'resources/js/header.js',
                'resources/css/blog.css',
                'resources/css/course.css',
                'resources/css/event.css',
                'resources/css/login.css',
                'resources/css/register.css',
                'resources/css/survey-item.css',
                'resources/css/survey.css',
                'resources/js/blog-post-setting.js',
                'resources/js/Popup.js',
                'resources/js/post-comment.js',
                'resources/js/blog-post-setting.js',
                'resources/css/welcome.css',
            ],
            refresh: true,
        }),
    ],
});
