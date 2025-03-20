<template>
    <div class="border-b-2 px-5 py-10">
        <h4
            class="text-left text-2xl z-50 tracking-[5px] relative font-bold before:content-[''] before:w-8 before:h-8 before:rounded-full before:bg-slate-300 before:absolute before:top-1/2 before:-translate-y-1/2 before:-left-3 before:z-0">
            <span class="relative z-10">C</span>ONTACT
        </h4>
        <div class="flex flex-col mt-3">
            <div>
                <fai :icon="['fas', 'phone']" class="mr-2 text-md" />
                <a href="tel:+639760275569"><small class="text-lg">+639760275569</small></a>
            </div>
            <div>
                <fai :icon="['fas', 'envelope']" class="mr-2 text-md" />
                <a href="mailto:lanetejlad@gmail.com"><small class="text-lg">lanetejlad@gmail.com</small></a>
            </div>
            <div>
                <fai :icon="['fas', 'map-marker-alt']" class="mr-2 text-md" />
                <small class="text-lg">Talamban, Cebu City Philippines</small>
            </div>
            <div>
                <fai :icon="['fas', 'globe']" class="mr-2 text-md" />
                <a href="https://jladlanete.vercel.app">
                    <small class="text-lg">jladlanete.vercel.app</small>
                </a>
            </div>
        </div>
    </div>
</template>


<script setup>

</script>

<style scoped></style>