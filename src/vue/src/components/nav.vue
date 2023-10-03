<template>
          <div class="nav">
            <div class="frame-36">
              <div class="auto-layout-2">
                <div class="frame-37">
                  <li class="nav-item">
                    <a class="text-wrapper-68" href="/">ChatGenius</a>
                  </li>
                </div>
                  <router-link class="text-wrapper-72" to="/">
                    <div class="frame-38"></div>
                  </router-link>
              </div>
              
              <div class="row" style="  display: flex;width: fit-content;">
                <div class="auto-layout-3">
                  <router-link class="text-wrapper-69" to="/">Home</router-link>
                </div>

                <div class="auto-layout-4">
                  <router-link class="text-wrapper-70" to="/pricing">Pricing</router-link>
                </div>

                <div class="auto-layout-5">
                  <router-link class="text-wrapper-70" to="/terms">Terms &amp; Services</router-link>
                </div>

                <div class="auto-layout-6">
                  <router-link class="text-wrapper-70" to="/privacy">Privacy Policy</router-link>
                </div>
              </div>
             


              <div class="row" style="  display: flex;width: fit-content;float: right;">
                <div class="auto-layout-7">
                  <router-link class="text-wrapper-72" to="/my-chatbots">My Chatbots</router-link>
                </div>
                <div class="auto-layout-8">
                  <router-link class="text-wrapper-70" to="/profile">My Account</router-link>
                </div>
              </div>
            </div>
          </div>
          <router-view/>
</template>

