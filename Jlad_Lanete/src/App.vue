<script setup>
import { RouterLink, RouterView, useRoute } from 'vue-router'
import DefaultLayout from "./layouts/DefaultLayout.vue";
import CVLayout from "./layouts/CVLayout.vue";
const layouts = { DefaultLayout, CVLayout}
const route = useRoute();
</script>

<template>
  <component :is="layouts[route.meta.layout || 'DefaultLayout']">
    <RouterView />
    </component>
</template>

<style scoped>
*{
  font-family: "Roboto", sans-serif;
}
</style>
