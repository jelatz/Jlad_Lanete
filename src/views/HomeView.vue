<template>
    <div class="text-center flex flex-col items-center justify-center px-6">
        <div class="relative group">
            <div class="absolute -inset-1 rounded-full bg-gradient-to-r from-cyan-500 to-blue-500 opacity-75 blur group-hover:opacity-100 transition duration-1000 group-hover:duration-200"></div>
            <img src="@/assets/images/jlad-profile.jpg" alt="Jlad Lanete"
                class="relative rounded-full w-40 h-40 md:w-48 md:h-48 object-cover mx-auto ring-2 ring-slate-800 shadow-2xl transition-transform duration-500 group-hover:scale-105" />
        </div>

        <p class="mt-10 text-xs font-bold uppercase tracking-[0.5em] text-cyan-400 drop-shadow-md">
            Portfolio
        </p>

        <h1 class="text-5xl md:text-8xl font-bold tracking-tighter mt-4 text-gradient">
            Jlad Lanete
        </h1>

        <div class="mt-6 h-10 md:h-14 flex items-center justify-center">
            <span class="text-2xl md:text-4xl font-light text-slate-300">{{ displayedText }}</span>
            <span v-if="isTyping" class="cursor text-2xl md:text-4xl font-light text-cyan-400 ml-2 shadow-cyan-500/50">|</span>
        </div>

        <RouterLink to="/curriculum-vitae"
            class="mt-14 inline-flex items-center gap-3 rounded-full bg-slate-800/80 backdrop-blur-md border border-slate-700 px-8 py-4 text-sm font-semibold text-white transition-all duration-300 hover:bg-cyan-500 hover:border-cyan-400 hover:shadow-[0_0_20px_rgba(6,182,212,0.6)] hover:-translate-y-1">
            View Curriculum Vitae
            <span class="transition-transform group-hover:translate-x-1">&rarr;</span>
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
