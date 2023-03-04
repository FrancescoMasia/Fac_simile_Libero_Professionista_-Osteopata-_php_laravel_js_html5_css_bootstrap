<!-- start cards -->

    <div class="col-12 col-lg-3 mx-auto mt-5 card h-100 hidden ">
       <img src="{{$img}}" class="card-img-top mt-2 " alt="...">
        <div class="card-body">
         <h5 class="card-title">{{$name}}</h5>
         <p>{{$category}}</p>
         <a href="{{route('dettaglio_servizi',['id'=>$id])}}" class="btn btn-primary">more info</a>
      </div>
    </div>
       
<!-- end cards -->