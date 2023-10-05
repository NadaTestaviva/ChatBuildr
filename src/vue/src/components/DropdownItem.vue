<script setup>
import { ref, computed } from 'vue';
const open = ref(false);
function invertState() {
    open.value = !open.value;
}
</script>
<template>
    <div class="lg:w-80 text-[1.15rem] lg:ml-0 mx-6 py-1" style="width: auto;">
        <h1 @click="invertState" :class="{ 'font-bold': open }"
            class="cursor-pointer text-very-dark-grayish-blue hover:text-red my-3.5 flex items-center justify-between">
            <slot name="header"></slot>
            <img class="span-ml" src="../img/span-ml-6.svg">
        </h1>
        <p v-if="open" class="lg:mr-0 lg:text-left text-dark-grayish-blue my-3.5">
            <slot></slot>
        </p>
        <hr class="border-light-grayish-blue my-3.5" />
    </div>
</template>