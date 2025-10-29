@extends('layouts.default-layout', ['pageTitle' => 'Contato'] )
@section('content')
<section>
  <x-section >
    <h1 class='text-2xl'>Contato</h1>
    <x-divisor/>
    <div class='flex lg:flex-row flex-col gap-4 gap-y-8 items-center justify-between flex-wrap my-4'>
      <x-contact-form/>
    </div>
  </x-section>
</section>
@endsection


