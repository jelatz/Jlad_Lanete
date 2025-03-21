<template>
    <div class="text-center flex flex-col items-stretch justify-between">
        <div>
            <img src="@/assets/images/jlad-profile.jpg" alt="profile image" class="rounded-full w-54 h-52 mx-auto" />
            <h1 class="text-5xl md:text-9xl uppercase tracking-wider font-semibold text-[#00ADB5] mt-5">
                Jlad Lanete
            </h1>
            <div class="mt-10">
                <span class="text-3xl md:text-6xl font-normal">{{ displayedText }}</span>
                <span v-if="isTyping" class="cursor text-3xl md:text-6xl">|</span>
            </div>
            <RouterLink to='/curriculum-vitae' class="text-[#00ADB5] hover:underline block my-10 text-lg">
                Curriculum Vitae
            </RouterLink>
            <!-- <p class="my-20">View Curriculum Vitae</p> -->
        </div>

        <!-- Skills Icons -->
        <div
            class="px-10 flex flex-wrap justify-between w-full fixed bottom-10 items-center gap-4 md:space-x-5 skills-icon">
            <component v-for="(icon, index) in skillIcons" :key="index" :is="icon" class="w-10 md:w-10" />
        </div>
    </div>
</template>

<script setup>
defineProps({ layout: { type: String, default: "DefaultLayout" } });

import { ref, onMounted, shallowRef } from "vue";
import Html from "@/components/icons/Html.vue";
import Css from "@/components/icons/Css.vue";   
import Javascript from "@/components/icons/Javascript.vue";
import Bootstrap from "@/components/icons/Bootstrap.vue";
import Tailwind from "@/components/icons/Tailwind.vue";
import Php from "@/components/icons/Php.vue";
import Laravel from "@/components/icons/Laravel.vue";
import Mysql from "@/components/icons/Mysql.vue";
import Github from "@/components/icons/Github.vue";
import Wordpress from "@/components/icons/Wordpress.vue";
import VueIcon from "@/components/icons/VueIcon.vue";
import Codeigniter from "@/components/icons/Codeigniter.vue";
import Git from "@/components/icons/Git.vue";
import Gitlab from "@/components/icons/Gitlab.vue";

// Store icons in an array
const skillIcons = shallowRef([
    Html, Css, Javascript, Bootstrap, Tailwind, VueIcon,
    Php, Codeigniter, Laravel, Mysql, Wordpress,
    Github, Gitlab, Git
]);

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
.skills-icon>* {
    color: #00adb5;
}
</style>
