<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiziController extends Controller
{
   public $servizi = [
    [
        'id' => 1, 'name' => 'GRAVIDANZA', 'category' => 'Gestione della gravidanza e affrontare tutti i fattori correlati.', 'img' => '/media/firstPic.jpg', 'price' => '60 euro','durata'=>'50 minuti','description' => 'La gestione della gravidanza osteopata è un approccio medico naturale che si concentra sul benessere della madre e del feto durante la gravidanza. L’osteopata specializzato in questo tipo di gestione lavora in collaborazione con l’ostetrico e il ginecologo per offrire un supporto completo e integrato durante il periodo di gravidanza e parto.'
    ],
    [
        'id' => 2, 'name' => 'MASSAGGI INFANTILI', 'category' => 'Massaggi infantili e approccio al sistema gastrointerico neonatale', 'img' => '/media/secondPic.jpg', 'price' => '30 euro','durata'=>'35 minuti','description' => 'Il massaggio infantile è una tecnica che può aiutare a promuovere il benessere dei bambini e migliorare il loro sviluppo fisico e cognitivo. Il nostro servizio di osteopatia massaggio infantile è progettato per aiutare i genitori ad apprendere le tecniche di massaggio corrette per i loro bambini, in modo che possano praticarle a casa. Il massaggio può aiutare a ridurre lo stress e la tensione, migliorare il sonno e promuovere la comunicazione e il legame tra genitore e bambino.'
    ],
    [
        'id' => 3, 'name' => 'TECNICHE INDIRETTE', 'category' => "L’efficacia delle tecniche indirette osteopatiche legate all’operatore", 'img' => '/media/thirdPic2.jpg', 'price' => '50 euro','durata'=>'55 minuti','description' => 'Le tecniche indirette osteopatiche legate all’operatore includono tecniche come l’approccio cranio-sacrale, il rilascio miofasciale, la tecnica di Jones, la tecnica di Bowtech e molte altre. In generale, queste tecniche sono progettate per lavorare in modo non invasivo, ma efficace, per aiutare il paziente a raggiungere un maggiore equilibrio e una maggiore funzionalità nel corpo.'
    ],
   ];
    public function servizi(){
        return view('servizi', ['servizi' => $this->servizi]);
    }
    
    public function dettaglio_servizi($id){
        foreach ($this->servizi as $servizio) {
        if($servizio['id'] == $id){
            return view('dettaglio_servizi', ['servizio' => $servizio]);
        }
    }
  }
}