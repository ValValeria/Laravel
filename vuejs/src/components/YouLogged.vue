<template>
    <div v-if="show" class="message">
        <div class="message">
                       <div class="posts__form__title">
                          <h6>Вы зарегестрированы</h6>
                      </div>
        </div>
    </div>
</template>
<style lang="scss">
    .message{
        padding-top:40px;
    }
</style>
<script lang="ts">
export default {
    name:'YouLogged',
    props:{
        show:{
            type:Boolean,
            required:true
        }
    }
}
</script>