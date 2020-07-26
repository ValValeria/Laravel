<template>
  <div id="app">
      <div class="app__wrap">
             <header>
               <div class="header__login_m">
                      <ul>
                         
                         <template v-if="isAuth">
                               <li> <router-link to="/adminpage">Мой профиль</router-link></li>
                               <li v-on:click.stop="logout"> <router-link to="/">Выйти</router-link></li>
                         </template>
                         <template v-else>
                               <li> <router-link to="/signup">Зарегестрироваться</router-link></li>
                               <li> <router-link to="/login">Войти</router-link></li>
                         </template>
                      </ul>
                 </div>
                 <div class="header__wrap" >
                      <h1 class="brand__name"> <router-link to="/">Digital</router-link></h1>
                      <ul v-bind:class="['header__links ',classLinks]">
                        <li> <router-link to="/" exact active-class="active">Главная</router-link></li>
                        <li> <router-link to="/products">Товары</router-link></li>
                        <li> <router-link to="/aboutme" > Об авторе</router-link></li>
                        <li class="search__area">
                            <div class="form__search ">
                                 <input type ="text"  class="form-control input_search" v-model="search"/>
                                 <template v-if="searchResult().length>0 ">
                                   <div class="searchResult" >
                                      <template v-if="isTouched">
                                         <div class="card"  v-for="(item,index) in searchResult()" v-bind:key="index" >
                                            <div class="card-body">
                                               <p class="card-text">{{item.title}}</p>
                                               <router-link v-bind:to="'/articles/'+encodeURI(item.title)" class="btn btn-primary" style="color:white">Смотреть</router-link>
                                            </div>
                                          </div>
                                      </template>
                                      <br/>
                                   </div>
                                 </template>
                                 <template v-else-if="isTouched">
                                   <div class="searchResult">
                                       <div class="card">
                                         <div class="card-body">
                                             {{message}}
                                         </div>
                                       </div>
                                   </div>
                                 </template>
                            </div>
                            <button type="button" class="btn btn-primary btn_search">Поиск</button>
                        </li>
                      </ul>
                      <div v-bind:class="['menu__icon  ']" >
                           <a>
                             <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-list-ul" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                            </svg>
                           </a>
                      </div>
                 </div>
             </header>
             <div class="app__content">
                  <router-view></router-view>             
             </div>
      </div>
  </div>
</template>

<script>
import {STATUS_OF_USER,LOG_OUT,GET_CSRF,CLEAR} from './store/actions';
import {notify} from './main';

export default {
   name:"App",
   mounted() {

      this.$store.commit(STATUS_OF_USER);
       document.querySelector('.form__search').addEventListener("mouseleave",()=>{
       this.isTouched=false;
     })

      document.querySelector('.form__search input[type="text"]').addEventListener("mouseenter",()=>{
       this.isTouched=true;
     });
 
      notify.subscribe((value)=>{
          this.message=value;
      })
     
      const width=window.innerWidth;
      const elem=document.querySelector('.header__links')

      if(width<=970){
         elem.classList.add('none')
      }

      document.querySelector('.menu__icon').addEventListener('click',()=>{
        elem.classList.toggle('none')
      });

      window.onresize=()=>{
        if(window.innerWidth<=970){
           elem.classList.add('none')
        }else {
           elem.classList.remove('none')
        }
      }

   },
   beforeCreate() {
     this.$store.dispatch(GET_CSRF)
   },
   data() {
     return {
       search:"",
       message:"Type here to find something",
       isDisabled:false,
       isTouched:false,
       getSize:false,
       className:"none",
       classLinks:""
     }
   },

   computed: {
      isAuth:function(){
        return this.$store.state.isAuth;
      },
   },
   destroyed() {
     this.$store.commit(CLEAR)
   },
  
   watch: {
     search:function(value){
       this.message="Loading... It may take a while";
       this.isDisabled=true;
       this.isTouched=true;
       this.sendRequest();
     },
   },
   methods: {
      logout(){
        localStorage.removeItem('auth');
        this.$store.commit(LOG_OUT)
      },
      send(){
        this.$store.dispatch('SEARCH',{search:this.search});
      },
      searchResult(){
        return this.$store.state.searchResult;
      },
   },
}
</script>
<style lang="scss">
@import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap');

*{
  margin:0;
  padding:0;
  font-family: 'Montserrat', sans-serif;
}
.brand__name{
  padding-top:10px;
  padding-bottom:5px;
}
.searchResult{
  position:absolute;
  z-index:223;
  width:250px;
  left:0;
  margin-left:16px;
}
.app_content{
  width:90%;
  margin:0 auto;

}
.input_search{
  margin-left:16px;
  width:250px !important;
}
.none{
  display:none !important;
}
header{
  width:100%;
  padding-left: 8px;
    padding-right: 8px;
    display: flex;
    flex-direction: column;
    -webkit-box-pack: justify;
    justify-content: space-between;
    -webkit-box-align: center;
    align-items: center;
    box-sizing: border-box;
    color:#718093;
    box-shadow:4px 5px 15px rgba(0,0,0,.15)
}
.form__search{
  position:relative;
}
body{
  overflow-x: hidden;
  width:100vw;
}
.btn_search{
  margin-left:5px;
}
.header__wrap{
  width:90%;
  max-width: 1100px;
  margin:0 auto;
  display:flex;
  justify-content: space-between;
  padding:20px;
  padding-top:5px;
  ul {
    display:flex;
    align-items: center;
    margin-bottom:0 !important;
    margin-left:5% !important;
  }
  ul li{
    list-style-type: none;
    margin-left:30px;
    display:flex;
    align-items: center;
    justify-content: center;
  }
  ul li a{
    color:inherit;
    padding-top:5px;
    text-decoration: none;
    padding-bottom:5px;
  }
 a:hover,a{
   color:inherit;
   text-decoration: none;
 }
}
.header__links ul li a{
  padding:10px;
}
.header__links li .router-link-exact-active {
    border: 1px solid lightblue;
    display: block;
    width:100%;
    padding:10px;
}
.menu__icon{
  margin-left:20px;
}
.header__login_m{
  width:100vw;
  display:flex;
  justify-content: flex-end;
  ul{
    margin:0;
    margin-top:16px;
    display:flex;
    min-width:400px;
    justify-content: flex-end;
    padding-right:26px;
  }
  ul li{
    list-style: none;
    margin-right:10px;
  }
}
.post__suc_reg{
  padding-top:40px;
}

.menu__icon{
  display:none;
}

@media screen and (max-width:970px) {
  .menu__icon{
    display:block;
    position: absolute;
    top: 60px;
    right: 20px;
  }

  .header__wrap ul li a {
    color: inherit;
    padding-top: 5px;
    text-decoration: none;
    margin: 10px;
    font-size: 20px;
  }
  
  .header__wrap{
    flex-direction: column;

    ul{
      flex-direction: column;
    }
  }
  .header__links li{
    width:100%;
    text-align:center;
  }
  .header__links ul li a:hover{
    border-bottom:1px solid lightblue;
  }
  .header__links{
    padding-top:30px;
  }
}
</style>
