<?php

namespace App\Http\Controllers;

use App\Http\Requests\Reparation;
use App\Models\Reparation as ReparationRequest;
use Illuminate\Http\Request;

class ReparationController extends Controller
{
    public function submit(ReparationRequest $request)
    {
        Reparation::create($request->validated());

        return redirect()->route('buygood');
    }
}
