<script setup>
// Import the shared layout component
import Layout from '../Layouts/Layout.vue';

// Define the layout to be used for this page
defineOptions({
    layout : Layout
})
</script>


<template>
    <!-- Dynamic head title using the component name -->
    <Head :title= "` | ${$page.component}`" />
    <div>
        <!-- Main homepage content -->
        <h1>Home page</h1>
        
    </div>
</template>