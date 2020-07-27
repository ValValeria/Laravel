<template>
  <div>
    <Banner/>
    <Layout>
        <template v-slot:title>
           <h5>
             Здесь ты можешь найти всё
           </h5>
        </template>
        <template v-slot:content>
          <div class="slide__wrap">
           <div class="slide__items">
              <div class="image-block">
                 <img src="https://avocode.com/static/images/homepage/product/design-management/file-management.png?ver=1" alt="" srcset="">
              </div>
              <div class="decs-block">
                  <p>
                    Від простих бюджетних моделей до найновіших смартфонів-флагманів!
                  </p>
              </div>
           </div>
         </div>
        </template>
    </Layout>

  <div class="gray_block">
 <Layout>
        <template v-slot:title>
             Наши товары
        </template>
        <template v-slot:content>
            <div class="card__wrap" v-if="articles.length">
              <div class="card"  v-for="(item,index) in articles" v-bind:key="item.title+Math.random()">
              
                 <img v-bind:src="item.img" class="card-img-top myimage" alt="..." height="184" v-show="shouldShow[Number(index)]" v-loadingD="index" width="100%" />
                 <div v-show="!shouldShow[Number(index)]" id="loading__home" height="184"><Loading class="card-img-top" /></div>
                 <div class="card-body">
                     <h5 class="card-title">{{item.title}}</h5>
                     <p class="card-text">{{item.decs}}</p>
                     <router-link class="btn btn-primary card__botton" v-bind:to="`articles/${encodeURI(item.title)}`">Read</router-link>
                 </div>
              </div>
            </div>
            <Loading v-else/>
        </template>
    </Layout>
    </div>
   
      <Layout>
        <template v-slot:title>
           <h5>
             И главное акции
           </h5>
        </template>
        <template v-slot:content>
          <div class="slide__wrap">
           <div class="slide__items">
              <div class="image-block">
                 <img src="https://avocode.com/static/images/homepage/product/design-management/sync.png?ver=1" alt="" srcset="">
              </div>
              <div class="decs-block">
                  <p>
                    Найновіші моделі з офіційною гарантією. Акції, знижки, подарунки, розіграші призів.
                  </p>
              </div>
           </div>
         </div>
        </template>
    </Layout>
    <Footer/>
  </div>
</template>

<script lang='ts'>
import Banner from '../components/Banner.vue'
import Vue from 'vue';
import Layout from '../LayOuts/BaseLayout.vue'
import Footer from '../components/Footer.vue';
import store from '../store/index'
import { GET_ARTICLES } from '../store/actions';
import Loading from '../components/Loading.vue';

export default Vue.extend({
  name: 'Main',
  components:{
      Banner,
      Layout,
      Footer,
      Loading
  },
  data() {
    return {
      shouldShow:[false,false,false]
    }
  },
  created:function(){
    this.$store.dispatch(GET_ARTICLES,{start:0});
  },
  computed:{
    articles:function(){
      return this.$store.state.articles.slice(0,3);
    }
  },
  directives:{
    loadingD:{
      inserted(el: any,data: any){

         const loaded=()=>{
           el.classList.add('show');
           Array.from((document.querySelectorAll('#loading__home') as NodeListOf<Element>)).forEach((elem: any)=>{
                   elem.classList.add('loading__home')        
           });
         };

         el.onload=loaded;

      }
    }
  }

});
</script>
<style lang="scss">
.card__wrap > div{
 margin:10px;
 min-width:250px;
 max-width:400px;
 height:340px;
}

.card__wrap .card-body{
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    position: absolute;
    height: 40%;
    bottom: 0;
    width:100%;
}
.slide__items{
  display:flex;
      max-width: 800px;
    margin: 0 auto;
}
.slide__items >div{
  flex: 1 1 50%;
}
.card__wrap{
  display: flex;
    align-items: center;
    justify-content: center;
}
.image-block{
  max-width:300px;
  max-height:400px;
}
.image-block img{
    object-fit:contain;
    width:100%;
}
.decs-block p{
    max-width: 400px;
    text-align: end;
    height: 100%;
    display: flex;
    align-items: center;
    color: rgb(46, 46, 46);
    font-size: 23px;
    /* font-weight: 600; */
    line-height: 1.25;
    width:90%;
    padding-bottom:5%;
}
.decs-block {
    display: flex;
    justify-content: flex-end;
}
.myimage{
  max-width:100%;
  object-fit:cover;
}
.show{
 display: block !important;
}
.loading__home{
  display:none !important;
}
.card__botton{
  position: absolute;
    bottom: 20px;
}
@media screen and (max-width: 900px) {
   .card__wrap{
      flex-wrap: wrap;
   }
}
</style>