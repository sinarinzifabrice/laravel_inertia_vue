<script setup>
/**
 * Define the properties passed from the Laravel controller
 */
defineProps({
    user : String // The name of the user to display
})

</script>
<template>
    <!-- Dynamic head title using the component name -->
    <Head :title= "` | ${$page.component}`" /> 
    <div>
        <h1>About </h1>
    </div>
</template> 