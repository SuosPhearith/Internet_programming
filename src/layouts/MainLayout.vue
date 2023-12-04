<template>
  <div>
    <header class="container">
      <nav class="wrapper">
        <div class="logo-search">
          <div class="logo">
            <img src="../assets/images/logo.png" alt="logo" />
          </div>
          <div class="search">
            <div class="search-container">
              <div class="search-category">
                <div class="dropdown">
                  <div class="dropdown-toggle" @click="toggleDropdown">
                    {{ selectedOption }}<i class="pi pi-angle-down"></i>
                  </div>
                  <div class="dropdown-menu" :class="{ show: isDropdownOpen }">
                    <div
                      class="dropdown-item"
                      v-for="option in options"
                      :key="1"
                      @click="selectOption(option)"
                    >
                      {{ option }}
                    </div>
                  </div>
                </div>
              </div>
              <div class="search-field">
                <input type="text" placeholder="Search for items" />
              </div>
              <div class="search-icon">
                <i class="pi pi-search"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="list">
          <ul>
            <li><i class="pi pi-user"></i> <span>Account</span></li>
            <li><i class="pi pi-sync"></i> <span>Compare</span></li>
            <li><i class="pi pi-heart"></i> <span>wishlist</span></li>
            <li><i class="pi pi-cart-plus"></i> <span>Cart</span></li>
          </ul>
        </div>
      </nav>
    </header>
    <nav class="list-category">
      <div class="list-category-items">
        <button class="list-btn">
          <i class="pi pi-book"></i><span>Browse All Categories</span
          ><i class="pi pi-angle-down"></i>
        </button>
        <div class="list-items">
          <ul>
            <li><i class="pi pi-prime"></i>Hot Deals</li>
            <li>Home</li>
            <li><span>Food</span><i class="pi pi-angle-down"></i></li>
            <li><span>Vegetables</span><i class="pi pi-angle-down"></i></li>
            <li><span>Drink</span></li>
            <li><span>Cookies</span></li>
            <li><span>Meal & Seafook</span><i class="pi pi-angle-down"></i></li>
            <li><span>Bakery</span></li>
          </ul>
        </div>
      </div>
      <div class="phone">
        <div class="phone-icon"><i class="pi pi-phone"></i></div>
        <div class="phone-info">
          <div class="phoneNuber">069 265 958</div>
          <div class="phoneDetail">24/7 Support Center</div>
        </div>
      </div>
    </nav>
    <slot></slot>
  </div>
</template>

<script>
import { ref, computed } from "vue";
import { useProductStore } from "../stores/ProductStores";
export default {
  setup() {
    // get category from store
    const store = useProductStore();
    const options = computed(() => {
      return store.Categories.map((category) => category.ItemName);
    });
    const isDropdownOpen = ref(false);
    const selectedOption = ref("All Categories");
    const toggleDropdown = () => {
      isDropdownOpen.value = !isDropdownOpen.value;
    };
    const selectOption = (option) => {
      selectedOption.value = option;
      isDropdownOpen.value = false;
    };
    return {
      isDropdownOpen,
      selectedOption,
      options,
      toggleDropdown,
      selectOption,
    };
  },
};
</script>

<style scoped>
.pi-phone {
  font-size: 27px;
}
.phone-icon {
  width: 20%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}
.phone-info {
  width: 70%;
  height: 100%;
  display: flex;
  flex-direction: column;
}
.phoneNuber {
  width: 100%;
  height: 60%;
  font-size: 24px;
  font-weight: 700;
  color: #3bb77e;
  display: flex;
  justify-content: center;
  align-items: center;
}
.phoneDetail {
  width: 100%;
  height: 400%;
  font-size: 12px;
  font-weight: 400;
  display: flex;
  justify-content: center;
  align-items: center;
}
.phone {
  width: 15%;
  height: 90%;
  display: flex;
  justify-content: flex-end;
  align-items: center;
}
.list-items {
  width: 75%;
  height: 90%;
  display: flex;
  justify-content: center;
  align-items: center;
}
.list-items ul {
  width: 100%;
  list-style-type: none;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.list-items ul li {
  cursor: pointer;
  display: flex;
  justify-content: center;
  align-items: center;
}
.list-items ul li i {
  margin: 3px;
}
.list-btn {
  width: 20%;
  height: 40px;
  display: flex;
  justify-content: space-around;
  background-color: #3bb77e;
  border-radius: 5px;
  align-items: center;
  border-style: none;
}
.list-category-items {
  width: 75%;
  height: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.list-category {
  border-bottom: 1px solid black;
  border-top: 1px solid black;
  margin-top: 10px;
  margin-bottom: 10px;
  width: 100%;
  height: 70px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.list ul {
  width: 100%;
  list-style-type: none;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.list ul li {
  cursor: pointer;
  display: flex;
  justify-content: center;
  align-items: center;
}
.list ul li i {
  margin-right: 5px;
}
.search-icon {
  width: 5%;
  display: flex;
  justify-content: center;
  align-items: center;
}
.search-category {
  width: 30%;
}
.search-field {
  border-left: 2px solid #bce3c9;
  width: 65%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}
.search-field input[type="text"],
select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  font-size: 16px;
  border-radius: 4px;
  box-sizing: border-box;
  border-style: none;
  height: 90%;
}
.search-field input:focus {
  outline: none;
}
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-toggle {
  cursor: pointer;
  padding: 10px;
  border-radius: 4px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 100%;
}

.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  display: none;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  border: 1px solid #ccc;
  border-radius: 4px;
  z-index: 1;
}

.dropdown-menu.show {
  display: block;
}

.dropdown-item {
  padding: 10px;
  cursor: pointer;
  background-color: rgb(255, 255, 255);
}

.dropdown-item:hover {
  background-color: #f2f2f2;
}
.container {
  margin-top: 10px;
  width: 100%;
  height: 80px;
  display: flex;
  justify-content: center;
  align-items: center;
}
.wrapper {
  width: 95%;
  height: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.logo-search {
  width: 60%;
  height: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.list {
  width: 30%;
  height: 100%;
  display: flex;
  justify-content: flex-end;
  align-items: center;
}
.logo {
  width: 30%;
  height: 100%;
  display: flex;
  justify-content: flex-start;
  align-items: center;
}
.logo img {
  height: 80%;
}
.search {
  width: 70%;
  height: 100%;
  display: flex;
  justify-content: flex-start;
  align-items: center;
}
.search-container {
  width: 100%;
  height: 40px;
  border: 2px solid #bce3c9;
  border-radius: 5px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}
</style>
