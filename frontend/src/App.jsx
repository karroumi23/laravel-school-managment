import './App.css'
import { Router, RouterProvider } from 'react-router-dom'
import { router } from './router'

function App() {

  return (
    <>
    <RouterProvider router={router}/>
    <h1>test from app.jsx</h1>
    </>
  )
}

export default App
