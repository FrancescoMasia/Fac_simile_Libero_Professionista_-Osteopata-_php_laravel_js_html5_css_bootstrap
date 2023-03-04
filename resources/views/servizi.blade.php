<x-layout>
 <h2 class="mt-5 ">I servizi che offro sono: </h2>
  <div class="container">
   <div class="row mt-3">
 @foreach ($servizi as $servizio)
 
    <x-card
    durata="{{ $servizio['durata'] }}"
    description="{{ $servizio['description'] }}"
    price="{{$servizio['price']}}"
    name="{{$servizio['name']}}"
    category="{{$servizio['category']}}"
    id="{{$servizio['id']}}"
    img="{{$servizio['img']}}"

    />
   
 @endforeach 
 </div> 
</div>
</x-layout>