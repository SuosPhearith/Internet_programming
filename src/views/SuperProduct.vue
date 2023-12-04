<template>
  <!-- <ButtonAdd></ButtonAdd> -->
  <!-- <ButtonPlus></ButtonPlus> -->
  <!-- <Menu/> -->
  <Advertisement></Advertisement>
  <Menu :Featured="Feature"></Menu>
  <div class="Categories-Row">
    <Categories
      v-for="i in Categories"
      :key="i.Categories"
      :bg="i.bg"
      :ItemName="i.ItemName"
      :Img="i.Img"
      :ItemNumber="i.ItemNumber"
    >
    </Categories>
  </div>
  <div class="Promotions-Row">
    <Promotions
      v-for="i in Promotions"
      :key="i.Promotions"
      :bg="i.bg"
      :Img="i.Img"
      :Text="i.Text"
      :bgBtn="i.btncolor"
      :TextBtn="i.TextBtn"
    />
  </div>
  <Menu :Featured="Popular"></Menu>
  <div class="Product-Row">
    <Product
      v-for="i in Product"
      :key="i.Product"
      :id="i.id"
      :Value="i.Value"
      :Bg_value="i.Bg_value"
      :Img="i.Img"
      :Title="i.Title"
      :Star="i.Star"
      :Supvalue="i.Supvalue"
      :Subvalue="i.Subvalue"
      :Bgbtn="i.Bgbtn"
      :Borderbtn="i.Borderbtn"
    />
    <!-- :Text="i.Text" -->
    <!-- :Arrow="i.Arrow"  -->
  </div>
</template>

<script>
import { useProductStore } from "../stores/ProductStores";
import { mapState } from "pinia";
import Menu from "../components/Menu.vue";
import Categories from "../components/Categories.vue";
import Promotions from "../components/Promotions.vue";
import Button from "../components/Button.vue";
import Product from "../components/Product.vue";
import ButtonAdd from "../components/ButtonAdd.vue";
import ButtonPlus from "../components/ButtonPlus.vue";
import Advertisement from "../components/Advertisement.vue";
// import Img from "../assets/images/Group 1.png";
export default {
  name: "SuperProject",
  components: {
    Categories,
    Promotions,
    Button,
    Menu,
    Product,
    ButtonAdd,
    ButtonPlus,
    Advertisement,
  },
  data() {
    return {
      Feature: "Featured Categories",
      Popular: "Popular Products",
    };
  },
  computed: {
    ...mapState(useProductStore, ["Categories"]),
    ...mapState(useProductStore, ["Promotions"]),
    ...mapState(useProductStore, ["Product"]),
  },
};
</script>

<style scoped>
.Categories-Row {
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  margin-top: 30px;
  overflow-x: hidden;
  overflow-x: auto;
}

.Categories-Row::-webkit-scrollbar {
  display: none;
}

.Promotions-Row {
  width: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
  /* gap: 30px; */
  margin-top: 10px;
  margin-bottom: 30px;
}
.Product-Row {
  width: 100%;
  display: grid;
  grid-template-columns: auto auto auto auto auto;
  gap: 10px;
  margin-top: 20px;
  margin-bottom: 20px;
}
</style>
