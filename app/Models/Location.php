<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Location extends Model
{
    use HasFactory;
    // use SoftDeletes;

    protected $fillable = [
        // 'township_id',
        'user',
        'date',
        'sector',
        'address',
        'status',
        'created_by',
        'updated_by'
    ];

    public function township()
    {
        return $this->belongsTo(Township::class);
    }
}
