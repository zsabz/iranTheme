import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import react from "@vitejs/plugin-react";

export default defineConfig({
    // server: {
    //     host: '0.0.0.0'
    // },
    plugins: [
        laravel({
            input: "resources/js/app.jsx",
            publicDirectory: "../public_html/site",
            refresh: true,
        }),
        react(),
    ],
    build: {
        outDir: "../public_html/site",
    },
});
