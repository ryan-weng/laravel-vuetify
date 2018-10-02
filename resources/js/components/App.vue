<template>
  <div id="appRoot">
    <template v-if="!$route.meta.public">
      <v-app>
        <navigation-drawer></navigation-drawer>
        <navigation-toolbar></navigation-toolbar>
        <v-content>
          <v-container fluid>
            <router-view></router-view>
          </v-container>
        </v-content>
        <navigation-go-to-top></navigation-go-to-top>
      </v-app>
    </template>
    <template v-else>
      <transition>
        <keep-alive>
          <router-view></router-view>
        </keep-alive>
      </transition>
    </template>
    <v-snackbar
        :timeout="3000"
        bottom
        right
        :color="snackbar.color"
        v-model="snackbar.show"
      >
      {{ snackbar.text }}
      <v-btn dark flat @click.native="snackbar.show = false" icon>
        <v-icon>close</v-icon>
      </v-btn>
    </v-snackbar>
  </div>
</template>
<script>
  import NavigationDrawer from './NavigationDrawer';
  import NavigationToolbar from './NavigationToolbar';
  import NavigationGoToTop from './NavigationGoToTop';

  export default{
    data() {
      return {
          snackbar: {
            show: false,
            text: '',
            color: '',
        }
      }
    },
    components: {
      NavigationDrawer,
      NavigationToolbar,
      NavigationGoToTop
    },
    created() {
      window.getApp = this;
      this.$on('APP_LOGOUT', () => {
        this.snackbar = {
          show: true,
          color: 'green',
          text: 'Logout successfully.'
        };
        this.$router.replace({ path: '/' });
      });
    }
  }
</script>
<style>
  #appRoot {
    font-family: Roboto,sans-serif;
    line-height: 1.5;
  }
</style>
