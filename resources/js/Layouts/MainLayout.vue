<template>
  <div>
    <header><!-- Tu navegación --></header>
    <slot />
    <footer><!-- Pie de página --></footer>
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
</script>
