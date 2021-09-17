import React from 'react';
import { render } from 'react-dom';

const Root = () => {
  return (
    <>Hello world.</>
  )
}

render(<Root/>, document.querySelector('#root'));
