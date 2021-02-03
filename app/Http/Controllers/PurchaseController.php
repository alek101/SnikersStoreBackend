<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase;
use Illuminate\Support\Facades\DB;

class PurchaseController extends Controller
{
    
    public function store()
    {
        $validatedArticles = request()->validate([
            'customer_name'=>'required',
            'customer_email'=>'required',
            'product_id'=>'required',
            'amount'=>'required',
            'cost'=>'required',
        ]);

        Purchase::create($validatedArticles);
        return json_encode("Purchase is done!");
    }

    public function storeMany(Request $request)
    {
        $request->validate([
            'itemsBoughtArray'=>'required'
        ]);

        $data=$request->itemsBoughtArray;

        DB::transaction(function() use ($data)
            {
            foreach ($data as $item) {
            $newPurchase=new Purchase();
            $newPurchase->store($item);
            } 
        });
        

        return json_encode("Purchase is done!");
    }
}
