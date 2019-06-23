<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    Protected $fillable = ['mid','transaction_id','bank_trans_id','total_paid','store_amount','single_amount','category','category_details','paid_by','trans_date'];
}
