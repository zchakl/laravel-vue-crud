<script setup>
import { onMounted, ref } from 'vue';
import Calendar from 'primevue/calendar/sfc'
import 'primevue/resources/themes/saga-blue/theme.css'    

defineProps(['modelValue']);

defineEmits(['update:modelValue']);

const input = ref(null);

onMounted(() => {
    //if (input.value.hasAttribute('autofocus')) {
    //    input.value.focus();
    //}
});
</script>

<template>
    <Calendar class="" :showTime="true" v-model="modelValue" @input="$emit('update:modelValue', $event.target.value)" ></Calendar> 
</template>
