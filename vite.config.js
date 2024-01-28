import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { terser } from 'rollup-plugin-terser';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    build: {
        sourcemap: false,
        // Configure le plugin Terser pour la minification
        rollupOptions: {
          plugins: [terser()],
        },
    },
});
