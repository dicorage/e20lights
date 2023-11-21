import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .mixin({
                data: function() {
                    let mode = localStorage.getItem('modeTheme') ?? 'dark';
                    if(mode == 'system'){
                      if(window.matchMedia('(prefers-color-scheme: dark)').matches){
                        mode = 'dark';

                      }else{
                        mode = 'light';
                      }
                    }else{
                      mode = mode;
                    }
                    return {
                      modeTheme: mode
                    }
                  },
                  onMount(){
                    const mode = localStorage.getItem('modeTheme') ?? 'dark';
                    if(mode == 'system'){
                      if(window.matchMedia('(prefers-color-scheme: dark)').matches){
                        this.modeTheme = 'dark';

                      }else{
                        this.modeTheme = 'light';
                      }
                    }else{
                      this.modeTheme = mode;
                    }
                  },
                  methods: {
                    toggleMode(mode){
                      localStorage.setItem('modeTheme', mode);
                        if(mode == 'system'){
                          if(window.matchMedia('(prefers-color-scheme: dark)').matches){
                            this.modeTheme = 'dark';

                          }else{
                            this.modeTheme = 'light';
                          }
                        }else{
                          this.modeTheme = mode;
                        }
                    }
                  }
            })
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
