<template>
    <div class="mx-auto max-w-6xl px-6 pt-32 pb-24 md:pt-40 overflow-x-hidden">
        <header class="max-w-2xl relative" data-aos="fade-up" data-aos-duration="800">
            <div class="absolute -left-8 top-4 w-20 h-20 bg-blue-500/20 blur-3xl rounded-full pointer-events-none"></div>
            <p class="text-xs font-bold uppercase tracking-[0.4em] text-cyan-400 drop-shadow-md">Selected Work & Systems</p>
            <h1 class="mt-4 text-4xl md:text-6xl font-bold tracking-tighter text-slate-50">
                Projects
            </h1>
            <p class="mt-6 text-lg font-light leading-relaxed text-slate-400">
                A showcase of enterprise systems, responsive web applications, and client platforms engineered across HRIS, remote infrastructure, healthcare, and consulting.
            </p>
        </header>

        <!-- Enterprise Systems & Infrastructure (CTC BPO & Remie Australia) -->
        <section class="mt-20 relative">
            <div class="flex items-center gap-6 mb-12">
                <h2 class="text-sm font-bold uppercase tracking-widest text-slate-300">Enterprise Systems & Architecture</h2>
                <div class="h-px flex-1 bg-gradient-to-r from-slate-700 to-transparent"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Enterprise HRIS Card -->
                <article class="group relative flex flex-col justify-between overflow-hidden rounded-2xl glass p-8 transition-all duration-500 hover:-translate-y-1.5 hover:border-cyan-500/50 hover:shadow-[0_10px_40px_-10px_rgba(6,182,212,0.25)]"
                    data-aos="fade-up" data-aos-duration="800">
                    <div class="absolute -right-12 -top-12 w-40 h-40 bg-cyan-500/10 blur-[50px] rounded-full pointer-events-none group-hover:bg-cyan-500/20 transition-all"></div>
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-xs font-bold uppercase tracking-widest text-cyan-400">CTC BPO &bull; 2024–Present</span>
                            <span class="text-xs font-semibold px-2.5 py-1 rounded-full bg-cyan-500/10 border border-cyan-500/30 text-cyan-300">Enterprise Core</span>
                        </div>
                        <h3 class="text-2xl font-bold text-white group-hover:text-cyan-300 transition-colors">
                            Enterprise HRIS Modernization
                        </h3>
                        <p class="mt-4 text-sm leading-relaxed text-slate-300">
                            Spearheaded the refactoring and modernization of core modules for an enterprise Human Resource Information System serving 1,000+ active internal users. Reduced page latency by 60%, implemented strict Role-Based Access Control (RBAC) to protect sensitive payroll data, engineered a custom 2FA OTP service, and enforced test-driven development (Jest).
                        </p>
                    </div>

                    <div class="mt-8 pt-6 border-t border-slate-800">
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span v-for="tag in ['React.js', 'Node.js', 'REST APIs', 'PostgreSQL / MySQL', 'RBAC', '2FA OTP', 'Jest']" :key="tag"
                                class="text-xs font-medium px-2.5 py-1 rounded-md bg-slate-800/80 border border-slate-700/80 text-slate-300">
                                {{ tag }}
                            </span>
                        </div>
                        <div class="flex items-center gap-6 text-xs font-bold text-cyan-400">
                            <span>⚡ 60% Faster Latency</span>
                            <span>👥 1,000+ Active Users</span>
                            <span>🔒 RBAC & 2FA</span>
                        </div>
                    </div>
                </article>

                <!-- Remote IT Infrastructure & Security Card -->
                <article class="group relative flex flex-col justify-between overflow-hidden rounded-2xl glass p-8 transition-all duration-500 hover:-translate-y-1.5 hover:border-blue-500/50 hover:shadow-[0_10px_40px_-10px_rgba(59,130,246,0.25)]"
                    data-aos="fade-up" data-aos-duration="800" data-aos-delay="150">
                    <div class="absolute -right-12 -top-12 w-40 h-40 bg-blue-500/10 blur-[50px] rounded-full pointer-events-none group-hover:bg-blue-500/20 transition-all"></div>
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-xs font-bold uppercase tracking-widest text-blue-400">Remie Australia &bull; 2023–2024</span>
                            <span class="text-xs font-semibold px-2.5 py-1 rounded-full bg-blue-500/10 border border-blue-500/30 text-blue-300">IT Infrastructure</span>
                        </div>
                        <h3 class="text-2xl font-bold text-white group-hover:text-blue-300 transition-colors">
                            Remote Systems & Endpoint Security
                        </h3>
                        <p class="mt-4 text-sm leading-relaxed text-slate-300">
                            Managed distributed endpoint security, device environments, and compliance protocols for a remote contractor workforce across Australia and the Philippines. Conducted systematic security audits, hardened developer configurations, and achieved a 99.8% network uptime rate while decreasing device vulnerability flags by 45%.
                        </p>
                    </div>

                    <div class="mt-8 pt-6 border-t border-slate-800">
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span v-for="tag in ['Endpoint Security', 'System Compliance', 'Remote Ops', 'Network Audits', 'Zero-Trust Protocol']" :key="tag"
                                class="text-xs font-medium px-2.5 py-1 rounded-md bg-slate-800/80 border border-slate-700/80 text-slate-300">
                                {{ tag }}
                            </span>
                        </div>
                        <div class="flex items-center gap-6 text-xs font-bold text-blue-400">
                            <span>🛡️ 99.8% Uptime</span>
                            <span>🌐 30+ Remote Contractors</span>
                            <span>📉 -45% Vulnerabilities</span>
                        </div>
                    </div>
                </article>
            </div>
        </section>

        <!-- Client Web Applications (150+ custom sites at Proweaver Inc.) -->
        <section class="mt-20 relative">
            <div class="flex items-center gap-6 mb-12">
                <h2 class="text-sm font-bold uppercase tracking-widest text-slate-300">Client Web Applications (Proweaver Inc.)</h2>
                <div class="h-px flex-1 bg-gradient-to-r from-slate-700 to-transparent"></div>
            </div>

            <p class="mb-10 text-sm leading-relaxed text-slate-400 max-w-3xl">
                Representative client web applications developed and launched out of 150+ custom responsive builds, achieving 100% cross-browser compatibility and an average 15% boost in Google Lighthouse performance scores.
            </p>

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
];
</script>
