<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase;

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

        foreach ($data as $item) {
           $newPurchase=new Purchase();
           $newPurchase->store($item['customer_name'],$item['customer_email'],$item['product_id'],$item['amount'],$item['cost']);
        }

        return json_encode("Purchase is done!");
    }
}
