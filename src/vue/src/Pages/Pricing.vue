<template>
        <Nav></Nav>
        <pricing-pckg></pricing-pckg>
        <FAQ></FAQ>
        <Footer></Footer>
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