<template>
    <div class="text-center mt-10">
        <img src="@/assets/images/profile--.png" alt="profile image" class="rounded-full w-40 h-40 mx-auto" />
        <h1 class="text-9xl mt-10 uppercase tracking-wider font-semibold text-[#00ADB5]">
            Jlad Lanete
        </h1>
        <div class="mt-5">
            <span class="text-3xl md:text-6xl font-normal">{{ displayedText }}</span>
            <span v-if="isTyping" class="cursor text-3xl md:text-6xl">|</span>
        </div>
        <p class="mt-10">View Curriculum Vitae</p>

        <div class="mt-10 flex items-center space-x-5">
            <Html class="w-10 text-red-300" />
            <Css class="w-10 text-red-300"/>
            <Javascript class="w-10 text-red-300"/>
            <Bootstrap class="w-10 text-red-300"/>
            <Tailwind class="w-10 text-red-300"/>
            <Php class="w-10 text-red-300"/>
            <Laravel class="w-10 text-red-300"/>
            <Mysql class="w-10 text-red-300"/>
        </div>


    </div>
</template>

<script setup>
import { ref, onMounted } from "vue";
import Html from "@/components/icons/Html.vue";
import Css from "@/components/icons/Css.vue";   
import Javascript from "@/components/icons/Javascript.vue";
import Bootstrap from "@/components/icons/Bootstrap.vue";
import Tailwind from "@/components/icons/Tailwind.vue";
import Php from "@/components/icons/Php.vue";
import Laravel from "@/components/icons/Laravel.vue";
import Mysql from "@/components/icons/Mysql.vue";

const texts = ["Software Engineer", "Virtual Assistant", "Web Developer"];
const displayedText = ref("");
const currentIndex = ref(0);
const isTyping = ref(true);
const speed = 130;

const typeAndDeleteText = () => {
    let index = 0; // Tracks the position in the current text
    let isDeleting = false; // Tracks whether we are typing or deleting

    const handleTyping = () => {
        const currentText = texts[currentIndex.value];

        if (!isDeleting && index < currentText.length) {
            // Typing phase
            displayedText.value += currentText[index++];
        } else if (isDeleting && index > 0) {
            // Deleting phase
            displayedText.value = displayedText.value.slice(0, --index);
        } else {
            // Switch between typing and deleting
            isDeleting = !isDeleting;

            if (!isDeleting) {
                // Move to the next text after deleting
                currentIndex.value = (currentIndex.value + 1) % texts.length;
            }

            // Pause between transitions
            setTimeout(handleTyping, isDeleting ? 1000 : 500);
            return; // Exit early to prevent interval overlap
        }

        setTimeout(handleTyping, isDeleting ? speed / 2 : speed);
    };

    handleTyping(); // Start the typing effect
};

onMounted(() => {
    typeAndDeleteText();
});
</script>

<style lang="scss" scoped></style>
