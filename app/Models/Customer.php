<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory;
    // use SoftDeletes;

    protected $fillable = [
        'payment_id',
        'treatment_id',
        'frequency_id',
        'name',
        'email',
        'password',
        'phone',
        'gender',
        'address',
        'issue',
        'remark',
        'payment',
        'overdue',
        'total',
        'status'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function treatment()
    {
        return $this->belongsTo(Treatment::class);
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

}
