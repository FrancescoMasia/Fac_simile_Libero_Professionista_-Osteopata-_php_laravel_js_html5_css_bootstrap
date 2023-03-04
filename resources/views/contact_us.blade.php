<x-layout>

    <div class="container">
        <div class="row">
            <div class="col-12 ">
                <h2>contattaci</h2>
            </div>
        </div>
    </div> 
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 hidden-left">
                
                <form class="p-5 shadow" method="POST" action="{{route('contact_us_submit')}}">
                    @csrf
                    <div class="mb-3">
                       <label for="name" class="form-label">Nome Completo</label>
                       <input type="text" name="name" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">indirizzo e-mail</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Lascia il tuo messaggio</label>
                        <textarea class="form-control" name="message" id="message" cols="30" rows="10"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Contattaci</button>
                </form>
            </div>
        </div>
    </div>

</x-layout>