<template >
     <BaseLayOut>
        <template v-slot:title>
             Товары
        </template>
        <template v-slot:content>

              <template v-if="products.length">
                  <div class="products__card__area" v-for="(product,index) in products" v-bind:key="index">
                <div class="jumbotron">
                      <h1 class="display-4">{{product.title}}</h1>
                      <hr class="my-4">
                      <p>{{product.descr.slice(0,50)+'...'}}</p>
                      <router-link v-bind:to="`/articles/${encodeURI(product.title)}`"  class="btn btn-primary btn-lg"> Read more</router-link>
                </div>
            </div>
            <div class="products__card__paginator">

            <nav aria-label="Page navigation example" v-if="(products || []).length" style="display:block;">
                 <ul class="pagination" >
                      <li class="page-item"><a class="page-link" href="#" v-on:click.prevent="click('prev')">Previous</a></li>
                      <li class="page-item"><a class="page-link" href="#" v-on:click.prevent="click('next')">Next</a></li>
                 </ul>
              </nav>
            </div>
              </template>

               <template v-else>
                   <div>
                       <Loading/>
                   </div>
               </template>

        </template>
     </BaseLayOut>
</template>

<script lang="ts" >
import BaseLayOut from '../LayOuts/BaseLayout.vue';
import { GET_ARTICLES } from '../store/actions';
import Loading from './Loading.vue';

export default {
    name:"Products",
    components:{
        BaseLayOut,
        Loading
    },
    data() {
        return {
            start:0,
            stepSlice:2
        }
    },
    mounted(){
        (this as any).$store.dispatch(GET_ARTICLES,{start:(this as any).start});
    },
    computed: {
        products:function(){
            return ((this as any).$store.state.articles.slice((this as any).$data.start,(this as any).$data.start+2)||[]).filter((item: any)=>'title' in item);
        }
    },
   
    methods: {
        click:function(clicked: 'prev'|"next"){
        
            if(clicked=="prev" && (this as any).start>=2){
              (this as any).start-=2;
            } else if (clicked=="next" && (this as any).start+2<=(this as any).$store.state.articles.length){
              (this as any).start+=2;
            } else {
                return;
            }
            (this as any).$store.dispatch(GET_ARTICLES,{start:(this as any).start});
        }
    },
}
</script>
<style lang="">
    
</style>