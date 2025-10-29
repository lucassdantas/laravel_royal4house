import { Limiter } from '@/app/components/Limiter'
import { Section } from '@/app/components/Section'
import React from 'react'

export const Header = () => {
  return (
    <>
        <header className=' bg-black'>
        <Limiter className='flex py-6 align-center justify-between text-white'>
        <div className='w-[15%]'>
          <img src='/imgs/logo-royal.webp' alt='Logo royal4house' className='w-[150px]'/>
        </div>
        <div className='w-[50%] flex items-center'>
          <nav className='w-full'>
            <ul className='flex items-center w-full justify-start gap-6 text-lg'>
              <li><a href='/'>Início</a></li>
              <li><a href='/condominios'>Condomínios</a></li>
              <li><a href='/bairros'>Bairros</a></li>
              <li><a href='/sobre'>Sobre nós</a></li>
              <li><a href='/contato'>Contato</a></li>
              <li><a href='/anuncie'>Anuncie</a></li>
              <li><a href='/blog'>Blog</a></li>
            </ul>
          </nav>
        </div>
        <div className='flex justify-end gap-2 items-center w-[15%]'>
          <div className="bg-light-yellow p-2 rounded-full text-black">
            {/*<x-bi-instagram />*/}
          </div>
          <div className="bg-light-yellow p-2 rounded-full text-black">
            {/*<x-bi-tiktok />*/}
          </div>
          <div className="bg-light-yellow p-2 rounded-full text-black">
            {/*<x-bi-youtube />*/}
          </div>

        </div>
      </Limiter>
      </header>
      <div className='w-full h-[8px] bg-gradient-to-r from-dark-yellow via-light-yellow to-dark-yellow' > </div>
    </>
  )
}
