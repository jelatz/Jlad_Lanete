<template>
  <div class="w-full flex flex-col md:flex-row p-10 space-y-5 md:space-y-24">
    <template v-if="!data.opposite">
      <div class="w-full md:w-[50%]" data-aos="fade-right" data-aos-duration="1500">
        <img :src="data.ProjectImage" alt="Saekyung Auxilium"
          class="md:transition-transform md:duration-300 md:[transform:perspective(700px)_rotateY(15deg)_translateY(10px)_rotateX(-10deg)] md:hover:[transform:perspective(1000px)_rotateY(-10deg)_translateY(-20px)_rotateX(10deg)_scale(1.1)] w-[40rem]" />
      </div>
      <div class="w-full md:w-[50%] md:text-right md:pl-16" data-aos="fade-left" data-aos-duration="1500">
        <h1 class="text-2xl font-bold">{{ data.ProjectTitle }}</h1>
        <p class="text-sm mt-3">{{ data.ProjectDescription }}</p>
        <a :href="data.websiteLink" target="_blank" v-if="data.websiteLink" class="text-blue-500 hover:underline">
          Visit Website
        </a>
        <a :href="data.githubLink" target="_blank" v-if="data.githubLink" class="text-blue-500 hover:underline">
          View on GitHub
        </a>
      </div>
    </template>
    <template v-else>
      <div class="w-full flex flex-col-reverse space-y-10 md:flex-row">
        <div class="w-full md:w-[50%] md:text-left md:pr-16 mt-5 md:mt-0" data-aos="fade-right"
          data-aos-duration="1500">
          <h1 class="text-2xl font-bold">{{ data.ProjectTitle }}</h1>
          <p class="text-sm mt-3">{{ data.ProjectDescription }}</p>
          <a :href="data.websiteLink" target="_blank" v-if="data.websiteLink" class="text-blue-500 hover:underline">
            Visit Website
          </a>
          <a :href="data.githubLink" target="_blank" v-if="data.githubLink" class="text-blue-500 hover:underline">
            View on GitHub
          </a>
        </div>
        <div class="w-full md:w-[50%]" data-aos="fade-left" data-aos-duration="1500">
          <img :src="data.ProjectImage" alt="Saekyung Auxilium"
            class="md:transition-transform md:duration-300 md:[transform:perspective(1000px)_rotateY(-10deg)_translateY(-20px)_rotateX(10deg)] md:hover:[transform:perspective(1000px)_rotateY(10deg)_translateY(10px)_rotateX(-10deg)_scale(1.1)] w-[40rem]" />
        </div>
      </div>
    </template>
  </div>
</template>

<script setup>
defineProps({
  data: Object,
});
</script>

<style scoped></style>
