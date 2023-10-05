<template>
    <div class="my-chatbots-not">
      <div class="overlap-group-wrapper">
        <div class="overlap-group">
          <Nav></Nav>
          <LoginForm></LoginForm>

        </div>
      </div>
    </div>
    <Footer></Footer>

</template>


<script>
import Nav from "../components/nav.vue";
import Footer from "../components/footer.vue";
import LoginForm from "../components/loginForm.vue";

export default {
  name: "App",
  components: {
    Nav,
    Footer,
    LoginForm,
  },
};
</script>


<style>
@import url("../style.css");
@import url("../globals.css");

</style>