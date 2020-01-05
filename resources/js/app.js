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
// product
import ProductsIndex from "./components/Product/Index";
import ProductsCreate from "./components/Product/Create";
import ProductsEdit from "./components/Product/Edit";
// categories
import CategoriesIndex from "./components/Category/Index";
// Transaction
import TransactionsIndex from "./components/Transaction/Index";

const routes = [
    {
        name: "home",
        component: Home,
        path: "/"
    },
    // toys
    {
        name: "toys.index",
        component: ToysIndex,
        path: "/toys"
    },
    {
        name: "toys.create",
        component: ToyCreate,
        path: "/toy/create"
    },
    {
        name: "toys.edit",
        component: ToyEdit,
        path: "/toy/:id/edit"
    },
    // products
    {
        name: "products.index",
        component: ProductsIndex,
        path: "/products"
    },
    {
        name: "products.create",
        component: ProductsCreate,
        path: "/product/create"
    },
    {
        name: "products.edit",
        component: ProductsEdit,
        path: "/product/:id/edit"
    },
    // Category
    {
        name: "categories.index",
        component: CategoriesIndex,
        path: "/categories"
    },
    {
        name: "categories.create",
        component: ProductsCreate,
        path: "/category/create"
    },
    {
        name: "categories.edit",
        component: ProductsEdit,
        path: "/category/:id/edit"
    },
    // Transaction
    {
        name: "transactions.index",
        component: TransactionsIndex,
        path: "/transactions"
    },
    {
        name: "transactions.create",
        component: ProductsCreate,
        path: "/transactions/create"
    },
    {
        name: "transactions.edit",
        component: ProductsEdit,
        path: "/transactions/:id/edit"
    }
];

const router = new VueRouter({
    mode: "history",
    routes: routes
});

const app = new Vue(Vue.util.extend({ router }, App)).$mount("#wrapper");
