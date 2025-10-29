import { BlogPostType } from '@/app/types/cards/BlogPosts'
import React from 'react'

export const BlogPostCard = ({title, publishDate, slug}:BlogPostType) => {
  return (
    <div className='rounded-lg lg:w-[30%] w-full shadow-2xl '>
      <img src="{{$imageUrl}}" alt='Condomínio royal' className='rounded-lg'/>
      <div className='p-4'>
        <h3>{title}</h3>
        <a className='bg-light-yellow rounded-full' href={slug}>Continuar lendo</a>
        <hr/> 
        <span>{publishDate}</span>
      </div>
    </div>
  )
}
