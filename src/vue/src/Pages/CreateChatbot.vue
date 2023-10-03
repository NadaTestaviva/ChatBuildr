<template>
    <!-- <Nav></Nav> -->
    <div class="new-chatbot">
      <div class="overlap-group-wrapper">
        <div class="overlap">
            <Footer></Footer>
            <CreateChatbotForm></CreateChatbotForm>
            <Footer></Footer>

        </div>
      </div>
    </div>
</template>


<script setup>
import PricingPckg from "../components/PricingsPackages.vue";
import FAQ from "../components/PricingFAQ.vue";
import Footer from "../components/footer.vue";
import Nav from "../components/nav.vue";
import CreateChatbotForm from "../components/CreateChatbotFrom.vue";

</script>


<style>
@import url("../style.css");
@import url("../globals.css");

</style>