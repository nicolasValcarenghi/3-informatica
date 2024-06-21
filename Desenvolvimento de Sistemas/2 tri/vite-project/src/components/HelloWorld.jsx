import React from 'react'


import './estilo.css'

const HelloWorld = ({name}) => {
    console.log(name)
    return <marquee className='hello-world' >Hello World!</marquee>
  }

  export default HelloWorld