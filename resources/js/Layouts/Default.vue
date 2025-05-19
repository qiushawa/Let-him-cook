<script setup>
import { ref } from 'vue';
import { Link, router } from '@inertiajs/vue3';
import SearchInput from "../Components/SearchInput.vue";
import Footer from "../Components/Footer.vue";

const keyword = ref('');
const datas = [
    "機械鍵盤 ",
    "人體工學滑鼠 ",
    "電腦螢幕 ",
    "RTX-5090 ",
    "9950X3D ",
    "i9-14900KS "
];

// 表單送出處理
function onSubmit(event) {
    event.preventDefault(); // 避免表單刷新
    if (!keyword.value.trim()) return; // 空字串則不處理

    // 範例：跳轉到 /search 頁面，帶上關鍵字
    router.get('/', { keyword: keyword.value });
}
</script>

<template>
    <div>
        <header class="bg-gray-800 text-white">
            <nav class="flex items-center justify-end p-1 mx-auto">
                <a href="/" class=" hover:underline">登入 | 註冊</a>
            </nav>

            <nav class="items-center justify-between p-4 max-w-screen-lg mx-auto">
                <div class="flex space-x-6 items-center z-40">
                    <Link href="/" class="text-4xl font-bold mx-1">讓兄弟組</Link>
                    <form @submit="onSubmit" class="max-w-screen-md mx-auto flex-[11]">
                        <SearchInput v-model="keyword" placeholder="輸入關鍵字" />
                    </form>
                </div>
            </nav>
            <nav class="items-center justify-content p-4 max-w-screen-lg mx-auto" style="text-align: center;">
                <span v-for="n in datas">| <a href="/">{{ n }}</a> </span>
            </nav>
        </header>

        <main class="p-4 max-w-screen-lg mx-auto">
            <slot/>
        </main>
        <Footer />
    </div>
</template>
