import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Example extends Component {
    componentDidMount(){

    }
    render() {

        return (


            <div className="card" style={{'marginBottom': 0}}>

                <div className="card-body">
                    <div className="form-group">


                        <input style={{'fontSize': '40px', 'marginBottom !important' : 0}} type="text" className="form-control" id="" name="" value={'Untitled Form'} />

                    </div>
                    <div className="form-group">

                        <label htmlFor="">Form description</label>

                        <input type="text" className="form-control" id="" name="" />

                    </div>

                </div>
            </div>

        );
    }
}

