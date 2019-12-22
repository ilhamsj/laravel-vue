require("./bootstrap");

window.Vue = require("vue");

import VueRouter from "vue-router";
Vue.use(VueRouter);

import axios from "axios";
import VueAxios from "vue-axios";

Vue.use(VueAxios, axios);

import App from "./components/App";
import ToysIndex from "./components/Toy/IndexComponent";
import ToyCreate from "./components/Toy/CreateComponent";
import ToyEdit from "./components/Toy/EditComponent";

const routes = [
    {
        name: "home",
        component: ToysIndex,
        path: "/"
    },
    {
        name: "create",
        component: ToyCreate,
        path: "/create"
    },
    {
        name: "edit",
        component: ToyEdit,
        path: "/edit"
    }
];

const router = new VueRouter({
    mode: "history",
    routes: routes
});

const app = new Vue(Vue.util.extend({ router }, App)).$mount("#app");
