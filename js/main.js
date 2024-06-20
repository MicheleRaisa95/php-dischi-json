const { createApp } = Vue;

createApp({
  data() {
    return {
      title: "PHP Dischi JSON",
      urlDischi: "http://localhost/php-dischi-json/server.php",
      dischi: [],
    };
  },
  methods: {
    getDischi() {
      axios
        .get(this.urlDischi)
        .then((response) => (this.dischi = response.data));
    },
  },
  created() {
    this.getDischi();
  },
}).mount("#app");
