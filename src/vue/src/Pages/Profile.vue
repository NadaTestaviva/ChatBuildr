<template>
    <ProfileContent></ProfileContent>
    <Footer></Footer>

</template>


<script>
import PricingPckg from "../components/PricingsPackages.vue";
import FAQ from "../components/PricingFAQ.vue";
import Footer from "../components/footer.vue";
import Nav from "../components/nav.vue";
import ProfileContent from "../components/profile.vue";

export default {
  name: "App",
  components: {
    PricingPckg,
    FAQ,
    Footer,
    Nav,
    ProfileContent,
  },
};
</script>

<style>
@import url("../style.css");
@import url("../globals.css");

</style>