<script setup>
import DropdownItem from '../components/DropdownItem.vue';

</script>

<template>
    <div style="padding-top: 20em;" class="lg:w-auto lg:flex lg:justify-center lg:items-stretch lg:mt-0 w-80 min-h-[33rem] mt-12  relative bg-white rounded-3xl">
        <div class="lg:pr-16 lg:w-1/2">
            <h1 style="  text-align: center;" class=" py-6 lg:mt-16 lg:text-left text-4xl font-bold text-dark-blue text-center mt-[8.5rem] mb-7">Frequently asked questions</h1>
          <div class="py-12">
            <DropdownItem>
                <template #header>What is ChatBuildr? </template>
                ChatBuildr is an AI chatbot builder, it trains ChatGPT on your data and lets you add a chat widget to your website. Just upload a document or add a link to your website and get a chatbot that can answer any question about their content.            </DropdownItem>
            <DropdownItem>
                <template #header>What should my data look like? </template>
                Currently, you can upload one or multiple files (.pdf, .txt, .doc, .docx), paste text, or add a link to your website to be scraped.            </DropdownItem>
            <DropdownItem>
                <template #header>How do I reset my password? </template>
                Click “Forgot password” from the login page or “Change password” from your profile page. A reset link will be emailed to you.template>
            </DropdownItem>
            <DropdownItem>
                <template #header>Can I give my chatbots instructions? </template>
            
                Yes, you can edit the base prompt and give your chatbot a name, personality traits and instructions on how to answer questions ex. (only answer in French).            </DropdownItem>
            <DropdownItem>
                <template #header>Where is my data stored? </template>
                The content of the document is hosted on secure GCP/AWS servers in us-east.            </DropdownItem>
            <DropdownItem>
                <template #header>Does it use GPT-3.5 or GPT-4? </template>
                By default your chatbot uses gpt-3.5-turbo (but you have the option to use gpt-4 on the Standard and Unlimited plans).            </DropdownItem>
            <DropdownItem>
                <template #header>How can I add my chatbot to my website? </template>
                You can embed an iframe or add a chat bubble to the bottom right of your website. To do that, create a chatbot and click "Embed on website". You can also use the API to communicate with your chatbot anywhere!            </DropdownItem>
            <DropdownItem>
                <template #header>Does it support other languages? </template>
                Yes, ChatBuildr supports about 95 languages. You can have your sources in any language and ask it questions in any language.            </DropdownItem>
            <DropdownItem>
                <template #header>Can I share a chatbot I created? </template>
                Yes, by default any chatbot you create is private but you can change the setting to make it public and send it to anyone.
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