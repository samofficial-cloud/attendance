<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;


class lecturer extends Model
{
    //

    use Sortable;
    public $sortable = ['id', 'course', 'course_name', 'instructor', 'technical_staff','course_type','semester'];
}
