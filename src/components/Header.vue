<template>
    <header class="top-0 left-0 w-full fixed flex items-center justify-between px-5 md:px-10
           h-20 md:h-24 z-[9999] header-background transition-all">
        <div class="flex flex-col md:flex-row items-center gap-3 md:gap-8">
            <a href="mailto:lanetejlad@gmail.com" class="relative font-bold text-lg hover:text-[#00ADB5] text-center md:me-8
                md:after:content-['|'] md:after:absolute md:after:-right-5">
                lanetejlad@gmail.com
            </a>
            <a href="tel:+639760275569" class="font-bold text-lg hover:text-[#00ADB5]">
                09760275569
            </a>
        </div>
        <nav class="flex items-center gap-10">
            <RouterLink to="/projects" class="hover:text-[#00ADB5]" v-if="route.name !== 'projects'">
                <ProjectsIcon />
            </RouterLink>
            <RouterLink to="/" class="hover:text-[#00ADB5]" v-else>
                <HomeIcon />
            </RouterLink>
            <a href="https://www.linkedin.com/in/jladlanete/" target="_blank" class="hover:text-[#00ADB5]">
                <Linkedin />
            </a>
            <a href="https://github.com/jelatz" target="_blank" class="hover:text-[#00ADB5]">
                <Github />
            </a>
        </nav>
    </header>
</template>

<script setup>
import { onMounted, onUnmounted } from 'vue'
import { RouterLink, useRoute } from 'vue-router'
import Github from '@/components/icons/Github.vue'
import Linkedin from '@/components/icons/LinkedIn.vue'
import ProjectsIcon from "@/components/icons/ProjectsIcon.vue"
import HomeIcon from "@/components/icons/HomeIcon.vue"

const route = useRoute()

const handleScroll = () => {
    const header = document.querySelector('header')
    if (window.scrollY > 50) {
        header.classList.add('header-background')
    } else {
        header.classList.remove('header-background')
    }
}

onMounted(() => window.addEventListener('scroll', handleScroll))
onUnmounted(() => window.removeEventListener('scroll', handleScroll))
</script>

<style scoped>
.header-background {
    background: rgba(34, 40, 49, 0.95);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.4);
}
</style>
