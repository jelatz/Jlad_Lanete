<template>
    <header class="w-full justify-between items-center flex p-10">
        <div>
            <a href="mailto:lanetejlad@gmail.com"
                class="relative me-11 after:content-['|'] after:absolute after:-right-6 hover:text-[#00ADB5] text-lg font-bold">lanetejlad@gmail.com</a>
            <a href="tel:+639760275569" class="hover:text-[#00ADB5] text-lg font-bold">09760275569</a>
        </div>
        <nav class="flex items-center space-x-10">
            <RouterLink to="/projects" class="text-white hover:text-[#00ADB5]" v-if="route.name !== 'projects'">
                <ProjectsIcon />
            </RouterLink>
            <RouterLink to="/" class="text-white hover:text-[#00ADB5]" v-else>
                <HomeIcon />
            </RouterLink>
            <a href="https://www.linkedin.com/in/jladlanete/" target="_blank" class="text-white hover:text-[#00ADB5]">
                <Linkedin />
            </a>
            <a href="https://github.com/jelatz" target="_blank" class="text-white hover:text-[#00ADB5]">
                <Github />
            </a>
        </nav>
    </header>
</template>

<script setup>
import { onMounted, onUnmounted } from 'vue';
import Github from '@/components/icons/Github.vue';
import Linkedin from '@/components/icons/LinkedIn.vue';
import ProjectsIcon from "@/components/icons/ProjectsIcon.vue";
import HomeIcon from "@/components/icons/HomeIcon.vue";
import { RouterLink, useRoute } from 'vue-router';

const route = useRoute();


const handleScroll = () => {
    const header = document.querySelector('header');
    if (window.scrollY > 50) {
        header.classList.add('header-background');
    } else {
        header.classList.remove('header-background');
    }
};

onMounted(() => {
    window.addEventListener('scroll', handleScroll);
});

onUnmounted(() => {
    window.removeEventListener('scroll', handleScroll);
});
</script>

<style scoped>
.header-background {
    background: rgba(255, 255, 255, 0.8);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border-bottom: 1px solid rgba(255, 255, 255, 0.3);
    transition: background 0.3s ease-in-out;
}
</style>