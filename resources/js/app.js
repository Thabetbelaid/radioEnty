require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;
Vue.component("broadcaster", require("./components/Broadcaster.vue").default);
Vue.component("viewer", require("./components/Viewer.vue").default);

Alpine.start();
