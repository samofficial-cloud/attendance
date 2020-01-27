<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class courses extends Model
{
    //
    use Sortable;
    public $sortable = ['id', 'course', 'credit', 'semester', 'criteria','course_name'];
}
