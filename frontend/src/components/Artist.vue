<script setup>
defineProps({
  url: {
    type: String,
    required: true
  },
  artistName: {
    type: String,
    required: true
  },
  listeners: {
    type: String,
    required: true
  },
})
</script>

<template>
  <div class="flex justify-between pt-2 pb-2 pr-4 pl-4 items-center border rounded-xl shadow-lg m-2">
    <img src="https://via.placeholder.com/100" :src=url class="rounded rounded-full w-16 h-16"/>
    <h3 class="text-sm">{{ artistName }} Name</h3>
    <span class="text-xs">{{ listeners }} Listeners</span>
  </div>
</template>

<style scoped>

</style>