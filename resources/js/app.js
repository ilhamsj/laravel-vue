require("./bootstrap");

window.Vue = require("vue");

import VueRouter from "vue-router";
Vue.use(VueRouter);

import VueAxios from "vue-axios";
import Axios from "axios";
Vue.use(VueAxios, Axios);

import HomeComponent from "./components/HomeComponent";

const router = new VueRouter({ mode: "history" });
const app = new Vue(Vue.util.extend({ router })).$mount("#app");
