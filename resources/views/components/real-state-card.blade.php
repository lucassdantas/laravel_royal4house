
<div class='rounded-lg '>
  <img src="{{$imageUrl}}" alt='Imagem imóvel royal'/>
  <h3>{{$title}}</h3>
  <span>{{$neighborhood}}</span>
  <div class='flex justify-between'>
    <div>
      <span>{{$type}}</span>
    </div>
    <div>
      <span>{{$rooms}} Quartos sendo {{$suites}} suites</span>
    </div>
    <div>
      <span>{{$parkingSpaces}} Vagas de garagem</span>
    </div>
    <div>
      <span>{{$area}}m² Área de terreno</span>
    </div>
  </div>
  <div>
    <div class='font-bold text-dark-yellow '>{{$price}} </div>
    <div class='rounded-full bg-dark-yellow text-white p-2'>{{$code}}</div>
  </div>
  <a class='bg-light-yellow rounded-full' href='{{$moreDetailsUrl}}'>Mais detalhes</a>
</div>