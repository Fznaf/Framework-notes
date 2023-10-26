<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class input extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'input';

    protected $fillable = [
        'riderName',
        'formName',
        'rate',
        'image'

    ];
}
