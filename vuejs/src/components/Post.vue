<template>
    <div class="posts__area">
           <div class="posts__wrap max_900" v-if="Object.keys(post||{}).length>3" >
                <div class="posts__url">
                    <div class="posts__history__back">
                         <button v-on:click.once="back">Back</button>
                     </div>
                     <div class="posts__url__back">
                         <button v-on:click="click(`/`)">Главная /</button>
                         <button v-on:click="click(`/articles/${encodeURI(post.title)}`)">{{post.title}}</button>
                     </div>
                     
                </div>
                <div class="posts__content">
                      <div class="posts__title"><h5>{{post.title | uppercase}}</h5></div>
                      <div class="posts__item">
                           <div class="posts__item_col1">
                                   <div class="posts__image"><img v-bind:src="post.img" alt="..." srcset=""></div>
                           </div>
                           <div class="posts__item_col1">
                                   <div>
                                       <p v-text="post.descr"></p>
                                   </div>
                           </div>
                      </div>
                 </div>
           </div>
           <Footer/>
    </div>
</template>

<style lang="scss">
    .posts__area{
      min-height:70vh;
      font-family: 'Roboto', sans-serif;
      color: #343a40
    }
    .max_900{
        max-width:900px !important;
    }
    .posts__item{
        display:flex;
        align-items: center;
        padding-top:1.3rem;
        justify-content: space-around;
    }
    .posts__item_col1 p{
    box-shadow: 4px 5px 15px rgba(0, 0, 0, 0.15);
    padding: 16px;
    font-size: 14px;
    margin-left: 16px;
    max-width:400px;
    }
    .posts__wrap{
        width:90%;
        margin:0 auto;
        min-height:70vh;
        min-height: 76.8vh;
    }
    .posts__content{
        padding-top:40px;
        max-width: 900px;
        text-align: center;
        margin:0 auto;
    }
    .posts__title{
    /* text-transform: uppercase; */
         font-size: 1.6rem;
        font-weight: 500;
    -webkit-text-stroke-width: medium;
    }
    .posts__image{
        max-width:400px;
        overflow: hidden;
        max-height:250px;
        min-width:300px;
    }
    .posts__image >img{
        object-fit:contain;
        width:100%;
    }
    .posts__url__back button,.posts__history__back button{
    border: none;
    background-color: transparent;
    margin-right: 5px;
    font-family: 'roboto';
    outline:none;
    }
    .posts__history__back button{
    margin-right: 15px;
    padding: 0 10px;
    font-weight:900;
    }
    .posts__url{
    display:flex;
    padding-top:1rem;
    }
</style>

<script lang="ts">
import Vue from 'vue';
import Footer from './Footer.vue';
import {PostInterface} from '../interfaces';
import {GET_ARTICLE} from '../store/actions';

export default Vue.extend({
    name:"post-area",
    beforeCreate(){
     this.$store.dispatch(GET_ARTICLE,{title:decodeURI(this.$route.params.title)});
    },
    mounted:function(){
      this.$nextTick(()=>{
          if(!(this as any).post){
              this.$router.go(-1);
          }
      })
    },
    computed:{
        post:function(){
             const post=(this.$store.state.articles as any).find((elem: any)=>elem.title==decodeURI(this.$route.params.title));
             return post;
        }
    },
    methods:{
        click:function(event: string){
         this.$router.push(event);
        },
        back:function(){
            this.$router.go(-1);
        }
    },
    components:{
        'Footer':Footer
    }

});
</script>