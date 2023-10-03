<template>
        <div class="div-mx-auto-wrapper">
              <div class="div-mx-auto">
                <div class="heading-frequently">Frequently asked questions</div>
                <div class="descriptions">
                  <div class="term-button">
                    <div class="span-text-base"><div class="text-wrapper-62">What is ChatGenius?</div></div>
                    <img  @click="openForm1" class="span-ml" src="../img/span-ml-6.svg" />
                  </div>
                  <div class="mt-2 pr-12" v-if="first" data-headlessui-state="open"><p class="text-base leading-7 text-gray-600">ChatGenius is an AI chatbot builder, it trains ChatGPT on your data and lets you add a chat widget to your website. Just upload a document or add a link to your website and get a chatbot that can answer any question about their content.</p></div>
                  <div class="div-pt">
                    <div class="term-button">
                      <div class="span-text-base-2"><p class="text-wrapper-62">What should my data look like?</p></div>
                      <img  @click="openForm2" class="span-ml" src="../img/span-ml-6.svg" />
                    </div>
                    <div class="mt-2 pr-12" v-if="second" data-headlessui-state="open">
                      <p class="text-base leading-7 text-gray-600">Currently, you can upload one or multiple files (.pdf, .txt, .doc, .docx), paste text, or add a link to your website to be scraped.</p>
                    </div>

                  </div>
                  <div class="div-pt">
                    <div class="term-button">
                      <div class="span-text-base-3">
                        <p class="text-wrapper-63">Can I give my chatbots instructions?</p>
                      </div>
                      <img  @click="openForm3" class="span-ml" src="../img/span-ml-6.svg" />
                    </div>
                    <div class="mt-2 pr-12" v-if="third" data-headlessui-state="open">
                      <p class="text-base leading-7 text-gray-600">Yes, you can edit the base prompt and give your chatbot a name, personality traits and instructions on how to answer questions ex. (only answer in French).</p>
                    </div>
                  </div>
                  <div class="div-pt">
                    <div class="term-button">
                      <div class="span-text-base-4"><p class="text-wrapper-62">Where is my data stored?</p></div>
                      <img  @click="openForm4" class="span-ml" src="../img/span-ml-6.svg" />
                    </div>
                    <div class="mt-2 pr-12" v-if="fourth" data-headlessui-state="open">
                      <p class="text-base leading-7 text-gray-600"> The content of the document is hosted on secure GCP/AWS servers in us-east.</p>
                    </div>

                  </div>
                  <div class="div-pt">
                    <div class="term-button">
                      <div class="span-text-base-5"><p class="text-wrapper-62">Does it use GPT-3.5 or GPT-4?</p></div>
                      <img  @click="openForm5" class="span-ml" src="../img/span-ml-6.svg" />
                    </div>
                    <div class="mt-2 pr-12" v-if="fifth" data-headlessui-state="open">
                      <p class="text-base leading-7 text-gray-600">By default your chatbot uses gpt-3.5-turbo (but you have the option to use gpt-4 on the Standard and Unlimited plans).</p>
                    </div>

                  </div>
                  <div class="div-pt">
                    <div class="term-button">
                      <div class="span-text-base-6">
                        <p class="text-wrapper-62">How can I add my chatbot to my website?</p>
                      </div>
                      <img  @click="openForm6" class="span-ml" src="../img/span-ml-6.svg" />
                    </div>
                    <div class="mt-2 pr-12" v-if="sixth" data-headlessui-state="open">
                      <p class="text-base leading-7 text-gray-600">You can embed an iframe or add a chat bubble to the bottom right of your website. To do that, create a chatbot and click "Embed on website". You can also use the API to communicate with your chatbot anywhere!</p>
                    </div>

                  </div>
                  <div class="div-pt">
                    <div class="term-button">
                      <div class="span-text-base-7">
                        <p class="text-wrapper-63">Does it support other languages?</p>
                      </div>
                      <img  @click="openForm7" class="span-ml" src="../img/span-ml-6.svg" />
                    </div>
                    <div class="mt-2 pr-12" v-if="seventh" data-headlessui-state="open">
                      <p class="text-base leading-7 text-gray-600">Yes, Chatbase supports about 95 languages. You can have your sources in any language and ask it questions in any language.</p>
                    </div>

                  </div>
                  <div class="div-pt">
                    <div class="term-button">
                      <div class="span-text-base-8">
                        <p class="text-wrapper-62">Can I share a chatbot I created?</p>
                      </div>
                      <img  @click="openForm8" class="span-ml" src="../img/span-ml-6.svg" />
                    </div>
                    <div class="mt-2 pr-12" v-if="eighth" data-headlessui-state="open">
                      <p class="text-base leading-7 text-gray-600">    Yes, by default any chatbot you create is private but you can change the setting to make it public and send it to anyone.</p>
                    </div>

                  </div>
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
    eighth : false,
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
    openForm8(){
      this.eighth= ! this.eighth;
    }
  }
}
</script>