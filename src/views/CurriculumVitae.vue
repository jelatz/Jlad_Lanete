<template>
  <!--
  =============================================================================
  PREVIOUS CURRICULUM VITAE IMPLEMENTATION (COMMENTED OUT AS REQUESTED)
  =============================================================================
  <div class="min-h-screen pt-24 pb-24 text-slate-100 container mx-auto relative z-10">
      <div class="fixed top-0 inset-x-0 h-[500px] bg-gradient-to-b from-blue-900/20 to-transparent pointer-events-none -z-10"></div>

      <div class="grid place-items-center h-[calc(100vh-100px)]" v-if="isMobile">
          <div class="px-10 text-center glass rounded-3xl p-10 relative overflow-hidden">
              <div class="absolute inset-0 bg-gradient-to-br from-cyan-500/10 to-blue-500/10 z-0 pointer-events-none"></div>
              <div class="relative z-10">
                  <p class="text-xs font-bold uppercase tracking-[0.4em] text-cyan-400">Curriculum Vitae</p>
                  <h1 class="mt-4 text-lg font-light leading-relaxed text-slate-300">
                      The full CV is best viewed on a desktop. You can download a copy below.
                  </h1>
                  <a :href="cvPDF" target="_blank" download="JojieLadLanete.pdf"
                      class="mt-8 inline-flex items-center rounded-full bg-cyan-500 border border-cyan-400 px-8 py-3 text-sm font-bold text-slate-900 transition-all duration-300 hover:bg-cyan-400 hover:shadow-[0_0_20px_rgba(6,182,212,0.6)]">
                      Download CV
                  </a>
              </div>
          </div>
      </div>
      <div class="max-w-6xl mx-auto px-6 sm:px-8 lg:px-10" v-else>
          <div class="py-16 md:py-24 text-center relative" data-aos="fade-in">
              <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-48 h-48 bg-purple-500/20 blur-[100px] rounded-full pointer-events-none"></div>
              <h1 class="text-5xl md:text-7xl font-bold tracking-tighter text-slate-50 relative z-10">Jojie Lad Lanete</h1>
              <p class="mt-6 text-sm md:text-base font-bold uppercase tracking-[0.4em] text-cyan-400 relative z-10 drop-shadow-md">
                  Software Engineer <span class="mx-3 text-slate-600">|</span> AI Engineer
              </p>
              <div class="mt-10 relative z-10">
                  <a :href="cvPDF" target="_blank" download="JojieLadLanete.pdf"
                      class="inline-flex items-center gap-3 rounded-full bg-slate-800/80 backdrop-blur-md border border-slate-700 px-8 py-4 text-sm font-semibold text-white transition-all duration-300 hover:bg-cyan-500 hover:border-cyan-400 hover:shadow-[0_0_20px_rgba(6,182,212,0.6)] hover:-translate-y-1">
                      <fai :icon="['fas', 'download']" class="w-4 h-4 text-cyan-400 group-hover:text-white" />
                      Download CV
                  </a>
              </div>
          </div>

          <div class="grid mt-8 grid-cols-1 md:grid-cols-12 gap-8 md:gap-12 pb-24">
              <div class="md:col-span-4 flex flex-col gap-8">
                  <ContactInfo />
                  <EducationInfo />
                  <SkillsInfo />
                  <RerenceInfo />
              </div>

              <div class="md:col-span-8 flex flex-col gap-8">
                  <ProfileSummary />
                  <WorkExperience />
              </div>
          </div>
      </div>
  </div>
  =============================================================================
  END PREVIOUS IMPLEMENTATION
  =============================================================================
  -->

  <!-- ========================================================================= -->
  <!-- NEW CURRICULUM VITAE PAGE (BASED ON JLAD CV.PDF)                           -->
  <!-- Fully responsive across Mobile, Tablet, and Desktop                        -->
  <!-- ========================================================================= -->
  <div class="min-h-screen text-slate-100 relative z-10 bg-[#0f172a] selection:bg-cyan-500 selection:text-slate-950">
    <!-- Ambient Background Glows -->
    <div class="fixed top-0 inset-x-0 h-[600px] bg-gradient-to-b from-cyan-900/15 via-blue-900/10 to-transparent pointer-events-none -z-10"></div>
    <div class="fixed -top-40 -right-40 w-96 h-96 bg-cyan-500/10 blur-[130px] rounded-full pointer-events-none -z-10"></div>
    <div class="fixed bottom-0 -left-40 w-96 h-96 bg-blue-600/10 blur-[130px] rounded-full pointer-events-none -z-10"></div>

    <!-- Navigation Header -->
    <header class="sticky top-0 z-50 backdrop-blur-xl bg-slate-950/75 border-b border-slate-800/80 px-4 sm:px-8 py-3.5 transition-all">
      <div class="max-w-6xl mx-auto flex items-center justify-between">
        <RouterLink to="/" class="inline-flex items-center gap-2 text-xs sm:text-sm font-semibold text-slate-300 hover:text-cyan-400 transition-colors group">
          <span class="w-7 h-7 rounded-full bg-slate-800 flex items-center justify-center border border-slate-700 group-hover:border-cyan-400 group-hover:bg-cyan-500/10 transition-colors">
            &larr;
          </span>
          <span>Back to Portfolio</span>
        </RouterLink>

        <div class="flex items-center gap-3">
          <RouterLink to="/projects" class="text-xs sm:text-sm font-medium text-slate-400 hover:text-cyan-300 transition-colors hidden sm:inline-block">
            Projects
          </RouterLink>
          <a :href="cvPDF" target="_blank" download="JojieLadLanete.pdf"
            class="inline-flex items-center gap-2 rounded-full bg-cyan-500 hover:bg-cyan-400 px-4 sm:px-5 py-2 text-xs sm:text-sm font-bold text-slate-950 transition-all duration-300 shadow-[0_0_15px_rgba(6,182,212,0.4)] hover:shadow-[0_0_25px_rgba(6,182,212,0.6)]">
            <fai :icon="['fas', 'download']" class="w-3.5 h-3.5" />
            <span>Download CV (PDF)</span>
          </a>
        </div>
      </div>
    </header>

    <main class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 pt-8 sm:pt-14 pb-24">
      <!-- Hero / Header Section -->
      <section class="text-center relative pb-10" data-aos="fade-down" data-aos-duration="700">
        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-cyan-500/10 border border-cyan-500/30 text-cyan-300 text-xs font-bold uppercase tracking-[0.3em] mb-4">
          <span class="w-1.5 h-1.5 rounded-full bg-cyan-400 animate-ping"></span>
          Curriculum Vitae
        </div>

        <h1 class="text-4xl sm:text-6xl md:text-7xl font-bold tracking-tight text-white">
          Jojie Lad Lanete
        </h1>

        <p class="mt-3 sm:mt-4 text-base sm:text-xl font-semibold text-cyan-400 tracking-wide">
          Full-Stack Developer <span class="text-slate-600 mx-2">&bull;</span> Remote (Philippines)
        </p>

        <!-- Contact Chips Row -->
        <div class="mt-6 flex flex-wrap items-center justify-center gap-2.5 sm:gap-4 text-xs sm:text-sm text-slate-300">
          <a href="mailto:lanetejlad@gmail.com" class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-slate-800/80 border border-slate-700/80 hover:border-cyan-400 hover:text-cyan-300 transition-colors">
            <fai :icon="['fas', 'envelope']" class="w-3 h-3 text-cyan-400" />
            <span>lanetejlad@gmail.com</span>
          </a>
          <a href="tel:+639760275569" class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-slate-800/80 border border-slate-700/80 hover:border-cyan-400 hover:text-cyan-300 transition-colors">
            <fai :icon="['fas', 'phone']" class="w-3 h-3 text-cyan-400" />
            <span>+63 976 027 5569</span>
          </a>
          <a href="https://www.linkedin.com/in/JojieLadLanete" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-slate-800/80 border border-slate-700/80 hover:border-cyan-400 hover:text-cyan-300 transition-colors">
            <fai :icon="['fab', 'linkedin']" class="w-3 h-3 text-cyan-400" />
            <span>linkedin.com/in/JojieLadLanete</span>
          </a>
          <a href="https://github.com/lanetejlad" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-slate-800/80 border border-slate-700/80 hover:border-cyan-400 hover:text-cyan-300 transition-colors">
            <fai :icon="['fab', 'github']" class="w-3 h-3 text-cyan-400" />
            <span>github.com/lanetejlad</span>
          </a>
        </div>

        <!-- Call to Action Buttons -->
        <div class="mt-8 flex flex-wrap items-center justify-center gap-4">
          <a :href="cvPDF" target="_blank" download="JojieLadLanete.pdf"
            class="inline-flex items-center gap-3 rounded-full bg-cyan-500 hover:bg-cyan-400 px-7 py-3 text-sm font-bold text-slate-950 transition-all duration-300 shadow-[0_0_20px_rgba(6,182,212,0.5)] hover:shadow-[0_0_30px_rgba(6,182,212,0.8)] hover:-translate-y-0.5">
            <fai :icon="['fas', 'file-pdf']" class="w-4 h-4 text-slate-950" />
            Download PDF Resume
          </a>
          <a href="mailto:lanetejlad@gmail.com"
            class="inline-flex items-center gap-3 rounded-full bg-slate-800/90 border border-slate-700 hover:border-slate-500 px-7 py-3 text-sm font-semibold text-white transition-all hover:-translate-y-0.5">
            <fai :icon="['fas', 'paper-plane']" class="w-3.5 h-3.5 text-cyan-400" />
            Get In Touch
          </a>
        </div>
      </section>

      <!-- Key Metrics Highlight Strip -->
      <section class="grid grid-cols-2 md:grid-cols-4 gap-3 sm:gap-4 my-8" data-aos="fade-up" data-aos-duration="600">
        <div class="glass rounded-xl p-4 sm:p-5 text-center border-slate-800/80 hover:border-slate-700 transition-colors">
          <p class="text-2xl sm:text-3xl font-extrabold text-cyan-400">2+ Years</p>
          <p class="text-xs uppercase font-semibold tracking-wider text-slate-400 mt-1">Full-Stack Dev</p>
        </div>
        <div class="glass rounded-xl p-4 sm:p-5 text-center border-slate-800/80 hover:border-slate-700 transition-colors">
          <p class="text-2xl sm:text-3xl font-extrabold text-blue-400">1,000+</p>
          <p class="text-xs uppercase font-semibold tracking-wider text-slate-400 mt-1">HRIS Active Users</p>
        </div>
        <div class="glass rounded-xl p-4 sm:p-5 text-center border-slate-800/80 hover:border-slate-700 transition-colors">
          <p class="text-2xl sm:text-3xl font-extrabold text-emerald-400">60%</p>
          <p class="text-xs uppercase font-semibold tracking-wider text-slate-400 mt-1">Latency Reduction</p>
        </div>
        <div class="glass rounded-xl p-4 sm:p-5 text-center border-slate-800/80 hover:border-slate-700 transition-colors">
          <p class="text-2xl sm:text-3xl font-extrabold text-fuchsia-400">150+</p>
          <p class="text-xs uppercase font-semibold tracking-wider text-slate-400 mt-1">Web Apps Deployed</p>
        </div>
      </section>

      <!-- Main CV Grid Layout (Responsive on all devices) -->
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 mt-10">
        <!-- Sidebar Column: Contact, Skills, Education, References -->
        <aside class="lg:col-span-5 flex flex-col gap-8 order-2 lg:order-1">
          <ContactInfo />
          <SkillsInfo />
          <EducationInfo />
          <ReferenceInfo />
        </aside>

        <!-- Main Column: Profile Summary & Work Experience -->
        <section class="lg:col-span-7 flex flex-col gap-8 order-1 lg:order-2">
          <ProfileSummary />
          <WorkExperience />
        </section>
      </div>

      <!-- Bottom Floating / Mobile Quick Download Bar -->
      <div class="mt-16 text-center pt-8 border-t border-slate-800/60">
        <p class="text-xs uppercase tracking-widest text-slate-400 mb-3">Looking for a printable or PDF version?</p>
        <a :href="cvPDF" target="_blank" download="JojieLadLanete.pdf"
          class="inline-flex items-center gap-2.5 rounded-full bg-cyan-500/10 border border-cyan-500/40 hover:bg-cyan-500/20 px-6 py-2.5 text-xs sm:text-sm font-bold text-cyan-300 transition-all">
          <fai :icon="['fas', 'file-arrow-down']" class="w-4 h-4 text-cyan-400" />
          <span>Download Complete JojieLadLanete.pdf (76 KB)</span>
        </a>
      </div>
    </main>
  </div>
