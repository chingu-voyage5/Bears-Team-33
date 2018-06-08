import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';

var jsonData = {
    questions: [
        {
            name: "name",
            type: "text",
            title: "Please enter your name:",
            placeHolder: "Jon Snow",
            isRequired: true
        }, {
            name: "birthdate",
            type: "text",
            inputType: "date",
            title: "Your birthdate:",
            isRequired: true
        }, {
            name: "color",
            type: "text",
            inputType: "color",
            title: "Your favorite color:"
        }, {
            name: "email",
            type: "text",
            inputType: "email",
            title: "Your e-mail:",
            placeHolder: "jon.snow@nightwatch.org",
            isRequired: true,
            validators: [
                {
                    type: "email"
                }
            ]
        }
    ]
};


export default class Example extends Component {
    componentDidMount(){

    }

    sendSomeData(){
        axios.post('http://bearsproject.test/saveForm', {
            'title' : 'test',
            'questions' : jsonData,
            'user_id' : 1,
            'form_id' : 1
        })
            .then(function (response) {
                console.log(response);
            })
            .catch(function (error) {
                console.log(error);
            });
    }


    render() {

        return (


            <div className="card" style={{'marginBottom': 0, 'boxShadow' : `-12px 0 8px -4px rgba(218, 218, 218, 0.8)`}}>

                <div className="card-body">
                    <div className="form-group">


                        <input style={{'fontSize': '40px', 'marginBottom !important' : 0}} type="text" className="form-control" id="" name="" value={'Untitled Form'} />

                    </div>
                    <div className="form-group">

                        <label htmlFor="">Form description</label>

                        <input type="text" className="form-control" id="" name="" />
                        <button type="button" onClick={this.sendSomeData} className="btn btn-danger">Danger</button>




                    </div>

                </div>
            </div>

        );
    }
}

