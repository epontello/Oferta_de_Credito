<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController; 

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Cpf;
use Illuminate\Support\Facades\Http;


class CpfController 
{
    public function index()
    {   
        return view('cpf.index');
    }


    public function store()
    {
        $cpf = $_POST['cpf'];
        $indlinha = 0;
        $instituicoes = Http::post("https://dev.gosat.org/api/v1/simulacao/credito?cpf=$cpf");
        $inst = json_decode($instituicoes);
        foreach($inst->instituicoes as $data):
            //dd($data);
            $idi = $data->id;   //obtem o id da instituição financeira
            $nmi = $data->nome; //obtem o nome da instituição financeira
            foreach($data->modalidades as $item):
                $modcred = $item->nome; //obtem o nome da modalidade de credito
                $codmod = $item->cod;   //obtem o codigo da modalidade de credito
                $modalidade = Http::post("https://dev.gosat.org/api/v1/simulacao/oferta?cpf=$cpf&instituicao_id=$idi&codModalidade=$codmod");
                $mod = json_decode($modalidade);
                $matriz[$indlinha] = [ 
                                        'NOMEINST'   =>$nmi, 
                                        'NOMEMODA'   =>$modcred,
                                        'QTDPARCMIN' =>$mod->QntParcelaMin,
                                        'QTDPARCMAX' =>$mod->QntParcelaMax,
                                        'VALORMINIMO'=>$mod->valorMin,
                                        'VALORMAXIMO'=>$mod->valorMax,
                                        'JUROSMES'   =>$mod->jurosMes
                                     ];
                $indlinha++; //indice do array
            endforeach;
        endforeach;
        $orderedItems = collect($matriz)->sortBy('JUROSMES');
        $matriz = $orderedItems->toArray();

        #################### método 1 ####################
        foreach($matriz as $mat): 
            $cpfs = new Cpf();
            $cpfs->cpf = $cpf;
            $cpfs->nome_inst = $mat['NOMEINST'];
            $cpfs->nome_modal = $mat['NOMEMODA'];
            $cpfs->qtdmin_parc = $mat['QTDPARCMIN'];
            $cpfs->qtdmax_parc = $mat['QTDPARCMAX'];
            $cpfs->vlrmin = $mat['VALORMINIMO'];
            $cpfs->vlrmax = $mat['VALORMAXIMO'];
            $cpfs->jurmes = $mat['JUROSMES'];
            $cpfs->save();
        endforeach;

        return view('cpf.store', compact('matriz','cpf'));
    }

}
