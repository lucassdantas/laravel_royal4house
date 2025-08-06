@extends('layouts.default-layout', ['pageTitle' => 'Blog'] )
@section('content')
<section>
  <x-section >
    <h1 class='text-2xl'>Blog</h1>
    <x-divisor/>
    <div class='flex lg:flex-row flex-col gap-4 gap-y-8 items-center justify-between flex-wrap my-4'>
      @foreach ( $blogPosts as $blogPost)
      
      <x-post-card-component
        imageUrl="{{$blogPost->image_url}}"
        title="{{$blogPost->title}}"
        publishDate='{{$blogPost->published_at}}'
        slug="{{$blogPost->slug}}"
      />
      @endforeach
    </div>
  </x-section>
</section>
@endsection


