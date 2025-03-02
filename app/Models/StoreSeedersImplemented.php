<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreSeedersImplemented extends Model
{
    use HasFactory;
    public $table = 'seeders';
    protected $fillable = [
        'seeder','batch'
    ];
}
