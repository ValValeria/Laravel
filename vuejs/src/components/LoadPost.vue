<template lang="">
    <BaseLayOut>
      <template v-slot:title>
          <div class="t">
              Add a product
          </div>
      </template>
      <template v-slot:content>
          <div>
               <div>
                        <form v-on:submit.prevent="submit" id="create_post_form">
                            <div class="form-group">
                               <label for="exampleInputEmail1">Title</label>
                               <input type="text" class="form-control" id="exampleInputUsername1" name="title" v-model="title" required minlength="10" maxlength="20">
                            </div>
                            <div class="form-group">
                               <label for="exampleInputEmail1">Description</label>
                               <textarea type="text" class="form-control" id="exampleInputUsername2" name="descr"   v-model="desc" required maxlength="100" minlength="20"></textarea>
                           </div>
                           <div class="form-group">
                             <label for="exampleInputPassword1">File</label>
                             <input type="file" v-on:change="changeFile($event)" class="form-control" name="img" id="exampleInputPassword1"  required>
                            </div>
                            <template  v-if="(errors ||[]).length">
                                <div>
                                    <a href="#" class="list-group-item list-group-item-action list-group-item-danger">{{(errors||[]).join(' ')}}</a>
                                    <br/>
                                </div>
                            </template>
                            <template  v-if="!(errors ||[]).length && message.length">
                                <div>
                                    <a href="#" class="list-group-item list-group-item-action list-group-item-primary">{{message}}</a>
                                    <br/>
                                </div>
                            </template>
                            <button type="submit" class="btn btn-primary">Submit</button>
                       </form>
                     </div>
          </div>
      </template>
    </BaseLayOut>
</template>

<script lang="ts">
import BaseLayOut from '../LayOuts/BaseLayout.vue';
import {ADD_POST} from '../store/actions';
export default {
    name:"LoadPost",
    components:{
        BaseLayOut
    },
    methods: {
       changeFile($event: any ){
            const file: File =$event.target.files[0];
            if(!file.type.includes('image')) {
                (this as any).errors.push('Invalid file extension')
            }else {
                (this as any).errors=[];
                (this as any).file=file;
            } 
       },
        submit($event: Event){
           if(!(this as any).errors.length){
                const formData: FormData=new FormData(document.querySelector('#create_post_form') as any);
                (this as any).$store.dispatch(ADD_POST,{post:{title: (this as any).title,img:'',desc:(this as any).desc},formdata:formData});
                (this as any).message="Твой пост загружен"
           }
        }
    },
    data() {
        return {
            errors:[],
            file:{},
            title:"",
            desc:"",
            message:``
        }
    },

}
</script>
