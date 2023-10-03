<template>
                  <div class="text-wrapper-21-pricing">FAQ</div>

     <div class="frame-36-pricing">
                <div class="frame-37-pricing">
                  <div class="frame-wrapper">
                    <div class="frame-38-pricing">
                      <div class="frame-39"><p class="text-wrapper-22-pricing">How are additional editors billed?</p></div>
                      <img  @click="openForm1" class="frame-40" src="img/frame-12.svg" />
                    </div>
                    <div class="mt-2 pr-13" v-if="first" data-headlessui-state="open"><p class="text-base leading-7 text-gray-600">ChatGenius is an AI chatbot builder, it trains ChatGPT on your data and lets you add a chat widget to your website. Just upload a document or add a link to your website and get a chatbot that can answer any question about their content.</p></div>
                  </div>
                  <div class="frame-41">
                    <div class="frame-38-pricing">
                      <div class="frame-39"><p class="text-wrapper-23-pricing">Can I trial Framer before paying?</p></div>
                      <img  @click="openForm2" class="frame-40" src="img/frame-11.svg" />
                    </div>
                    <div class="mt-2 pr-13" v-if="second" data-headlessui-state="open"><p class="text-base leading-7 text-gray-600">ChatGenius is an AI chatbot builder, it trains ChatGPT on your data and lets you add a chat widget to your website. Just upload a document or add a link to your website and get a chatbot that can answer any question about their content.</p></div>
                  </div>
                  <div class="frame-42">
                    <div class="frame-38-pricing">
                      <div class="frame-39"><p class="text-wrapper-24-pricing">What payment methods do you offer?</p></div>
                      <img  @click="openForm3" class="frame-40" src="img/frame-10.svg" />
                    </div>
                    <div class="mt-2 pr-13" v-if="third" data-headlessui-state="open"><p class="text-base leading-7 text-gray-600">ChatGenius is an AI chatbot builder, it trains ChatGPT on your data and lets you add a chat widget to your website. Just upload a document or add a link to your website and get a chatbot that can answer any question about their content.</p></div>

                  </div>
                  <div class="frame-43">
                    <div class="frame-38-pricing">
                      <div class="frame-39"><p class="text-wrapper-25-pricing">Can I cancel my site plan at any time?</p></div>
                      <img  @click="openForm4" class="frame-40" src="img/frame-9.svg" />
                    </div>
                    <div class="mt-2 pr-13" v-if="fourth" data-headlessui-state="open"><p class="text-base leading-7 text-gray-600">ChatGenius is an AI chatbot builder, it trains ChatGPT on your data and lets you add a chat widget to your website. Just upload a document or add a link to your website and get a chatbot that can answer any question about their content.</p></div>

                  </div>
                  <div class="frame-44">
                    <div class="frame-38-pricing">
                      <div class="frame-39">
                        <p class="text-wrapper-26-pricing">How can I manage my invoices and charges?</p>
                      </div>
                      <img  @click="openForm5" class="frame-40" src="img/frame-9.svg" />
                    </div>
                    <div class="mt-2 pr-13" v-if="fifth" data-headlessui-state="open"><p class="text-base leading-7 text-gray-600">ChatGenius is an AI chatbot builder, it trains ChatGPT on your data and lets you add a chat widget to your website. Just upload a document or add a link to your website and get a chatbot that can answer any question about their content.</p></div>

                  </div>
                  <div class="frame-45">
                    <div class="frame-38-pricing">
                      <div class="frame-39"><p class="text-wrapper-27-pricing">What is your refund policy?</p></div>
                      <img  @click="openForm6" class="frame-40" src="img/frame-9.svg" />
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
                      <img  @click="openForm7" class="frame-40" src="img/frame-9.svg" />
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
</script>