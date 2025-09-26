<template>
  <div class="bg-[#222831] text-white min-h-screen grid place-items-center min-w-screen">
    <Header v-if="route.name !== 'NotFound'" />
    <main class="">
      <slot />
    </main>

    <!-- Skills Icons -->
    <div v-if="route.name === 'home'"
      class="px-10 flex absolute flex-wrap w-full justify-between bottom-10 items-center gap-4 md:space-x-5 skills-icon">
      <component v-for="(icon, index) in skillIcons" :key="index" :is="icon" class="w-10 md:w-10" />
    </div>
  </div>
</template>

<script setup>
import Header from '@/components/Header.vue'
import { useRoute } from 'vue-router'
import Html from "@/components/icons/Html.vue";
import Css from "@/components/icons/Css.vue";
import Javascript from "@/components/icons/Javascript.vue";
import Bootstrap from "@/components/icons/Bootstrap.vue";
import Tailwind from "@/components/icons/Tailwind.vue";
import Php from "@/components/icons/Php.vue";
import Laravel from "@/components/icons/Laravel.vue";
import Mysql from "@/components/icons/Mysql.vue";
import Github from "@/components/icons/Github.vue";
import Wordpress from "@/components/icons/Wordpress.vue";
import VueIcon from "@/components/icons/VueIcon.vue";
import Codeigniter from "@/components/icons/Codeigniter.vue";
import Git from "@/components/icons/Git.vue";
import Gitlab from "@/components/icons/Gitlab.vue";
import { shallowRef } from "vue";

// Store icons in an array
const skillIcons = shallowRef([
  Html, Css, Javascript, Bootstrap, Tailwind, VueIcon,
  Php, Codeigniter, Laravel, Mysql, Wordpress,
  Github, Gitlab, Git
]);

const route = useRoute()
</script>
