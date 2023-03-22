<?php

namespace App\Http\Controllers;

use App\Models\Accesos;
use App\Models\Registros;
use Illuminate\Http\Request;

class LogsController extends Controller
{
    public function ViewLogsAccesos()
    {
        $accesos = Accesos::all();
        return view('logaccesos', ['accesos'=>$accesos]);
    }

    public function CleanAccesos()
    {
        Accesos::truncate();
        return redirect()->route('logs-accesos');
    }

    public function ViewLogsRegistros()
    {
        $registros = Registros::all();
        return view('logsregistros', ['registros'=>$registros]);
    }


    public function CleanRegistros()
    {
        Registros::truncate();
        return redirect()->route('logs-registros');
    }

}
