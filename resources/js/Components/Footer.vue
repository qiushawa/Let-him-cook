<script setup>
const props = defineProps({
    siteName: {
        type: String,
        default: '讓兄弟組',
    },
    links: {
        type: Array,
        default: () => [
            { label: '關於我們', href: '#' },
            { label: '隱私政策', href: '#' },
            { label: '授權條款', href: '#' },
            { label: '聯絡我們', href: '#' },
        ],
    },
    year: {
        type: [String, Number],
        default: new Date().getFullYear(),
    },
    logoUrl: {
        type: String,
        default: '',
    },
})
</script>
<template>
    <footer class="bg-white shadow-sm dark:bg-gray-900">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">{{ siteName
                        }}</span>
                </a>
                <ul
                    class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                    <li v-for="link in links" :key="link.href">
                        <a :href="link.href" class="hover:underline me-4 md:me-6">{{ link.label }}</a>
                    </li>
                </ul>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">
                © {{ year }} <a href="/" class="hover:underline">{{ siteName }}</a>. 保留所有權利。
            </span>
        </div>
    </footer>
</template>