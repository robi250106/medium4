<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Story extends Model
{
    use HasFactory;

    // Mengatur nama tabel secara eksplisit (opsional, jika tabel memiliki nama berbeda dari plural model)
    protected $table = 'stories';

    // Tentukan kolom mana yang bisa diisi (mass assignment)
    protected $fillable = ['uuid', 'title', 'author', 'ur_story'];

    // Buat UUID saat story baru dibuat
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->uuid = Str::uuid();
        });
    }
}
