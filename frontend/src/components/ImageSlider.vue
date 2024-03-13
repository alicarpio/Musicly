<script setup>
import Album from "./Album.vue";

defineProps({
  albums: {
    type: Array,
    required: true
  }
})

</script>

<template>
  <div class="flex flex-row justify-around mt-10">
    <Album
        v-for="album of albums"
        :url=album.url :albumName="album.albumName" :artistName="album.artistName"/>
  </div>
</template>

<style scoped>

</style>