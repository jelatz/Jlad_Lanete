<template>
    <div class="container mx-auto px-5 pt-[12rem] relative md:px-0 text-center overflow-x-hidden">
        <h1 class="text-5xl font-bold" data-aos="fade-down" data-aos-duration="2000">
            Projects
        </h1>
        <div class="mt-10">
            <p class="text-left font-semibold mt-20 mb-10 text-3xl" data-aos="fade-right" data-aos-duration="2000">
                Wordpress
            </p>

            <ProjectCard v-for="wordpressProject in wordpressProjects" :key="wordpressProject.id"
                :data="wordpressProject" />
        </div>
    </div>
</template>

<script setup>
import ProjectCard from "@/components/ProjectCard.vue";
import Enrichment from "@/assets/images/projects/wordpress/enrichment-unlimited.jpg";
import IntegritySupportServices from "@/assets/images/projects/wordpress/integrity-support-services.jpg";
import LyonsGlobal from "@/assets/images/projects/wordpress/lyons-global.jpg";
import NJLeaf from "@/assets/images/projects/wordpress/nj-leaf.jpg";
import OneHeartMedicalStaffing from "@/assets/images/projects/wordpress/one-heart-medical-staffing.jpg";


const wordpressProjects = [
    {
        id: 1,
        ProjectTitle: "Enrichment Unlimited",
        ProjectDescription:
            "Coaching and Consulting services to help individuals create the life that they look forward to waking up to. Services are offered by Enrichment Coach, Shaunté McCullum, and can vary from person to person based on what that individual’s goals are.",
        ProjectImage: Enrichment,
        websiteLink: "https://www.enrichmentunlimited.com/coaching-consulting-services-about",
        opposite: false
    },
    {
        id: 2,
        ProjectTitle: "Integrity Support & Services",
        ProjectDescription:
            "A trusted and certified care provider for individuals with developmental disabilities.",
        ProjectImage: IntegritySupportServices,
        websiteLink: "https://www.integritysupportsandservices.com/",
        opposite: true
    },
    {
        id: 3,
        ProjectTitle: "Lyons Global",
        ProjectDescription: "A pioneering international digital health solutions company based in the United States. Our mission is to provide easy-to-use, adaptable and accessible products that expand the geographical reach of healthcare delivery.",
        ProjectImage: LyonsGlobal,
        websiteLink: "https://lyonsglobal.us/about-us/",
        opposite: false
    },
    {
        id: 4,
        ProjectTitle: "NJ Leaf",
        ProjectDescription: "The only alternative treatment facility in Monmouth County led by a team of pharmacists.",
        ProjectImage: NJLeaf,
        websiteLink: "https://njleaf.com/",
        opposite: true
    },
    {
        id: 5,
        ProjectTitle: "One Heart Medical Staffing",
        ProjectDescription: "A trusted and reliable provider of quality healthcare staffing services. With years of experience in health care, we understand the importance of trained medical professionals to fill the everyday staffing needs in healthcare facilities.",
        ProjectImage: OneHeartMedicalStaffing,
        websiteLink: "http://www.oneheartmedicalstaffing.com/",
        opposite: false
    }
]
</script>
