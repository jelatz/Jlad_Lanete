<script setup>
import { RouterLink, RouterView } from 'vue-router'
import HomeView from '@/views/HomeView.vue'
import Header from '@/components/Header.vue'
</script>

<template>
  <Header />
  <!-- <header>
    <img alt="Vue logo" class="logo" src="@/assets/logo.svg" width="125" height="125" />

    <div class="wrapper">

      <nav>
        <RouterLink to="/">Home</RouterLink>
      </nav>
    </div>
  </header> -->

  <RouterView />
</template>

<style scoped>

</style>
