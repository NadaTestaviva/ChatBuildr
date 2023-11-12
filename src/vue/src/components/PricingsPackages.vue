<template>

<div style="padding-top: 8em" class="container my-24 mx-auto md:px-6">
  <!-- Section: Design Block -->
  <section class="mb-32">
    <h2 class="mb-12 text-center text-4xl font-bold">Pricing</h2>

    <!-- Pills content -->
    <div class="py-12 mb-6">
      <div style="text-align: center;" class=" opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
        id="pills-home02" role="tabpanel" aria-labelledby="pills-home-tab02" data-te-tab-active>
        <div style="  display: inline-grid;" class="grid gap-6 lg:grid-cols-2 lg:gap-x-12">
          
          <div style="  width: fit-content;border-style: solid;border-width: thin;border-radius: 9px;" class="mb-6 lg:mb-0">
            <div
              class="block h-full rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] ">
              <div class="border-b-2 border-neutral-100 border-opacity-100 p-6 text-center dark:border-opacity-10">
                <p class="mb-4 text-sm uppercase">
                  <strong>Free</strong>
                </p>
                <h3 class="mb-6 text-4xl">
                  <strong style="color: rgb(15, 151, 255);">$ 0</strong>
                  <small class="text-base text-neutral-500 ">/Month</small>
                </h3>

              </div>
              <div class="p-6">
                <ol class="list-inside">
                  <li class="mb-4 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                      stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>1 Chatbot
                  </li>
                  <li class="mb-4 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                      stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Upload Max 2 Files
                    
                  </li>
                  <li class="mb-4 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                      stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>30 message credits/month
                  </li>
                  <li class="mb-4 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                      stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Embed on 1 website
                    
                  </li>
                </ol>

                <button style="  border-radius: 12px;font-size: initial;color: white;background: linear-gradient(180deg, rgb(7, 222, 255) 0%, rgb(15, 151, 255) 100%);
" type="button"
                  class="inline-block w-full rounded bg-[hsl(0,0%,95%)] px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-[hsl(0,0%,93%)] focus:bg-[hsl(0,0%,95%)] focus:outline-none focus:ring-0 active:bg-[hsl(0,0%,90%)]"
                  data-te-ripple-init data-te-ripple-color="light">
                  <router-link :to="{ name: `pay`, params: { testString: 'a dynamic string' ,id: 'url'} }" exact >Try for Free</router-link>
                </button>
              </div>
            </div>
          </div>

          <div style="  width: fit-content;border-style: solid;border-width: thin;border-radius: 9px;" class="mb-6 lg:mb-0">
            <div
              class="block h-full rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] ">
              <div class="border-b-2 border-neutral-100 border-opacity-100 p-6 text-center dark:border-opacity-10">
                <p class="mb-4 text-sm uppercase">
                  <strong>Standard</strong>
                </p>
                <h3 class="mb-6 text-4xl">
                  <strong style="color: rgb(254, 2, 34)" >$ 99</strong>
                  <small class="text-base text-neutral-500">/Month</small>
                </h3>
              </div>
              <div class="p-6">
                <ol class="list-inside">
                  <li class="mb-4 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                      stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>5 chatbots
                  </li>
                  <li class="mb-4 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                      stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Upload Unlimited Files
                    
                  </li>
                  <li class="mb-4 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                      stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>10,000 message credits/month
                  </li>
                  <li class="mb-4 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                      stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Embed on unlimited websites
                  </li>
                </ol>
                <button style=" border-radius: 12px;font-size: initial;color: white;  background: linear-gradient(180deg, rgb(253, 119, 2) 0%, rgb(254, 2, 34) 100%);
" type="button"
                  class="inline-block w-full rounded bg-[hsl(0,0%,95%)] px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-[hsl(0,0%,93%)] focus:bg-[hsl(0,0%,95%)] focus:outline-none focus:ring-0 active:bg-[hsl(0,0%,90%)]"
                  data-te-ripple-init data-te-ripple-color="light">
                  <router-link to="/my-chatbots">Get Plan</router-link>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="mb-32" style="text-align: center;">
    <h2 class="mb-6 text-center text-4xl font-bold">Business</h2>
    <h2 class="mb-12 text-center font-bold">When you need custom limits and app features.</h2>

    <button style="  border-radius: 12px;font-size: initial;color: white;background: linear-gradient(180deg, rgb(153, 0, 255) 0%, rgb(0, 136, 255) 100%);;
