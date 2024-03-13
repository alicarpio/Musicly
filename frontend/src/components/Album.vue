<script setup>
const props = defineProps({
  url: {
    type: String,
    required: true
  },
  albumName:{
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
  <div class="flex flex-col justify-start">
    <div class="w-55 h-56">
      <img src="https://via.placeholder.com/100" :src=url alt="Image" class="h-full object-cover rounded-xl"/>
    </div>
    <div class="ml-4">
      <h3 class="text-lg font-semibold">{{ albumName }} album</h3>
      <p class="text-sm text-gray-500">{{ artistName }} artist </p>
  </div>
</div>
</template>

<style scoped>

</style>