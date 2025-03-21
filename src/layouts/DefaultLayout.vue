<template>
  <div class="bg-[#222831] text-[#ffffff] grid items-center h-full min-h-screen">
    <Header v-if="route.name !== 'NotFound'" />
    <main>
      <slot />
    </main>
  </div>
</template>

<script setup>
import Header from '@/components/Header.vue'
import { RouterLink, RouterView, useRoute } from 'vue-router'

const route = useRoute()
</script>

<style scoped>

</style>