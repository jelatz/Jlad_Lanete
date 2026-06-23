<template>
    <div class="text-center flex flex-col items-center justify-center px-6">
        <img src="@/assets/images/jlad-profile.jpg" alt="Jlad Lanete"
            class="rounded-full w-36 h-36 md:w-44 md:h-44 object-cover mx-auto ring-1 ring-slate-200 shadow-sm" />

        <p class="mt-8 text-sm font-medium uppercase tracking-[0.3em] text-[#0d9488]">
            Portfolio
        </p>

        <h1 class="text-5xl md:text-8xl font-bold tracking-tight text-slate-900 mt-3">
            Jlad Lanete
        </h1>

        <div class="mt-6 h-10 md:h-14 flex items-center justify-center">
            <span class="text-2xl md:text-4xl font-light text-slate-500">{{ displayedText }}</span>
            <span v-if="isTyping" class="cursor text-2xl md:text-4xl font-light text-[#0d9488] ml-0.5">|</span>
        </div>

        <RouterLink to="/curriculum-vitae"
            class="inline-flex items-center gap-2 mt-10 rounded-full bg-[#0d9488] px-7 py-3 text-sm font-semibold text-white shadow-sm transition-all hover:bg-[#0f766e] hover:shadow-md">
            View Curriculum Vitae
        </RouterLink>
    </div>
</template>

<script setup>
defineProps({ layout: { type: String, default: "DefaultLayout" } });

import { ref, onMounted } from "vue";

const texts = ["Software Engineer", "Virtual Assistant", "Web Developer"];
const displayedText = ref("");
const currentIndex = ref(0);
const isTyping = ref(true);
const speed = 130;

const typeAndDeleteText = () => {
    let index = 0, isDeleting = false;

    const handleTyping = () => {
        const currentText = texts[currentIndex.value];

        if (!isDeleting && index < currentText.length) {
            displayedText.value += currentText[index++];
        } else if (isDeleting && index > 0) {
            displayedText.value = displayedText.value.slice(0, --index);
        } else {
            isDeleting = !isDeleting;
            if (!isDeleting) currentIndex.value = (currentIndex.value + 1) % texts.length;
            setTimeout(handleTyping, isDeleting ? 1000 : 500);
            return;
        }

        setTimeout(handleTyping, isDeleting ? speed / 2 : speed);
    };

    handleTyping();
};

onMounted(typeAndDeleteText);
</script>

<style scoped>
.cursor {
    animation: blink 1s step-end infinite;
}

@keyframes blink {
    50% {
        opacity: 0;
    }
}
</style>
