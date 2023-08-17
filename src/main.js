import { createApp } from 'vue';
import App from './App.vue';
import router from './router';
import 'bootstrap-icons/font/bootstrap-icons.css';
import 'bootstrap/dist/css/bootstrap.css';
import VueAnalytics from 'vue-analytics';

const app = createApp(App);

app.use(router);

app.use(VueAnalytics, {
  id: 'G-TE34WYPXVX',
  // Otras opciones de configuración aquí
});

app.mount('#app');

