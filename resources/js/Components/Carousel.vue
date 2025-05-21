<script setup>
import 'vue3-carousel/carousel.css'
import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel';
const carouselConfig = {
    itemsToShow: 1,
    wrapAround: true
}
defineProps({
    adList: {
        type: Array,
        default: () => []
    }
});

function handleClick(ad) {
    if (ad.url) {
        window.open(ad.url, '_blank');
    } else {
        console.log('No URL provided for this ad.');
    }
}
</script>

<template>
    <Carousel v-bind="carouselConfig" :autoplay="3000">
        <Slide v-for="(ad, index) in adList" :key="index">
           <button
                type="button"
                class="carousel__item"
                :style="{ backgroundColor: ad.color }"
                @click="handleClick(ad)"
                @keydown.enter="handleClick(ad)"
                @keydown.space.prevent="handleClick(ad)"
            ></button>
        </Slide>

        <template #addons>
            <Pagination />
            <Navigation />

        </template>
    </Carousel>
</template>
<style scoped>
.carousel__item {
    position: relative;
    width: 100%;
    padding-top: calc(200 / 500 * 100%);
    overflow: hidden;
}

.carousel__item img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}
</style>
