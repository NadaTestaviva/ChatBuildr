<template>
    <div class="my-chatbots-logged">
      <div class="overlap-group-wrapper">
        <div class="overlap-group">
            <chatbots-form></chatbots-form>
            <Nav></Nav>
            <Footer></Footer>

          </div>
      </div>
    </div>        
        
</template>


<script>
import PricingPckg from "../components/PricingsPackages.vue";
import FAQ from "../components/PricingFAQ.vue";
import Footer from "../components/footer.vue";
import Nav from "../components/nav.vue";
import ChatbotsForm from "../components/mychatbotsForn.vue";

export default {
  name: "App",
  components: {
    PricingPckg,
    FAQ,
    Footer,
    Nav,
    ChatbotsForm,
  },
};
</script>

<style>
@import url("../style.css");
@import url("../globals.css");

</style>