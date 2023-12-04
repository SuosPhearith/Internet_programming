<template>
  <div class="container">
    <div class="content">
      <div class="categoryName">{{ categoryName }}</div>
      <div class="router">
        <RouterLink to="/">Home</RouterLink> >
        <RouterLink to="/">Categories</RouterLink> > {{ categoryName }}
      </div>
    </div>
  </div>
</template>

<script>
import { ref, computed } from "vue";
import { useRoute } from "vue-router";
export default {
  setup() {
    const route = useRoute();

    const categoryName = computed(() => {
      return route.params.catId;
    });

    return { categoryName };
  },
};
</script>

<style scoped>
.container {
  width: 100%;
  height: 230px;
  background-color: #d8a8a8;
  display: flex;
  justify-content: flex-start;
  align-items: center;
  border-radius: 30px;
  margin-bottom: 20px;
}
.content {
  width: 40%;
  height: 70%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: flex-start;
  margin-left: 70px;
}
.categoryName {
  font-size: 40px;
  font-weight: 700;
}
.router {
  margin-top: 20px;
  font-size: 16px;
  font-weight: 400;
}
.router a {
  text-decoration: none;
  color: black;
}
</style>
