<script setup>
/**
 * TextInput component for form inputs with error handling.
 * Uses Vue 3.4+ defineModel for two-way binding.
 */
const model = defineModel({
    type: null,
    required: true,
});

defineProps({
    name: {
        type: String,
        required: true,
    },
    type: {
        type: String,
        default: "text",
    },
    message: String, // Error message to display
});
</script>


<template>
    <div class="mb-6">
        <label :for="name">{{ name }}</label>
        <!-- Dynamic class binding for error highlighting -->
        <input :type="type" v-model="model" :class="{'!ring-red-500': message}" :id="name">
        <!-- Display error message if it exists -->
        <small class="error" v-if="message">{{ message }}</small>
    </div>
</template>