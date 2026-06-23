<template>
  <article
    class="group relative flex flex-col overflow-hidden rounded-2xl glass transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_10px_40px_-10px_rgba(6,182,212,0.3)] hover:border-slate-600 z-10"
    data-aos="fade-up" data-aos-duration="800">
    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-slate-900/90 z-0 pointer-events-none"></div>
    <div class="aspect-[16/10] overflow-hidden bg-slate-900 relative">
      <img :src="data.ProjectImage" :alt="data.ProjectTitle"
        class="h-full w-full object-cover object-top transition-transform duration-700 group-hover:scale-110 opacity-80 group-hover:opacity-100" />
    </div>
    <div class="flex flex-1 flex-col p-6 relative z-10">
      <h2 class="text-xl font-bold text-slate-100 group-hover:text-cyan-400 transition-colors">{{ data.ProjectTitle }}</h2>
      <p class="mt-3 flex-1 text-sm leading-relaxed text-slate-400">{{ data.ProjectDescription }}</p>

      <a v-if="data.websiteLink" :href="data.websiteLink" target="_blank" rel="noopener"
        class="mt-6 inline-flex items-center gap-2 text-xs font-bold uppercase tracking-widest text-cyan-400 hover:text-cyan-300 transition-colors">
        Visit Website
        <span aria-hidden="true" class="transition-transform duration-300 group-hover:translate-x-1.5">&rarr;</span>
      </a>
      <a v-else-if="data.githubLink" :href="data.githubLink" target="_blank" rel="noopener"
        class="mt-6 inline-flex items-center gap-2 text-xs font-bold uppercase tracking-widest text-cyan-400 hover:text-cyan-300 transition-colors">
        View on GitHub
        <span aria-hidden="true" class="transition-transform duration-300 group-hover:translate-x-1.5">&rarr;</span>
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
