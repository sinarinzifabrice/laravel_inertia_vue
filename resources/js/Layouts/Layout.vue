<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="min-h-screen bg-gray-50 text-gray-900">
        <!-- Main Header with Navigation -->
        <header>
            <nav>
                <div class="space-x-6">
                    <!-- Use Laravel named routes instead of hardcoded paths -->
                    <Link :href="route('home')" class="nav-link">Home</Link>
                </div>
                <div class="space-x-6">
                    <!-- Use Laravel named routes instead of hardcoded paths -->
                    <Link :href="route('register')" class="nav-link">Register</Link>
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
