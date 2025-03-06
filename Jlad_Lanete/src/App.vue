<script setup>
import { RouterLink, RouterView } from 'vue-router'
import Header from '@/components/Header.vue'
</script>

<template>
  <div>
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
  </div>
</template>

<style scoped>
*{
  font-family: "Roboto", sans-serif;
}
</style>
