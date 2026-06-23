<template>
    <div class="glass rounded-2xl p-8 relative overflow-hidden transition-all duration-300 hover:border-slate-500 hover:shadow-[0_0_30px_rgba(239,68,68,0.15)] group">
        <div class="absolute -right-10 -top-10 w-32 h-32 bg-red-500/10 blur-[40px] rounded-full pointer-events-none transition-all duration-500 group-hover:bg-red-500/20"></div>
        <h4 class="text-xs font-bold uppercase tracking-widest text-red-400 mb-10 flex items-center gap-3">
            <span class="w-1.5 h-1.5 rounded-full bg-red-400 shadow-[0_0_8px_rgba(239,68,68,0.8)]"></span>
            Work Experience
        </h4>

        <div class="flex flex-col gap-12 relative z-10 border-l border-slate-700 ml-2 pl-6">
            <div v-for="(job, index) in jobs" :key="job.company" class="group/item relative">
                <span class="absolute -left-[31px] top-1 h-3 w-3 rounded-full bg-slate-800 border-2 border-slate-600 group-hover/item:border-red-400 group-hover/item:bg-red-500 transition-colors shadow-[0_0_10px_rgba(239,68,68,0)] group-hover/item:shadow-[0_0_10px_rgba(239,68,68,0.8)]"></span>
                
                <div class="flex flex-col md:flex-row md:items-baseline md:justify-between gap-2 mb-2">
                    <h5 class="text-xl font-bold text-slate-100 group-hover/item:text-red-400 transition-colors">{{ job.company }}</h5>
                    <p class="text-xs font-bold uppercase tracking-widest text-slate-500">{{ job.period }}</p>
                </div>
                <p v-if="job.role" class="mb-5 text-sm font-bold text-slate-400 group-hover/item:text-slate-300 transition-colors">{{ job.role }}</p>

                <ul class="list-none space-y-3 text-sm font-medium leading-relaxed text-slate-400">
                    <li v-for="point in job.points" :key="point" class="relative pl-5">
                        <span class="absolute left-0 top-2 h-1.5 w-1.5 rounded-full bg-slate-600 group-hover/item:bg-red-500 transition-colors"></span>
                        {{ point }}
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>


<script setup>
const jobs = [
    {
        company: "DobotAI",
        role: "AI Automation Engineer",
        period: "February 2026 - Present",
        points: [
            "Architect, build, and troubleshoot complex autonomous workflows and system integrations using Make.com, n8n, and Zapier.",
            "Design and deploy Agentic AI solutions and agentic workflows to automate specialized business processes and maximize operational efficiency."
        ],
    },
    {
        company: "CTC BPO",
        role: "Software Engineer",
        period: "May 2024 - Present",
        points: [
            "Optimized client features and secured internal HRIS for reliability and performance.",
            "Collaborated with cross-functional teams to deploy critical system upgrades.",
            "Increased user adoption by 20% through training sessions on new functionalities.",
        ],
    },
    {
        company: "Remie Australia",
        role: "IT Consultant (On-Call)",
        period: "January 2023 - April 2024",
        points: [
            "Maintained endpoint security and resolved technical friction for remote contractors.",
            "Conducted monthly compliance audits and configured specialized client software."
        ],
    },
    {
        company: "Proweaver Inc.",
        role: "Web Developer",
        period: "August 2023 - December 2023",
        points: [
            "Engineered responsive websites using HTML, CSS, JS, and PHP with a focus on SEO.",
            "Debugged cross-browser issues and conducted unit testing for code stability.",
        ],
    },
    {
        company: "American Appraisal Alliance",
        role: "Real Estate Virtual Assistant",
        period: "December 2019 - June 2022",
        points: [
            "Managed appraisal pipelines and input property data for senior review.",
            "Produced detailed Market Analyses evaluating sales trends and demographics.",
        ],
    },
];
</script>

<style scoped></style>
