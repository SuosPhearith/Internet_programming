<template>
  <div class="Box">
    <ProductPage />
    <CardsPageVue />
  </div>
</template>

<script>
import CardsPageVue from "./views/CardsPage.vue";
import ProductPage from "./views/ProductPage.vue";
import Buttons from "./components/Buttons.vue";
export default {
  name: "App",
  components: {
    ProductPage,
    CardsPageVue,
    Buttons,
  },
};
</script>

<style scoped>
.Box {
  margin: auto;
  width: 1500px;
  /* border: 1px solid blue; */
}
</style>
