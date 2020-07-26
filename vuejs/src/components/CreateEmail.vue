<template lang="">
    <div class="form__fields">
        <div class="form__fields__input">
           <input type ="email" v-model="email"/>
        </div>
        <div class="form__fields__input">
            <textarea v-model="message" max="100" >
              Your message
            </textarea>
        </div>
        <div class="form__fields__input">
            <a v-bind:href="`mailto:valeira12@gm.com?subject=Message from ${email};body=`+message"> Send</a>
        </div>
    </div>
</template>

<script>
export default {
    name:'CreateEmail',
    data:function(){
        return ({
            email:'Email',
            message:"Your message"
        })
    },
    methods:{
        submit:function(){
            console.log(this.message)
        }
    }
}
</script>