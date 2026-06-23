<template>
    <header class="top-0 left-0 w-full py-4 fixed flex items-center justify-between px-6 md:px-12
           z-[9999] text-slate-300 transition-all duration-300" :class="{ 'header-glass': scrolled }">
        <div class="flex flex-col md:flex-row items-center gap-2 md:gap-8 text-xs md:text-sm font-medium tracking-wide">
            <a href="mailto:lanetejlad@gmail.com" class="relative hover:text-cyan-400 transition-colors text-center md:me-8
                md:after:content-[''] md:after:absolute md:after:top-1/2 md:after:-translate-y-1/2 md:after:-right-5 md:after:h-4 md:after:w-px md:after:bg-slate-700">
                lanetejlad@gmail.com
            </a>
            <a href="tel:+639760275569" class="hover:text-cyan-400 transition-colors">
                +63 976 027 5569
            </a>
        </div>
        <nav class="flex items-center gap-6 md:gap-8 text-slate-400">
            <RouterLink to="/projects" class="hover:text-cyan-400 transition-colors" v-if="route.name !== 'projects'">
                <ProjectsIcon />
            </RouterLink>
            <RouterLink to="/" class="hover:text-cyan-400 transition-colors" v-else>
                <HomeIcon />
            </RouterLink>
            <a href="https://www.linkedin.com/in/jladlanete/" target="_blank" class="hover:text-cyan-400 transition-colors">
                <Linkedin />
            </a>
            <a href="https://github.com/jelatz" target="_blank" class="hover:text-cyan-400 transition-colors">
                <Github />
            </a>
        </nav>
    </header>
</template>

<script setup>
import { onMounted, onUnmounted, ref } from 'vue'
import { RouterLink, useRoute } from 'vue-router'
import Github from '@/components/icons/Github.vue'
import Linkedin from '@/components/icons/LinkedIn.vue'
import ProjectsIcon from "@/components/icons/ProjectsIcon.vue"
import HomeIcon from "@/components/icons/HomeIcon.vue"

const route = useRoute()
const scrolled = ref(false)

const handleScroll = () => {
    scrolled.value = window.scrollY > 50
}

onMounted(() => window.addEventListener('scroll', handleScroll))
onUnmounted(() => window.removeEventListener('scroll', handleScroll))
</script>

<style scoped>
.header-glass {
    background: rgba(15, 23, 42, 0.7);
    backdrop-filter: blur(16px);
    -webkit-backdrop-filter: blur(16px);
    border-bottom: 1px solid rgba(51, 65, 85, 0.5);
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
    padding-top: 1rem;
    padding-bottom: 1rem;
}
</style>
