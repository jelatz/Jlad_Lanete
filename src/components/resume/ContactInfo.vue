<template>
    <div class="border-b border-slate-200 px-8 py-10">
        <h4 class="flex items-center gap-3 text-base font-bold uppercase tracking-[0.2em] text-slate-900">
            <span class="h-4 w-1 rounded-full bg-[#0d9488]"></span>
            Contact
        </h4>
        <div class="flex flex-col gap-2.5 mt-4 text-[15px] text-slate-600">
            <div class="flex items-center">
                <fai :icon="['fas', 'phone']" class="mr-3 w-4 text-[#0d9488]" />
                <a href="tel:+639760275569" class="hover:text-[#0d9488] transition-colors">+639760275569</a>
            </div>
            <div class="flex items-center">
                <fai :icon="['fas', 'envelope']" class="mr-3 w-4 text-[#0d9488]" />
                <a href="mailto:lanetejlad@gmail.com" class="hover:text-[#0d9488] transition-colors">lanetejlad@gmail.com</a>
            </div>
            <div class="flex items-center">
                <fai :icon="['fas', 'map-marker-alt']" class="mr-3 w-4 text-[#0d9488]" />
                <span>Cebu City, Philippines</span>
            </div>
            <div class="flex items-center">
                <fai :icon="['fas', 'globe']" class="mr-3 w-4 text-[#0d9488]" />
                <a href="https://jladlanete.vercel.app" class="hover:text-[#0d9488] transition-colors">jladlanete.vercel.app</a>
            </div>
        </div>
    </div>
</template>


<script setup>

</script>

<style scoped></style>