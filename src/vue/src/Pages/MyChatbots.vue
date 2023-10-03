<template>
    <div class="my-chatbots-logged">
      <div class="overlap-group-wrapper">
            <chatbots-form></chatbots-form>
            <!-- <Nav></Nav> -->
            <Footer></Footer>
      </div>
    </div>        
        
</template>

<script setup>
import Footer from "../components/footer.vue";
import ChatbotsForm from "../components/mychatbotsForn.vue";

import { useStore } from "vuex";

const store = useStore();


store.dispatch("getDashboardData");
</script>

<style>
@import url("../style.css");
@import url("../globals.css");

</style>