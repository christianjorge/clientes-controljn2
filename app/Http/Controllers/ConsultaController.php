<?php

namespace App\Http\Controllers;

use App\Models\ModelClient;
use Illuminate\Http\Request;
use App\Traits\ApiResponser;

class ConsultaController extends Controller
{
    use ApiResponser;
    public function showClientByPlaca($placa)
    {
        $tam = strlen($placa);
        $costumers = ModelClient::WhereRaw('RIGHT(placa, '.$tam.') = ?', $placa)->orderBy('nome')->get();
        return json_encode($costumers);
    }

}
