<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function store($name,$cost,$image)
    {
        $this->name=$name;
        $this->cost=$cost;
        $this->image=$image;

        $this->saveOrFail();
    }

    public function purchase()
    {
        $this->hasMany(Purchase::class);
    }
}
