<template>
    <div class="glass rounded-2xl p-8 relative overflow-hidden transition-all duration-300 hover:border-slate-500 hover:shadow-[0_0_30px_rgba(217,70,239,0.15)] group">
        <div class="absolute -right-10 -top-10 w-32 h-32 bg-fuchsia-500/10 blur-[40px] rounded-full pointer-events-none transition-all duration-500 group-hover:bg-fuchsia-500/20"></div>
        <h4 class="text-xs font-bold uppercase tracking-widest text-fuchsia-400 mb-6 flex items-center gap-3">
            <span class="w-1.5 h-1.5 rounded-full bg-fuchsia-400 shadow-[0_0_8px_rgba(217,70,239,0.8)]"></span>
            Skills
        </h4>
        <div class="flex flex-col gap-8 relative z-10">
            <div v-for="(skillGroup, index) in skills" :key="index">
                <p class="text-xs font-bold uppercase tracking-widest text-slate-500 mb-4 group-hover:text-fuchsia-400 transition-colors">{{ skillGroup.category }}</p>
                <div class="flex flex-wrap gap-3">
                    <span v-for="skill in skillGroup.items" :key="skill"
                        class="bg-slate-800/50 border border-slate-700 px-3 py-1.5 text-xs font-medium text-slate-300 rounded-lg hover:border-fuchsia-500 hover:text-fuchsia-300 transition-colors cursor-default">
                        {{ skill }}
                    </span>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
const skills = [
    {
        category: "Frontend",
        items: ["React.js", "Next.js", "TypeScript", "JavaScript (ES6+)", "Vite", "Tailwind CSS", "Mobile-First / Responsive UI", "HTML5 / CSS3"]
    },
    {
        category: "Backend & Databases",
        items: ["Node.js", "Express", "RESTful APIs", "PostgreSQL", "MySQL", "Database Schema Design", "RBAC", "Authentication (JWT, 2FA)"]
    },
    {
        category: "Testing & Tools",
        items: ["Jest", "Vitest", "Git", "GitHub (PRs, Code Reviews)", "Vercel", "Sentry", "Postman"]
    },
    {
        category: "Workflow & AI Tools",
        items: ["Cursor", "Claude Code", "GitHub Copilot", "Monday.com", "Automated CI/CD Pipelines"]
    }
];
</script>

<style scoped></style>