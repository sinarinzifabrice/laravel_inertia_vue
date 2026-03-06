import './bootstrap';
// Import global CSS file
import '../css/app.css';

// Core Vue functions to create the app and render HTML
import { createApp, h } from 'vue'
// Main Inertia function to initialize client-side routing
import { createInertiaApp, Head, Link } from '@inertiajs/vue3'
import Layout from './Layouts/Layout.vue';

// Initialize the Inertia application
createInertiaApp({
    title: (title) => `My App${title}`,
    // The resolve method dynamically loads the correct Vue component based on the Laravel route
    resolve: name => {
        // Dynamically import all .vue files located in the Pages directory
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
        // Get the page component
        let page = pages[`./Pages/${name}.vue`];

        // Use global Layout as default if the page doesn't define its own
        page.default.layout = page.default.layout || Layout;
        return page;
    },
    // Setup the Vue instance using the component resolved by Inertia
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            // Register global components to make them available in all pages without manual imports
            .component('Head', Head)
            .component('Link', Link)
            .mount(el)
    },
    // Configuration for the Inertia progress bar
    progress: {
        color: '#fdfdfdff', // White progress bar color
    },
})
