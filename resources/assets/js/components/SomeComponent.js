import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Example extends Component {
    componentDidMount(){

    }
    render() {

        return (


                            <div className="card-body">
                                I've passed down the current user as prop:  {this.props.user.name ? this.props.user.name :  ''}
                            </div>

        );
    }
}

