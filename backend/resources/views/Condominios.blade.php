@extends('layouts.default-layout', ['pageTitle' => 'Condomínios'] )
@section('content')
<section>
  <x-section >
    <h1 class='text-2xl'>Imóveis em conomínios</h1>
    <x-divisor/>
    <div class='flex lg:flex-row flex-col gap-4 gap-y-8 items-center justify-between flex-wrap my-4'>
      @foreach ( $condominiums as $condominium)
      
      <x-condominium-card-component
        imageUrl="{{$condominium->image_url}}"
        name="{{$condominium->name}}"
        slug="{{$condominium->slug}}"
      />
      @endforeach
    </div>
  </x-section>
</section>
@endsection


