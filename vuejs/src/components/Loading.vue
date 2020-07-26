<template>
    <div class="loading__area">
        <div class="spinner-grow text-primary" role="status">
               <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-primary" role="status">
               <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-primary" role="status">
               <span class="sr-only">Loading...</span>
        </div>
    </div>
</template>

<script lang="ts">

import Vue from 'vue';

export default Vue.extend({
      name:"loading"
})
</script>

<style lang="scss">
    
     .loading__area{
         width:100%;
         height:100%;
         display:flex;
         align-items: center;
         justify-content: center;
         min-height:200px;
     }
     .loading__area div{
         margin:5px;
     }

</style>