<template>
    <Nav></Nav>
    <TermsContent></TermsContent>
    <Footer></Footer>
</template>


<script>
import PricingPckg from "../components/PricingsPackages.vue";
import FAQ from "../components/PricingFAQ.vue";
import Footer from "../components/footer.vue";
import Nav from "../components/nav.vue";
import TermsContent from "../components/TermsContent.vue";

export default {
  name: "App",
  components: {
    PricingPckg,
    FAQ,
    Footer,
    Nav,
    TermsContent,
  },
};
</script>

<style>
@import url("../style.css");
@import url("../globals.css");

</style>