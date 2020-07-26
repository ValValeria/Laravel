<template>
     <div class="banner__area">
         <div class="banner__wrap">
            <div class="banner__content">
               <div class="banner__image">
                  <img src="https://a.omappapi.com/users/cef824d326cb/images/f09b12bfbd7b1562172021-tech.png" alt="" srcset="">
               </div>
               <div class="banner__items">
                    <div class="banner__items__title">
                              {{greeting}}
                    </div>
                    <div class="banner__items__form">
                               <CreateEmail/>
                    </div>
               </div>
            </div>
         </div>
     </div>
</template>

<script lang="ts">
import Vue from 'vue';
import CreateEmail from './CreateEmail.vue'
export default Vue.extend({
  name: 'Banner',
  data:function(){
    return{
      greeting:"Напиши нам"
    }
  },
  components:{
    CreateEmail
  }
});
</script>
<style lang="scss">
.banner__area{
    background-image: linear-gradient(289deg, rgba(33, 87, 244, 0.87) 0%, rgb(25, 199, 218) 100%);
    position: relative;
    min-height:84vh;
    ::after{
      content:"";
      display:block;
      position: absolute;
      top:0;
      left:0;
      width:100%;
      height:100%;
    }
}
.banner__wrap{
  background-image:url(https://a.omappapi.com/campaign-templates/tech/popup/transparent-stripe.png);
  padding-bottom:2rem;
  min-height: 84vh;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  padding-top:30px;

}

.banner__items__title{
      color: rgb(255,255,255);
    font-size: 52px;
    vertical-align: baseline;
    font-stretch: extra-condensed;
    -webkit-text-stroke: medium;
}
.banner__items{
  flex: 1 1 50%;
  max-width:500px;
  margin: 0 auto;
  text-align:center;
}
.banner__content{
  display:flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: center;
  width:86%;
}
.banner__image{
  max-height: 400px;
  img{
    object-fit: contain;
    height:400px;
  }
  margin-right:40px;
}
.form__fields__input input ,.form__fields__input textarea {
  color: #ffffff;
    outline:none;
    font-size: 18px;
    font-weight: 600;
    background: rgba(255, 255, 255, 0.2);
    border-style: solid;
    border-color: rgba(255, 255, 255, 0.35);
    border-top-width: 2px;
    border-right-width: 2px;
    border-bottom-width: 2px;
    border-left-width: 2px;
    border-top-left-radius: 6px;
    border-top-right-radius: 6px;
    border-bottom-right-radius: 6px;
    border-bottom-left-radius: 6px;
    display: block;
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 10px;
    margin-left: 0px;
    padding-top: 15px;
    padding-right: 20px;
    padding-bottom: 15px;
    padding-left: 20px;
    max-width: 100%;
    width: 100%;
    position: relative;
    z-index: 3000;
}
.form__fields__input button,.form__fields__input a,.orange__button{
  background: #fed133 !important;
    border-bottom-left-radius: 6px !important;
    border-bottom-right-radius: 6px !important;
    border-bottom-width: 2px !important;
    border-color: #ffbd00 !important;
    border-left-width: 2px !important;
    border-right-width: 2px !important;
    border-style: solid !important;
    border-top-left-radius: 6px !important;
    border-top-right-radius: 6px !important;
    border-top-width: 2px !important;
    box-shadow: 0px 4px 0px 0px rgba(14,84,159,0.14) !important;
    color: rgba(0,0,0,0.62) !important;
    font-size: 18px !important;
    display:block;
    font-weight: 600 !important;
    -webkit-letter-spacing: 0 !important;
    max-width:100%;
    -moz-letter-spacing: 0 !important;
    -ms-letter-spacing: 0 !important;
    letter-spacing: 0 !important;
    line-height: 1 !important;
    margin-bottom: 0px !important;
    margin-left: 0px !important;
    margin-right: 0px !important;
    margin-top: 0px !important;
    padding-bottom: 20px !important;
    padding-left: 12px !important;
    padding-right: 12px !important;
    padding-top: 20px !important;
    text-transform: uppercase !important;
    -webkit-text-decoration: none !important;
    text-decoration: none !important;
    font-style: initial !important;
    width: 100% !important;
    cursor: pointer;
    margin: 10px 0 !important;
    position:relative;
    z-index:400;
    margin: 10px auto !important;
}
</style>