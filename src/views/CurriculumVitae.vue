<template>
    <div class="!bg-white h-screen pt-16 text-black container mx-auto">
        <div class="grid place-items-center h-full" v-if="isMobile">
            <div class="px-10 text-center">
                <p class="text-sm font-medium uppercase tracking-[0.3em] text-[#0d9488]">Curriculum Vitae</p>
                <h1 class="mt-4 text-lg leading-relaxed text-slate-600">
                    The full CV is best viewed on a desktop. You can download a copy below.
                </h1>
                <a :href="cvPDF" target="_blank"
                    class="mt-6 inline-flex items-center rounded-full bg-[#0d9488] px-7 py-3 text-sm font-semibold text-white shadow-sm transition-all hover:bg-[#0f766e] hover:shadow-md">
                    Download CV
                </a>
            </div>
        </div>
        <div class="w-11/12 mx-auto" v-else>
            <div class="border-b border-slate-200 py-10 md:py-14 text-center">
                <h1 class="text-4xl md:text-6xl font-bold tracking-tight text-slate-900">Jojie Lad Lanete</h1>
                <p class="mt-4 text-base md:text-xl font-medium uppercase tracking-[0.25em] text-[#0d9488]">
                    Software Engineer / Virtual Assistant
                </p>
            </div>

            <!-- Details -->
            <div class="grid mt-2 grid-cols-3">
                <!-- Personal Details -->
                <div class="col-span-1">
                    <ContactInfo />
                    <EducationInfo />
                    <SkillsInfo />
                    <RerenceInfo />
                </div>

                <div class="border-l border-slate-200 col-span-2">
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
import cvPDF from '@/assets/docs/JojieLad_CV.pdf';
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