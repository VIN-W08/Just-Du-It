<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shoe extends Model
{
    public function CartItem(){
        return $this->hasOne(CartItem::class,"id");
    }

    public function TransactionItem(){
        return $this->hasOne(TransactionItem::class,"id");
    }
}
