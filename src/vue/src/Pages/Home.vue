<template>
    <div class="home">
      <div class="overlap-wrapper">
        <div class="overlap">
          <div class="frame">
            <Nav></Nav>
            <div class="container">
              <Slider></Slider>
              <Second></Second>
              <Tools></Tools>
              <Third></Third>
              <Banner></Banner>
              <Faq></Faq>
            </div>
          </div>
          <Footer></Footer>

        </div>
      </div>
    </div>

</template>


<script>
import Second from "../components/seconfFragment.vue";
import First from "../components/firstSection.vue";
import Nav from "../components/nav.vue";
import Footer from "../components/footer.vue";
import Faq from "../components/faq.vue";
import Third from "../components/thirdFragment.vue";
import Banner from "../components/banner.vue";
import Slider from "../components/slider.vue";
import Tools from "../components/ToolsSection.vue";


export default {
  name: "App",
  components: {
    Second,
    First,
    Nav,
    Footer,
    Faq,
    Third,
    Banner,
    Slider,
    Tools
  },
};
</script>

<style>
@import url("../style.css");
@import url("../globals.css");

.container {
    width: 100%;
    max-width: 100% !important;}

</style>