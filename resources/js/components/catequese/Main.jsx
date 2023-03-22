import React from 'react';
import ReactDOM from 'react-dom/client';

import {PesquisaCatequizando} from './components/PesquisaCatequizando'

export function IndexCatequese () {

    return (

        <div className="container ">

        <PesquisaCatequizando />

            <div className="row justify-content-center mt-5 my-auto">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header">Salve</div>

                        <div className="card-body">I'm an example component!</div>
                    </div>
                </div>
            </div>
        </div>
    );
}

if (document.getElementById('indexCatequese')) {
    const Index = ReactDOM.createRoot(document.getElementById("indexCatequese"));

    Index.render(
        <React.StrictMode>
            <IndexCatequese />
        </React.StrictMode>
    )
}
