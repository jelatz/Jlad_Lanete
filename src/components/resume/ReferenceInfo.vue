<template>
    <div class="glass rounded-2xl p-8 relative overflow-hidden transition-all duration-300 hover:border-slate-500 hover:shadow-[0_0_30px_rgba(16,185,129,0.15)] group">
        <div class="absolute -right-10 -top-10 w-32 h-32 bg-emerald-500/10 blur-[40px] rounded-full pointer-events-none transition-all duration-500 group-hover:bg-emerald-500/20"></div>
        <h4 class="text-xs font-bold uppercase tracking-widest text-emerald-400 mb-6 flex items-center gap-3">
            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 shadow-[0_0_8px_rgba(16,185,129,0.8)]"></span>
            References
        </h4>
        <div class="flex flex-col gap-6 text-sm relative z-10">
            <div class="group/item">
                <p class="font-bold text-slate-200 group-hover/item:text-emerald-400 transition-colors">Rodvic Geagonia</p>
                <p class="font-medium text-slate-400 mt-1">Automation Engineer, DobotAI</p>
                <a href="mailto:rodvic@dobotai.com" class="font-medium text-slate-500 hover:text-emerald-400 transition-colors mt-1 block">rodvic@dobotai.com</a>
            </div>
            <div class="group/item">
                <p class="font-bold text-slate-200 group-hover/item:text-emerald-400 transition-colors">Myka Misa</p>
                <p class="font-medium text-slate-400 mt-1">Operations Manager, American Appraisal Alliance</p>
                <a href="mailto:Mykamisa@gmail.com" class="font-medium text-slate-500 hover:text-emerald-400 transition-colors mt-1 block">Mykamisa@gmail.com</a>
            </div>
        </div>
    </div>
</template>


<script setup>

</script>

<style scoped></style>