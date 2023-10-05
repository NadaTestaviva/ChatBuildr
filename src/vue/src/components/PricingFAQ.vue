<!-- <template>
      <div class="text-wrapper-21-pricing">FAQ</div>
    <div class="frame-36-pricing">
                <div class="frame-37-pricing">
                  <div class="frame-wrapper">
                    <div class="frame-38-pricing">
                      <div class="frame-39"><p class="text-wrapper-22-pricing">How are additional editors billed?</p></div>
                      <img  @click="openForm1" class="frame-40" src="../img/frame-12.svg" />
                    </div>
                    <div class="mt-2 pr-13" v-if="first" data-headlessui-state="open"><p class="text-base leading-7 text-gray-600">ChatGenius is an AI chatbot builder, it trains ChatGPT on your data and lets you add a chat widget to your website. Just upload a document or add a link to your website and get a chatbot that can answer any question about their content.</p></div>
                  </div>
                  <div class="frame-41">
                    <div class="frame-38-pricing">
                      <div class="frame-39"><p class="text-wrapper-23-pricing">Can I trial ChatBuildr before paying?</p></div>
                      <img  @click="openForm2" class="frame-40" src="../img/frame-11.svg" />
                    </div>
                    <div class="mt-2 pr-13" v-if="second" data-headlessui-state="open"><p class="text-base leading-7 text-gray-600">ChatGenius is an AI chatbot builder, it trains ChatGPT on your data and lets you add a chat widget to your website. Just upload a document or add a link to your website and get a chatbot that can answer any question about their content.</p></div>
                  </div>
                  <div class="frame-42">
                    <div class="frame-38-pricing">
                      <div class="frame-39"><p class="text-wrapper-24-pricing">What payment methods do you offer?</p></div>
                      <img  @click="openForm3" class="frame-40" src="../img/frame-10.svg" />
                    </div>
                    <div class="mt-2 pr-13" v-if="third" data-headlessui-state="open"><p class="text-base leading-7 text-gray-600">ChatGenius is an AI chatbot builder, it trains ChatGPT on your data and lets you add a chat widget to your website. Just upload a document or add a link to your website and get a chatbot that can answer any question about their content.</p></div>

                  </div>
                  <div class="frame-43">
                    <div class="frame-38-pricing">
                      <div class="frame-39"><p class="text-wrapper-25-pricing">Can I cancel my site plan at any time?</p></div>
                      <img  @click="openForm4" class="frame-40" src="../img/frame-9.svg" />
                    </div>
                    <div class="mt-2 pr-13" v-if="fourth" data-headlessui-state="open"><p class="text-base leading-7 text-gray-600">ChatGenius is an AI chatbot builder, it trains ChatGPT on your data and lets you add a chat widget to your website. Just upload a document or add a link to your website and get a chatbot that can answer any question about their content.</p></div>

                  </div>
                  <div class="frame-44">
                    <div class="frame-38-pricing">
                      <div class="frame-39">
                        <p class="text-wrapper-26-pricing">How can I manage my invoices and charges?</p>
                      </div>
                      <img  @click="openForm5" class="frame-40" src="../img/frame-9.svg" />
                    </div>
                    <div class="mt-2 pr-13" v-if="fifth" data-headlessui-state="open"><p class="text-base leading-7 text-gray-600">ChatGenius is an AI chatbot builder, it trains ChatGPT on your data and lets you add a chat widget to your website. Just upload a document or add a link to your website and get a chatbot that can answer any question about their content.</p></div>

                  </div>
                  <div class="frame-45">
                    <div class="frame-38-pricing">
                      <div class="frame-39"><p class="text-wrapper-27-pricing">What is your refund policy?</p></div>
                      <img  @click="openForm6" class="frame-40" src="../img/frame-9.svg" />
                    </div>
                    <div class="mt-2 pr-13" v-if="sixth" data-headlessui-state="open"><p class="text-base leading-7 text-gray-600">ChatGenius is an AI chatbot builder, it trains ChatGPT on your data and lets you add a chat widget to your website. Just upload a document or add a link to your website and get a chatbot that can answer any question about their content.</p></div>

                  </div>
                  <div class="frame-46">
                    <div class="frame-38-pricing">
                      <div class="frame-39">
                        <p class="text-wrapper-28-pricing">
                          How are paid plans billed when moving from a Prototyping to a Site plan?
                        </p>
                      </div>
                      <img  @click="openForm7" class="frame-40" src="../img/frame-9.svg" />
                    </div>
                    <div class="mt-2 pr-13" v-if="seventh" data-headlessui-state="open"><p class="text-base leading-7 text-gray-600">ChatGenius is an AI chatbot builder, it trains ChatGPT on your data and lets you add a chat widget to your website. Just upload a document or add a link to your website and get a chatbot that can answer any question about their content.</p></div>

                  </div>
                </div>
    </div>
