import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp, Head, Link } from '@inertiajs/inertia-vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
// import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
import Particles from "vue3-particles";
import VueSplide from '@splidejs/vue-splide';


const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'HMTE Datacenter';

createInertiaApp({
    title: (title) => `${title} | ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, app, props, plugin }) {
        console.log(app);
        return createApp({ render: () => h(app, props) })
            .use(plugin)
            .use(Particles)
            .use(VueSplide)
            // .use(ZiggyVue, Ziggy)
            .component('InertiaHead', Head)
            .component('InertiaLink', Link)
            .mount(el);
    },
});

// InertiaProgress.init({ color: '#4B5563' });
