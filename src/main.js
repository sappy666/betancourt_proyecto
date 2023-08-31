import { createApp } from "vue";
import App from "./App.vue";
import router from "./router";
import "bootstrap-icons/font/bootstrap-icons.css";
import "bootstrap/dist/css/bootstrap.css";
import VueGtag from "vue-gtag";

createApp(App)
  .use(router)
  .use(VueGtag, {
    config: { id: "G-TE34WYPXVX" },
  })
  .mount("#app");
