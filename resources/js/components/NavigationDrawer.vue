<template>
  <v-navigation-drawer
    v-model="drawer"
    app color="primary">
    <v-toolbar flat>
      <v-list>
        <v-list-tile>
          <v-list-tile-title class="title">
            My Application
          </v-list-tile-title>
        </v-list-tile>
      </v-list>
    </v-toolbar>

    <v-divider></v-divider>

    <v-list dense class="pt-0">
      <v-list-tile
        v-for="item in menus"
        :key="item.title"
        :to="item.component"
        @click=""
      >
        <v-list-tile-action>
          <v-icon>{{ item.icon }}</v-icon>
        </v-list-tile-action>

        <v-list-tile-content>
          <v-list-tile-title>{{ item.title }}</v-list-tile-title>
        </v-list-tile-content>
      </v-list-tile>
    </v-list>
  </v-navigation-drawer>
</template>
<script>
  import menu from '../api/drawer_menu';

  export default {
    name: 'navigation-drawer',
    data () {
      return {
        mini: false,
        drawer: true,
        menus: menu,
        right: null
      }
    },
    created () {
      window.getApp.$on('APP_DRAWER_TOGGLED', () => {
        this.drawer = (!this.drawer);
      });
    },
  }
</script>
