import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: {
        origin: process.env.VITE_BASE_URL || 'http://localhost:3000', // Set your preferred URL or use an environment variable
        port: 3000,
        strictPort: false,
        host: 'localhost',
        allowedHosts: ['localhost', '127.0.0.1'],
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true
        }),
    ],
});
