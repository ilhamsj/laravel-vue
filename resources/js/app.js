require("./bootstrap");

window.Vue = require("vue");

import VueRouter from "vue-router";
Vue.use(VueRouter);

import VueAxios from "vue-axios";
import axios from "axios";

import App from "./components/App";
Vue.use(VueAxios, axios);

import IndexCompontent from "./components/Toy/IndexComponent";
import EditComponent from "./components/Toy/EditComponent";
import CreateComponent from "./components/Toy/CreateComponent";

const routes = [
    {
        name: "home",
        path: "/",
        component: "IndexComponent"
    },
    {
        name: "create",
        path: "/create",
        component: "CreateComponent"
    },
    {
        name: "edit",
        path: "/edit",
        component: "EditComponent"
    }
];

const router = new VueRouter({ mode: "history", routes: routes });
const app = new Vue(Vue.util.extend({ router }, App)).$mount("#app");
