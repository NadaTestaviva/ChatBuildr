<template>
    <div class="my-account">
        <div class="frame">
            <!-- <Footer></Footer> -->
            <div class="overlap">
                <ProfileContent></ProfileContent>
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