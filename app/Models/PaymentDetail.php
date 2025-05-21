<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentDetail extends Model
{
       protected $table='payment_details';
    protected $fillable=['selection_id','first_name','last_name','mobile_no','email','pan','dob','address','country_code','pincode','diocese_id','parish_id','amount','payment_status','order_id','payment_mode','transaction_id','created_at','updated_at'];
}
