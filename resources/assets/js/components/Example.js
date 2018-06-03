import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import SomeComponent from './SomeComponent'
import QuestionComponent from './QuestionComponent'

export default class Example extends Component {
    constructor(props){
        super(props);

        console.log(this.props)
    }
    render() {
        console.log(this.props)

        return (
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-md-8">
                        <SomeComponent user={this.props.currentUser ? this.props.currentUser :  ''}/>
                        <QuestionComponent user={this.props.currentUser ? this.props.currentUser :  ''}/>
                    </div>
                </div>
            </div>
        );
    }
}

if (document.getElementById('example')) {
    var data = document.getElementById('example').getAttribute('data');
    var currentUser = document.getElementById('example').getAttribute('currentUser');

    ReactDOM.render(<Example data={JSON.parse(data) ? JSON.parse(data) : ''} currentUser={JSON.parse(currentUser) ? JSON.parse(currentUser) : ''} />, document.getElementById('example'));

}
