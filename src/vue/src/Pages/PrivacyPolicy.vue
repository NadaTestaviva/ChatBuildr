<template>
    <!-- <Nav></Nav> -->
    <div class="provacy-policy">
      <div class="div">
        <div class="overlap-group">
            <PrivacyContent></PrivacyContent>
        </div>
        <Nav></Nav>
        <Footer></Footer>
      </div>
    </div>
</template>


<script>
import PricingPckg from "../components/PricingsPackages.vue";
import FAQ from "../components/PricingFAQ.vue";
import Footer from "../components/footer.vue";
import Nav from "../components/nav.vue";
import PrivacyContent from "../components/PrivacyContent.vue";

export default {
  name: "App",
  components: {
    PricingPckg,
    FAQ,
    Footer,
    Nav,
    PrivacyContent,
  },
};
</script>

<style>
@import url("../style.css");
@import url("../globals.css");

</style>