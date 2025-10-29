'use client'
import { Divisor } from "@/app/components/Divisor";
import { RealStateCard } from "@/app/components/entities/RealStateCard";
import { Limiter } from "@/app/components/Limiter";
import { RealStateFilterByCode, RealStateFilterShort } from "@/app/components/RealStateFilter";
import { Section } from "@/app/components/Section";
import { Title } from "@/app/components/Title";
import { useState } from "react";

export default function Home() {
  const [realStateFilterByCode, setRealStateFilterByCode] = useState(false)
  return (
    <>
    <section className="mainBannerSlider relative h-[600px] overflow-hidden text-white flex flex-col items-center">
      <div className="sliderSlides absolute inset-0 w-full h-full flex animate-slideShow">
        <img src='/imgs/homeBannerImgs/carrossel-2-1-1.webp' className="slide bg-slide1  w-full h-full" alt='bannerImg'/>
        <img src='/imgs/homeBannerImgs/carrossel-3-1-1.webp' className="slide bg-slide2  w-full h-full" alt='bannerImg'/>
        <img src='/imgs/homeBannerImgs/carrossel-4-1-1.webp' className="slide bg-slide3  w-full h-full" alt='bannerImg'/>
      </div>

      <div className="absolute inset-0 bg-black opacity-30 z-10"></div>

      <Limiter className="relative z-20 h-full flex flex-col justify-center items-center text-center">
        <Title tag='h1' className='text-5xl w-[750px]'>O imóvel perfeito para quem busca sofisticação e conforto.</Title>
        <div className="bg-[rgba(255,255,255,.4)] mt-8 p-8 px-12 rounded-full w-full max-w-[1100px]">
          {!realStateFilterByCode && <RealStateFilterShort/>}
          {realStateFilterByCode && <RealStateFilterByCode/>}
        </div>
        <span className='underline mt-6 text-lg cursor-pointer' onClick={() => setRealStateFilterByCode(!realStateFilterByCode)}>
          {!realStateFilterByCode && 'Buscar por código'}
          {realStateFilterByCode && 'Voltar à busca padrão'}
        </span>
      </Limiter>
    </section>

    <Section className='bg-black '>
      <div className='flex justify-center items-center py-8 gap-8 text-white'>
        <img src='/imgs/royal-icon.svg' alt='Ícone royal' />
        <span className='text-2xl'>Movimento gera Movimento</span>
        <img src='/imgs/royal-icon.svg' alt='Ícone royal' />

      </div>
    </Section>

    <Section className='py-24' >
      <Title tag='h2' className=''>Oportuniades à venda exclusiva para você </Title>
      <Divisor />
      <div className='flex lg:flex-row flex-col gap-4 gap-y-8 items-center justify-between flex-wrap my-4'>
        
        <RealStateCard
          imgUrl="{{$real_state->image_url}}"
          condominium="{{$real_state->condominium_name}}"
          neighborhood="{{$real_state->neighborhood_name}}"
          type="{{$real_state->type_name}}"
          rooms="{{$real_state->rooms}}"
          suites="{{$real_state->suites}}"
          parkingSpaces="{{$real_state->parking_spaces}}"
          area="{{$real_state->area}}"
          price="{{$real_state->price}}"
          code="{{$real_state->code}}"
          slug="{{$real_state->slug}}"
        />
      </div>
    </Section>
    </>
  );
}
