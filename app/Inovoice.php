<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inovoice extends Model
{

        protected $fillable = [
        'invoice_no', 'invoice_date', 'due_date',
        'title', 'sub_total', 'discount',
        'grand_total',
        'client_address'
    ];


    //client
    public function  client(){
        return $this->hasOne('App\Client');
     }

     public function  Ouvrage(){
        return $this->hasOne('App\Ouvrage');
    }
}
