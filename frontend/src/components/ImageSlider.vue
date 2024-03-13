<script setup>
const props = defineProps({
  url: {
    type: String
    required: true
  },
  albumName:{
    type: String
    required: true
  },
  artistName: {
    type: String
    required: true
  },
})
</script>

<template>
  <div class="flex items-center justify-center">
    <div class="w-55 h-56">
      <img src="https://via.placeholder.com/100" alt="Image" class="w-full h-full object-cover rounded-xl"/>
    </div>
  </div>
</template>

<style scoped>

</style>