<template>
    <div class="!bg-white h-screen pt-16 text-black">
        <div class="grid place-items-center h-full" v-if="isMobile">
            <div class="px-10">
                <h1>
                    No mobile view available for my CV. Please view it on a desktop or you can Download it below.
                </h1>
                <a :href="cvPDF" target="_blank"
                    class="block mx-auto bg-white text-black border border-gray-400 py-3 px-5 text-center text-lg mt-5 hover:bg-gray-100">
                    Download CV
                </a>
            </div>
        </div>
        <div class="w-11/12 mx-auto" v-else>
            <div class="border-y-2 border-gray-400 py-10 md:py-16">
                <h1 class="text-4xl md:text-6xl font-normal text-center tracking-wider">Jojie Lad Lanete</h1>
                <p class="text-center mt-3 md:text-4xl tracking-widest">Software Engineer / Virtual Assistant</p>
            </div>

            <!-- Details -->
            <div class="grid mt-6 grid-cols-3">
                <!-- Personal Details -->
                <div class="col-span-1">
                    <ContactInfo />
                    <EducationInfo />
                    <SkillsInfo />
                    <RerenceInfo />
                </div>

                <div class="border-b-2 col-span-2">

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