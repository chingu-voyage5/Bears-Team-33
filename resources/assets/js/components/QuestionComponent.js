import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class QuestionComponent extends Component {
    componentDidMount(){

    }
    render() {

        return (


            <div className="card" style={{'margin': 0, 'boxShadow' : `12px 0 15px -4px rgba(31, 73, 125, 0.8)`, 'boxShadow' : `-12px 0 8px -4px rgba(218, 218, 218, 0.8)`}}>

                <div className="card-body">
                    <div className="form-group">


                        <input style={{'fontSize': '20px'}} type="text" className="form-control" id="" name="" value={'Untitled Question'} />

                    </div>
                    <div className="form-group">



                        <input type="text" className="form-control" id="" name="" />

                    </div>

                </div>
            </div>

        );
    }
}

