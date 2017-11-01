<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Product extends Model
{
    use Sortable;

    protected $fillable = ['name','price','category','order'];
    public $sortable = ['id', 'name'];

}
