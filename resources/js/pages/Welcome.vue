<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
</script>

<template>

    <Head title="Welcome">
        <link rel="preconnect" href="https://rsms.me/" />
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    </Head>

    <div class="min-h-screen bg-[#293747] flex flex-col items-center justify-center p-6 text-gray-300">
        <div data-aos="zoom-in" data-aos-duration="800"
            class="flex items-center justify-center space-x-8 mb-10 flex-wrap">
            <div class="flex items-center justify-center space-x-8 mb-10 flex-wrap">

                <div
                    class="transition-all duration-500 hover:scale-110 hover:drop-shadow-[0_0_20px_rgba(65,184,131,0.5)]">
                    <img alt="Vue logo" src="https://vuejs.org/images/logo.png" class="h-32 md:h-40 lg:h-48">
                </div>


                <div class="animate-pulse flex items-center justify-center">
                    <span class="text-7xl md:text-8xl text-emerald-400/70">+</span>
                </div>

                <div
                    class="transition-all duration-500 hover:scale-110 hover:drop-shadow-[0_0_20px_rgba(255,45,32,0.5)]">
                    <img src="https://laravel.com/img/logomark.min.svg" alt="Laravel Icon" class="h-32 md:h-40 lg:h-48">
                </div>
            </div>
        </div>

        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-center max-w-3xl leading-tight">
            Hello World desde
            <span class="bg-clip-text text-transparent bg-gradient-to-r from-emerald-400 to-[#41B883]">Vue</span>
            +
            <span class="bg-clip-text text-transparent bg-gradient-to-r from-red-500 to-[#FF2D20]">Laravel</span>
            &
            <span class="bg-clip-text text-transparent bg-gradient-to-r from-cyan-400 to-[#38BDF8]">Tailwind</span>
        </h1>


    </div>
</template>
