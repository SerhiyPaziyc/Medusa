<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReparationsRequest;
use App\Models\Reparations;
use Illuminate\Http\Request;

class ReparationsController extends Controller
{
    public function submit(ReparationsRequest $request)
    {
        Reparations::create($request->validated());

        return redirect()->route('buygood');
    }
}
