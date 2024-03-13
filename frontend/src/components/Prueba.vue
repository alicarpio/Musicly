<script>
export default {
  name: "Prueba",
  data() {
    return {
      attributeName: {
        href
      }
    }
  }
}
</script>

<template>
  <a v-bind:[attributeName]=" ">Link</a>
</template>

<style scoped>

</style>