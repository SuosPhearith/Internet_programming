<template>
  <div class="Cards-Row">
    <Cards
      v-for="i in Cards"
      :key="i.Cards"
      :bg="i.bg"
      :Img="i.Img"
      :Text="i.Text"
      :bgBtn="i.btncolor"
      :TextBtn="i.TextBtn" />
  </div>
</template>

<script>
import Cards from "../components/Cards.vue";
import Buttons from "../components/Buttons.vue";
import Img from "../assets/images/Group 1.png";
export default {
  name: "CardsProduct",
  components: {
    Cards,
    Buttons,
  },
  data() {
    return {
      Cards: [
        {
          Text: "Everyday Fresh & Clean with Our Products",
          Img: "https://s3-alpha-sig.figma.com/img/de8c/488a/87b9ce16acd7436a6dec758331c840bc?Expires=1699833600&Signature=BopNMeaoYpayx-Epz2eU-MbKTcy37aptwt-6wMUbZ6Mt8k5wuNRsq-yfIYHMpIyAI0hFl6N~P2GQekhYEpysnvQ2tJebN~Omsv8lCoICbXONhWAd9iyfMQqvEjZ-74Eyi9DWiX8JQuclXSCY9zlrzedu2fwO8fJzbWF-zfAk49J9o3oRB3XUz9XXvAhPHQ5x7Eo5uzB9jluL1JzkmMzuYq8LRqBHJxwH3NBB3aoC5JmwL-~A1SfB6DRCUfElZSswO~7bGHfx5Q3zpV5d-t6xlkkc~EXCLGD0vRpoQSHe-8J9WS16pos4WUU-bYexswtrUJZMPcSwvtRGxu4DCUlKaA__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
          bg: "rgba(240, 232, 213, 1)",
          btncolor: "rgba(59, 183, 126, 1)",
          TextBtn: "Shop Now",
        },
        {
          Text: "Make your Breakfast Healthy annd Easy",
          Img: Img,
          bg: "rgba(243, 232, 232, 1)",
          btncolor: "rgba(205, 50, 17, 1)",
          TextBtn: "Shop Now",
        },
        {
          Text: "The best Organic Products Online",
          Img: "https://s3-alpha-sig.figma.com/img/4d69/6151/8879bc373bf5fcc1578bcec5172b087b?Expires=1699833600&Signature=Fcyz23Cuci2YfyswiwIYuvnXpqTqeT2BzsUhksKvplJbkgsGcaO0-X1M8nHVl6CDFfd2zHhxeXzTZjzCf45kWe6VcYwcgk3TodKvldeQ~xEuTUcQTvu03EaEqdVQ2c-eTZDcm8Y1uQElWeqsN7zLJng0njznWVkFu0AYde-dYfvJulOW7~CmtPCIZbiSXTzxwsS3t712VhAYvjRwMca1cViLQirep7rcRPdGz-WGUn8NVhD9HUzmf9PtXQoqL8-Oq3hiyxUfQ0meqDc594uZ2MGgnSZ6mfbvaHPxp845r4h7q87NCVXpYa8mku3sAD-2b4B1ME6uFa6nyJgggtEUbA__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4",
          bg: "rgba(231, 234, 243, 1)",
          btncolor: "rgba(253, 192, 64, 1)",
          TextBtn: "Shop Now",
        },
      ],
    };
  },
};
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Kantumruy+Pro:ital,wght@1,300;1,400;1,500;1,600;1,700&family=Poppins:wght@300;400;500;600;800&family=Quicksand:wght@400;600;700&display=swap");

.Cards-Row {
  width: 100%;
  display: flex;
  justify-content: start;
  align-items: center;
  gap: 15px;
}
</style>
