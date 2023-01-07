import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/css/admin.css',
                'resources/css/adminlte.min.css',
                'resources/css/app.css',
                'resources/css/auth.css',
                'resources/css/style.css',
                'resources/js/app.js',
                'resources/js/adminlte.min.js',
                'resources/js/bootstrap.js',
                'resources/js/main.js',
                'resources/js/script.js',
            ],
            refresh: true,
        }),
    ],
});
