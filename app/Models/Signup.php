<?php

namespace App\Models;
// use App\Addcategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class Signup extends Model implements Authenticatable
{
    use HasFactory;
    use AuthenticatableTrait;
    protected $table= 'signups';
    public $timestamps = false;


    // public function category()
    // {
    //     return $this->belongsTo(Addcategory::class);
    // }

    // public function getCategoryNameAttribute()
    // {
    //     if ($this->category) {
    //         return $this->category->categoryname;
    //     } else {
    //         return 'No Category'; // or any default value you prefer
    //     }
    // }
}
