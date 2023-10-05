<template>
    <Nav></Nav>
    <PrivacyContent></PrivacyContent>
    <Footer></Footer>
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