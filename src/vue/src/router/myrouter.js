import { createRouter, createWebHistory } from "vue-router";

import Home from "../Pages/Home.vue";
import Login from "../Pages/Login.vue";
import Pricing from "../Pages/Pricing.vue";
import TermServices from "../Pages/Terms&Services.vue";
import Privacy from "../Pages/PrivacyPolicy.vue";
import Profile from "../Pages/Profile.vue";
import MyChatbots from "../Pages/MyChatbots.vue";
import CreateChatbot from "../Pages/CreateChatbot.vue";


const routes = [
    {
        path: "/",
        name: "home",
        component: Home,
    },
    {
        path: '/login',
        name: 'Login',
        component: Login
    },
    {
        path: '/pricing',
        name: 'Pricing',
        component: Pricing
    },
    {
        path: '/terms',
        name: 'Terms',
        component: TermServices
    },
    {
        path: '/privacy',
        name: 'Privacy',
        component: Privacy
    },
    {
        path: '/profile',
        name: 'Profile',
        component: Profile
    },
    {
        path: '/my-chatbots',
        name: 'MyChatbots',
        component: MyChatbots
    },
    {
        path: '/create-chatbot',
        name: 'CreateChatbot',
        component: CreateChatbot
    },
];


const router = createRouter({
    history: createWebHistory(),
    routes,
});


export default router;
