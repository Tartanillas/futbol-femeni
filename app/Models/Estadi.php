<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estadi extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'capacitat'];
    public function equips()
{
    return $this->hasMany(Equip::class);
}
}
