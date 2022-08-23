<script setup>
defineProps({
    data: {
        type: Object,
        default() {
            return {};
        },
    },
});
</script>

<template>
    <ol class="breadcrumb m-0">
        <li
            v-for="([k, v], i) of Object.entries(data)"
            :key="k"
            class="breadcrumb-item"
            :class="{ active: i == Object.entries(data).length - 1 }"
        >
            <a v-if="i != Object.entries(data).length - 1" :href="v">{{ k }}</a>
            <span v-else>{{ k }}</span>
        </li>
    </ol>
</template>
