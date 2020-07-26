<template lang="">
   <div>
    <BaseLayOut>
        <template #title>
            <div>
                About me
            </div>
        </template>
        <template #content>
            <div class="aboutme__area">
                   <div class="aboutme__img">
                       <img src="https://avocode.com/static/images/microsites/zeplin-alternative/avoeater.png" alt="..." srcset="">
                   </div>
                   <div class="aboutme__desc">
                        <div class="aboutme__title">
                            <h1>Web-development</h1>
                        </div>
                        <div class="aboutme__other">
                            <p>ПРЕВРАЩАЕМ ТЕХНОЛОГИИ И ДИЗАЙН В РЕШЕНИЕ БИЗНЕС ЗАДАЧ</p>
                        </div>
                   </div>
            </div>
        </template>
    </BaseLayOut>
    <Footer/>
    </div>
</template>

<script lang="ts">
import BaseLayOut from '../LayOuts/BaseLayout.vue';
import Footer from '../components/Footer.vue'

export default {
    components:{
        BaseLayOut,
        Footer
    }
}
</script>
<style lang="scss">
    .aboutme__area{
        display:flex;
        align-items:center;
        padding-top:1rem;
        justify-content: center;
    }
    .aboutme__desc{
        text-align:right;
        max-width:500px;
        margin-left:3%;
        flex: 1 1 50%;
        padding: 0 0 2.4rem 1rem;
    }
    .aboutme__img{
        max-width:500px;
        flex: 1 1 50%;

    }
    .aboutme__img img{
        max-width:100%;
  
    }
    .aboutme__title h1{
    font-size: 3.5rem;
    letter-spacing: -0.05rem;
    font-weight: 700;
    line-height: 1;
    color: rgb(46, 46, 46);
    margin: 0px 0px 2.4rem;
    }
    @media (max-width:950px){
       .aboutme__desc{
         transform: translateX(10vw);
       }
       .aboutme__area{
          flex-wrap: wrap-reverse;

       }
    }
</style>