<template >
        <div>
         <BaseLayOut>
               <template #title>
                   <div >
                         Admin area
                   </div>
               </template>
               <template #content>
                   <div class="admin__options__but">
                        <div>
                            <button type="button" class="btn btn-primary" data-name="LoadPost" v-on:click="click">Add a product</button>
                            <button type="button" class="btn btn-primary" data-name="UserPost" v-on:click="click">Show my products</button>
                        </div>
                   </div>
                   <div>
                        <transition  name="slide-fade">
                            <keep-alive><component v-bind:is="component"></component></keep-alive>
                        </transition>
                   </div>
               </template>
         </BaseLayOut>
         <Footer/>
         </div>
</template>
<script lang="ts">
import BaseLayOut from '../LayOuts/BaseLayout.vue';
import LoadPost from '../components/LoadPost.vue';
import UserPost from '../components/UserPost.vue';
import Footer from '../components/Footer.vue';
import {GET_USER_POST} from '../store/actions'

export default {
    name:"AdminArea",
    data() {
        return {
            component:'LoadPost',
        }
    },
    components:{
        BaseLayOut,
        LoadPost,
        UserPost,
        Footer
    },
    mounted() {
         (this as any).$store.dispatch(GET_USER_POST,{count:{start:0}});
    },
    methods: {
        click(event: any){
         (this as any).component=(event.target as HTMLButtonElement).dataset.name;
        },
    },
}
</script>
<style lang="scss">
    .admin__options__but{
      width:100%;
    }
    .admin__options__but>div{
        display:flex;
        justify-content: center;
        max-width:350px;
        margin:0 auto;
    }
    .admin__options__but>div button{
        margin:6px;
    }
    .main__item >div{
        width:100%;
    }
     .t{
    font-size: 1.4rem;
    font-weight: 300;
    -webkit-text-stroke: thin;
    text-transform: uppercase;
    }
</style>