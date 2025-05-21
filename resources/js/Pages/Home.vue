<script setup>

// components
import Carousel from '../Components/Carousel.vue';
import 'vue3-carousel/carousel.css';

defineProps({
  keyword: String,
  hotSearch: {
    type: Array,
    default: () => []
  },
  adList: {
    type: Array,
    default: () => []
  }
});
</script>
<template>
  <div class="flex gap-2">
    <!-- 左側 Carousel，佔 3/4 寬度 -->
    <div class="w-4/6">
      <Carousel :adList="adList" />
    </div>

    <!-- 右側上下廣告欄，佔 1/4 寬度 -->
    <div class="w-2/6 flex flex-col gap-2">
      <div class="bg-blue-400 h-1/2 flex items-center justify-center p-4 rounded shadow">
        廣告欄位 1
      </div>
      <div class="bg-blue-400 h-1/2 flex items-center justify-center p-4 rounded shadow">
        廣告欄位 2
      </div>
    </div>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
</template>

