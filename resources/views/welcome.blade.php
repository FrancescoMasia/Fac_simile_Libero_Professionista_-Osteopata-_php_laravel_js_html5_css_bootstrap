<x-layout>
    <div class="col-12">
        @if (session()->has('status'))
          <div class="alert alert-warning alert-dismissible fade show border-start border-end my-3 px-3" role="alert">
            {{ session('status') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
      </div>
<!-- start info -->
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mt-5 hidden-left">
                    <h3 class=" display-5 fw-bolder text-center text-lg-start ">Sono la dottoressa Diletta Damato,<br> laureta in Osteopatia</h3>
                </div>
            </div>
        </div>
<!-- end info --> 
<!-- start img-->
      <div class="container ">
        <div class="row">
            <div class="col-12  text-center mx-auto mt-5 imgContainer hidden-right">
                <img src="/media/fotoOsteopata.jpg" width="250px" height="300px" class="ms-4" alt="">
            </div>
        </div>
<!-- end img -->
<!-- Start Citazione -->
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mt-5">
                <h2>"Compito del medico è ricercare la salute, <br> tutti sanno trovare la malattia."</h2>
                <h4 class="mt-3">A. Still</h4>
            </div>
        </div>
      </div> 
<!-- end citazione  -->
</x-layout>

