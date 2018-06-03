import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class QuestionComponent extends Component {
    componentDidMount(){

    }
    render() {

        return (


            <div className="card" style={{'margin': 0}}>

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

