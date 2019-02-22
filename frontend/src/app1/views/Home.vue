<template>
  <div class="home">
    <img alt="Vue logo"
         src="../assets/logo.png">
    <HelloWorld msg="Welcome to Your Vue.js App" :ecosystems="ecosystems" />
  </div>
</template>

<script>
// @ is an alias to /src
import HelloWorld from "@/app1/components/HelloWorld.vue";
import axios from "axios";

export default {
  name: "home",
  components: {
    HelloWorld
  },
  data() {
    return {
      ecosystems: [],
    }
  },
  async mounted() {
    const res = await axios.get("/api/ecosystems");
    const ecosystems = Object.keys(res.data).map(key => {
      return {
        name: key,
        link: res.data[key]
      };
    });
    this.ecosystems = ecosystems;
  }
};
</script>
