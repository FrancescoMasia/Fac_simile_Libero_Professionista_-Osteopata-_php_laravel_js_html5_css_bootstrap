<x-layout>
 <div class="container ">
  <div class="row mt-5">
    <div class="col-md-4">
      <img src="{{$servizio['img']}}" height="250px"  class="img-fluid hidden-left" alt="Massaggio infantile">
    </div>
    <div class="col-md-8 mt-5 mt-lg-0 hidden">
      <h3 class="">{{$servizio['name']}}</h3>
      <p>{{$servizio['description']}}</p>
      <p><strong>Durata: </strong>{{$servizio['durata']}}</p>
      <p><strong>Prezzo: </strong>{{$servizio['price']}}</p>
      <a href="{{route('contattaci')}}" class="btn bg-sec mx-3 my-2">Prenota ora</a>
      <a href="{{route('servizi')}}" class="btn bg-sec  mx-3 my-2">torna indietro</a>
    </div>
  </div>
  
 </div>
</x-layout>



{{-- <div class="col-12 col-lg-3 mx-auto mt-5 card h-100 ">
    <img src="{{$servizio['img']}}" class="card-img-top mt-2 " alt="...">
     <div class="card-body">
      <h5 class="card-title">{{$servizio['name']}}</h5>
      <p>{{$servizio['category']}}</p>
      <a href="{{route('servizi')}}" class="btn btn-primary">torna indietro</a>
   </div>
 </div> --}}