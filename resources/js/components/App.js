import React from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter as Router, Route, Switch } from 'react-router-dom';
import Drawing from './drawing/drawing';


function App(){
    return (
        <Router>
            <div>
                
                    <Route path="/drawing" exact component={Drawing} />
                
            </div>
        </Router>
    );
}

if (document.getElementById('app')) ReactDOM.render(<App />, document.getElementById('app'));