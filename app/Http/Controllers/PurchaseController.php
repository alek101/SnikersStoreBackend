<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase;

class PurchaseController extends Controller
{
    public function store(Request $request)
    {
        $validatedArticles = $request->validate([
            'customer_name'=>'required',
            'customer_email'=>'required',
            'product_id'=>'required',
            'amount'=>'required',
            'cost'=>'required',
        ]);

        Purchase::create($validatedArticles);
        return json_encode($validatedArticles);
    }
}
