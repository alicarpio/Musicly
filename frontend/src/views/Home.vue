<script setup>
import SearchBar from "../components/SearchBar.vue";
import ImageSlider from "../components/ImageSlider.vue";
import TopArtists from "../components/TopArtists.vue";

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
  {
    url: "https://via.placeholder.com/100",
    albumName: "Album 3",
    artistName: "Artist 3",
  },
];


const artists = [
  {
    url: "https://via.placeholder.com/100",
    artistName: "Artist 1",
    listeners: "999999",
  },
  {
    url: "https://via.placeholder.com/100",
    artistName: "Artist 2",
    listeners: "100000",
  },
  {
    url: "https://via.placeholder.com/100",
    artistName: "Artist 3",
    listeners: "5668456 ",
  },

]
</script>

<template>
  <SearchBar/>
  <ImageSlider :albums="albums"/>
  <div class="flex justify-around">
    <h2>Top Artists</h2>
  </div>
  <TopArtists :artists="artists"/>
</template>

<style scoped>

</style>