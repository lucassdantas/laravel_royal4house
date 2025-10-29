import { Divisor } from '@/app/components/Divisor'
import { BlogPostCard } from '@/app/components/entities/BlogPostCard'
import { Section } from '@/app/components/Section'
import React from 'react'

const blog = () => {
  return (
<Section>
    <h1 className='text-2xl'>Blog</h1>
    <Divisor/>
    <div className='flex lg:flex-row flex-col gap-4 gap-y-8 items-center justify-between flex-wrap my-4'>
      <BlogPostCard title='teste' slug='teste' publishDate='teste'/>
    </div>
</Section>



  )
}

export default blog