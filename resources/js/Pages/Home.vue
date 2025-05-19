
<script setup>
// layout
import Layout from '@/Layouts/Default.vue';
defineProps({
    keyword:String,
})
</script>

<template>
    <Layout>
        {{ keyword }}
    </Layout>
</template>
