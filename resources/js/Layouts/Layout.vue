<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="min-h-screen bg-gray-50 text-gray-900">
        <!-- Main Header with Navigation -->
        <header class="bg-indigo-600 text-white shadow-md">
            <nav class="flex justify-between items-center p-4 max-w-screen-lg mx-auto">
                <div class="space-x-6">
                    <!-- Use Laravel named routes instead of hardcoded paths -->
                    <Link :href="route('home')" >Home</Link>
                    <Link :href="route('about')">About</Link>
                </div>
            </nav>
        </header>

        <!-- Main Content Area -->
        <main class="max-w-screen-lg mx-auto p-6">
            <!-- This is where the page content will be injected -->
            <slot />
        </main>
    </div>
</template>
