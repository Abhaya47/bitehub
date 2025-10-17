import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    server: {
        host: '0.0.0.0',              // 👈 crucial: makes Vite accessible outside container
        port: 5173,                   // same as your exposed port
        cors: true,                   // allow cross-origin requests from Laravel
        origin: 'http://localhost:5173', // 👈 helps Laravel resolve URLs correctly
        hmr: {
            host: 'localhost',        // 👈 browser connects to this host
        },
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
