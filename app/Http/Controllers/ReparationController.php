<?php

namespace App\Http\Controllers;

use Illuminate\Http\Requests;
use App\Http\Requests\reparationsRequest;
use App\Models\reparations;

class ReparationController extends Controller
{
    public function sumbit(reparationsRequest $req)
    {

        $reparation = new reparation();
        $reparation->telephonenumber = $req->input('telephonenumber');
        $reparation->save();

        return redirect()->route('home');
    }
}
