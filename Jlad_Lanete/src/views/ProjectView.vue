<template> 
    <div class="container mx-auto text-center">
        <div class="mt-10">
            <h1 class="text-5xl font-bold" data-aos="fade-down" data-aos-duration="3000">Projects</h1>

            <p class="text-left font-semibold mt-20 mb-5 text-xl" data-aos="fade-right" data-aos-duration="3000" data-aos-delay="1000">WordPress</p>

            <ProjectCard 
                v-for="project in projects" 
                :key="project.id"
                :data="project" 
            />
        </div>
    </div>
</template>

<script setup>
import ProjectCard from '@/components/ProjectCard.vue'
import saekyungImage from '@/assets/images/projects/saekyung-auxilium/index.png'

const projects = [
    {
        id: 1, // ✅ Add an ID for v-for
        ProjectTitle: 'Saekyung Auxilium',
        ProjectDescription: 'A website for a real estate company in the Philippines.',
        ProjectImage: saekyungImage // ✅ Use imported image
    }
]
</script>
