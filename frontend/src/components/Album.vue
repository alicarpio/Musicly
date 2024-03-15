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
  <div class="flex flex-col items-start">
    <img :src=url alt="Image" class="image-item"/>

    <h3 class="text-lg font-semibold">{{ albumName }}</h3>
    <p class="text-sm text-gray-500">{{ artistName }}</p>
  </div>
</template>

<style scoped>
.image-item {
  width: 14em;
  height: 13em;
  object-fit: cover;
  border-radius: 15px;
  margin-bottom: 5px;
}


</style>