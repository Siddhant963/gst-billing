<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Party extends Model
{

    // table name 
    protected $table = "parties";
    // primary key 
    protected $primaryKey = "id";

//   fillable columan
 protected $fillable = ['full_name' , 'address' , 'email'];

    use HasFactory;
}
