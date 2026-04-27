import { useState } from 'react'
export default function Card() {
    //react hooks
    var cont:number=10
    const [contador, setContador] = useState(10)

    const aumentar=()=>{
        cont++
        console.log("hola", cont)
        setContador(contador+1)
    }
  return (
    <>
      <h1>Card{contador}</h1>
      <button onClick={aumentar}>Pene</button>
    </>
  );
}