require('./bootstrap');

// import { createApp } from 'vue'
// import PostsIndex from './components/Posts/Index'
//
// const app = createApp({})
// app.component('posts-index', PostsIndex)
// app.mount('#app')

import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue3'

createInertiaApp({
    resolve: name => require(`./Pages/${name}`),
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .mixin({ methods: { route }})
            .mount(el)
    },
})
