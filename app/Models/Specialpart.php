<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Specialcategory;
class Specialpart extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function special_category()
    {
        return $this->belongsTo(Specialcategory::class,'s_category_id');
    }
}
