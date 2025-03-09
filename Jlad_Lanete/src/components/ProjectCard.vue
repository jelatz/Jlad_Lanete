<template>
    <div class="w-full flex p-10">
        <div class="w-[50%]">
            <img :src="data.ProjectImage" alt="Saekyung Auxilium" class="transition-transform duration-300 
         [transform:perspective(700px)_rotateY(15deg)_translateY(10px)_rotateX(-10deg)]
         hover:[transform:perspective(1000px)_rotateY(-10deg)_translateY(-20px)_rotateX(10deg)_scale(1.1)]" />
        </div>
        <div class="w-[50%] text-center">
            <h1 class="text-2xl font-bold">{{ data.ProjectTitle }}</h1>
            <p class="text-sm mt-3">{{ data.ProjectDescription }}</p>
        </div>
    </div>
</template>

<script setup>
defineProps({
    data: Object
})
</script>

<style scoped></style>