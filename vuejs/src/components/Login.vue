<template>
   <div class="posts__area">
           <div class="posts__wrap" v-if="!auth">
                <div>
                <div class="posts__form__title">
                    <h6>Login</h6>
                </div>
                <div class="posts__form__signup">
                     <div>
                          <form v-on:submit.prevent="submit">
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

import {LOGIN} from '../store/actions';
import YouLogged from './YouLogged';

export default {
    name:"SignUp",
    data() {
        return {
            user:{
            email:"",
            password:"",
            }
        }
    },
    methods: {
        submit($event){
             this.$store.dispatch(LOGIN,{user:this.user});
        }
    },
    computed: {
        auth:function(){
            return this.$store.state.isAuth;
        },
        errors:function(){
            return this.$store.state.errors['login']
        }
    },
    components:{
        YouLogged
    }
}
</script>