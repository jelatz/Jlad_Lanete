<template>
  <article
    class="group flex flex-col overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-lg hover:border-slate-300"
    data-aos="fade-up" data-aos-duration="800">
    <div class="aspect-[16/10] overflow-hidden bg-slate-50">
      <img :src="data.ProjectImage" :alt="data.ProjectTitle"
        class="h-full w-full object-cover object-top transition-transform duration-500 group-hover:scale-105" />
    </div>
    <div class="flex flex-1 flex-col p-6">
      <h2 class="text-lg font-semibold text-slate-900">{{ data.ProjectTitle }}</h2>
      <p class="mt-2 flex-1 text-sm leading-relaxed text-slate-500">{{ data.ProjectDescription }}</p>

      <a v-if="data.websiteLink" :href="data.websiteLink" target="_blank" rel="noopener"
        class="mt-5 inline-flex items-center gap-1.5 text-sm font-semibold text-[#0d9488] hover:text-[#0f766e]">
        Visit Website
        <span aria-hidden="true" class="transition-transform group-hover:translate-x-0.5">&rarr;</span>
      </a>
      <a v-else-if="data.githubLink" :href="data.githubLink" target="_blank" rel="noopener"
        class="mt-5 inline-flex items-center gap-1.5 text-sm font-semibold text-[#0d9488] hover:text-[#0f766e]">
        View on GitHub
        <span aria-hidden="true" class="transition-transform group-hover:translate-x-0.5">&rarr;</span>
      </a>
    </div>
  </article>
</template>

<script setup>
defineProps({
  data: Object,
});
</script>

<style scoped></style>
