<template>
  <div class="container">
    <div class="content">
      <div class="information">Don't miss amazing grocery deals</div>
      <div class="signUp">Sign up for the daily newsletter</div>
      <div class="subscribe">
        <div class="sub-container">
          <div class="logo"><i class="pi pi-external-link"></i></div>
          <div class="search-field">
            <input type="text" placeholder="Your email address" />
          </div>
          <div class="sub">subscribe</div>
        </div>
      </div>
    </div>
    <div class="image">
      <img src="../assets/images/ad.png" alt="ad" />
    </div>
  </div>
</template>

<script>
export default {
  setup() {
    return {};
  },
};
</script>

<style scoped>
.logo {
  width: 15%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}
.sub {
  width: 25%;
  height: 80%;
  background-color: #3bb77e;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 30px;
  color: white;
  margin-right: 5px;
}
.search-field {
  border-left: 2px solid #bce3c9;
  width: 60%;
  height: 80%;
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
  outline: none; /* Remove the default focus o/* Set the border color you want for the active state */
  /* Add other styling properties for the active state as needed */
}
.sub-container {
  width: 50%;
  display: flex;
  background-color: rgb(255, 255, 255);
  height: 50px;
  display: flex;
  justify-content: flex-start;
  align-items: center;
  border-radius: 30px;
  padding: 5px;
}
.information {
  width: 100%;
  height: 30%;
  color: white;
  display: flex;
  justify-content: flex-start;
  align-items: center;
  font-size: 64px;
  font-weight: 700;
}
.signUp {
  margin-top: 10px;
  width: 100%;
  height: 15%;
  color: white;
  display: flex;
  justify-content: flex-start;
  align-items: center;
  font-size: 28px;
  font-weight: 400;
}
.subscribe {
  margin-top: 10px;
  width: 100%;
  height: 15%;
  display: flex;
  justify-content: flex-start;
  align-items: center;
  border-radius: 30px;
}
.content {
  width: 50%;
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
.image {
  width: 40%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}
.image img {
  width: 100%;
}
.container {
  width: 100%;
  height: 500px;
  background-color: #d8a8a8;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 30px;
  margin-bottom: 20px;
}
</style>
