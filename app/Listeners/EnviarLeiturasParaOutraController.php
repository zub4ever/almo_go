<?php

namespace App\Listeners;

use App\Events\NovaLeituraEvent;
use App\Http\Controllers\TesteAPI\ExibicaoController; // Importe a ExibicaoController
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class EnviarLeiturasParaOutraController implements ShouldQueue
{
    use InteractsWithQueue;

    /**
     * Handle the event.
     *
     * @param  NovaLeituraEvent  $event
     * @return void
     */
    public function handle(NovaLeituraEvent $event)
    {
        // Crie uma instância da ExibicaoController
        $exibicaoController = app(ExibicaoController::class);

        // Chame o método receberLeituras() na instância criada, passando o objeto $event corretamente
        $exibicaoController->receberLeituras($event);
    }
}

