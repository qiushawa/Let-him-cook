<script setup>

defineProps({
  count: {
    type: Number,
    default: 0,
  },
});

</script>

<template>
      <button
    type="button"
    class="relative text-white p-2 rounded flex items-center"
    @click="goToCart"
  >
<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
  <circle cx="9" cy="21" r="1" />
  <circle cx="20" cy="21" r="1" />
  <path stroke-linecap="round" stroke-linejoin="round" d="M1 1h4l2.68 13.39a2 2 0 002 1.61h9.72a2 2 0 002-1.61L23 6H6" />
</svg>
    <span
      v-if="count > 0"
      class="absolute top-0 right-0 -mt-1 -mr-1 bg-red-600 text-white text-xs font-bold rounded-full w-5 h-5 flex items-center justify-center"
    >
      {{ count }}
    </span>
  </button>
</template>
