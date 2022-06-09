<?php

namespace App\Http\Controllers;

use App\Http\Requests\PurchaseRequest;
use App\Models\Purchase;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function submit(PurchaseRequest $request)
    {
        Purchase::create($request->validated());

        return redirect()->route('buygood');
    }
}
