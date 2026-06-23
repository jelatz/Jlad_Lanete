<template>
    <div class="px-8 py-10">
        <h4 class="flex items-center gap-3 text-base font-bold uppercase tracking-[0.2em] text-slate-900">
            <span class="h-4 w-1 rounded-full bg-[#0d9488]"></span>
            Work Experience
        </h4>

        <div class="mt-6 flex flex-col">
            <div v-for="(job, index) in jobs" :key="job.company"
                class="relative border-l border-slate-200 pl-6 pb-8"
                :class="{ 'pb-0': index === jobs.length - 1 }">
                <span class="absolute -left-[5px] top-1.5 h-2.5 w-2.5 rounded-full bg-[#0d9488] ring-4 ring-white"></span>

                <div class="flex flex-wrap items-baseline justify-between gap-x-4">
                    <h5 class="text-lg font-semibold text-slate-900">{{ job.company }}</h5>
                    <p class="text-xs font-medium uppercase tracking-wider text-slate-400">{{ job.period }}</p>
                </div>
                <p v-if="job.role" class="mt-0.5 text-[15px] font-medium text-[#0d9488]">{{ job.role }}</p>

                <ul class="list-disc ml-4 mt-3 space-y-1.5 text-[15px] leading-relaxed text-slate-600 marker:text-slate-300">
                    <li v-for="point in job.points" :key="point">{{ point }}</li>
                </ul>
            </div>
        </div>
    </div>
</template>


<script setup>
const jobs = [
    {
        company: "CTC BPO",
        role: "Software Engineer",
        period: "May 2024 - Present",
        points: [
            "Developed and maintained client-requested enhancements, streamlining business processes.",
            "Managed and optimized the company's HRIS, ensuring data integrity, security, and seamless performance.",
            "Partnered with cross-functional teams to identify system needs and successfully implement upgrades.",
            "Improved user adoption by 20% through comprehensive training sessions on HRIS features.",
        ],
    },
    {
        company: "Proweaver Inc.",
        role: "Web Developer",
        period: "August 2023 - December 2023",
        points: [
            "Developed clean, efficient, and well-documented websites using HTML, CSS, JavaScript, and PHP.",
            "Optimized website performance to improve page load times and SEO rankings.",
            "Debugged and resolved website issues, ensuring cross-browser compatibility and responsiveness.",
            "Performed rigorous unit testing to ensure code robustness and security.",
        ],
    },
    {
        company: "Remie Australia",
        role: "IT Consultant (On-Call)",
        period: "January 2023 - April 2024",
        points: [
            "Ensured that all Remie (Virtual Assistant) devices were protected from malware and remained secure.",
            "Diagnosed and resolved technical issues encountered between Remies and clients.",
            "Conducted monthly security audits of Remies' and admins' devices to ensure compliance and data safety.",
            "Assisted with configuring and troubleshooting client-provided software as needed.",
        ],
    },
    {
        company: "Accenture Inc. Philippines",
        role: "Adobe Analytics Developer (Internship)",
        period: "February 2024 - May 2024",
        points: [
            "Collaborated with the product team to implement tracking codes, tags, and configurations in Adobe Analytics.",
            "Ensured data accuracy and addressed data collection issues and discrepancies.",
            "Created and maintained rules and conditions within the tag management system (TMS) to control when and where data collection occurs.",
        ],
    },
    {
        company: "American Appraisal Alliance",
        role: "Real Estate Virtual Assistant",
        period: "December 2019 - June 2022",
        points: [
            "Supported real estate appraisals by coordinating inspections and managing administrative tasks.",
            "Enhanced property database accuracy and client service via effective communication channels.",
            "Researched and added properties to system for appraiser review.",
            "Provided comprehensive market analysis for properties to be appraised, focusing on sales trends, comparable property data, neighborhood demographics, and market conditions.",
        ],
    },
];
</script>

<style scoped></style>
