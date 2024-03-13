<script setup>
defineProps({
  url: {
    type: String,
    required: true
  },
  albumName: {
    type: String,
    required: true
  },
  artistName: {
    type: String,
    required: true
  },
})
</script>

<template>
  <div class="w-3/12">
    <div class="h-56">
      <img :src=url alt="Image" class="h-full object-cover rounded-xl "/>
    </div>
    <div>
      <h3 class="text-lg font-semibold">{{ albumName }}</h3>
      <p class="text-sm text-gray-500">{{ artistName }}</p>
    </div>
  </div>
</template>

<style scoped>

</style>