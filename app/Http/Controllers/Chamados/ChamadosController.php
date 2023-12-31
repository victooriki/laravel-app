<?php

namespace App\Http\Controllers\Chamados;

use App\Http\Controllers\Controller;
use App\Models\Chamados;
use Illuminate\Http\Request;

class ChamadosController extends Controller
{
    public function index(Chamados $chamados_model)
    {
        $chamados = $chamados_model->all();

        return view('chamados/index', compact('chamados'));
    }

    public function create()
    {

        return view('chamados/create');
    }

    public function insert_chamado(Request $request, Chamados $chamados_model)
    {
        $data = $request->all();
        $data['stats'] = 1;

        $chamados_model->create($data);

        return redirect()->route('chamados.index');
    }
}

?>