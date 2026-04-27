import { useState } from 'react'
import Card from './components/Card'

function App() {
  const [elementos, setElementos] = useState([])
  const [nombre, setNombre] = useState("")

  const agregar = () => {

    setElementos([...elementos, nombre])
  }
  return (
    <>
      <h1>{nombre}</h1>
      <input type='text' value={nombre} onChange={(e) => { setNombre(e.target.value) }} />
      <button onClick={agregar}>Agregar</button>
      {
        elementos.map((item, index) => (
          <Card key={index} />
        ))
      }
  
    </>
  )
}

export default App