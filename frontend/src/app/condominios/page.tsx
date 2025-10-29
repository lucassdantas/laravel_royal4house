import { Divisor } from '@/app/components/Divisor'
import { CondominiumCard } from '@/app/components/entities/CondominiumCard'
import { Section } from '@/app/components/Section'
import React from 'react'

const Condominium = () => {
  return (
    <Section>
        <h1 className='text-2xl'>Imóveis em conomínios</h1>
        <Divisor/>
        <div className='flex lg:flex-row flex-col gap-4 gap-y-8 items-center justify-between flex-wrap my-4'>
          <CondominiumCard name='test' slug='test'/>
        </div>
    </Section>
  )
}

export default Condominium