" type="button"
                  class="inline-block rounded bg-[hsl(0,0%,95%)] px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-[hsl(0,0%,93%)] focus:bg-[hsl(0,0%,95%)] focus:outline-none focus:ring-0 active:bg-[hsl(0,0%,90%)]"
                  data-te-ripple-init data-te-ripple-color="light">
                  Learn More
                  </button>
    <!-- Pills content -->


    <div class="py-12 mb-6">
      <div style="text-align: center;" class=" opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
        id="pills-home02" role="tabpanel" aria-labelledby="pills-home-tab02" data-te-tab-active>
        <div style="  display: inline-grid;" class="grid gap-6 lg:grid-cols-3 lg:gap-x-12">
          
          <div style="  width: fit-content;border-style: solid;border-width: thin;border-radius: 9px;" class="mb-6 lg:mb-0">
            <div
              class="block h-full rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] ">
              <div class="border-b-2 border-neutral-100 border-opacity-100 p-6 text-center dark:border-opacity-10">
                <h3 class="mb-6 text-4xl">
                  <img  src="../img/frame-23.svg" />

                </h3>
                <p style="text-align: initial;
  font-size: 1.4em;" class="mb-4 text-sm">
                  <strong>Services</strong>
                </p>


              </div>
              <div class="p-6">
                <ol class="list-inside">
                  <li class="mb-4 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                      stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Onboarding
                  </li>
                  <li class="mb-4 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                      stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Launch support
                    
                  </li>
                  <li class="mb-4 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                      stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>SEO &amp; performance audit
                  </li>
                  <li class="mb-4 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                      stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Slack channel with Framer
                    
                  </li>
                </ol>
              </div>
            </div>
          </div>

          <div style="  width: fit-content;border-style: solid;border-width: thin;border-radius: 9px;" class="mb-6 lg:mb-0">
            <div
              class="block h-full rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] ">
              <div class="border-b-2 border-neutral-100 border-opacity-100 p-6 text-center dark:border-opacity-10">
                <h3 class="mb-6 text-4xl">
                  <img src="../img/frame-18.svg" />
                </h3>
                <p style="text-align: initial;
  font-size: 1.4em;" class="mb-4 text-sm">
                  <strong>Infrastructure</strong>
                </p>
              </div>
              <div class="p-6">
                <ol class="list-inside">
                  <li class="mb-4 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                      stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>No hard hosting limits
                  </li>
                  <li class="mb-4 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                      stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Reverse proxy support
                    
                  </li>
                  <li class="mb-4 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                      stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Premium Infrastructure
                  </li>
                  <li class="mb-4 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                      stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Custom application limits
                  </li>
                </ol>
              </div>
            </div>
          </div>

          <div style="  width: fit-content;border-style: solid;border-width: thin;border-radius: 9px;" class="mb-6 lg:mb-0">
            <div
              class="block h-full rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] ">
              <div class="border-b-2 border-neutral-100 border-opacity-100 p-6 text-center dark:border-opacity-10">
                <h3 class="mb-6 text-4xl">
                  <img src="../img/frame-13.svg" />
                </h3>
                <p style="text-align: initial;
  font-size: 1.4em;" class="mb-4 text-sm">
                  <strong>Legal &amp; security</strong>
                </p>

              </div>
              <div class="p-6">
                <ol class="list-inside">
                  <li class="mb-4 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                      stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Business contract
                  </li>
                  <li class="mb-4 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                      stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Centralized yearly billing
                    
                  </li>
                  <li class="mb-4 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                      stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Confidentiality agreement
                  </li>
                  <li class="mb-4 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                      stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Advanced Security
                  </li>
                </ol>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
  </section>
</div>
</template>

<script>
  import { computed } from "vue";
  import { toRaw } from 'vue';

  export default {
  setup() {
    // return axios.get('/user')
    //     .then(res => {
    //       console.log(res);
    //       commit('setUser', res.data)
    // });

    store.dispatch("getUser");
    console.log(toRaw(store.state.user.data));
    return {
      user: computed(() => store.state.user.data),
    };
  },
};

  import store from "../store";
  import axios from 'axios';

</script>
