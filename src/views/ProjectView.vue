<template>
    <div class="mx-auto max-w-6xl px-6 pt-32 pb-24 md:pt-40 overflow-x-hidden">
        <header class="max-w-2xl relative" data-aos="fade-up" data-aos-duration="800">
            <div class="absolute -left-8 top-4 w-20 h-20 bg-blue-500/20 blur-3xl rounded-full pointer-events-none"></div>
            <p class="text-xs font-bold uppercase tracking-[0.4em] text-cyan-400 drop-shadow-md">Selected Work</p>
            <h1 class="mt-4 text-4xl md:text-6xl font-bold tracking-tighter text-slate-50">
                Projects
            </h1>
            <p class="mt-6 text-lg font-light leading-relaxed text-slate-400">
                A selection of WordPress websites I have designed and developed for clients across
                healthcare, coaching, and consulting.
            </p>
        </header>

        <section class="mt-20 relative">
            <div class="flex items-center gap-6 mb-12">
                <h2 class="text-sm font-bold uppercase tracking-widest text-slate-300">WordPress</h2>
                <div class="h-px flex-1 bg-gradient-to-r from-slate-700 to-transparent"></div>
            </div>

            <div class="grid grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-3">
                <ProjectCard v-for="wordpressProject in wordpressProjects" :key="wordpressProject.id"
                    :data="wordpressProject" />
            </div>
        </section>
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
