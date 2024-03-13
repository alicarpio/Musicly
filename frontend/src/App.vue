<script setup>
import SearchBar from "./components/SearchBar.vue";
import ImageSlider from "./components/ImageSlider.vue";

const albums = [
  {
    url: "https://via.placeholder.com/100",
    albumName: "Album 1",
    artistName: "Artist 1",
  },
  {
    url: "https://via.placeholder.com/100",
    albumName: "Album 2",
    artistName: "Artist 2",
  },
  {
    url: "https://via.placeholder.com/100",
    albumName: "Album 3",
    artistName: "Artist 3",
  },
];
</script>

<template>
  <SearchBar></SearchBar>
  <ImageSlider :albums="albums"></ImageSlider>
</template>


<style scoped>

</style>
