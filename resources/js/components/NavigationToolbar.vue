<template>
  <v-toolbar app dark color="primary">
    <v-toolbar-side-icon @click="handleDrawerToggle"></v-toolbar-side-icon>

    <v-spacer></v-spacer>

    <v-btn icon>
      <v-icon>notifications</v-icon>
    </v-btn>

    <v-btn icon @click="logout">
      <v-icon>power_settings_new</v-icon>
    </v-btn>
  </v-toolbar>
</template>
<script>
  export default {
    name: 'navigation-toolbar',
    methods: {
      handleDrawerToggle () {
        window.getApp.$emit('APP_DRAWER_TOGGLED');
      },
      logout() {
        window.getApp.$emit('APP_LOGOUT');
      }
    }
  }
</script>
