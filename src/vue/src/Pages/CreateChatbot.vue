<template>
    <!-- <Nav></Nav> -->
    <div class="new-chatbot">
      <div class="overlap-wrapper">
        <div class="overlap">
            <Footer></Footer>
            <CreateChatbotForm></CreateChatbotForm>
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
import CreateChatbotForm from "../components/CreateChatbotFrom.vue";

export default {
  name: "App",
  components: {
    PricingPckg,
    FAQ,
    Footer,
    Nav,
    CreateChatbotForm,
  },
};
</script>

<style>
@import url("../style.css");
@import url("../globals.css");

</style>