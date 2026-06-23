<template>
  <div class="bg-[#0f172a] text-slate-100 min-h-screen relative" :class="{ 'h-screen overflow-hidden': route.name === 'home', 'overflow-x-hidden': route.name !== 'home' }">
    <!-- Subtle background glows -->
    <div class="absolute top-[-10%] left-[-10%] w-[40%] h-[40%] rounded-full bg-cyan-500/10 blur-[120px] pointer-events-none"></div>
    <div class="absolute bottom-[-10%] right-[-10%] w-[40%] h-[40%] rounded-full bg-blue-600/10 blur-[120px] pointer-events-none"></div>

    <Header v-if="route.name !== 'NotFound'" />
    <main class="w-full relative z-10 flex flex-col" :class="route.name === 'home' ? 'h-screen justify-center' : 'min-h-screen pt-24'">
      <slot />
    </main>

    <!-- Skills Icons -->
    <div v-if="route.name === 'home'"
      class="px-6 md:px-12 pb-8 absolute bottom-0 left-0 flex flex-wrap w-full justify-center md:justify-between items-center gap-6 md:gap-4 skills-icon z-10">
      <component v-for="(icon, index) in skillIcons" :key="index" :is="icon"
        class="w-6 md:w-8 transition-all duration-300 hover:-translate-y-1 hover:scale-110 drop-shadow-md" />
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
import MakeIcon from "@/components/icons/MakeIcon.vue";
import ZapierIcon from "@/components/icons/ZapierIcon.vue";
import N8nIcon from "@/components/icons/N8nIcon.vue";
import { shallowRef } from "vue";

// Store icons in an array
const skillIcons = shallowRef([
  Html, Css, Javascript, Bootstrap, Tailwind, VueIcon,
  Php, Codeigniter, Laravel, Mysql, Wordpress,
  Github, Gitlab, Git, MakeIcon, ZapierIcon, N8nIcon
]);

const route = useRoute()
</script>

<style scoped>
.skills-icon > * {
  color: #475569; /* slate-600 */
}

.skills-icon > *:hover {
  color: #38bdf8; /* light blue for hover glow */
  filter: drop-shadow(0 0 8px rgba(56, 189, 248, 0.5));
}
</style>
