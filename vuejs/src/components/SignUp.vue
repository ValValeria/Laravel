<template>
   <div class="posts__area">
           <div class="posts__wrap" v-if="!auth">
                <div>
                <div class="posts__form__title">
                    <h6>Signup</h6>
                </div>
                <div class="posts__form__signup">
                     <div>
                          <form v-on:submit.prevent="submit">
 <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" id="exampleInputUsername1" aria-describedby="emailHelp" v-model.lazy="user.username" required minlength="10" maxlength="20">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" v-model.lazy="user.email" minlength="10" maxlength="20">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" v-model.lazy="user.password" minlength="10" maxlength="20">
  </div>
<div class="alert alert-danger" role="alert" v-for="(error,index) in errors" :key="index" v-show="errors.length">
   {{error}}
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
                     </div>
                </div>
                </div>
           </div>
           <div>
                <YouLogged v-bind:show="auth"/>
           </div>
    </div>
</template>

<script>
import {SIGN_UP} from '../store/actions';
import YouLogged from './YouLogged'
export default {
    name:"SignUp",
    data() {
        return {
            user:{
            email:"",
            password:"",
            username:""
            }
        }
    },
    methods: {
        submit($event){
             this.$store.dispatch(SIGN_UP,this.user);
        }
    },
    computed: {
        auth:function(){
            return this.$store.state.isAuth;
        },
        errors:function(){
            return this.$store.state.errors['signup']
        }
    },
    components:{
        YouLogged
    }
}
</script>
<style lang="scss">

    .posts__area{
      min-height:70vh;
      font-family: 'Roboto', sans-serif;
      color: #343a40
    }
    .posts__wrap{
        width:90%;
        margin:0 auto;
        min-height:70vh;
        min-height: 76.8vh;
        padding-top:4rem;
        max-width:500px;
    }
    .posts__form__title h6{
        font-size: 30px;
    font-weight: 300;
    /* color: #000; */
    border: 0;
    display: block;
    /* margin: -1em 0 .3em 0; */
    padding: 16px;
    visibility: visible;
    line-height: 1em;
    text-align: center;
    }
    .posts__form__signup{
        display: flex;
    flex-direction: column;
    max-width:90%;
    margin:0 auto;
    }
</style>