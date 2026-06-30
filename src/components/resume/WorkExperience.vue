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
            "Architected and deployed 15+ multi-agent autonomous workflows using n8n, Make.com, and Zapier, reducing manual data processing time by 40% for enterprise clients.",
            "Engineered a modular Lead Capture AI Agent integrating Typeform, Calendly, and Close CRM, increasing booking conversion rates by 25%.",
            "Designed an end-to-end Onboarding AI Agent that automated workspace provisioning across Slack, Google Drive, and Gmail, cutting client onboarding time from 2 hours to under 5 minutes.",
            "Developed an automated Newsletter Email Agent utilizing OpenRouter to curate, rank, and summarize content from RSS and IMAP feeds, saving editorial teams 10+ hours weekly."
        ],
    },
    {
        company: "CTC BPO",
        role: "Software Engineer",
        period: "May 2024 - Present",
        points: [
            "Spearheaded the comprehensive migration of a legacy core Human Resource Information System (HRIS) to a modern Laravel, Vue.js, and Inertia.js stack, reducing page latency by 60%.",
            "Refactored legacy database schemas and implemented role-based access control (RBAC), securing sensitive data for 1000+ internal active users.",
            "Designed and integrated a secure 2FA alternative routing one-time passwords via the Openfire REST API to Spark IM clients, decreasing authentication friction by 20%.",
            "Conducted targeted technical training sessions on new HRIS modules, accelerating internal user adoption by 20% within the first 60 days of launch."
        ],
    },
    {
        company: "Remie Australia",
        role: "IT Consultant (Part Time | Concurrent)",
        period: "January 2023 - April 2024",
        points: [
            "Managed endpoint security and system compliance for a distributed team of 30+ remote contractors, maintaining a 99.8% network uptime rate.",
            "Executed monthly IT compliance audits and configured secure software environments, reducing device vulnerability flags by 45%."
        ],
    },
    {
        company: "Proweaver Inc.",
        role: "Web Developer",
        period: "August 2023 - December 2023",
        points: [
            "Developed and launched 150+ custom, responsive WordPress websites using PHP and JavaScript, ensuring 100% cross-browser compatibility.",
            "Optimized front-end performance and SEO structures, driving an average 15% improvement in Google Lighthouse speed scores."
        ],
    },
];
</script>

<style scoped></style>
