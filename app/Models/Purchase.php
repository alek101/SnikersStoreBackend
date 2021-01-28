<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function store($customer_name,$customer_email,$product_id,$amount,$cost)
    {
        $this->customer_name=$customer_name;
        $this->customer_email=$customer_email;
        $this->product_id=$product_id;
        $this->amount=$amount;
        $this->cost=$cost;

        $this->saveOrFail();
    }

    public function product()
    {
        $this->belongsTo(Product::class);
    }
}
