import { CondominiumCardType } from '@/app/types/cards/CondominiumCard'
import React from 'react'

export const CondominiumCard = ({name, slug}:CondominiumCardType) => {
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
