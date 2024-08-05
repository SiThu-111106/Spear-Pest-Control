<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pest extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'pest_type_id',
        'name',
        'content',
        'image',
        'status',
        'created_by',
        'updated_by'
    ];

    public function pestType()
    {
        return $this->belongsTo(PestType::class);
    }
}
