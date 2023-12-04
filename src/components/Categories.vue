<template>
  <RouterLink :to="`/category/${ItemName}`" class="container">
    <div class="Item-Box" :style="{ backgroundColor: bg }">
      <img class="Img" :src="Img" alt="Product" />
      <div class="itemname">{{ ItemName }}</div>
      <div class="itemnumber">{{ ItemNumber }}</div>
    </div>
  </RouterLink>
</template>

<script>
export default {
  props: ["Img", "ItemName", "bg", "ItemNumber"],
};
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Kantumruy+Pro:ital,wght@1,300;1,400;1,500;1,600;1,700&family=Poppins:wght@300;400;500;600;800&family=Quicksand:wght@400;600;700&display=swap");

.container {
  text-decoration: none;
  min-width: 148px;
  margin-right: 30px;
  display: flex;
  justify-content: center;
  align-items: center;
}
.Item-Box {
  width: 100%;
  height: 177px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  border: 2px solid rgba(129, 177, 61, 1);
  box-shadow: 11px 6px 17px 0px rgba(0, 0, 0, 0.1);
  border-radius: 10px;
}
.Img {
  position: relative;
  bottom: 16px;
  width: 100px;
}
.itemname {
  font-family: "Quicksand", sans-serif;
  position: relative;
  bottom: 15px;
  font-size: 19px;
  color: rgba(37, 61, 78, 1);
  font-weight: 600;
  text-decoration: none;
}
.itemnumber {
  font-family: "Quicksand", sans-serif;
  position: relative;
  bottom: 6px;
  font-size: 14px;
  color: rgba(182, 182, 182, 1);
  text-decoration: none;
}
</style>
