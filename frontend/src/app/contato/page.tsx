import { ContactForm } from '@/app/components/ContactForm'
import { Divisor } from '@/app/components/Divisor'
import { Section } from '@/app/components/Section'
import React from 'react'

export default function ContactPage() {
  return (
<Section>
    <h1 className='text-2xl'>Contato</h1>
    <Divisor/>
    <div className='flex lg:flex-row flex-col gap-4 gap-y-8 items-center justify-between flex-wrap my-4'>
      <ContactForm/>
    </div>
</Section>
  )
}
