<template>
<div class="bg-gray-100">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-2xl py-16 sm:py-24 lg:max-w-none lg:py-32">
      <button type="submit" style="  float: right; background:black" class="rounded-md bg-indigo-600 px-3 py-2 text-lg font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
            <router-link to="/create-chatbot">New Chatbot</router-link>

          </button>      
          <h2 class="text-2xl font-bold text-gray-900">My Chatbots</h2>
     
      <div class="mt-6 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-6 lg:space-y-0">
        <div style="width: fit-content;" v-for="item in this.info" :key="item.id" class="group relative">
          <div style="width: fit-content;" class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
            <img style="object-fit: none;" src="../img/rectangle-1.png" alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug." class="h-full w-full object-cover object-center">
          </div>
          <h3 class="mt-6 text-sm text-gray-500">
          </h3>
          <p style="text-align: center;" class="text-base font-semibold text-gray-900">{{ item.name }}</p>
        </div>
      </div>

    </div>
  </div>
</div>

</template>

<script>
import axios from 'axios';
import store from "../store";
import { toRaw } from 'vue';
import { computed } from "vue";

export default {
  setup() {
    store.dispatch("getUser");
    console.log(toRaw(store.state.user));
  },
  data () {
    return {
      user: computed(() => store.state.user.data),
      info: null,
      errored: false
    }
  },
  mounted () {
    const url = "http://localhost:8000/chatbots";     
    axios
      .post(url,this.user.id)
      .then(response => {
        console.log(this.user);
        this.info = response.data
        console.log(toRaw(this.info));
      })
      .catch(error => {
        console.log(error)
        this.errored = true
      });
    }
}
</script>