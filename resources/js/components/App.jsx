import React from 'react';
import {createRoot} from 'react-dom/client';
import Book from './Book';
export default function App(){
    return (
        <>
          <h2>Welcome To React and Laravel</h2>
          <Book/>
        </>

    )
}

const root=createRoot(document.getElementById('app'));
root.render(<App/>)
