<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Vision extends Model
{
  protected $fillable=[

        'image','title','created_by','updated_by',
  ];
}
