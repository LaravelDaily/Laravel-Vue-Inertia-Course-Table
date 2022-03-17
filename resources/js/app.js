require('./bootstrap');

// import { createApp } from 'vue'
// import PostsIndex from './components/Posts/Index'
//
// const app = createApp({})
// app.component('posts-index', PostsIndex)
// app.mount('#app')

import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue3'
import { InertiaProgress } from '@inertiajs/progress'

createInertiaApp({
    resolve: name => require(`./Pages/${name}`),
    title: title => `${title} - Inertia Course`,
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .mixin({ methods: { route }})
            .mount(el)
    },
})

InertiaProgress.init({
    // The delay after which the progress bar will
    // appear during navigation, in milliseconds.
    delay: 250,

    // The color of the progress bar.
    color: '#29d',

    // Whether to include the default NProgress styles.
    includeCSS: true,

    // Whether the NProgress spinner will be shown.
    showSpinner: true,
})

