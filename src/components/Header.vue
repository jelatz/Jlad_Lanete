<template>
    <header class="top-0 left-0 w-full py-5 fixed flex items-center justify-between px-5 md:px-10
           z-[9999] text-slate-600 transition-all duration-300" :class="{ 'header-background': scrolled }">
        <div class="flex flex-col md:flex-row items-center gap-1 md:gap-8 text-sm md:text-[0.95rem]">
            <a href="mailto:lanetejlad@gmail.com" class="relative font-medium hover:text-[#0d9488] transition-colors text-center md:me-8
                md:after:content-[''] md:after:absolute md:after:top-1/2 md:after:-translate-y-1/2 md:after:-right-5 md:after:h-4 md:after:w-px md:after:bg-slate-300">
                lanetejlad@gmail.com
            </a>
            <a href="tel:+639760275569" class="font-medium hover:text-[#0d9488] transition-colors">
                09760275569
            </a>
        </div>
        <nav class="flex items-center gap-7 md:gap-8">
            <RouterLink to="/projects" class="hover:text-[#0d9488] transition-colors" v-if="route.name !== 'projects'">
                <ProjectsIcon />
            </RouterLink>
            <RouterLink to="/" class="hover:text-[#0d9488] transition-colors" v-else>
                <HomeIcon />
            </RouterLink>
            <a href="https://www.linkedin.com/in/jladlanete/" target="_blank" class="hover:text-[#0d9488] transition-colors">
                <Linkedin />
            </a>
            <a href="https://github.com/jelatz" target="_blank" class="hover:text-[#0d9488] transition-colors">
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
.header-background {
    background: rgba(255, 255, 255, 0.8);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    border-bottom: 1px solid var(--color-line, #e2e8f0);
    box-shadow: 0 1px 12px rgba(15, 23, 42, 0.06);
}
</style>
