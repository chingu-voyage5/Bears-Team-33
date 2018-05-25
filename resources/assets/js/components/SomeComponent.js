import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Example extends Component {
    componentDidMount(){

    }
    render() {

        return (


                            <div className="card-body">
                                Hey {this.props.name}
                            </div>

        );
    }
}

