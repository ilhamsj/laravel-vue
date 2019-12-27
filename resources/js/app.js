require("./bootstrap");

window.Vue = require("vue");

import VueRouter from "vue-router";
Vue.use(VueRouter);

import axios from "axios";
import VueAxios from "vue-axios";

Vue.use(VueAxios, axios);

import App from "./components/App";
import Home from "./components/Home";
// toy
import ToysIndex from "./components/Toy/Index";
import ToyCreate from "./components/Toy/Create";
import ToyEdit from "./components/Toy/Edit";

const routes = [
    {
        name: "home",
        component: Home,
        path: "/"
    },
    {
        name: "toys",
        component: ToysIndex,
        path: "/toys"
    },
    {
        name: "create",
        component: ToyCreate,
        path: "/toy/create"
    },
    {
        name: "edit",
        component: ToyEdit,
        path: "/toy/:id/edit"
    }
];

const router = new VueRouter({
    mode: "history",
    routes: routes
});

const app = new Vue(Vue.util.extend({ router }, App)).$mount("#app");
