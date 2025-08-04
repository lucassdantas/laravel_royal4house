@extends('layouts.default-layout', ['pageTitle' => 'Royal 4 House'])
@section('content')
<section class="mainBannerSlider relative h-[600px] overflow-hidden text-white flex flex-col items-center">
  <div class="sliderSlides absolute inset-0 w-full h-full flex animate-slideShow">
    <img src='/imgs/homeBannerImgs/carrossel-2-1-1.webp' class="slide bg-slide1  w-full h-full" alt='bannerImg'/>
    <img src='/imgs/homeBannerImgs/carrossel-3-1-1.webp' class="slide bg-slide2  w-full h-full" alt='bannerImg'/>
    <img src='/imgs/homeBannerImgs/carrossel-4-1-1.webp' class="slide bg-slide3  w-full h-full" alt='bannerImg'/>
  </div>

  <div class="absolute inset-0 bg-black opacity-30 z-10"></div>

  <x-section class="relative z-20 h-full flex flex-col justify-center">
    <h1 class="text-3xl md:text-5xl font-semibold w-[420px]">O imóvel perfeito para quem busca sofisticação e conforto.</h1>
    <div class="bg-white opacity-40 mt-8 p-4 rounded">
      <x-real-state-filter />
    </div>
  </x-section>
</section>

<section>
  <x-section class='bg-black '>
    <div class='flex justify-center items-center py-4 gap-4 text-white'>
      <img src='/imgs/royal-icon.svg' alt='Ícone royal' />
      <span>Movimento gera Movimento</span>
      <img src='/imgs/royal-icon.svg' alt='Ícone royal' />

    </div>
  </x-section>
</section>

<section>
  <x-section >
    <h1 class='text-2xl'>Oportunidades à venda exclusivas para você</h1>
    <x-divisor/>
    <div class='flex lg:flex-row flex-col gap-4 gap-y-8 items-center justify-between flex-wrap my-4'>
      @foreach ( $real_states as $real_state)
      
      <x-real-state-card
        imageUrl="{{$real_state->image_url}}"
        title="{{$real_state->condominium_name}}"
        condominium="{{$real_state->condominium_name}}"
        neighborhood="{{$real_state->neighborhood_name}}"
        type="{{$real_state->type_name}}"
        rooms="{{$real_state->rooms}}"
        suites="{{$real_state->suites}}"
        parkingSpaces="{{$real_state->parking_spaces}}"
        area="{{$real_state->area}}"
        price="{{$real_state->price}}"
        code="{{$real_state->code}}"
        more-details-url="{{$real_state->slug}}"
      />
      @endforeach
    </div>
  </x-section>
</section>
@endsection