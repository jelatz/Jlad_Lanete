<template>
    <div class="h-screen flex flex-col items-center justify-center text-center bg-gray-900 text-white">
        <h1 class="text-9xl font-bold text-red-500">404</h1>
        <p class="text-2xl mt-4">Oops! This page doesn't exist.</p>
        <RouterLink to="/" class="mt-6 px-6 py-3 bg-red-500 text-white rounded-lg hover:bg-red-600 transition">
            Go Home
        </RouterLink>
    </div>
</template>

<script setup>
import { RouterLink } from "vue-router";
</script>
