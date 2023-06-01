<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Role extends Model
{
    use HasFactory, UuidTrait;

    protected $fillable = ['id', 'name', 'description'];

    public function users() : HasMany
    {
        return $this->hasMany(User::class);
    }
}