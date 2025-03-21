<template>
    <div class="container mx-auto px-5 pt-[108px] md:px-0 text-center">
        <h1 class="text-5xl font-bold" data-aos="fade-down" data-aos-duration="2000">
            Projects
        </h1>
        <div class="mt-10">
            <p class="text-left font-semibold mt-20 mb-10 text-3xl" data-aos="fade-right" data-aos-duration="2000">
                Personal
            </p>
            <ProjectCard v-for="personalProject in personalProjects" :key="personalProject.id"
                :data="personalProject" />

            <p class="text-left font-semibold mt-40 mb-10 text-3xl" data-aos="fade-right" data-aos-duration="2000">
                Wordpress
            </p>

            <ProjectCard v-for="wordpressProject in wordpressProjects" :key="wordpressProject.id"
                :data="wordpressProject" />
        </div>
    </div>
</template>

<script setup>
import ProjectCard from "@/components/ProjectCard.vue";
import saekyungImage from "@/assets/images/projects/saekyung-auxilium/index.png";
import CCRMS from "@/assets/images/projects/ccrms/ccrms.png";
import Healteeth from "@/assets/images/projects/healteeth/healteeth.png";
import RFID from "@/assets/images/projects/rfid/rfid.png";
import Enrichment from "@/assets/images/projects/wordpress/enrichment-unlimited.jpg";
import IntegritySupportServices from "@/assets/images/projects/wordpress/integrity-support-services.jpg";
import LyonsGlobal from "@/assets/images/projects/wordpress/lyons-global.jpg";
import NJLeaf from "@/assets/images/projects/wordpress/nj-leaf.jpg";
import OneHeartMedicalStaffing from "@/assets/images/projects/wordpress/one-heart-medical-staffing.jpg";


const personalProjects = [
    {
        id: 1,
        ProjectTitle: "Saekyung Auxilium",
        ProjectDescription:
            "My capstone project. A management information system for Saekyung 956 Condominium. It is a web-based system that aims to help the management of the condominium in managing their maintenance transactions.",
        ProjectImage: saekyungImage,
        githubLink: "https://github.com/jelatz/Saekyung-Auxilium",
        opposite: false
    },
    {
        id: 2,
        ProjectTitle: "CCS Class Record Management System",
        ProjectDescription:
            "A class record management system for the College of Computer Studies. This is a final project for the subject Software Engineering.",
        ProjectImage: CCRMS,
        githubLink: "https://github.com/jelatz/CCRMS",
        opposite: true
    },
    {
        id: 3,
        ProjectTitle: "Healteeth",
        ProjectDescription:
            "A dental clinic management system. A practice project to learn more about the core of PHP and MySQL.",
        ProjectImage: Healteeth,
        githubLink: "https://github.com/jelatz/healteeth",
        opposite: false
    },
    {
        id: 4,
        ProjectTitle: "RFID Processing Platform",
        ProjectDescription:
            "A platform for processing RFID data. An application assigned to us by our professor for a hackathon.",
        ProjectImage: RFID,
        githubLink: "https://github.com/jelatz/RFID-PROCESSING-PLATFORM",
        opposite: true
    }
];

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
