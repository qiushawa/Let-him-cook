<script setup>

// components
import Carousel from '../Components/Carousel.vue';
import 'vue3-carousel/carousel.css';

defineProps({
  keyword: String,
  hotSearch: {
    type: Array,
    default: () => []
  }
});

const logo = [
    {url:"/about", color:"https://pbs.twimg.com/media/GrRpf2Fb0AAYePn?format=jpg"},
    {url:"/about", img:"https://pbs.twimg.com/media/GrTcBctbAAAAuLN?format=jpg"},
    {url:"/about", img:"https://pbs.twimg.com/media/GrTOOoFaUAAOol-?format=jpg"},
    {url:"/about", img:"https://pbs.twimg.com/media/GrTA0r8bUAAzadp?format=jpg"},
];
</script>

<template>
    <Carousel :adList="logo" />
</template>
