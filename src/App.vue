<template>
  <div class="Container_Box">
    <MainLayout>
      <router-view></router-view>
    </MainLayout>
  </div>
</template>

<script>
import SuperProduct from "./views/SuperProduct.vue";
import MainLayout from "./layouts/MainLayout.vue";
export default {
  name: "App",
  components: {
    SuperProduct,
    MainLayout,
  },
};
</script>

<style>
@import "https://unicons.iconscout.com/release/v4.0.0/css/line.css";
@import "primeicons/primeicons.css";
@import url("https://fonts.googleapis.com/css2?family=Kantumruy+Pro:ital,wght@1,300;1,400;1,500;1,600;1,700&family=Poppins:wght@300;400;500;600;800&family=Quicksand:wght@400;600;700&display=swap");
.Container_Box {
  margin: auto;
  width: 98vw;
  font-family: "Quicksand", sans-serif;
}
</style>
