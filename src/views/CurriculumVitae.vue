<template>
    <div class="min-h-screen pt-24 pb-24 text-slate-100 container mx-auto relative z-10">
        <!-- Ambient Background glow -->
        <div class="fixed top-0 inset-x-0 h-[500px] bg-gradient-to-b from-blue-900/20 to-transparent pointer-events-none -z-10"></div>

        <div class="grid place-items-center h-[calc(100vh-100px)]" v-if="isMobile">
            <div class="px-10 text-center glass rounded-3xl p-10 relative overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-cyan-500/10 to-blue-500/10 z-0 pointer-events-none"></div>
                <div class="relative z-10">
                    <p class="text-xs font-bold uppercase tracking-[0.4em] text-cyan-400">Curriculum Vitae</p>
                    <h1 class="mt-4 text-lg font-light leading-relaxed text-slate-300">
                        The full CV is best viewed on a desktop. You can download a copy below.
                    </h1>
                    <a :href="cvPDF" target="_blank" download="JojieLadLanete.pdf"
                        class="mt-8 inline-flex items-center rounded-full bg-cyan-500 border border-cyan-400 px-8 py-3 text-sm font-bold text-slate-900 transition-all duration-300 hover:bg-cyan-400 hover:shadow-[0_0_20px_rgba(6,182,212,0.6)]">
                        Download CV
                    </a>
                </div>
            </div>
        </div>
        <div class="max-w-6xl mx-auto px-6 sm:px-8 lg:px-10" v-else>
            <div class="py-16 md:py-24 text-center relative" data-aos="fade-in">
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-48 h-48 bg-purple-500/20 blur-[100px] rounded-full pointer-events-none"></div>
                <h1 class="text-5xl md:text-7xl font-bold tracking-tighter text-slate-50 relative z-10">Jojie Lad Lanete</h1>
                <p class="mt-6 text-sm md:text-base font-bold uppercase tracking-[0.4em] text-cyan-400 relative z-10 drop-shadow-md">
                    Software Engineer <span class="mx-3 text-slate-600">|</span> AI Engineer
                </p>
                <div class="mt-10 relative z-10">
                    <a :href="cvPDF" target="_blank" download="JojieLadLanete.pdf"
                        class="inline-flex items-center gap-3 rounded-full bg-slate-800/80 backdrop-blur-md border border-slate-700 px-8 py-4 text-sm font-semibold text-white transition-all duration-300 hover:bg-cyan-500 hover:border-cyan-400 hover:shadow-[0_0_20px_rgba(6,182,212,0.6)] hover:-translate-y-1">
                        <fai :icon="['fas', 'download']" class="w-4 h-4 text-cyan-400 group-hover:text-white" />
                        Download CV
                    </a>
                </div>
            </div>

            <!-- Details -->
            <div class="grid mt-8 grid-cols-1 md:grid-cols-12 gap-8 md:gap-12 pb-24">
                <!-- Personal Details -->
                <div class="md:col-span-4 flex flex-col gap-8">
                    <ContactInfo />
                    <EducationInfo />
                    <SkillsInfo />
                    <RerenceInfo />
                </div>

                <div class="md:col-span-8 flex flex-col gap-8">
                    <ProfileSummary />
                    <WorkExperience />
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
defineProps({ layout: { type: String, default: "CVLayout" } });
import { ref, onMounted, onUnmounted } from 'vue';
import cvPDF from '@/assets/docs/JojieLadLanete.pdf';
import ContactInfo from '@/components/resume/ContactInfo.vue';
import EducationInfo from '@/components/resume/EducationInfo.vue';
import SkillsInfo from '@/components/resume/SkillsInfo.vue';
import RerenceInfo from '@/components/resume/ReferenceInfo.vue';
import ProfileSummary from '@/components/resume/ProfileSummary.vue';
import WorkExperience from '@/components/resume/WorkExperience.vue';

const isMobile = ref(false);

const checkMobile = () => {
    isMobile.value = window.innerWidth <= 768;
};

// Call the function initially
onMounted(() => {
    checkMobile();
    window.addEventListener('resize', checkMobile);
});

// Clean up event listener
onUnmounted(() => {
    window.removeEventListener('resize', checkMobile);
});
</script>

<style scoped></style>