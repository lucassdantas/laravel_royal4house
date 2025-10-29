import { NeighborhoodCardType } from '@/app/types/cards/NeighborhoodCard'
import React from 'react'

export const NeighborhoodCard = ({name, slug}:NeighborhoodCardType) => {
  return (
    <div className='rounded-lg lg:w-[30%] w-full shadow-2xl '>
      <img src="{{$imageUrl}}" alt='Condomínio royal' className='rounded-lg'/>
      <div className='p-4'>
        <h3>{name}</h3>
        <a className='bg-light-yellow rounded-full' href={slug}>Mais detalhes</a>
      </div>
    </div>
  )
}
