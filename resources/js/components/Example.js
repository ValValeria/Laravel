import React, { Component } from 'react';
import ReactDOM from 'react-dom';

class Example extends Component{
  constructor(props){
      super(props);
      this.state={
          text: null
      }
      this.ref1=React.createRef();
  }
  change(event){
    this.setState({
        text:this.ref1.current.value
    })
  }
  render(){
      return (
          <React.Fragment>
          <div>Hello , my friend</div>
           <input ref={this.ref1} onChange={(event)=>this.change(event)}/>
           {this.state.text}
          </React.Fragment>
      )
  }
}

if (document.getElementById('app')) {
    ReactDOM.render(<Example />, document.getElementById('app'));
}
