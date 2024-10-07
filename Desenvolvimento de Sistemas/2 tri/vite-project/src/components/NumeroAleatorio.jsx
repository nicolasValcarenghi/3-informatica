import { useState } from "react"

export const NumeroAleatorio =() => {
    const [n, setN] = useState(0)
    const [backgroundColor,setBackGroundColor] = useState('red')
    const [controle, setControle] = useState(null)

    const gerarAleatorio = ()=> {
        const num = (Math.round(Math.random()*100))
        if(num < 10){
            setN('0' + num)
        }else{
            setN(num)
        }
    }
        const trocarCor = () => {
        let back = Math.round(Math.random()*255)
        let back1 = Math.round(Math.random()*255)
        let back2 = Math.round(Math.random()*255)
        let cor = `rgb(${back}, ${back1},  ${back2})`
        setBackGroundColor(cor)
    }

        const inicio = () => {
            setControle(setInterval(trocarCor, 500))
        }

        const parar = () => {
            clearInterval(controle)
        }
    
    return (
        <>
            <div style={{backgroundColor}}>{n}</div>
            <button onClick={gerarAleatorio} type="button">Gerar</button>
            <button onClick={inicio} type="button">Trocar Cor</button>
            <button onClick={parar} type="button">Parar</button>
        </>
    )
}

