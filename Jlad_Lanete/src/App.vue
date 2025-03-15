<script setup>
import { RouterLink, RouterView, useRoute } from 'vue-router'
import Header from '@/components/Header.vue'

const route = useRoute();
</script>

<template>
  <div class="h-lvh">
    <Header v-if="route.name !== 'NotFound' && route.name !== 'cv'" />
    <RouterView />
  </div>
</template>

<style scoped>
*{
  font-family: "Roboto", sans-serif;
}
</style>
