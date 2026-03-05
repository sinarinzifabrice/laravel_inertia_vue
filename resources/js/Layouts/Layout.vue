<template>
    <div>
        <header class="bg-indigo-500 text-white">
            <nav class="flex justify-between items-center p-4 max-w-screen-lg mx-auto">
                <div class="space-x-6">
                    <a href="/">Home</a>
                    <a href="/about">About</a>
                </div>
            </nav>
        </header>
        <main>
            <slot />
        </main>
    </div>
    
</template>