</template>



<script>
export default{
  data (){
    return{
    first : false,
    second : false,
    third : false,
    fourth : false,
    fifth : false,
    sixth : false,
    seventh : false,
    }
  },
  methods : {
    openForm1(){
      this.first = ! this.first;
    },
    openForm2(){
      this.second = ! this.second;
    },
    openForm3(){
      this.third = ! this.third;
    },  
    openForm4(){
      this.fourth = ! this.fourth;
    }, 
    openForm5(){
      this.fifth = ! this.fifth;
    },
    openForm6(){
      this.sixth = ! this.sixth;
    },    
    openForm7(){
      this.seventh= ! this.seventh;
    },    
  }
}
</script> -->


<script setup>
import DropdownItem from '../components/DropdownItem.vue';

</script>

<template>
    <div style="padding-top: 20em;" class="lg:w-auto lg:flex lg:justify-center lg:items-stretch lg:mt-0 w-80 min-h-[33rem] mt-12  relative bg-white rounded-3xl">
        <div class="lg:pr-16 lg:w-1/2">
            <h1 style="  text-align: center;" class=" py-6 lg:mt-16 lg:text-left text-4xl font-bold text-dark-blue text-center mt-[8.5rem] mb-7">FAQ</h1>
          <div class="py-12">
            <DropdownItem>
                <template #header>How are additional editors billed?</template>
                Additional editors are billed on a team level. When you purchase a site plan, you will be billed $20*12/yr per editor when you purchase a yearly plan, and $25/mo per editor when you purchase a monthly plan for all of your existing editors. Any editors added after this will be charged monthly at $25/mo. Please note that one editor always comes for free, so if you only have one editor or admin in the team, you will not be charged for editors. Editors can be added in any time from the invite panel in your project or via your team settings.            
                </DropdownItem>
                <DropdownItem>
                <template #header>Can I trial ChatBuildr before paying? </template>
                You can test ChatBuildr on the free plan where you can experiment with unlimited projects.      
                </DropdownItem>      
                
                <DropdownItem>
                  <template #header>What payment methods do you offer?</template>
                  We support payment through credit card and Paypal. Invoicing and purchase orders are only available with our Business plan.            
                </DropdownItem>
              
                <DropdownItem>
                <template #header>Can I cancel my site plan at any time?</template>
                Yes, you can edit the base prompt and give your chatbot a name, personality traits and instructions on how to answer questions ex. (only answer in French).            
              </DropdownItem>
            
                <DropdownItem>
                  <template #header>How can I manage my invoices and charges?</template>
                  Read more on this on our          
                </DropdownItem>
            
              <DropdownItem>
                <template #header>What is your refund policy?</template>
                Read our refund policy on our             
                </DropdownItem>
                
                <DropdownItem>
                  <template #header>How are paid plans billed when moving from a Prototyping to a Site plan?</template>
                              Existing prototyping teams will be converted to a Sites team account. This means they can continue collaborating on their projects. Site plans can involve multiple payments; one for the Site plan itself, and the other for Team Accounts depending on if and how you use your subscriptions. All charges are linked to the email of the purchaser. When purchasing a Sites plan within a team, a Team account will be added automatically so any additional editors will be charged as described on this pricing page, if applicable. You can read more about ChatBuildr’s Billing, Charges, Renewals, Cancellations, and Refund policies
                </DropdownItem>
          </div>
        </div>
    </div>
    <div class="text-xs fixed bottom-5 text-center w-full">
        Challenge by
        <a href="https://www.frontendmentor.io?ref=challenge" target="_blank">
            Frontend Mentor
        </a>
        . Coded by
        <a href="#">Sofus</a>
        .
    </div>
</template>