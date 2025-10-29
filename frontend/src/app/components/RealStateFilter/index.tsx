import React from 'react'

export const RealStateFilterShort = () => {
  return (
    <form className='flex justify-between items-center w-full gap-4'>
      <select className="bg-white w-full text-black  rounded-lg p-4 py-3" >
        <option>aa</option>
        <option>aa</option>
      </select>
      <select className="bg-white w-full text-black rounded-lg p-4 py-3" >
        <option>aa</option>
        <option>aa</option>
      </select>
      <select className="bg-white w-full text-black rounded-lg p-4 py-3" >
        <option>aa</option>
        <option>aa</option>
      </select>
      <button className='bg-light-yellow rounded-full py-2 px-4 text-black w-[500px] '>Buscar imóvel</button>
    </form>
  )
}
export const RealStateFilterByCode = () => {
  return (
    <form className='flex justify-center items-center w-full gap-4'>
      <input placeholder='Escreva o código aqui' className='bg-white rounded-full text-black px-4 py-2 text-center'/>
      <button className='bg-light-yellow rounded-full py-2 px-4 text-black w-[200px] '>Buscar imóvel</button>
    </form>
  )
}
