<template>
    <div class="pricing">
      <div class="overlap-wrapper">
        <div class="overlap">
          <div class="frame">
            <pricing-pckg></pricing-pckg>
            <div class="frame-35-pricing">
                <FAQ></FAQ>
            </div>
            <Footer></Footer>
          </div>
          <Nav></Nav>
        </div>
      </div>
    </div>
</template>


<script>
import PricingPckg from "../components/PricingsPackages.vue";
import FAQ from "../components/PricingFAQ.vue";
import Footer from "../components/footer.vue";
import Nav from "../components/nav.vue";

export default {
  name: "App",
  components: {
    PricingPckg,
    FAQ,
    Footer,
    Nav,
  },
};
</script>

<style>
@import url("../style.css");
@import url("../globals.css");

</style>