<template>
  <v-app id="inspire">
    <v-navigation-drawer v-model="drawer"
                         fixed
                         app>
      <v-list dense>
        <v-list-tile @click="onClick">
          <v-list-tile-action>
            <v-icon>home</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>
            <v-list-tile-title>App1</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>
      </v-list>
    </v-navigation-drawer>
    <v-toolbar color="indigo"
               dark
               fixed
               app>
      <v-toolbar-side-icon @click.stop="drawer = !drawer"></v-toolbar-side-icon>
      <v-toolbar-title>Application</v-toolbar-title>
    </v-toolbar>
    <v-content>
      <v-container fluid
                   fill-height>
        <v-layout justify-center
                  align-center>
          <v-flex text-xs-center>
            <v-tooltip left>
              <v-btn slot="activator"
                     :href="source"
                     icon
                     large
                     target="_blank">
                <v-icon large>code</v-icon>
              </v-btn>
              <span>Source</span>
            </v-tooltip>
          </v-flex>
        </v-layout>
      </v-container>
    </v-content>
    <v-footer color="indigo"
              app>
    </v-footer>
  </v-app>
</template>

<script>
export default {
  data: () => ({
    drawer: null
  }),
  props: {
    source: String
  },
  methods: {
    onClick() {
      window.location.href = '/app1';
    }
  }

};
</script>