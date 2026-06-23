<template>
    <div class="border-b border-slate-200 px-8 py-10">
        <h4 class="flex items-center gap-3 text-base font-bold uppercase tracking-[0.2em] text-slate-900">
            <span class="h-4 w-1 rounded-full bg-[#0d9488]"></span>
            Skills
        </h4>
        <div class="flex mt-4 flex-col">
            <p class="text-xs font-semibold uppercase tracking-wider text-slate-400">Technical</p>
            <div class="mt-2.5 flex flex-wrap gap-2">
                <span v-for="skill in technicalSkills" :key="skill"
                    class="rounded-full bg-slate-100 px-3 py-1 text-xs font-medium text-slate-700">
                    {{ skill }}
                </span>
            </div>

            <p class="mt-5 text-xs font-semibold uppercase tracking-wider text-slate-400">Soft</p>
            <div class="mt-2.5 flex flex-wrap gap-2">
                <span v-for="skill in softSkills" :key="skill"
                    class="rounded-full bg-slate-100 px-3 py-1 text-xs font-medium text-slate-700">
                    {{ skill }}
                </span>
            </div>
        </div>
    </div>
</template>


<script setup>
const technicalSkills = [
    "HTML", "CSS", "JavaScript", "PHP", "MySQL",
    "Laravel", "WordPress", "CodeIgniter", "Git", "GitHub", "GitLab", "Adobe Analytics"
];

const softSkills = [
    "Teamwork", "Time Management", "Problem Solving",
    "Adaptability", "Critical Thinking", "Communication"
];
</script>

<style scoped></style>