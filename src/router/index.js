import { createRouter, createWebHistory } from "vue-router";
import SuperProduct from "../views/SuperProduct.vue";
import NotFoundPage from "../views/NotFoundPage.vue";
import CategoryDetail from "../views/CategoryPage.vue";
import ProductDetail from "../views/ProductDetail.vue";

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: "/",
      name: "home",
      component: SuperProduct,
    },
    {
      path: "/404",
      name: "NotFound",
      component: NotFoundPage,
    },
    {
      path: "/:catchAll(.*)",
      redirect: "404",
    },
    {
      path: "/category/:catId",
      name: "catgory",
      component: CategoryDetail,
    },
    {
      path: "/product/:proId",
      name: "product",
      component: ProductDetail,
    },
  ],
});

export default router;
