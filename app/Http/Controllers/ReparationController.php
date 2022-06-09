<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReparationsRequest;
use App\Models\Reparations;
use Illuminate\Http\Request;

class ReparationController extends Controller
{
    public function submit(ReparationsRequest $request)
    {
        Reparation::create($request->validated());

        return redirect()->route('buygood');
    }
}
