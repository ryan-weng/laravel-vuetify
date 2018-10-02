<template>
  <v-footer app class="pa-3" color="primary">
    <v-spacer></v-spacer>
    <div>&copy; {{ new Date().getFullYear() }}</div>
  </v-footer>
</template>
<script>
  export default {
    name: 'navigation-footer',
  }
</script>
