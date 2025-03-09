<template>
    <div class="container mx-auto text-center">
        <div class="mt-10">
            <h1 class="text-5xl font-bold" data-aos="fade-down" data-aos-duration="2000">
                Projects
            </h1>

            <p class="text-left font-semibold mt-20 mb-10 text-3xl" data-aos="fade-right" data-aos-duration="2000"
                data-aos-delay="1000">
                Personal
            </p>

            <ProjectCard v-for="project in projects" :key="project.id" :data="project" data-aos="fade-right"
                data-aos-delay="1800" data-aos-duration="2000" />
        </div>
    </div>
</template>

<script setup>
import ProjectCard from "@/components/ProjectCard.vue";
import saekyungImage from "@/assets/images/projects/saekyung-auxilium/index.png";

const projects = [
    {
        id: 1,
        ProjectTitle: "Saekyung Auxilium",
        ProjectDescription:
            "A management information system for Saekyung 956 Condominium. ",
        ProjectImage: saekyungImage,
        githubLink: "https://github.com/jelatz/Saekyung-Auxilium",
    },
];
</script>
