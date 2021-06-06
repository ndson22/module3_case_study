<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Role;

class Customer extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = "customers";

    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}