</template>

<script setup>
/*
=============================================================================
PREVIOUS SCRIPT IMPLEMENTATION (COMMENTED OUT AS REQUESTED)
=============================================================================
defineProps({ layout: { type: String, default: "CVLayout" } });
import { ref, onMounted, onUnmounted } from 'vue';
import cvPDF from '@/assets/docs/JojieLadLanete.pdf';
import ContactInfo from '@/components/resume/ContactInfo.vue';
import EducationInfo from '@/components/resume/EducationInfo.vue';
import SkillsInfo from '@/components/resume/SkillsInfo.vue';
import RerenceInfo from '@/components/resume/ReferenceInfo.vue';
import ProfileSummary from '@/components/resume/ProfileSummary.vue';
import WorkExperience from '@/components/resume/WorkExperience.vue';

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
=============================================================================
END PREVIOUS SCRIPT IMPLEMENTATION
=============================================================================
*/

// =========================================================================
// NEW SCRIPT IMPLEMENTATION (BASED ON JLAD CV.PDF DETAILS)
// =========================================================================
defineProps({ layout: { type: String, default: "CVLayout" } });

import cvPDF from '@/assets/docs/JojieLadLanete.pdf';
import ContactInfo from '@/components/resume/ContactInfo.vue';
import EducationInfo from '@/components/resume/EducationInfo.vue';
import SkillsInfo from '@/components/resume/SkillsInfo.vue';
import ReferenceInfo from '@/components/resume/ReferenceInfo.vue';
import ProfileSummary from '@/components/resume/ProfileSummary.vue';
import WorkExperience from '@/components/resume/WorkExperience.vue';
</script>

<style scoped>
</style>