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
        <!-- Display the shared user name from HandleInertiaRequests middleware -->
        <h1>{{$page.props.auth.user}}</h1>
        <!-- 
            Link to refresh the page. 
            The 'preserve-scroll' attribute keeps the scroll position after the request.
        -->
        <Link class="mt-[600px] block" href="/" preserve-scroll> Refresh</Link>
    </div>
</template>