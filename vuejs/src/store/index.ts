import Vue from 'vue'
import Vuex from 'vuex'
import {  SIGN_UP, STATUS_OF_USER, LOG_OUT, ADD_POST, GET_USER_POST, GET_CSRF,CLEAR,LOGIN,GET_ARTICLES,GET_ARTICLE, SEARCH } from './actions'
import { User, PostInterface, Storeinterface } from '@/interfaces'
import {notify} from '../main';

Vue.use(Vuex)

const  store =new Vuex.Store<Storeinterface>({
  state: {
    articles:[ ],
    user:{email:"",password:"",username:"",posts:[]},
    isAuth:false,
    errors:{
      login:[],
      signup:[],
      createpost:[]
    },
    searchResult:[],
    csrf:""
  },
  mutations: {
    [SIGN_UP](state,user){
     localStorage.setItem('auth',JSON.stringify(user));
     Object.assign(state,{user:user},{isAuth:true})
    },
    [STATUS_OF_USER](state){
      const data=localStorage.getItem('auth');
      if(data){
        try{
         const  objopt: User=JSON.parse(data);
         if(objopt.username.length && objopt.password.length){
           state.isAuth=true;
           state.user=Object.assign(objopt,{posts:[]});
         }
        }catch (e){
            state.isAuth=false;
        }
      }
    },
    [LOG_OUT](state){
      state.isAuth=false;
    },
    [ADD_POST](state, post: PostInterface){
      state.user.posts.push(post);
    },
    [GET_USER_POST](state, post: PostInterface[]){
      state.user.posts.push(...post);
    },
    [CLEAR](state){
      state.errors={login:[],signup:[],createpost:[]}
    },
    [GET_ARTICLES](state, post: PostInterface[]){
      state.articles.push(...post);
    },
    [SEARCH](state,post: PostInterface[]){
      state.searchResult=post;
      console.log(state.searchResult)
    }
  },
  actions: {
     async [GET_ARTICLES]({commit,state}, count: any){

      if(count.start+1<=state.articles.length){
        return;
     }

    const response=await fetch('/postsPage/?start='+count.start,{
      headers:{
       'Auth':localStorage.getItem('auth') as string
      }
    });

    if(response.ok){

     const json= await response.json();
     const posts=json.messages[0].posts;
     if(Array.isArray(posts) && json.status!="Not Found"){
       commit(GET_ARTICLES,posts);
     } else if(json.status!="Not Found" && typeof(posts)=="object"){
       commit(GET_ARTICLES,[posts]);    
     }
     
    }
     },
     async [SIGN_UP]({commit,state}, user: any){

         const response=await fetch('/signupPage',{
           method:'POST',
           body:JSON.stringify(user),
           headers:{
            'Content-Type': 'application/json;charset=utf-8',
            "X-CSRF-TOKEN":decodeURIComponent(this.state.csrf)
           }
         });

         if(response.ok){
           const json= await response.json();

           if(json.status=="user"){
              commit(SIGN_UP,user);
           }else if(json.errors.length){
              state.errors.signup=json.errors;
           }

         }
     },
     async [ADD_POST]({commit,state}, {post,formdata}){
         
         const response=await fetch('/addpostPage',{
           method:"POST",
           headers:{
            'Auth':localStorage.getItem('auth') as string
           },
           body:formdata
         });

         if(response.ok){
            const json=await response.json();
            if(json.status=="Added"){
              commit(ADD_POST, {...post,img:json.messages[0].url});
            } else {
               state.errors.createpost=json.errors;
            }
         }
     },

     async [GET_USER_POST]({commit,state},{count}){

       if(count.start+2<=state.user.posts.length){
           return;
       }

       const response=await fetch('/getUserPosts/?start='+count.start,{
         headers:{
          'Auth':localStorage.getItem('auth') as string
         }
       });
       if(response.ok){
        const json= await response.json();
        const posts=JSON.parse(json.messages.posts);
        if(Array.isArray(posts) && json.status!="Not Found"){
          commit(GET_USER_POST,posts);
        } else if(json.status!="Not Found" && typeof(posts)=="object"){
          commit(GET_USER_POST,[posts]);    
        }
        
       }
     },
     async [GET_CSRF]({state}){

      const response=await fetch('/csfr',{
        headers:{
          'Auth':localStorage.getItem('auth') as string
        }
      });

      if(response.ok){
        const json=await response.json();
        if(json){
          state.csrf=json.csrf;
        }
      }
     },
     async [SEARCH]({state,commit},{search}){

      const response=await fetch('/searchPage?search='+encodeURIComponent(search),{
        headers:{
          'Auth':localStorage.getItem('auth') as string
        }
      });

      if(response.ok){
        const json=await response.json();

        if(json.status!="Not Found"){
         commit(SEARCH,json.messages[0]?json.messages[0].posts:[]);
        } else {
           notify.next('Not found');
        }
      }
     },
     async [LOGIN]({state}, {user}){

      const params=new URLSearchParams();
      params.append('email',user.email);
      params.append('password',user.password);

      const response=await fetch('/loginUserPage/?'+params.toString(),{
        headers:{
         'Content-Type': 'application/json;charset=utf-8',
         "X-CSRF-TOKEN":decodeURIComponent(this.state.csrf)
        }
      });
      
      if(response.ok){
        const json= await response.json();
        if(json.status=="user"){
          state.isAuth=true;
          state.user=user;
        }else{
          state.errors.login=json.errors;
        }
      }
     },
     async [GET_ARTICLE]({commit},{title}){
        const http=new XMLHttpRequest();

        http.open('GET',`/postPage/${encodeURIComponent(title)}`);
        http.send();
       
        http.onload=()=>{
          if(http.status==200){
              const json=JSON.parse(http.response);
              if(json.status!="Not Found"){
                commit(GET_ARTICLES,[json.messages[0].posts]);    
              }
          }
        }
     },
  },
  modules: {
  }
})
export default store;
