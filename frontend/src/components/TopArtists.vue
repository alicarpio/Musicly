<script setup>
import Artist from "./Artist.vue";

defineProps({
  artists: {
    type: Array,
    required: true
  }
})
</script>

<template>
  <div class="flex justify-end">
    <div class="flex flex-col justify-center w-96">
      <Artist
          v-for="artist of artists"
          :url=artist.url :artistName=artist.artistName :listeners=artist.listeners
      />
    </div>
  </div>

</template>

<style scoped>

</style>