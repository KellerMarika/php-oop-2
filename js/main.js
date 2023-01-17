const { createApp } = Vue;

const app = createApp({
  data() {
    return {
      isLogged: false,
      productListInStock: [],

    }
  },
  methods: {
    fetchStock() {
      axios.get("api/posts.php").then((resp) => {
        this.productListInStock = resp.data;
      });
    },
  },
  mounted() {
    this.fetchStock()

    

  },
}).mount("#app");