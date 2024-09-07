import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue'; // Make sure this import is correct
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        vue(),
        laravel({
            input: 'resources/js/app.js',
            refresh: true,
        }),
    ],
    build: {
        outDir: 'public/build',
        manifest: true,
    },
});
