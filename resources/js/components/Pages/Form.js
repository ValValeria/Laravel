import React from 'react';
export default class extends React.Component{
   constructor(props){
       super(props)
       this.name=React.createRef();
       this.mes=React.createRef();

       this.state={
           mes:[]
       }
   } 
   click(event){
     this.setState({
         mes: this.state.mes.push({sender:this.name.current.value,message:this.mes.current.value})
     })
   }
   render(){
       let list=this.state.mes.map((elem,index)=>
           <li key={index}>
               <div>{elem.sender}</div>
               {elem.message}
            </li>
        )
       return (
           <React.Fragment>
           <div>
               <h4>Name</h4>
               <input type="text" name="name" ref={this.name}/>
               <h4>Message</h4>
               <input type="text" name="message" ref={this.mes}/>
               <button onClick={event=>this.click(event)}>Submit</button>
           </div>
           <ul>
               {list}
           </ul>
           </React.Fragment>
       )
   }
}