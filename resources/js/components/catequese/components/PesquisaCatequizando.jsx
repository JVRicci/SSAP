import React from 'react'
import ReactDOM from 'react-dom/client';

export function PesquisaCatequizando(){

    const anoCatequese = [
        'Ano 1', 'Ano 2', 'Ano 3', 'Ano 4', 'Ano 5',
    ]



    return(
        <div className='bg-dark w-25  mx-auto p-3 rounded'>
            <div className="bg-dark text-light ">
                <h6>Ano de Formação</h6>
                <select id="anoCatequeseCombo"  className="form-control bg-light input-sm  ">
                    <option value="">Todos os anos</option>
                    {
                        anoCatequese.map(( index, key)=>{
                            return (
                                <option key={key} value={`${index}`}>{index}</option>
                            )
                        })
                    }
                </select>
            </div>




        </div>
    )
}