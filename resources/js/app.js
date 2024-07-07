import "./bootstrap";
import 'flowbite';
import "../css/app.css";
import "@protonemedia/laravel-splade/dist/style.css";
import 'vuetify/styles'
import { createVuetify } from 'vuetify'
import formInput from "./components/FormInputComponent.vue";


import { createApp } from "vue/dist/vue.esm-bundler.js";
import { renderSpladeApp, SpladePlugin } from "@protonemedia/laravel-splade";
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'
const el = document.getElementById("app");


const vuetify = createVuetify({
    components,
    directives,
    locale: {
        rtl: true,
        locale: "ar",
    },

})
createApp({
    render: renderSpladeApp({ el })
})
    .use(SpladePlugin, {
        "max_keep_alive": 10,
        "transform_anchors": false,
        'progress_bar': {
            delay: 250,
            color: "#4B5563",
            css: true,
            spinner: true,
        },
        'view_transitions': true,
    }).use(vuetify, {
        rtl: true
    })
    .component('form-input', formInput)
    .mount(el)
   
    ;
