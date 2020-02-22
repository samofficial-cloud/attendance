<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class userinfo extends Model
{
    //
    // protected $fillable = [
    //     'name', 'email', 'password','reg_no'
    // ];


 protected $table = 'USERINFO';
 protected  $primaryKey = 'USERID';

 use Sortable;
    public $sortable = ['SSN', 'NAME', 'GENDER','Fees_Status'];
}
