<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boss extends Model
{
    use HasFactory;

    protected $table = 'bosses' ;

    protected  $fillable = [
        'name',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

}
