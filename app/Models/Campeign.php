<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campeign extends Model
{
    use HasFactory;
    protected $fillable = [
        'body','donatorname','cname','campeigndate','amount', 'url'
    ];
}
