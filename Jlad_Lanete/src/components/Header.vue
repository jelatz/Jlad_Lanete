<template>
    <header class="w-full justify-between items-center flex p-10">
        <div>
            <a href="mailto:lanetejlad@gmail.com"
                class="relative me-11 after:content-['|'] after:absolute after:-right-6 hover:text-[#00ADB5] text-lg">lanetejlad@gmail.com</a>
            <a href="tel:+639760275569" class="hover:text-[#00ADB5] text-lg">09760275569</a>
        </div>
        <nav class="flex items-center space-x-10">
            <a href="https://www.linkedin.com/in/jladlanete/" target="_blank" class="text-white hover:text-[#00ADB5]">
                <Linkedin />
            </a>
            <a href="https://github.com/jelatz" target="_blank" class="text-white hover:text-[#00ADB5]">
                <Github />
            </a>
        </nav>
    </header>
</template>


<script setup>
import Github from '@/components/Github.vue'
import Linkedin from '@/components/LinkedIn.vue'
</script>

<style lang="scss" scoped></style>
