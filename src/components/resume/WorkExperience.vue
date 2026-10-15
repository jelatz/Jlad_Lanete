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
                    <h5 class="text-xl font-bold text-slate-100 group-hover/item:text-red-400 transition-colors">
                        {{ job.company }}
                        <span v-if="job.location" class="text-sm font-normal text-slate-400"> — {{ job.location }}</span>
                    </h5>
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
        company: "CTC BPO",
        location: "Cebu, Philippines",
        role: "Software Engineer",
        period: "May 2024 – Present",
        points: [
            "Built and refactored core modules for an enterprise Human Resource Information System (HRIS) serving 1,000+ active internal users, reducing page latency by 60%.",
            "Developed component-driven, responsive UI screens using React, ensuring seamless mobile and desktop usability.",
            "Designed and maintained secure REST API endpoints, normalized database schemas, and implemented strict Role-Based Access Control (RBAC) to safeguard sensitive payroll and workforce data.",
            "Authored automated unit and integration tests (Jest) for core business logic, permissions, and calculations prior to shipping code.",
            "Built a custom two-factor authentication (2FA) service routing one-time passwords via REST APIs, cutting login friction by 20% while enhancing account security.",
            "Leveraged AI coding assistants (Cursor, Copilot) with rigorous code review, test verification, and debugging to accelerate sprint delivery while maintaining 100% code quality standards.",
            "Collaborated via Git/GitHub through structured branches, descriptive pull request documentation, and active peer code reviews."
        ],
    },
    {
        company: "Remie Australia",
        location: "Remote",
        role: "IT Systems Consultant (Part-Time)",
        period: "January 2023 – April 2024",
        points: [
            "Managed system configurations, endpoint security, and compliance protocols across a distributed remote team of 30+ contractors, sustaining a 99.8% network uptime rate.",
            "Conducted regular security audits and configured secure developer environments, decreasing vulnerability flags by 45%."
        ],
    },
    {
        company: "Proweaver Inc.",
        location: "Cebu, Philippines",
        role: "Web Developer",
        period: "August 2023 – December 2023",
        points: [
            "Developed and deployed 150+ custom, mobile-responsive web applications using modern JavaScript and PHP, maintaining 100% cross-browser and cross-device compatibility.",
            "Optimized asset delivery, DOM structure, and critical rendering paths, driving an average 15% increase in Google Lighthouse performance scores."
        ],
    },
];
</script>

<style scoped></style>
