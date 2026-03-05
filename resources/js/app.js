import './bootstrap';
// Import global CSS file
import '../css/app.css';

// Core Vue functions to create the app and render HTML
import { createApp, h } from 'vue'
// Main Inertia function to initialize client-side routing
import { createInertiaApp } from '@inertiajs/vue3'

// Initialize the Inertia application
createInertiaApp({
    // The resolve method dynamically loads the correct Vue component based on the Laravel route
    resolve: name => {
        // Dynamically import all .vue files located in the Pages directory
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
        return pages[`./Pages/${name}.vue`]
    },
    // Setup the Vue instance using the component resolved by Inertia
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .mount(el)
    },
})
