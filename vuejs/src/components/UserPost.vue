<template lang="">
    <BaseLayOut>
      <template v-slot:title>
          <div class="t">
              Ваши посты
          </div>
      </template>
      <template v-slot:content>
        <div>
            <div class="card__wrap fl fl_col">
              <template v-if="posts.length">
                   <div class="card w_100"  v-for="item in posts" v-bind:key="item.title+Math.random()" >
                        <img v-bind:src="item.img" class="card-img-top img-card" alt="..." height="184"/>
                        <div class="card-body">
                              <h5 class="card-title">{{item.title}}</h5>
                              <p class="card-text">{{item.decs}}</p>
                              <router-link class="btn btn-primary" v-bind:to="`articles/${encodeURI(item.title)}`">Read</router-link>
                        </div>
                   </div>
              </template>
              <template v-if="!posts.length" >
                     <div class="no_cards">
                         <div class="no_cards_content">
                              <h6>Loading...</h6>
                              <div class="no_cards_img">
                                  <img src="http://www.google.com/images/errors/robot.png" alt="..." srcset="">
                              </div>
                         </div>
                     </div>
              </template>
              <br/>
              <nav aria-label="Page navigation example" v-if="posts.length" style="display:block;">
                 <ul class="pagination" >
                      <li class="page-item"><a class="page-link" href="#" v-on:click.prevent="click('prev')">Previous</a></li>
                      <li class="page-item"><a class="page-link" href="#" v-on:click.prevent="click('next')">Next</a></li>
                 </ul>
              </nav>

            </div>
        </div>
      </template>
    </BaseLayOut>
</template>

<script lang="ts">
import BaseLayOut from '../LayOuts/BaseLayout.vue';
import {GET_USER_POST} from '../store/actions';
export default {
    name:"MyPosts",
    components:{
        BaseLayOut
    },
    data() {
        return {
            start:0
        }
    },
    computed: {
        posts:function(){
           const posts=(this as any).$store.state.user.posts;

           const start=(this as any).start;

           return posts.slice(start,start+2);
        },
    },
 
    methods: {

        click(clicked: string){

            if(clicked=="prev" && (this as any).start>=2){
              (this as any).start-=2;
            } else if (clicked=="next" && (this as any).start+1<=(this as any).posts.length){
              (this as any).start+=2;
            } else {
                return;
            }
            
            (this as any).$store.dispatch(GET_USER_POST,{count:{start:(this as any).start}});

        }
    },
}
</script>
<style lang="scss">
    .fl{
        display:flex;
        flex-wrap:wrap
    }
    .fl >div{
        min-width:200px;
        max-width:400px;
    }
    .w_100{
        width:100%;
        max-width:800px !important;
    }
    .no_cards_content{
        text-align:center;
    }
    .no_cards_img{
        padding-top:2rem;
    }
    .img-card{
        object-fit:cover;
    }

   /* различные продолжительности и динамику.       */
.slide-fade-enter-active {
  transition: all .3s ease;
}
.slide-fade-leave-active {
  transition: all .8s cubic-bezier(1.0, 0.5, 0.8, 1.0);
}
.slide-fade-enter, .slide-fade-leave-to
/* .slide-fade-leave-active до версии 2.1.8 */ {
  transform: translateX(10px);
  opacity: 0;
}
.fl_col{
    flex-direction: column;
}

</style>
