require('./bootstrap');


import { createApp } from "vue";
import TestComponent from "./components/TestComponent.vue";

const app = createApp({
    data() {
        return {
            message: "verification",
        };
    },
});

app.component("test-component", TestComponent);
app.mount("#app");