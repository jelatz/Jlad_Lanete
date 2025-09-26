<template>
  <div class="bg-[#222831] text-white min-h-screen flex flex-col">
    <Header v-if="route.name !== 'NotFound'" />
    <main class="flex-1 pt-20 md:pt-24">
      <slot />
    </main>
  </div>
</template>

<script setup>
import Header from '@/components/Header.vue'
import { useRoute } from 'vue-router'

const route = useRoute()
</script>
