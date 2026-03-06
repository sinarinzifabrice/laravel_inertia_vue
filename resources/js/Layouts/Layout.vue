<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="min-h-screen bg-gray-50 text-gray-900">
        <!-- Main Header with Navigation -->
        <header class="bg-indigo-600 text-white shadow-md">
            <nav class="flex justify-between items-center p-4 max-w-screen-lg mx-auto">
                <div class="space-x-6 font-medium">
                    <Link href="/" class="hover:text-indigo-200 transition">Home</Link>
                    <Link href="/about" class="hover:text-indigo-200 transition">About</Link>
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
