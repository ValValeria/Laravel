import Vue from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'
import {Subject} from 'rxjs';

export const notify=new Subject<any>();

Vue.config.productionTip = false
 
Vue.filter('uppercase',function(value: string){
   return value.toUpperCase();
});

new Vue({
  router,
  store,
  render: h => h(App)
}).$mount('#app')
