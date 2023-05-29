<?php

namespace App\Http\Controllers;

// use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
// use Illuminate\Foundation\Bus\DispatchesJobs;
// use Illuminate\Foundation\Validation\ValidatesRequests;
// use Illuminate\Routing\Controller as BaseController;

use Illuminate\Support\Facades\DB;
use App\Models\Machine;

class CpfController 
{
    public function index()
    {
        return view('cpf.index');
    }

}
