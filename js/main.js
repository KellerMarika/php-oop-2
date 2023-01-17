const { createApp } = Vue;

const app = createApp({
  data() {
    return {
      isLogged: false,
      inStockProducts: [],

    }
  },
  methods: {
    fetchStock() {
      axios.get("api/productsInStock.php").then((resp) => {
        this.inStockProducts = resp.data;
        console.log(this.inStockProducts);
        console.log(this.inStockProducts[0].name)
      });
    },
    a(){
      console.log(1);
    }
  },
  mounted() {
    this.fetchStock()

    

  },
}).mount("#app");