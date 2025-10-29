@extends('layouts.default-layout', ['pageTitle' => 'Bairros'] )
@section('content')
<section>
  <x-section >
    <h1 class='text-2xl'>Imóveis por bairros</h1>
    <x-divisor/>
    <div class='flex lg:flex-row flex-col gap-4 gap-y-8 items-center justify-between flex-wrap my-4'>
      @foreach ( $neighborhoods as $neighborhood)
      
      <x-neighborhood-card-component
        imageUrl="{{$neighborhood->image_url}}"
        name="{{$neighborhood->name}}"
        slug="{{$neighborhood->slug}}"
      />
      @endforeach
    </div>
  </x-section>
</section>
@endsection


