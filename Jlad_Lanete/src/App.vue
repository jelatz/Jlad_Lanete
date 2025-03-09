<script setup>
import { RouterLink, RouterView, useRoute } from 'vue-router'
import Header from '@/components/Header.vue'

const route = useRoute();
</script>

<template>
  <div>
    <Header v-if="route.name !== 'NotFound'" />
    <!-- <header>
      <img alt="Vue logo" class="logo" src="@/assets/logo.svg" width="125" height="125" />

      <div class="wrapper">

        <nav>
          <RouterLink to="/">Home</RouterLink>
        </nav>
      </div>
    </header> -->

    <RouterView />
  </div>
</template>

<style scoped>
*{
  font-family: "Roboto", sans-serif;
}
</style>
