<template>
    <div class="h-screen flex flex-col items-center justify-center text-center bg-white text-slate-900 px-6">
        <p class="text-sm font-medium uppercase tracking-[0.3em] text-[#0d9488]">Error 404</p>
        <h1 class="mt-4 text-7xl md:text-9xl font-bold tracking-tight text-slate-900">404</h1>
        <p class="mt-4 text-lg text-slate-500">This page doesn't exist or has been moved.</p>
        <RouterLink to="/"
            class="mt-8 inline-flex items-center rounded-full bg-[#0d9488] px-7 py-3 text-sm font-semibold text-white shadow-sm transition-all hover:bg-[#0f766e] hover:shadow-md">
            Back to Home
        </RouterLink>
    </div>
</template>

<script setup>
import { RouterLink } from "vue-router";
</script>
