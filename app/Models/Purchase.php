<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function store($item)
    {
        $this->customer_name=$item["customer_name"];
        $this->customer_email=$item["customer_email"];
        $this->product_id=$item["product_id"];
        $this->amount=$item["amount"];
        $this->cost=$item["cost"];

        $this->saveOrFail();
    }

    public function product()
    {
        $this->belongsTo(Product::class);
    }
}
