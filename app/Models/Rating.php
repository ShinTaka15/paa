<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $fillable = [
        'rating_value',
        'wisata_id',
        'user_id'
    ];
    protected $table = 'rating';

    public function wisata()
    {
        return $this->belongsTo(Wisata::class);
    }
}
