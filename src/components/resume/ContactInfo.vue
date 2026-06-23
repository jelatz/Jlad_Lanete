<template>
    <div class="glass rounded-2xl p-8 relative overflow-hidden transition-all duration-300 hover:border-slate-500 hover:shadow-[0_0_30px_rgba(6,182,212,0.15)] group">
        <div class="absolute -right-10 -top-10 w-32 h-32 bg-cyan-500/10 blur-[40px] rounded-full pointer-events-none transition-all duration-500 group-hover:bg-cyan-500/20"></div>
        <h4 class="text-xs font-bold uppercase tracking-widest text-cyan-400 mb-6 flex items-center gap-3">
            <span class="w-1.5 h-1.5 rounded-full bg-cyan-400 shadow-[0_0_8px_rgba(6,182,212,0.8)]"></span>
            Contact
        </h4>
        <div class="flex flex-col gap-4 text-sm font-medium text-slate-300 relative z-10">
            <div class="flex items-center gap-4 group/item">
                <div class="w-8 h-8 rounded-full bg-slate-800/50 flex items-center justify-center border border-slate-700 transition-colors group-hover/item:border-cyan-500 group-hover/item:bg-cyan-500/10">
                    <fai :icon="['fas', 'phone']" class="w-3 text-cyan-400" />
                </div>
                <a href="tel:+639760275569" class="hover:text-cyan-300 transition-colors">+639760275569</a>
            </div>
            <div class="flex items-center gap-4 group/item">
                <div class="w-8 h-8 rounded-full bg-slate-800/50 flex items-center justify-center border border-slate-700 transition-colors group-hover/item:border-cyan-500 group-hover/item:bg-cyan-500/10">
                    <fai :icon="['fas', 'envelope']" class="w-3 text-cyan-400" />
                </div>
                <a href="mailto:lanetejlad@gmail.com" class="hover:text-cyan-300 transition-colors">lanetejlad@gmail.com</a>
            </div>
            <div class="flex items-center gap-4 group/item">
                <div class="w-8 h-8 rounded-full bg-slate-800/50 flex items-center justify-center border border-slate-700 transition-colors group-hover/item:border-cyan-500 group-hover/item:bg-cyan-500/10">
                    <fai :icon="['fas', 'map-marker-alt']" class="w-3 text-cyan-400" />
                </div>
                <span>Cebu City, Philippines</span>
            </div>
            <div class="flex items-center gap-4 group/item">
                <div class="w-8 h-8 rounded-full bg-slate-800/50 flex items-center justify-center border border-slate-700 transition-colors group-hover/item:border-cyan-500 group-hover/item:bg-cyan-500/10">
                    <fai :icon="['fas', 'globe']" class="w-3 text-cyan-400" />
                </div>
                <a href="https://jladlanete.vercel.app" class="hover:text-cyan-300 transition-colors">jladlanete.vercel.app</a>
            </div>
        </div>
    </div>
</template>


<script setup>

</script>

<style scoped></style>