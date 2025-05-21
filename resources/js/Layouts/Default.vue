<script setup>
import { ref } from 'vue';
import { Link, router } from '@inertiajs/vue3';
import SearchInput from "../Components/SearchInput.vue";
import CartButton from '../Components/CartButton.vue';
import Footer from "../Components/Footer.vue";

defineProps({
    title: {
        type: String,
        default: '讓兄弟組'
    },
    description: {
        type: String,
        default: '🗣️讓你輕鬆自在組裝電腦🔥'
    },
    hotSearch: {
        type: Array,
        default: () => []
    }

});

const keyword = ref('');
function onSubmit(event) {
    event.preventDefault();
    if (!keyword.value.trim()) return;
    router.get('/', { keyword: keyword.value });
}
</script>

<template>
    <div>
        <header class="bg-gray-800 text-white">
            <nav class="flex items-center justify-end p-1 mx-auto  py-1" aria-label="登入註冊導覽">
                <a href="/" class=" hover:underline">登入 | 註冊</a>
            </nav>

            <nav class="items-center justify-between p-4  max-w-screen-xl mx-auto  py-0" aria-label="主導覽">
                <div class="flex space-x-6 items-center z-40">
                    <div class="flex flex-col">
                        <Link href="/" class="text-5xl font-bold mx-auto" style="font-family: '標楷體', serif;">{{ title }}</Link>
                        <p class="text-m text-gray-300 mx-auto" style="font-family: '標楷體', serif;">{{ description }}</p>
                    </div>

                    <form @submit="onSubmit" class="max-w-screen-md flex-[11]">
                        <SearchInput v-model="keyword" placeholder="輸入關鍵字" />

                    </form>
                    <div class="flex flex-row gap-1 mx-4">
                        <CartButton :count="99"/>
                    </div>
                </div>
            </nav>
            <nav class="items-center justify-content p-4 mx-auto  py-2" style="text-align: center;"
                aria-label="熱門搜尋">
                <span v-for="(n, idx) in hotSearch" :key="idx" class="text-sm text-gray-300 ml-2">
                    <a :href="'/?keyword=' + encodeURIComponent(n)">{{ n }}</a>
                </span>
            </nav>
        </header>

        <main class="p-4 max-w-screen-xl mx-auto">
            <slot />
        </main>
        <Footer />
    </div>
</template>


