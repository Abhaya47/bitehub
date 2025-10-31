// vite.config.js
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    server: {
        host: '0.0.0.0',              // 👈 crucial: makes Vite accessible outside container
        port: 5173,                   // same as your exposed port
        cors: true,
        hmr: {
            host: 'localhost',
        },
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true, // This enables full page reloads for files in specific Laravel directories
        }),
        tailwindcss(),
    ],
});
