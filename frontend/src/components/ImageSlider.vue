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
  <div class="m-12 container">
    <div class="slider-wrapper">
      <button id="prev-slide" class="slide-button material-symbols-outlined">chevron_left</button>
      <div class="album-list flex gap-4">
        <Album
            v-for="album of albums"
            :url="album.url" :albumName="album.albumName" :artistName="album.artistName"/>
      </div>
      <button id="next-slide" class="slide-button material-symbols-outlined">chevron_right</button>
    </div>
  </div>
</template>

<style scoped>

.slide-button {
  position: absolute;
  top: 11%;
  transform: translateY(-50%);
  background-color: white;
  border: none;
  font-size: 1.5em;
  cursor: pointer;
}

#prev-slide {
  left: 61em;
}

#next-slide {
  left: 62em;
}
</style>