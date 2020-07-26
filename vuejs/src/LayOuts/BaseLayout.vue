<template>
    <div class="main__area">
          <div class="main__wrap">
                <div class="main__content">
                     <div class="main__title">
                         <h5>
                             <slot name="title"></slot>
                         </h5>
                     </div> 
                     <div class="main__item">
                            <slot name="content"></slot>
                     </div>
                </div>
          </div>
    </div>
</template>

<script lang="ts">
export default {
    name:"base-layout"
}
</script>
<style lang="scss">
     .main__area{
         max-width:100vw;
         overflow-x: hidden;
     }
     .main__wrap{
         width:90%;
         margin:0 auto;
     }
     .main__content{
         @extend .main__wrap;
         max-width: 900px;
         padding-top:3rem;
         padding-bottom:3rem;
     }
     .main__title h5{
         padding: 2rem 0;
    text-align: center;
    font-size: 2.345rem !important;
    font-weight: 500;
    -webkit-text-stroke: medium;
     }
     .main__item{
         display:flex;
         flex-wrap:wrap;
     }
</style>