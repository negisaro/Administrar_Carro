<script setup>
defineProps({
    message: String,
});
</script>

<template>
    <div v-show="message">
        <small class="text-sm text-red-600">
            {{ message }}
        </small>
    </div>
</template>
