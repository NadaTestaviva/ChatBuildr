import { createRouter, createWebHistory } from "vue-router";

import Home from "../Pages/Home.vue";
import Login from "../Pages/Login.vue";
import Pricing from "../Pages/Pricing.vue";
import TermServices from "../Pages/Terms&Services.vue";
import Privacy from "../Pages/PrivacyPolicy.vue";
import Profile from "../Pages/Profile.vue";
import MyChatbots from "../Pages/MyChatbots.vue";
import CreateChatbot from "../Pages/CreateChatbot.vue";
import store from "../store";


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
    // {
    //     path: '/profile',
    //     name: 'Profile',
    //     component: Profile
    // },
    {
        path: '/my-chatbots',
        redirect: "/login",
        component: Login,
        meta: { requiresAuth: true },
        children: [
            { path: "/my-chatbots", name: "MyChatbots", component: MyChatbots },
            { path: "/profile", name: "Profile", component: Profile },
            { path: "/create-chatbot", name: "CreateChatbot", component: CreateChatbot },

        ],
    },
    // {
    //     path: '/create-chatbot',
    //     name: 'CreateChatbot',
    //     component: CreateChatbot
    // },
];


const router = createRouter({
    history: createWebHistory(),
    routes,
});


router.beforeEach((to, from, next) => {
    if (to.meta.requiresAuth && !store.state.user.token) {
        next({ name: "Login" });
    } else if (store.state.user.token && to.meta.isGuest) {
        next({ name: "home" });
    } else {
        next();
    }
});


export default router;
